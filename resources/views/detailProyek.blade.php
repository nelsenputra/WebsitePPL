@extends('layouts.apps')

@section('content')
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-11">
                <div class="card">
                    <div class="card-header">{{ __('Detail Proyek') }}</div>
                    <div class="card-body">
                        <table class="table table-striped table-bproyeked">
                            <tbody>
                                {{-- <tr>
                                    <td colspan="2"><center><img src="{{ asset($proyek->file) }}" class="img-thumbnail" style="width:500px"></center></td>
                                </tr> --}}
                                <tr>
                                    @php
                                    $files = json_decode($proyek->file, true);
                                    @endphp
                                    <td colspan="2">
                                        <center>
                                            @if(is_array($files) && count($files) > 0)
                                                @foreach ($files as $file)
                                                    <img src="{{ asset($file) }}" class="img-thumbnail" style="width:200px; margin-bottom: 10px;">
                                                @endforeach
                                            @else
                                                <p>No files available</p>
                                            @endif
                                        </center>
                                    </td>
                                </tr>
                                <tr>
                                    <td width="20%">No Kelompok</td>
                                    <td>{{ $proyek->noKelompok }}</td>
                                </tr>
                                <tr>
                                    <td>Kelas</td>
                                    <td>{{ $proyek->kelas }}</td>
                                </tr>
                                <tr>
                                    <td>Semester</td>
                                    <td>{{ $proyek->semester }}</td>
                                </tr>
                                <tr>
                                    <td>Tahun</td>
                                    <td>{{ $proyek->tahun }}</td>
                                </tr>
                                <tr>
                                    <td>Anggota</td>
                                    <td>{{ $proyek->anggota }}</td>
                                </tr>
                                <tr>
                                    <td>Nama PO</td>
                                    <td>{{ $proyek->namaPO }}</td>
                                </tr>
                                <tr>
                                    <td>Institusi PO</td>
                                    <td>{{ $proyek->institusi }}</td>
                                </tr>
                                <tr>
                                    <td>Topik</td>
                                    <td>{{ $proyek->topik }}</td>
                                </tr>
                                <tr>
                                    <td>Deskripsi</td>
                                    <td>{{ $proyek->deskripsi }}</td>
                                </tr>
                                <tr>
                                    <td>Nama Asisten</td>
                                    <td>{{ $proyek->nmAsisten }}</td>
                                </tr>
                                <tr>
                                    <td>Nama Pengaju</td>
                                    <td>{{ $proyek->nmPengaju }}</td>
                                </tr>
                                <tr>
                                    <td>NIM Pengaju</td>
                                    <td>{{ $proyek->nimPengaju }}</td>
                                </tr>
                                <tr>
                                    <td>Email Pengaju</td>
                                    <td>{{ $proyek->emailPengaju }}</td>
                                </tr>
                                <tr>
                                    <td>Status</td>
                                    <td>{{ $proyek->status }}</td>
                                </tr>
                                <tr>
                                    <td>Keterangan</td>
                                    <td>{{ $proyek->ket }}</td>
                                </tr>
                                <tr>
                                    <td colspan="2">
                                        <a href="{{ route('proyek') }}" class="btn btn-dark inline-block">Kembali</a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
