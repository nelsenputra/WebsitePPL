@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-11">
                <div class="card">
                    <div class="card-header">{{ __('Management Proyek') }}</div>
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
                                    <td>Anggota</td>
                                    <td>{{ $proyek->anggota }}</td>
                                </tr>
                                <tr>
                                    <td>Nama PO</td>
                                    <td>{{ $proyek->namaPO }}</td>
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
                                    <td>Institusi</td>
                                    <td>{{ $proyek->institusi }}</td>
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
                                    <td>Tahun</td>
                                    <td>{{ $proyek->tahun }}</td>
                                </tr>
                                <form action="{{ route('proyek.update', $proyek->id) }}" method="POST">
                                    @csrf
                                    @method('PUT')
                                    <input type="hidden" name="id" id="id" value="{{ $proyek->id }}">
                                    <tr>
                                        <td>Konfirmasi Penerimaan Proyek</td>
                                        <td>
                                            <select id="status" class="form-control @error('status') is-invalid @enderror" name="status">
                                                <option value="">Pilih Status</option>
                                                <option value="Approve" {{ old('status', $proyek->status) == 'Approve' ? 'selected' : '' }}>Approve</option>
                                                <option value="Reject" {{ old('status', $proyek->status) == 'Reject' ? 'selected' : '' }}>Reject</option>
                                            </select>
                                            @error('status')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Keterangan</td>
                                        <td>
                                            <input type="ket" class="form-control" id="ket" name="ket">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">
                                            <button type="submit" class="btn btn-primary">Update</button>
                                        </td>
                                    </tr>
                                </form>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
