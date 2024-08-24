<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Proyek;
use App\Http\Requests\StoreProyekRequest;

use DataTables;

class FormController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        // $acc = Proyek::where('status', 'approve')->get();
        // $reject = Proyek::where('status', 'reject')->get();
    
        // return view('proyek', compact('acc', 'reject'));

        if ($request->ajax()) {
            if ($request->input('type') == 'approve') {
                $acc = Proyek::where('status', 'approve')->get();
                return Datatables::of($acc)
                    ->addColumn('action', function($row) {
                        return '<td><a class="btn btn-primary btn-sm" href="' . route('proyek.show', $row->id) . '"> Detail</a></td>';
                    })
                    ->make(true);
            } else if ($request->input('type') == 'reject') {
                $reject = Proyek::where('status', 'reject')->get();
                return Datatables::of($reject)
                    ->addColumn('action', function($row) {
                        return '<td><a class="btn btn-primary btn-sm" href="' . route('proyek.show', $row->id) . '"> Detail</a></td>';
                    })
                    ->make(true);
            }
        }
        
        $acc = Proyek::where('status', 'approve')->get();
        $reject = Proyek::where('status', 'reject')->get();
    
        return view('proyek', compact('acc', 'reject'));
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
    $params = $request->validated();

    // Array untuk menyimpan path file
    $filePaths = [];

    if ($request->hasFile('file')) {
        foreach ($request->file('file') as $file) {
            $fileName = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('files'), $fileName);
            $filePaths[] = 'files/' . $fileName;
        }
    }

    // Menambahkan file paths ke params sebelum menyimpannya
    $params['file'] = json_encode($filePaths);

    // Simpan proyek dengan file paths dalam bentuk JSON
    if ($proyek = Proyek::create($params)) {
        return redirect(route('succes'))->with('success', 'Proyek berhasil diupload!');
    } else {
        return redirect()->back()->with('error', 'Proyek gagal diupload, coba lagi.');
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
        $proyek = Proyek::findOrFail($id);
        return view('detailProyek', compact('proyek'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
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

    public function succes()
    {
        return view('succes');
    }
}
