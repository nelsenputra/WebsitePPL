<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Form Upload Proyek</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.0.3/css/font-awesome.css">
    <link rel="stylesheet" href="{{ asset('/css/style.css')}}">
</head>
<body>
    <div class="container-fluid px-1 py-5 mx-auto">
        <div class="row d-flex justify-content-center">
            <div class="col-xl-9 col-lg-8 col-md-9 col-11 text-center">
                <h3>Form Pengajuan Proyek</h3>
                <p class="blue-text">Silahkan isi form dibawah ini<br> untuk mengajukan topik proyek PPL kelompok Anda</p>
                <div class="card">
                    <h5 class="text-center mb-4">Form Pengajuan Proyek</h5>
                    <form class="form-card" method="post" action="{{ route('form.store') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="row justify-content-between text-left">
                            <div class="form-group col-sm-6 flex-column d-flex">
                                <label class="form-control-label px-3">Nomor Kelompok<span class="text-danger"> *</span></label>
                                <input type="text" id="noKelompok" name="noKelompok" placeholder="Nomor Kelompok"> 
                            </div>
                            <div class="form-group col-sm-6 flex-column d-flex"> 
                                <label class="form-control-label px-3">Kelas<span class="text-danger"> *</span></label> 
                                <input type="text" id="kelas" name="kelas" placeholder="Kelas"> 
                            </div>
                        </div>
                        <div class="row justify-content-between text-left">
                            <div class="form-group col-sm-6 flex-column d-flex"> 
                                <label class="form-control-label px-3">Semester<span class="text-danger"> *</span></label> 
                                <select name="semester" id="semester" class="form-control">Pilih Semester
                                    <option value="">Pilih Semester</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                </select>
                                {{-- <input type="text" id="semester" name="semester" placeholder="semester">  --}}
                            </div>
                            <div class="form-group col-sm-6 flex-column d-flex"> 
                                <label class="form-control-label px-3">Tahun<span class="text-danger"> *</span></label> 
                                <input type="text" id="tahun" name="tahun" placeholder="Tahun">
                            </div>
                        </div>
                        <div class="row justify-content-between text-left">
                            <div class="form-group col-12 flex-column d-flex"> 
                                <label class="form-control-label px-3">Anggota Kelompok<span class="text-danger"> *</span></label> 
                                <textarea name="anggota" id="anggota" cols="20" rows="5" placeholder="1. Nama/NIM, dst."></textarea> 
                            </div>
                        </div>
                        <div class="row justify-content-between text-left">
                            <div class="form-group col-6 flex-column d-flex"> 
                                <label class="form-control-label px-3">Nama PO<span class="text-danger"> *</span></label> 
                                <input type="text" id="namaPO" name="namaPO" placeholder="Nama PO"> 
                            </div>
                            <div class="form-group col-sm-6 flex-column d-flex"> 
                                <label class="form-control-label px-3">Institusi/Organisasi PO<span class="text-danger"> *</span></label> 
                                <input type="text" id="institusi" name="institusi" placeholder="Institusi/Organisasi PO"> 
                            </div>
                        </div>
                        <div class="row justify-content-between text-left">
                            <div class="form-group col-12 flex-column d-flex"> 
                                <label class="form-control-label px-3">Topik Proyek<span class="text-danger"> *</span></label> 
                                <input type="text" id="topik" name="topik" placeholder="Topik Proyek"> 
                            </div>
                        </div>
                        <div class="row justify-content-between text-left">
                            <div class="form-group col-12 flex-column d-flex"> 
                                <label class="form-control-label px-3">Deskripsi Perangkat Lunak<span class="text-danger"> *</span></label> 
                                <textarea name="deskripsi" id="deskripsi" cols="20" rows="5" placeholder="Deskripsi Perangkat Lunak"></textarea>
                            </div>
                        </div>
                        <div class="row justify-content-between text-left">
                            <div class="form-group col-sm-6 flex-column d-flex"> 
                                <label class="form-control-label px-3">Nama Asisten<span class="text-danger"> *</span></label> 
                                <input type="text" id="nmAsisten" name="nmAsisten" placeholder="Nama Asisten"> 
                            </div>
                            <div class="form-group col-sm-6 flex-column d-flex">
                                <label class="form-control-label px-3">Foto/File Referensi Proyek<span class="text-danger"> *</span></label>
                                <input type="file" id="file" name="file[]" multiple> 
                            </div>                            
                        </div>
                        <div class="row justify-content-between text-left">
                            <div class="form-group col-4 flex-column d-flex"> 
                                <label class="form-control-label px-3">Nama Pengaju<span class="text-danger"> *</span></label> 
                                <input type="text" id="nmPengaju" name="nmPengaju" placeholder="Nama Pengaju"> 
                            </div>
                            <div class="form-group col-sm-4 flex-column d-flex"> 
                                <label class="form-control-label px-3">NIM Pengaju<span class="text-danger"> *</span></label> 
                                <input type="text" id="nimPengaju" name="nimPengaju" placeholder="NIM Pengaju"> 
                            </div>
                            <div class="form-group col-sm-4 flex-column d-flex"> 
                                <label class="form-control-label px-3">Email Pengaju<span class="text-danger"> *</span></label> 
                                <input type="email" id="emailPengaju" name="emailPengaju" placeholder="Email Pengaju"> 
                            </div>
                        </div>
                        <div class="row justify-content-end">
                            <div class="form-group col-sm-12"> 
                                <button type="submit" class="btn-block btn-primary">Submit</button>
                                <a href="/" class="btn btn-block btn-dark">Kembali</a> 
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</body>
</html>