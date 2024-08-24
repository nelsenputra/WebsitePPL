@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-11">
                <div class="card">
                    <div class="card-header text-center">{{ __('Proyek Perlu Dikonfirmasi') }}</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        @if (session('success'))
                            <div class="alert alert-success">{{ session('success') }}</div>
                        @endif

                        @if (session('error'))
                            <div class="alert alert-danger">{{ session('error') }}</div>
                        @endif

                        <table class="table table-striped table-bordered data-tablek">
                            <thead>
                                <tr>
                                    <th>Topik Proyek</th>
                                    <th>Anggota Kelompok</th>
                                    <th>Intitusi PO</th>
                                    <th>Tahun</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="row justify-content-center mt-5">
            <div class="col-md-11">
                <div class="card">
                    <div class="card-header text-center" style="background-color: rgb(44, 119, 50);color:#fff;">{{ __('Proyek Diterima') }}</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        @if (session('success'))
                            <div class="alert alert-success">{{ session('success') }}</div>
                        @endif

                        @if (session('error'))
                            <div class="alert alert-danger">{{ session('error') }}</div>
                        @endif

                        <table class="table table-striped table-bordered data-tablec">
                            <thead>
                                <tr>
                                    <th>Topik Proyek</th>
                                    <th>Anggota Kelompok</th>
                                    <th>Intitusi PO</th>
                                    <th>Tahun</th>
                                    <th>Status</th>
                                </tr>
                            </thead>
                            <tbody>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="row justify-content-center mt-5">
            <div class="col-md-11">
                <div class="card">
                    <div class="card-header text-center" style="background-color: red;color:#fff;">{{ __('Proyek Ditolak') }}</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        @if (session('success'))
                            <div class="alert alert-success">{{ session('success') }}</div>
                        @endif

                        @if (session('error'))
                            <div class="alert alert-danger">{{ session('error') }}</div>
                        @endif

                        <table class="table table-striped table-bordered data-tabler">
                            <thead>
                                <tr>
                                    <th>Topik Proyek</th>
                                    <th>Anggota Kelompok</th>
                                    <th>Intitusi PO</th>
                                    <th>Tahun</th>
                                    <th>Keterangan</th>
                                    <th>Status</th>
                                </tr>
                            </thead>
                            <tbody>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection