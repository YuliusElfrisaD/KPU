@extends('layouts.app_section')

@section('content')
<div class="wrapper">
    <div class="main">
        <div class="section">
            <div class="container">
                <h3>Create Pemilu</h3>
                <form method="POST" action="{{ route('pemilu.store') }}" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <div class="row">
                        <div class="col-md-5 col-sm-5">
                            <h6>Pemilu</h6>
                            @if ($errors->any())
                            <ul>
                                @foreach($errors->all() as $error)
                                <div class="text-danger" style="margin-top: -20px">
                                    <strong>{{ $error }}</strong>
                                </div>
                                @endforeach
                            </ul>
                            @endif
                            <div class="fileinput fileinput-new text-center" data-provides="fileinput">
                                <div class="fileinput-new thumbnail img-no-padding" style="max-width: 370px; max-height: 250px;">
                                    <img src="{{ asset('assets/img/image_placeholder.jpg') }}" alt="...">
                                </div>
                                <div class="fileinput-preview fileinput-exists thumbnail img-no-padding" style="max-width: 370px; max-height: 250px;"></div>
                                <div>
                                    <span class="btn btn-outline-default btn-round btn-file"><span class="fileinput-new">Pilih Logo</span><span class="fileinput-exists">Change</span><input type="file" name="logo"></span>
                                    <a href="#paper-kit" class="btn btn-link btn-danger fileinput-exists" data-dismiss="fileinput"><i class="fa fa-times"></i> Remove</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-7 col-sm-7">
                            <div class="form-group">
                                <h6>Tema Pemilu <span class="icon-danger">*</span></h6>
                                <input type="text" name="tema_pemilu" class="form-control border-input" required="true" placeholder="Tema Pemilu">
                            </div>
                            <div class="form-group">
                                <h6>Periode <span class="icon-danger">*</span></h6>
                                <input type="text" name="periode" class="form-control border-input" required="true" placeholder="Periode">
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-md-6 col-sm-6">
                                        <h6>Durasi Mendaftar<span class="icon-danger">*</span></h6>
                                        <div class='input-group date'>
                                            <input type='text' class="form-control datetimepicker" name="start_daftar" placeholder="Start Date" />
                                            <span class="input-group-addon">
                                                <span class="glyphicon glyphicon-calendar"><i class="fa fa-calendar" aria-hidden="true"></i></span>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-6">
                                        <h6>Sampai</h6>
                                        <div class='input-group date'>
                                            <input type='text' class="form-control datetimepicker" name="end_daftar" placeholder="End Date" />
                                            <span class="input-group-addon">
                                                <span class="glyphicon glyphicon-calendar"><i class="fa fa-calendar" aria-hidden="true"></i></span>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-md-6 col-sm-6">
                                        <h6>Durasi Pemilu<span class="icon-danger">*</span></h6>
                                        <div class='input-group date'>
                                            <input type='text' class="form-control datetimepicker" name="start_pemilu" placeholder="Start Date" />
                                            <span class="input-group-addon">
                                                <span class="glyphicon glyphicon-calendar"><i class="fa fa-calendar" aria-hidden="true"></i></span>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-6">
                                        <h6>Sampai</h6>
                                        <div class='input-group date'>
                                            <input type='text' class="form-control datetimepicker" name="end_pemilu" placeholder="End Date" />
                                            <span class="input-group-addon">
                                                <span class="glyphicon glyphicon-calendar"><i class="fa fa-calendar" aria-hidden="true"></i></span>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <h6>Penyelenggara<span class="icon-danger">*</span></h6>
                                <select name="penyelenggara" class="selectpicker" data-size="10" data-width="auto" data-style="btn btn-outline-default btn-round" data-menu-style="dropdown-default">
                                    <option disabled selected> Pilih Penyelenggara</option>
                                    <option value="Komisi Pemilihan Umum USD">Komisi Pemilihan Umum USD</option>
                                    <option value="Bimbingan dan Konseling">Bimbingan dan Konseling</option>
                                    <option value="Pendidikan Agama Katolik">Pendidikan Agama Katolik</option>
                                    <option value="Pendidikan Guru Sekolah Dasar">Pendidikan Guru Sekolah Dasar</option>
                                    <option value="Pendidikan Bahasa Inggris">Pendidikan Bahasa Inggris</option>
                                    <option value="Pendidikan Sastra Indonesia">Pendidikan Sastra Indonesia</option>
                                    <option value="Pendidikan Ekonomi">Pendidikan Ekonomi</option>
                                    <option value="Pendidikan Akuntansi">Pendidikan Akuntansi</option>
                                    <option value="Pendidikan Matematika">Pendidikan Matematika</option>
                                    <option value="Pendidikan Fisika">Pendidikan Fisika</option>
                                    <option value="Pendidikan Biologi">Pendidikan Biologi</option>
                                    <option value="Pendidikan Kimia">Pendidikan Kimia</option>
                                    <option value="Akuntansi">Akuntansi</option>
                                    <option value="Manajemen">Manajemen</option>
                                    <option value="Ekonomi">Ekonomi</option>
                                    <option value="Sastra Indonesia">Sastra Indonesia</option>
                                    <option value="Sastra Inggris">Sastra Inggris</option>
                                    <option value="Sejarah">Sejarah</option>
                                    <option value="Teknik Elektro">Teknik Elektro</option>
                                    <option value="Teknik Mesin">Teknik Mesin</option>
                                    <option value="Teknik Informatika">Teknik Informatika</option>
                                    <option value="Matematika">Matematika</option>
                                    <option value="Farmasi">Farmasi</option>
                                    <option value="Psikologi">Psikologi</option>
                                    <option value="Teologi">Teologi</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <br>
                    <hr>
                    <div class="row">
                        <div class="col-md-12">
                            <h3 style="margin-top: -1px">Paslon</h3>
                            <!--<button class="btn btn-outline-danger btn-round float-right" type="button" style="height: 40.8px; margin-top: -30px"  onclick="remove_paslon_fields('+ room +');"> <span class="nc-icon nc-simple-remove" aria-hidden="true"></span> &nbsp; Hapus Paslon</button>-->
                        </div>
                        <div class="col-md-5 col-sm-5">
                            <div class="form-group">
                                <h6>Foto Paslon</h6>
                                <div class="fileinput fileinput-new text-center" data-provides="fileinput">
                                    <div class="fileinput-new thumbnail img-no-padding" style="max-width: 370px; max-height: 250px;">
                                        <img src="{{ asset('assets/img/image_placeholder.jpg') }}" alt="...">
                                    </div>
                                    <div class="fileinput-preview fileinput-exists thumbnail img-no-padding" style="max-width: 370px; max-height: 250px;"></div>
                                    <div>
                                        <span class="btn btn-outline-default btn-round btn-file"><span class="fileinput-new">Pilih Foto</span><span class="fileinput-exists">Change</span><input type="file" name="foto_paslon[]"></span>
                                        <a href="#paper-kit" class="btn btn-link btn-danger fileinput-exists" data-dismiss="fileinput"><i class="fa fa-times"></i> Remove</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-7 col-sm-7">
                            <div class="form-group">
                                <h6>Ketua</h6>
                            </div>
                            <div class="form-group">
                                <input type="text" name="nama_ketua[]" class="form-control border-input" name="nama" required="true" placeholder="Nama">
                            </div>
                            <div class="form-group">
                                <input type="text" name="nim_ketua[]" class="form-control border-input" required="true" placeholder="NIM">
                            </div>
                            <div class="form-group">
                                <input type="text" name="angkatan_ketua[]" class="form-control border-input" required="true" placeholder="Angkatan">
                            </div>
                            <div class="form-group">
                                <h6>Program Studi <span class="icon-danger">*</span></h6>
                                <select name="jurusan_ketua[]" class="selectpicker" data-size="10" data-width="auto" data-style="btn btn-outline-default btn-round" data-menu-style="dropdown-default">
                                    <option disabled selected> Pilih Program Studi</option>
                                    <option value="Bimbingan dan Konseling">Bimbingan dan Konseling</option>
                                    <option value="Pendidikan Agama Katolik">Pendidikan Agama Katolik</option>
                                    <option value="Pendidikan Guru Sekolah Dasar">Pendidikan Guru Sekolah Dasar</option>
                                    <option value="Pendidikan Bahasa Inggris">Pendidikan Bahasa Inggris</option>
                                    <option value="Pendidikan Sastra Indonesia">Pendidikan Sastra Indonesia</option>
                                    <option value="Pendidikan Ekonomi">Pendidikan Ekonomi</option>
                                    <option value="Pendidikan Akuntansi">Pendidikan Akuntansi</option>
                                    <option value="Pendidikan Matematika">Pendidikan Matematika</option>
                                    <option value="Pendidikan Fisika">Pendidikan Fisika</option>
                                    <option value="Pendidikan Biologi">Pendidikan Biologi</option>
                                    <option value="Pendidikan Kimia">Pendidikan Kimia</option>
                                    <option value="Akuntansi">Akuntansi</option>
                                    <option value="Manajemen">Manajemen</option>
                                    <option value="Ekonomi">Ekonomi</option>
                                    <option value="Sastra Indonesia">Sastra Indonesia</option>
                                    <option value="Sastra Inggris">Sastra Inggris</option>
                                    <option value="Sejarah">Sejarah</option>
                                    <option value="Teknik Elektro">Teknik Elektro</option>
                                    <option value="Teknik Mesin">Teknik Mesin</option>
                                    <option value="Teknik Informatika">Teknik Informatika</option>
                                    <option value="Matematika">Matematika</option>
                                    <option value="Farmasi">Farmasi</option>
                                    <option value="Psikologi">Psikologi</option>
                                    <option value="Teologi">Teologi</option>
                                </select>
                            </div>
                            <hr>
                            <div class="form-group">
                                <h6>Wakil Ketua</h6>
                            </div>
                            <div class="form-group">
                                <input type="text" name="nama_wakil[]" class="form-control border-input" name="nama" required="true" placeholder="Nama">
                            </div>
                            <div class="form-group">
                                <input type="text" name="nim_wakil[]" class="form-control border-input" required="true" placeholder="NIM">
                            </div>
                            <div class="form-group">
                                <input type="text" name="angkatan_wakil[]" class="form-control border-input" required="true" placeholder="Angkatan">
                            </div>
                            <div class="form-group">
                                <h6>Program Studi <span class="icon-danger">*</span></h6>
                                <select name="jurusan_wakil[]" class="selectpicker" data-size="10" data-width="auto" data-style="btn btn-outline-default btn-round" data-menu-style="dropdown-default">
                                    <option disabled selected> Pilih Program Studi</option>
                                    <option value="Bimbingan dan Konseling">Bimbingan dan Konseling</option>
                                    <option value="Pendidikan Agama Katolik">Pendidikan Agama Katolik</option>
                                    <option value="Pendidikan Guru Sekolah Dasar">Pendidikan Guru Sekolah Dasar</option>
                                    <option value="Pendidikan Bahasa Inggris">Pendidikan Bahasa Inggris</option>
                                    <option value="Pendidikan Sastra Indonesia">Pendidikan Sastra Indonesia</option>
                                    <option value="Pendidikan Ekonomi">Pendidikan Ekonomi</option>
                                    <option value="Pendidikan Akuntansi">Pendidikan Akuntansi</option>
                                    <option value="Pendidikan Matematika">Pendidikan Matematika</option>
                                    <option value="Pendidikan Fisika">Pendidikan Fisika</option>
                                    <option value="Pendidikan Biologi">Pendidikan Biologi</option>
                                    <option value="Pendidikan Kimia">Pendidikan Kimia</option>
                                    <option value="Akuntansi">Akuntansi</option>
                                    <option value="Manajemen">Manajemen</option>
                                    <option value="Ekonomi">Ekonomi</option>
                                    <option value="Sastra Indonesia">Sastra Indonesia</option>
                                    <option value="Sastra Inggris">Sastra Inggris</option>
                                    <option value="Sejarah">Sejarah</option>
                                    <option value="Teknik Elektro">Teknik Elektro</option>
                                    <option value="Teknik Mesin">Teknik Mesin</option>
                                    <option value="Teknik Informatika">Teknik Informatika</option>
                                    <option value="Matematika">Matematika</option>
                                    <option value="Farmasi">Farmasi</option>
                                    <option value="Psikologi">Psikologi</option>
                                    <option value="Teologi">Teologi</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <h6>Visi</h6>
                                <textarea class="form-control" name="visi[]" placeholder="Visi" rows="13", maxlength="150" ></textarea>
                            </div>
                            <div class="form-group">
                                <h6>Misi</h6>
                                <textarea class="form-control" name="misi[]" placeholder="Misi" rows="13", maxlength="150" ></textarea>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div id="paslon_fields">
                    </div>

                    <div class="row buttons-row">
                        <div class="col-md-4 col-sm-4" style="margin-bottom: 10px">
                            <button class="btn btn-outline-default btn-block btn-round" type="button"  onclick="paslon_fields();"> <span class="nc-icon nc-simple-add" aria-hidden="true"></span> &nbsp; Tambah Paslon</button>
                        </div>
                        <div class="col-md-4 col-sm-4" style="margin-bottom: 10px">
                            <a href="{{ URL::previous() }}" class="btn btn-outline-danger btn-block btn-round">Cancel</a>
                        </div>
                        <div class="col-md-4 col-sm-4" style="margin-bottom: 10px">
                            <button class="btn btn-outline-primary btn-block btn-round" style="submit">Save</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<script>
    var room = 1;
    function paslon_fields() {
        room++;
        var objTo = document.getElementById('paslon_fields')
        var divtest = document.createElement("div");
        divtest.setAttribute("class", "form-group removeclass" + room);
        var rdiv = 'removeclass' + room;
        divtest.innerHTML = '<div class="row"> <div class="col-md-12"> <h3 style="margin-top: -1px">Paslon</h3> <button class="btn btn-outline-danger btn-round float-right" type="button" style="height: 40.8px; margin-top: -30px"  onclick="remove_paslon_fields('+ room +');"> <span class="nc-icon nc-simple-remove" aria-hidden="true"></span> &nbsp; Hapus Paslon</button> </div> <div class="col-md-5 col-sm-5"> <div class="form-group"> <h6>Foto Paslon</h6> <div class="fileinput fileinput-new text-center" data-provides="fileinput"> <div class="fileinput-new thumbnail img-no-padding" style="max-width: 370px; max-height: 250px;"> <img src="{{ asset('assets/img/image_placeholder.jpg') }}" alt="..."> </div> <div class="fileinput-preview fileinput-exists thumbnail img-no-padding" style="max-width: 370px; max-height: 250px;"></div> <div> <span class="btn btn-outline-default btn-round btn-file"><span class="fileinput-new">Pilih Foto</span><span class="fileinput-exists">Change</span><input type="file" name="foto_paslon[]"></span> <a href="#paper-kit" class="btn btn-link btn-danger fileinput-exists" data-dismiss="fileinput"><i class="fa fa-times"></i> Remove</a> </div> </div> </div> </div> <div class="col-md-7 col-sm-7"> <div class="form-group"> <h6>Ketua</h6> </div> <div class="form-group"> <input type="text" name="nama_ketua[]" class="form-control border-input" name="nama" required="true" placeholder="Nama"> </div> <div class="form-group"> <input type="text" name="nim_ketua[]" class="form-control border-input" required="true" placeholder="NIM"> </div> <div class="form-group"> <input type="text" name="angkatan_ketua[]" class="form-control border-input" required="true" placeholder="Angkatan"> </div> <div class="form-group"> <h6>Program Studi <span class="icon-danger">*</span></h6> <select name="jurusan_ketua[]" class="selectpicker" data-size="10" data-width="auto" data-style="btn btn-outline-default btn-round" data-menu-style="dropdown-default"> <option disabled selected> Pilih Program Studi</option> <option value="Bimbingan dan Konseling">Bimbingan dan Konseling</option> <option value="Pendidikan Agama Katolik">Pendidikan Agama Katolik</option> <option value="Pendidikan Guru Sekolah Dasar">Pendidikan Guru Sekolah Dasar</option> <option value="Pendidikan Bahasa Inggris">Pendidikan Bahasa Inggris</option> <option value="Pendidikan Sastra Indonesia">Pendidikan Sastra Indonesia</option> <option value="Pendidikan Ekonomi">Pendidikan Ekonomi</option> <option value="Pendidikan Akuntansi">Pendidikan Akuntansi</option> <option value="Pendidikan Matematika">Pendidikan Matematika</option> <option value="Pendidikan Fisika">Pendidikan Fisika</option> <option value="Pendidikan Biologi">Pendidikan Biologi</option> <option value="Pendidikan Kimia">Pendidikan Kimia</option> <option value="Akuntansi">Akuntansi</option> <option value="Manajemen">Manajemen</option> <option value="Ekonomi">Ekonomi</option> <option value="Sastra Indonesia">Sastra Indonesia</option> <option value="Sastra Inggris">Sastra Inggris</option> <option value="Sejarah">Sejarah</option> <option value="Teknik Elektro">Teknik Elektro</option> <option value="Teknik Mesin">Teknik Mesin</option> <option value="Teknik Informatika">Teknik Informatika</option> <option value="Matematika">Matematika</option> <option value="Farmasi">Farmasi</option> <option value="Psikologi">Psikologi</option> <option value="Teologi">Teologi</option> </select> </div> <hr> <div class="form-group"> <h6>Wakil Ketua</h6> </div> <div class="form-group"> <input type="text" name="nama_wakil[]" class="form-control border-input" name="nama" required="true" placeholder="Nama"> </div> <div class="form-group"> <input type="text" name="nim_wakil[]" class="form-control border-input" required="true" placeholder="NIM"> </div> <div class="form-group"> <input type="text" name="angkatan_wakil[]" class="form-control border-input" required="true" placeholder="Angkatan"> </div> <div class="form-group"> <h6>Program Studi <span class="icon-danger">*</span></h6> <select name="jurusan_wakil[]" class="selectpicker" data-size="10" data-width="auto" data-style="btn btn-outline-default btn-round" data-menu-style="dropdown-default"> <option disabled selected> Pilih Program Studi</option> <option value="Bimbingan dan Konseling">Bimbingan dan Konseling</option> <option value="Pendidikan Agama Katolik">Pendidikan Agama Katolik</option> <option value="Pendidikan Guru Sekolah Dasar">Pendidikan Guru Sekolah Dasar</option> <option value="Pendidikan Bahasa Inggris">Pendidikan Bahasa Inggris</option> <option value="Pendidikan Sastra Indonesia">Pendidikan Sastra Indonesia</option> <option value="Pendidikan Ekonomi">Pendidikan Ekonomi</option> <option value="Pendidikan Akuntansi">Pendidikan Akuntansi</option> <option value="Pendidikan Matematika">Pendidikan Matematika</option> <option value="Pendidikan Fisika">Pendidikan Fisika</option> <option value="Pendidikan Biologi">Pendidikan Biologi</option> <option value="Pendidikan Kimia">Pendidikan Kimia</option> <option value="Akuntansi">Akuntansi</option> <option value="Manajemen">Manajemen</option> <option value="Ekonomi">Ekonomi</option> <option value="Sastra Indonesia">Sastra Indonesia</option> <option value="Sastra Inggris">Sastra Inggris</option> <option value="Sejarah">Sejarah</option> <option value="Teknik Elektro">Teknik Elektro</option> <option value="Teknik Mesin">Teknik Mesin</option> <option value="Teknik Informatika">Teknik Informatika</option> <option value="Matematika">Matematika</option> <option value="Farmasi">Farmasi</option> <option value="Psikologi">Psikologi</option> <option value="Teologi">Teologi</option> </select> </div> <div class="form-group"> <h6>Visi</h6> <textarea class="form-control" name="visi[]" placeholder="Visi" rows="13", maxlength="150" ></textarea> </div> <div class="form-group"> <h6>Misi</h6> <textarea class="form-control" name="misi[]" placeholder="Misi" rows="13", maxlength="150" ></textarea> </div> </div> </div> <hr> ';
        objTo.appendChild(divtest)
        $('.selectpicker').selectpicker('refresh');
    }
    function remove_paslon_fields(rid) {
        $('.removeclass' + rid).remove();
        room--;
    }

    $(function () {
        $('.datetimepicker').datetimepicker({
            format: 'DD-MM-YYYY',
        });
    });
</script>
@endsection

