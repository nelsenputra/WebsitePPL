<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Proyek;
use App\Http\Requests\StoreProyekRequest;
use App\Mail\ProyekRejected;
use App\Mail\ProyekAccepted;
use Illuminate\Support\Facades\Mail;
use DataTables;

class ProyekController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(Request $request)
    {
        if ($request->ajax()) {
            if ($request->input('type') == 'approve') {
                $acc = Proyek::where('status', 'approve')->get();
                return Datatables::of($acc)
                    ->addColumn('action', function($row) {
                        return '<td><a class="btn btn-success btn-sm"><i class="bi bi-check2-all"></i> ' . $row->status . '</a></td>';
                    })
                    ->make(true);
            } else if ($request->input('type') == 'reject') {
                $reject = Proyek::where('status', 'reject')->get();
                return Datatables::of($reject)
                    ->addColumn('action', function($row) {
                        return '<td><a class="btn btn-primary btn-danger">' . $row->status . '</a></td>';
                    })
                    ->make(true);
            } else {
                $konfir = Proyek::whereNull('status')->get();
                return Datatables::of($konfir)
                    ->addColumn('action', function($row) {
                        return '<td><a class="btn btn-primary btn-sm" href="' . route('proyek.edit', $row->id) . '"> Manage Proyek</a></td>';
                    })
                    ->make(true);
            }
        }

        $konfir = Proyek::whereNull('status')->get();
        $acc = Proyek::where('status', 'approve')->get();
        $reject = Proyek::where('status', 'reject')->get();
    
        return view('admin.listProyek', compact('konfir', 'acc', 'reject'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('form');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreProyekRequest $request)
    {
        $fileName = time().'.'.$request->file->extension();
        $uploadedFile = $request->file->move(public_path('files'), $fileName);
        $filePath = 'files/' . $fileName;

        $params = $request->validated();
        
        if ($proyek = Proyek::create($params)) {
            $proyek->file = $filePath;
            $proyek->save();

            return redirect(route('proyek.index'))->with('success', 'Proyek berhasil diupload!');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $proyek = Proyek::findOrFail($id);
        return view('admin.manageProyek', compact('proyek'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $proyek = Proyek::findOrFail($id);

    $request->validate([
        'status' => 'required|string',
        'ket' => 'nullable|string',
        'file' => 'nullable|file|mimes:jpg,jpeg,png,pdf,doc,docx|max:2048',
    ]);

    $params = $request->only(['status', 'ket']);

    if ($request->hasFile('file')) {
        $fileName = time().'.'.$request->file->extension();
        $uploadedFile = $request->file->move(public_path('files'), $fileName);
        $filePath = 'files/' . $fileName;
        $params['file'] = $filePath;
        if ($proyek->file && file_exists(public_path($proyek->file))) {
            unlink(public_path($proyek->file));
        }
    }
    $proyek->update($params);

    if ($request->status === 'Reject') {
        Mail::to($proyek->emailPengaju)->send(new ProyekRejected($proyek));
    }

    if ($request->status === 'Approve') {
        Mail::to($proyek->emailPengaju)->send(new ProyekAccepted($proyek));
    }

    return redirect(route('proyek.index'))->with('success', 'Proyek Berhasil Diperbarui!');
    }   


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
