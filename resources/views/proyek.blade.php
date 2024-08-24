@extends('layouts.apps')

@section('content')
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-11">
                <div class="card">
                    <div class="card-header" style="background-color: rgb(44, 119, 50);color:#fff;">{{ __('Daftar Proyek PPL') }}</div>

                    <div class="card-body">
                        <table class="table table-striped data-table">
                            <thead>
                                <tr>
                                    <th>Topik Proyek</th>
                                    <th>Anggota Kelompok</th>
                                    <th>Institusi PO</th>
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
    </div>
@endsection
