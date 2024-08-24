@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-11">
            <div class="card">
                <div class="card-header">{{ __('Dashboard, Selamat Datang!') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <p>Berikut adalah pengajuan proyek baru yang perlu dikonfirmasi.</p>
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th width="15%"></th>
                                <th class="text-center">No Kelompok</th>
                                <th class="text-center">Nama PO</th>
                                <th class="text-center">Topik</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($konfir as $row)
                                <tr>
                                    <td>
                                        <center><a class="btn btn-primary btn-sm" href="{{ route('proyek.edit',$row->id) }}"> Lihat Detail Proyek</a></center>
                                    </td>
                                    <td class="text-center">{{ $row->noKelompok }}</td>
                                    <td class="text-center">{{ $row->namaPO }}</td>
                                    <td class="text-center">{{ $row->topik }}</td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="5">
                                        <center>No record found!</center>
                                    </td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
