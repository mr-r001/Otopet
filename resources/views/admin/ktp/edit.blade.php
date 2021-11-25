{{-- @extends('admin.layouts.master')
@section('title', 'Edit Data KTP')

@section('css')
    <link rel="stylesheet" href="{{ asset('backend/modules/select2/dist/css/select2.min.css') }}">
    <link href="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.1/summernote.css" rel="stylesheet">
@endsection

@section('content')
    <!-- Modal -->
 
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Edit Data KTP</h1>
                <div class="section-header-breadcrumb">
                    <div class="breadcrumb-item">
                        <a href="{{ route('admin.dashboard') }}">
                            <i class="fa fa-home"></i>
                            Dashboard
                        </a>
                    </div>
                    <div class="breadcrumb-item">
                        <a href="{{ route('admin.ktp.index') }}">
                            <i class="fa fa-file-pdf"></i>
                            Data KTP
                        </a>
                    </div>
                    <div class="breadcrumb-item">
                        <i class="fa fa-edit"></i>
                        Edit
                    </div>
                </div>
            </div>
            <div class="section-body">
                <form method="POST" action="{{ route('admin.ktp.update', $data->id) }}" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="card card-primary">
                                <div class="card-header">
                                    <h4 class="card-title">Identitas</h4>
                                </div>
                                <div class="card-body">
                                    <input type="hidden" id="id" value="{{ $data->id }}">
                                    <div class="text-danger" id="valid-type">{{ $errors->first('type') }}</div>
                                    <div class="row">
                                        <div class="col-md-12 col-sm-12">
                                            <div class="form-group">
                                                <label for="nomor">Nomor <sup class="text-danger">*</sup></label>
                                                <input type="text" class="form-control form-control-sm @error('nomor') is-invalid @enderror" name="nomor" id="nomor" value="@error('nomor'){{ old('nomor') }}@else{{ $data->nomor }}@enderror">
                                                <div class="invalid-feedback" id="valid-nomor">{{ $errors->first('nomor') }}</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12 col-sm-12">
                                            <div class="form-group">
                                                <label for="nik">NIK <sup class="text-danger">*</sup></label>
                                                <input type="text" class="form-control form-control-sm @error('nik') is-invalid @enderror" name="nik" id="nik" value="@error('nik'){{ old('nik') }}@else{{ $data->nik }}@enderror" maxlength="16">
                                                <div class="invalid-feedback" id="valid-nik">{{ $errors->first('nik') }}</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12 col-sm-12">
                                            <div class="form-group">
                                                <label for="nama">Nama <sup class="text-danger">*</sup></label>
                                                <input type="text" class="form-control form-control-sm @error('nama') is-invalid @enderror" name="nama" id="nama" value="@error('nama'){{ old('nama') }}@else{{ $data->nama }}@enderror">
                                                <div class="invalid-feedback" id="valid-nama">{{ $errors->first('nama') }}</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12 col-sm-12">
                                            <div class="form-group">
                                                <label for="tempat_lahir">Tempat Lahir <sup class="text-danger">*</sup></label>
                                                <input type="text" class="form-control form-control-sm @error('tempat_lahir') is-invalid @enderror" name="tempat_lahir" id="tempat_lahir" value="@error('tempat_lahir'){{ old('tempat_lahir') }}@else{{ $data->tempat_lahir }}@enderror">
                                                <div class="invalid-feedback" id="valid-tempat_lahir">{{ $errors->first('tempat_lahir') }}</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12 col-sm-12">
                                            <div class="form-group">
                                                <label for="tanggal_lahir">Tanggal Lahir <sup class="text-danger">*</sup></label>
                                                <input type="date" class="form-control form-control-sm @error('tanggal_lahir') is-invalid @enderror" name="tanggal_lahir" id="tanggal_lahir" value="@error('tanggal_lahir'){{ old('tanggal_lahir') }}@else{{ $data->tanggal_lahir }}@enderror">
                                                <div class="invalid-feedback" id="valid-tanggal_lahir">{{ $errors->first('tanggal_lahir') }}</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12 col-sm-12">
                                            <div class="form-group">
                                                <label for="jenis_kelamin">Jenis Kelamin</label>
                                                <select class="select2 form-control form-control-sm @error('jenis_kelamin') is-invalid @enderror" name="jenis_kelamin" id="jenis_kelamin">
                                                    <option value="" selected disabled>-- Pilih Jenis Kelamin --</option>
                                                    <option value="L" {{$data->jenis_kelamin == 'L' ? 'selected' : '' }}>Laki-laki</option>
                                                    <option value="P" {{$data->jenis_kelamin == 'P' ? 'selected' : '' }}>Perempuan</option>
                                                </select>
                                                <div class="invalid-feedback" id="valid-jenis_kelamin">{{ $errors->first('jenis_kelamin') }}</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12 col-sm-12">
                                            <div class="form-group">
                                                <label for="kewarganegaraan">Kewarganegaraan</label>
                                                <select class="select2 form-control form-control-sm @error('kewarganegaraan') is-invalid @enderror" name="kewarganegaraan" id="kewarganegaraan">
                                                    <option value="" selected disabled>-- Pilih Kewarganegaraan --</option>
                                                    @foreach ($kewarganegaraans as $kewarganegaraan )
                                                        <option value="{{ $kewarganegaraan->id }}" {{ old('kewarganegaraan') == $kewarganegaraan->id || $data->kewarganegaraan_id == $kewarganegaraan->id ? 'selected' : '' }}>{{ $kewarganegaraan->name }}</option>
                                                    @endforeach
                                                </select>
                                                <div class="invalid-feedback" id="valid-kewarganegaraan">{{ $errors->first('kewarganegaraan') }}</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12 col-sm-12">
                                            <div class="form-group">
                                                <label for="bangsa">Suku Bangsa</label>
                                                <select class="select2 form-control form-control-sm @error('bangsa') is-invalid @enderror" name="bangsa" id="bangsa">
                                                    <option value="" selected disabled>-- Pilih Suku Bangsa --</option>
                                                    @foreach ($bangsas as $bangsa )
                                                        <option value="{{ $bangsa->id }}" {{ old('bangsa') == $bangsa->id || $data->bangsa_id == $bangsa->id ? 'selected' : '' }}>{{ $bangsa->name }}</option>
                                                    @endforeach
                                                </select>
                                                <div class="invalid-feedback" id="valid-bangsa">{{ $errors->first('bangsa') }}</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12 col-sm-12">
                                            <div class="form-group">
                                                <label for="kecamatan">Kecamatan</label>
                                                <select class="select2 form-control form-control-sm @error('kecamatan') is-invalid @enderror" name="kecamatan" id="kecamatan">
                                                    <option value="" selected disabled>-- Pilih Kecamatan --</option>
                                                    @foreach ($kecamatans as $kecamatan )
                                                        <option value="{{ $kecamatan->name }}" {{ old('kecamatan') == $kecamatan->name || $data->kecamatan == $kecamatan->name ? 'selected' : '' }}>{{ $kecamatan->name }}</option>
                                                    @endforeach
                                                    <option value="Lainnya">Lainnya</option>
                                                </select>
                                                <div class="invalid-feedback" id="valid-kecamatan">{{ $errors->first('kecamatan') }}</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12 col-sm-12">
                                            <div class="form-group">
                                                <label for="kecamatan">Kecamatan (Optional)</label>
                                                <input type="text" class="form-control form-control-sm @error('kecamatan') is-invalid @enderror" name="kecamatan_" id="kecamatan_" value="@error('kecamatan'){{ old('kecamatan') }}@else{{ $data->kecamatan }}@enderror" readonly>
                                                <small>Kosongkan jika tidak diperlukan</small>
                                                <div class="invalid-feedback" id="valid-kecamatan">{{ $errors->first('kecamatan') }}</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12 col-sm-12">
                                            <div class="form-group">
                                                <label for="alamat">Alamat <sup class="text-danger">*</sup></label>
                                                <input type="text" class="form-control form-control-sm @error('alamat') is-invalid @enderror" name="alamat" id="alamat" value="@error('alamat'){{ old('alamat') }}@else{{ $data->alamat }}@enderror">
                                                <div class="invalid-feedback" id="valid-alamat">{{ $errors->first('alamat') }}</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12 col-sm-12">
                                            <div class="form-group">
                                                <label for="phone">No Handphone <sup class="text-danger">*</sup></label>
                                                <input type="text" class="form-control form-control-sm @error('phone') is-invalid @enderror" name="phone" id="phone" value="@error('phone'){{ old('phone') }}@else{{ $data->phone }}@enderror">
                                                <div class="invalid-feedback" id="valid-phone">{{ $errors->first('phone') }}</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12 col-sm-12">
                                            <div class="form-group">
                                                <label for="pasport">No Pasport <sup class="text-danger">*</sup></label>
                                                <input type="text" class="form-control form-control-sm @error('pasport') is-invalid @enderror" name="pasport" id="pasport" value="@error('pasport'){{ old('pasport') }}@else{{ $data->pasport }}@enderror">
                                                <div class="invalid-feedback" id="valid-pasport">{{ $errors->first('pasport') }}</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12 col-sm-12">
                                            <div class="form-group">
                                                <label for="agama">Agama</label>
                                                <select class="select2 form-control form-control-sm @error('agama') is-invalid @enderror" name="agama" id="agama">
                                                    <option value="" selected disabled>-- Pilih Agama --</option>
                                                    @foreach ($agamas as $agama )
                                                        <option value="{{ $agama->id }}" {{ old('agama') == $agama->id || $data->agama_id == $agama->id ? 'selected' : '' }}>{{ $agama->name }}</option>
                                                    @endforeach
                                                </select>
                                                <div class="invalid-feedback" id="valid-agama">{{ $errors->first('agama') }}</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12 col-sm-12">
                                            <div class="form-group">
                                                <label for="pendidikan">Pendidikan</label>
                                                <select class="select2 form-control form-control-sm @error('pendidikan') is-invalid @enderror" name="pendidikan" id="pendidikan">
                                                    <option value="" selected disabled>-- Pilih Pendidikan --</option>
                                                    @foreach ($pendidikans as $pendidikan )
                                                        <option value="{{ $pendidikan->id }}" {{ old('pendidikan') == $pendidikan->id || $data->pendidikan_id == $pendidikan->id ? 'selected' : '' }}>{{ $pendidikan->name }}</option>
                                                    @endforeach
                                                </select>
                                                <div class="invalid-feedback" id="valid-pendidikan">{{ $errors->first('pendidikan') }}</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12 col-sm-12">
                                            <div class="form-group">
                                                <label for="pekerjaan">Pekerjaan</label>
                                                <select class="select2 form-control form-control-sm @error('pekerjaan') is-invalid @enderror" name="pekerjaan" id="pekerjaan">
                                                    <option value="" selected disabled>-- Pilih Pekerjaan --</option>
                                                    @foreach ($pekerjaans as $pekerjaan )
                                                        <option value="{{ $pekerjaan->id }}" {{ old('pekerjaan') == $pekerjaan->id || $data->pekerjaan_id == $pekerjaan->id ? 'selected' : '' }}>{{ $pekerjaan->name }}</option>
                                                    @endforeach
                                                </select>
                                                <div class="invalid-feedback" id="valid-pekerjaan">{{ $errors->first('pekerjaan') }}</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12 col-sm-12">
                                            <div class="form-group">
                                                <label for="alamat_kantor">Alamat Kantor<sup class="text-danger">*</sup></label>
                                                <input type="text" class="form-control form-control-sm @error('alamat_kantor') is-invalid @enderror" name="alamat_kantor" id="alamat_kantor" value="@error('alamat_kantor'){{ old('alamat_kantor') }}@else{{ $data->alamat_kantor }}@enderror">
                                                <div class="invalid-feedback" id="valid-alamat_kantor">{{ $errors->first('alamat_kantor') }}</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12 col-sm-12">
                                            <div class="form-group">
                                                <label for="perkawinan">Status Perkawinan</label>
                                                <select class="select2 form-control form-control-sm @error('perkawinan') is-invalid @enderror" name="perkawinan" id="perkawinan">
                                                    <option value="" selected disabled>-- Pilih Status Perkawinan --</option>
                                                    @foreach ($perkawinans as $perkawinan )
                                                        <option value="{{ $perkawinan->id }}" {{ old('perkawinan') == $perkawinan->id || $data->perkawinan_id == $perkawinan->id ? 'selected' : '' }}>{{ $perkawinan->name }}</option>
                                                    @endforeach
                                                </select>
                                                <div class="invalid-feedback" id="valid-perkawinan">{{ $errors->first('perkawinan') }}</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12 col-sm-12">
                                            <div class="form-group">
                                                <label for="legitimasi_perkawinan">Legitimasi Perkawinan <sup class="text-danger">*</sup></label>
                                                <input type="text" class="form-control form-control-sm @error('legitimasi_perkawinan') is-invalid @enderror" name="legitimasi_perkawinan" id="legitimasi_perkawinan" value="@error('legitimasi_perkawinan'){{ old('legitimasi_perkawinan') }}@else{{ $data->legitimasi_perkawinan }}@enderror">
                                                <div class="invalid-feedback" id="valid-legitimasi_perkawinan">{{ $errors->first('legitimasi_perkawinan') }}</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12 col-sm-12">
                                            <div class="form-group">
                                                <label for="tempat_perkawinan">Tempat Perkawinan <sup class="text-danger">*</sup></label>
                                                <input type="text" class="form-control form-control-sm @error('tempat_perkawinan') is-invalid @enderror" name="tempat_perkawinan" id="tempat_perkawinan" value="@error('tempat_perkawinan'){{ old('tempat_perkawinan') }}@else{{ $data->tempat_perkawinan }}@enderror">
                                                <div class="invalid-feedback" id="valid-tempat_perkawinan">{{ $errors->first('tempat_perkawinan') }}</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12 col-sm-12">
                                            <div class="form-group">
                                                <label for="tanggal_perkawinan">Tanggal Perkawinan <sup class="text-danger">*</sup></label>
                                                <input type="date" class="form-control form-control-sm @error('tanggal_perkawinan') is-invalid @enderror" name="tanggal_perkawinan" id="tanggal_perkawinan" value="@error('tanggal_perkawinan'){{ old('tanggal_perkawinan') }}@else{{ $data->tanggal_perkawinan }}@enderror">
                                                <div class="invalid-feedback" id="valid-tanggal_perkawinan">{{ $errors->first('tanggal_perkawinan') }}</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12 col-sm-12">
                                            <div class="form-group">
                                                <label for="photo">Foto <sup class="text-danger">max : 2MB</sup></label>
                                                <input type="file" class="form-control-file @error('photo') is-invalid @enderror" id="photo" name="photo">
                                                <br>
                                                <img src="{{ asset('/img/biodata/' . $data->photo) }}" width="200" height="200">
                                                <div class="invalid-feedback" id="valid-photo">{{ $errors->first('photo') }}</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-8">
                            <div class="card card-primary">
                                <div class="card-header">
                                    <h4 class="card-title">Biografi Intelijen</h4>
                                </div>
                                <div class="card-body">
                                    <div class="text-danger" id="valid-type">{{ $errors->first('type') }}</div>
                                    <div class="row">
                                        <div class="col-md-12 col-sm-12">
                                            <div class="form-group">
                                                <label>Riwayat hidup singkat</label>
                                                <div class="row">
                                                    <div class="col-md-3 col-sm-3">
                                                        <input type="text" class="form-control form-control-sm @error('riwayat_pekerjaan') is-invalid @enderror" name="riwayat_pekerjaan" id="riwayat_pekerjaan" value="@error('riwayat_pekerjaan'){{ old('riwayat_pekerjaan') }}@else{{ $data->riwayat_pekerjaan }}@enderror" placeholder="Pekerjaan">   
                                                    </div>
                                                    <div class="col-md-3 col-sm-3">
                                                        <input type="text" class="form-control form-control-sm @error('riwayat_pendidikan') is-invalid @enderror" name="riwayat_pendidikan" id="riwayat_pendidikan" value="@error('riwayat_pendidikan'){{ old('riwayat_pendidikan') }}@else{{ $data->riwayat_pendidikan }}@enderror" placeholder="Pendidikan"> 
                                                    </div>
                                                    <div class="col-md-3 col-sm-3">
                                                        <input type="text" class="form-control form-control-sm @error('riwayat_kepartaian') is-invalid @enderror" name="riwayat_kepartaian" id="riwayat_kepartaian" value="@error('riwayat_kepartaian'){{ old('riwayat_kepartaian') }}@else{{ $data->riwayat_kepartaian }}@enderror" placeholder="Kepartaian">  
                                                    </div>
                                                    <div class="col-md-3 col-sm-3">
                                                        <input type="text" class="form-control form-control-sm @error('riwayat_ormas') is-invalid @enderror" name="riwayat_ormas" id="riwayat_ormas" value="@error('riwayat_ormas'){{ old('riwayat_ormas') }}@else{{ $data->riwayat_ormas }}@enderror" placeholder="Ormas Lainnya">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12 col-sm-12">
                                            <div class="form-group">
                                                <label for="nama_istri">Nama Istri/Suami</label>
                                                <input type="text" class="form-control form-control-sm @error('nama_istri') is-invalid @enderror" name="nama_istri" id="nama_istri" value="@error('nama_istri'){{ old('nama_istri') }}@else{{ $data->nama_istri }}@enderror" placeholder="Masukkan Nama Istri atau Suami">
                                                <div class="invalid-feedback" id="valid-nama_istri">{{ $errors->first('nama_istri') }}</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12 col-sm-12">
                                            <div class="form-group">
                                                <label for="nama_anak">Nama Anak</label>
                                                <input type="text" class="form-control form-control-sm @error('nama_anak') is-invalid @enderror" name="nama_anak" id="nama_anak" value="@error('nama_anak'){{ old('nama_anak') }}@else{{ $data->nama_anak }}@enderror" placeholder="Masukkan Nama Anak">
                                                <div class="invalid-feedback" id="valid-nama_anak">{{ $errors->first('nama_anak') }}</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12 col-sm-12">
                                            <div class="form-group">
                                                <label for="nama_saudara">Nama Saudara Kandung</label>
                                                <input type="text" class="form-control form-control-sm @error('nama_saudara') is-invalid @enderror" name="nama_saudara" id="nama_saudara" value="@error('nama_saudara'){{ old('nama_saudara') }}@else{{ $data->nama_saudara }}@enderror" placeholder="Nama Saudra Kandung">
                                                <div class="invalid-feedback" id="valid-nama_saudara">{{ $errors->first('nama_saudara') }}</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12 col-sm-12">
                                            <div class="form-group">
                                                <label for="nama_ayah_kandung">Nama Ayah Kandung</label>
                                                <input type="text" class="form-control form-control-sm @error('nama_ayah_kandung') is-invalid @enderror" name="nama_ayah_kandung" id="nama_ayah_kandung" value="@error('nama_ayah_kandung'){{ old('nama_ayah_kandung') }}@else{{ $data->nama_ayah_kandung }}@enderror" placeholder="Nama Ayah Kandung">
                                                <div class="invalid-feedback" id="valid-nama_ayah_kandung">{{ $errors->first('nama_ayah_kandung') }}</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12 col-sm-12">
                                            <div class="form-group">
                                                <label for="alamat_ayah_kandung">Alamat Ayah Kandung</label>
                                                <input type="text" class="form-control form-control-sm @error('alamat_ayah_kandung') is-invalid @enderror" name="alamat_ayah_kandung" id="alamat_ayah_kandung" value="@error('alamat_ayah_kandung'){{ old('alamat_ayah_kandung') }}@else{{ $data->alamat_ayah_kandung }}@enderror" placeholder="Alamat Ayah Kandung">
                                                <div class="invalid-feedback" id="valid-alamat_ayah_kandung">{{ $errors->first('alamat_ayah_kandung') }}</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12 col-sm-12">
                                            <div class="form-group">
                                                <label for="nama_ibu_kandung">Nama Ibu Kandung</label>
                                                <input type="text" class="form-control form-control-sm @error('nama_ibu_kandung') is-invalid @enderror" name="nama_ibu_kandung" id="nama_ibu_kandung" value="@error('nama_ibu_kandung'){{ old('nama_ibu_kandung') }}@else{{ $data->nama_ibu_kandung }}@enderror" placeholder="Nama Ibu Kandung">
                                                <div class="invalid-feedback" id="valid-nama_ibu_kandung">{{ $errors->first('nama_ibu_kandung') }}</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12 col-sm-12">
                                            <div class="form-group">
                                                <label for="alamat_ibu_kandung">Alamat Ibu Kandung</label>
                                                <input type="text" class="form-control form-control-sm @error('alamat_ibu_kandung') is-invalid @enderror" name="alamat_ibu_kandung" id="alamat_ibu_kandung" value="@error('alamat_ibu_kandung'){{ old('alamat_ibu_kandung') }}@else{{ $data->alamat_ibu_kandung }}@enderror" placeholder="Alamat Ibu Kandung">
                                                <div class="invalid-feedback" id="valid-alamat_ibu_kandung">{{ $errors->first('alamat_ibu_kandung') }}</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12 col-sm-12">
                                            <div class="form-group">
                                                <label for="nama_ayah_mertua">Nama Ayah Mertua</label>
                                                <input type="text" class="form-control form-control-sm @error('nama_ayah_mertua') is-invalid @enderror" name="nama_ayah_mertua" id="nama_ayah_mertua" value="@error('nama_ayah_mertua'){{ old('nama_ayah_mertua') }}@else{{ $data->nama_ayah_mertua }}@enderror" placeholder="Nama Ayah Mertua">
                                                <div class="invalid-feedback" id="valid-nama_ayah_mertua">{{ $errors->first('nama_ayah_mertua') }}</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12 col-sm-12">
                                            <div class="form-group">
                                                <label for="alamat_ayah_mertua">Alamat Ayah Mertua</label>
                                                <input type="text" class="form-control form-control-sm @error('alamat_ayah_mertua') is-invalid @enderror" name="alamat_ayah_mertua" id="alamat_ayah_mertua" value="@error('alamat_ayah_mertua'){{ old('alamat_ayah_mertua') }}@else{{ $data->alamat_ayah_mertua }}@enderror" placeholder="Alamat Ayah Mertua">
                                                <div class="invalid-feedback" id="valid-alamat_ayah_mertua">{{ $errors->first('alamat_ayah_mertua') }}</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12 col-sm-12">
                                            <div class="form-group">
                                                <label for="nama_ibu_mertua">Nama Ibu Mertua</label>
                                                <input type="text" class="form-control form-control-sm @error('nama_ibu_mertua') is-invalid @enderror" name="nama_ibu_mertua" id="nama_ibu_mertua" value="@error('nama_ibu_mertua'){{ old('nama_ibu_mertua') }}@else{{ $data->nama_ibu_mertua }}@enderror" placeholder="Nama Ibu Mertua">
                                                <div class="invalid-feedback" id="valid-nama_ibu_mertua">{{ $errors->first('nama_ibu_mertua') }}</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12 col-sm-12">
                                            <div class="form-group">
                                                <label for="alamat_ibu_mertua">Alamat Ibu Mertua</label>
                                                <input type="text" class="form-control form-control-sm @error('alamat_ibu_mertua') is-invalid @enderror" name="alamat_ibu_mertua" id="alamat_ibu_mertua" value="@error('alamat_ibu_mertua'){{ old('alamat_ibu_mertua') }}@else{{ $data->alamat_ibu_mertua }}@enderror" placeholder="Alamat Ibu mertua">
                                                <div class="invalid-feedback" id="valid-alamat_ibu_mertua">{{ $errors->first('alamat_ibu_mertua') }}</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12 col-sm-12">
                                            <div class="form-group">
                                                <label>Kenalan</label>
                                                <div class="row">
                                                    <div class="col-md-4 col-sm-4">
                                                        <input type="text" class="form-control form-control-sm @error('nama_kenalan_pertama') is-invalid @enderror" name="nama_kenalan_pertama" id="nama_kenalan_pertama" value="@error('nama_kenalan_pertama'){{ old('nama_kenalan_pertama') }}@else{{ $data->nama_kenalan_pertama }}@enderror" placeholder="Nama Kenalan Pertama">   
                                                        <br>
                                                        <input type="text" class="form-control form-control-sm @error('alamat_kenalan_pertama') is-invalid @enderror" name="alamat_kenalan_pertama" id="alamat_kenalan_pertama" value="@error('alamat_kenalan_pertama'){{ old('alamat_kenalan_pertama') }}@else{{ $data->alamat_kenalan_pertama }}@enderror" placeholder="Alamat Kenalan Pertama">   
                                                    </div>
                                                    <div class="col-md-4 col-sm-4">
                                                        <input type="text" class="form-control form-control-sm @error('nama_kenalan_kedua') is-invalid @enderror" name="nama_kenalan_kedua" id="nama_kenalan_kedua" value="@error('nama_kenalan_kedua'){{ old('nama_kenalan_kedua') }}@else{{ $data->nama_kenalan_kedua }}@enderror" placeholder="Nama Kenalan Kedua"> 
                                                        <br>
                                                        <input type="text" class="form-control form-control-sm @error('alamat_kenalan_kedua') is-invalid @enderror" name="alamat_kenalan_kedua" id="alamat_kenalan_kedua" value="@error('alamat_kenalan_kedua'){{ old('alamat_kenalan_kedua') }}@else{{ $data->alamat_kenalan_kedua }}@enderror" placeholder="Alamat Kenalan Kedua"> 
                                                    </div>
                                                    <div class="col-md-4 col-sm-4">
                                                        <input type="text" class="form-control form-control-sm @error('nama_kenalan_ketiga') is-invalid @enderror" name="nama_kenalan_ketiga" id="nama_kenalan_ketiga" value="@error('nama_kenalan_ketiga'){{ old('nama_kenalan_ketiga') }}@else{{ $data->nama_kenalan_ketiga }}@enderror" placeholder="Nama Kenalan Ketiga">  
                                                        <br>
                                                        <input type="text" class="form-control form-control-sm @error('alamat_kenalan_ketiga') is-invalid @enderror" name="alamat_kenalan_ketiga" id="alamat_kenalan_ketiga" value="@error('alamat_kenalan_ketiga'){{ old('alamat_kenalan_ketiga') }}@else{{ $data->alamat_kenalan_ketiga }}@enderror" placeholder="Alamat Kenalan Ketiga">  
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12 col-sm-12">
                                            <div class="form-group">
                                                <label for="hobi">Hobby</label>
                                                <input type="text" class="form-control form-control-sm @error('hobi') is-invalid @enderror" name="hobi" id="hobi" value="@error('hobi'){{ old('hobi') }}@else{{ $data->hobi }}@enderror" placeholder="Masukkan Hobby">
                                                <div class="invalid-feedback" id="valid-hobi">{{ $errors->first('hobi') }}</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12 col-sm-12">
                                            <div class="form-group">
                                                <label for="kedudukan">Kedudukan di Masyarakat</label>
                                                <input type="text" class="form-control form-control-sm @error('kedudukan') is-invalid @enderror" name="kedudukan" id="kedudukan" value="@error('kedudukan'){{ old('kedudukan') }}@else{{ $data->kedudukan }}@enderror" placeholder="Masukkan Kedudukan di Masyarakat">
                                                <div class="invalid-feedback" id="valid-kedudukan">{{ $errors->first('kedudukan') }}</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12 col-sm-12">
                                            <div class="form-group">
                                                <label for="lain">Lain-lain</label>
                                                <input type="text" class="form-control form-control-sm @error('lain') is-invalid @enderror" name="lain" id="lain" value="@error('lain'){{ old('lain') }}@else{{ $data->lain }}@enderror" placeholder="Masukkan lain-lain">
                                                <div class="invalid-feedback" id="valid-lain">{{ $errors->first('lain') }}</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12 col-sm-12">
                                    <button type="submit" class="btn btn-primary btn-round float-right" id="btn-submit">
                                        <i class="fas fa-check"></i>
                                        Simpan
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </section>
    </div>
@endsection

@section('js')
    <script src="{{ asset('backend/modules/select2/dist/js/select2.full.min.js') }}"></script>
    <script src="{{ asset('backend/modules/summernote/summernote-bs4.js') }}"></script>
    <script src="{{ asset('backend/js/jquery.mask.min.js') }}"></script>
    <script src="{{ asset('backend/modules/sweetalert/sweetalert.min.js') }}"></script>
    <script>
        $(document).ready(function() {
            // Setup AJAX CSRF
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            $('.select2').on('select2:selecting', function() {
                $(this).removeClass('is-invalid');
            });

            // Open Modal to Add new Author
            $('#btn-add').click(function(e) {
                e.preventDefault();
                $('#formModal').modal('show');
                $('.modal-title').html('Add Author');
                $('#author-form').trigger('reset');
                $('#btn-save').html('<i class="fas fa-check"></i> Save Changes');
                $('#author-form').find('.form-control').removeClass('is-invalid is-valid');
                $('#btn-save').val('save').removeAttr('disabled');
            });

            $('body').on('keyup', '#title, #category_id, #content, #thumbnail', function() {
                var test = $(this).val();
                if (test == '') {
                    $(this).removeClass('is-valid is-invalid');
                } else {
                    $(this).removeClass('is-invalid').addClass('is-valid');
                }
            })

            $('body').on('change', '#kecamatan', function() {
                var value = $(this).val();
                if (value == 'Lainnya') {
                    $("#kecamatan_").attr("readonly", false); 
                } else {
                    $("#kecamatan_").attr("readonly", true); 
                }
            })

         
            function filePreview2(input) {
                if(input.files && input.files[0]) {
                    var reader = new FileReader();
                    reader.onload = function(e) {
                        $('img').remove();
                        $('#photo').after('<br><img src="' + e.target.result + '" width="200" height="200">');
                    };
                    reader.readAsDataURL(input.files[0]);
                };
            }

            $('#photo').change(function() {
                filePreview2(this);
                $('#valid-photo').html('');
            });

            $('form').submit(function() {
                $('#btn-submit').html('<i class="fas fa-cog fa-spin"></i> Saving...').attr("disabled", true);
            });
        })
    </script>
@endsection --}}

@extends('admin.layouts.master')
@section('title', 'Edit Data KTP')

@section('css')
    <link rel="stylesheet" href="{{ asset('backend/modules/select2/dist/css/select2.min.css') }}">
    <link href="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.1/summernote.css" rel="stylesheet">
@endsection

@section('content')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Edit Data KTP</h1>
                <div class="section-header-breadcrumb">
                    <div class="breadcrumb-item">
                        <a href="{{ route('admin.dashboard') }}">
                            <i class="fa fa-home"></i>
                            Dashboard
                        </a>
                    </div>
                    <div class="breadcrumb-item">
                        <a href="{{ route('admin.ktp.index') }}">
                            <i class="fa fa-file-pdf"></i>
                            Data KTP
                        </a>
                    </div>
                    <div class="breadcrumb-item">
                        <i class="fa fa-plus-circle"></i>
                        Edit Data
                    </div>
                </div>
            </div>
            <div class="section-body">
                <form method="POST" action="{{ route('admin.ktp.update', $data->id) }}" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="row">
                        <div class="col-lg-8">
                            <div class="card card-primary">
                                <div class="card-header">
                                    <h4 class="card-title">Edit Data</h4>
                                </div>
                                <div class="card-body">
                                    <input type="hidden" id="id" value="{{ $data->id }}">
                                    <div class="text-danger" id="valid-type">{{ $errors->first('type') }}</div>
                                    <div class="row">
                                        <div class="col-md-12 col-sm-12">
                                            <div class="form-group">
                                                <label for="provinsi">Provinsi<sup class="text-danger">*</sup></label>
                                                <input type="text" class="form-control form-control-sm @error('provinsi') is-invalid @enderror" name="provinsi" id="provinsi" value="@error('provinsi'){{ old('provinsi') }}@else{{ $data->provinsi }}@enderror" placeholder="Masukkan provinsi">
                                                <div class="invalid-feedback" id="valid-provinsi">{{ $errors->first('provinsi') }}</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12 col-sm-12">
                                            <div class="form-group">
                                                <label for="kabupaten">Kabupaten<sup class="text-danger">*</sup></label>
                                                <select class="form-control form-control-sm @error('kabupaten') is-invalid @enderror" name="kabupaten" id="kabupaten">
                                                    <option value="" selected disabled>-- Pilih Kabupaten --</option>
                                                        @foreach ($kabupatens as $kabupaten)
                                                            <option value="{{ $kabupaten->name }}" {{ old('kabupaten') == $kabupaten->id || $data->kabupaten == $kabupaten->name ? 'selected' : '' }}>{{ $kabupaten->name }}</option>
                                                        @endforeach
                                                </select>
                                                <div class="invalid-feedback" id="valid-kabupaten">{{ $errors->first('kabupaten') }}</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12 col-sm-12">
                                            <div class="form-group">
                                                <label for="nik">NIK<sup class="text-danger">*</sup></label>
                                                <input type="text" class="form-control form-control-sm @error('nik') is-invalid @enderror" name="nik" id="nik" value="@error('nik'){{ old('nik') }}@else{{ $data->nik }}@enderror" placeholder="Masukkan NIK" maxlength="16">
                                                <div class="invalid-feedback" id="valid-nik">{{ $errors->first('nik') }}</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12 col-sm-12">
                                            <div class="form-group">
                                                <label for="nama">Nama<sup class="text-danger">*</sup></label>
                                                <input type="text" class="form-control form-control-sm @error('nama') is-invalid @enderror" name="nama" id="nama" value="@error('nama'){{ old('nama') }}@else{{ $data->nama }}@enderror" placeholder="Masukkan nama">
                                                <div class="invalid-feedback" id="valid-nama">{{ $errors->first('nama') }}</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12 col-sm-12">
                                            <div class="form-group">
                                                <label for="tempat_lahir">Tempat Lahir<sup class="text-danger">*</sup></label>
                                                <input type="text" class="form-control form-control-sm @error('tempat_lahir') is-invalid @enderror" name="tempat_lahir" id="tempat_lahir" value="@error('tempat_lahir'){{ old('tempat_lahir') }}@else{{ $data->tempat_lahir }}@enderror" placeholder="Masukkan tempat lahir">
                                                <div class="invalid-feedback" id="valid-tempat_lahir">{{ $errors->first('tempat_lahir') }}</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12 col-sm-12">
                                            <div class="form-group">
                                                <label for="tanggal_lahir">Tanggal Lahir<sup class="text-danger">*</sup></label>
                                                <input type="date" class="form-control form-control-sm @error('tanggal_lahir') is-invalid @enderror" name="tanggal_lahir" id="tanggal_lahir" value="@error('tanggal_lahir'){{ old('tanggal_lahir') }}@else{{ $data->tanggal_lahir }}@enderror">
                                                <div class="invalid-feedback" id="valid-tanggal_lahir">{{ $errors->first('tanggal_lahir') }}</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12 col-sm-12">
                                            <div class="form-group">
                                                <label for="jenis_kelamin">Jenis Kelamin</label>
                                                <select class="select2 form-control form-control-sm @error('jenis_kelamin') is-invalid @enderror" name="jenis_kelamin" id="jenis_kelamin">
                                                    <option value="" selected disabled>-- Pilih Jenis Kelamin --</option>
                                                    <option value="L" {{$data->jenis_kelamin == 'L' ? 'selected' : '' }}>Laki-laki</option>
                                                    <option value="P" {{$data->jenis_kelamin == 'P' ? 'selected' : '' }}>Perempuan</option>
                                                </select>
                                                <div class="invalid-feedback" id="valid-jenis_kelamin">{{ $errors->first('jenis_kelamin') }}</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12 col-sm-12">
                                            <div class="form-group">
                                                <label for="alamat">Alamat<sup class="text-danger">*</sup></label>
                                                <input type="text" class="form-control form-control-sm @error('alamat') is-invalid @enderror" name="alamat" id="alamat" value="@error('alamat'){{ old('alamat') }}@else{{ $data->alamat }}@enderror" placeholder="Masukkan alamat">
                                                <div class="invalid-feedback" id="valid-alamat">{{ $errors->first('alamat') }}</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6 col-sm-6">
                                            <div class="form-group">
                                                <label for="rt">RT<sup class="text-danger">*</sup></label>
                                                <input type="text" class="form-control form-control-sm @error('rt') is-invalid @enderror" name="rt" id="rt" value="@error('rt'){{ old('rt') }}@else{{ $data->rt }}@enderror">
                                                <div class="invalid-feedback" id="valid-rt">{{ $errors->first('rt') }}</div>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-sm-6">
                                            <div class="form-group">
                                                <label for="rw">RW<sup class="text-danger">*</sup></label>
                                                <input type="text" class="form-control form-control-sm @error('rw') is-invalid @enderror" name="rw" id="rw" value="@error('rw'){{ old('rw') }}@else{{ $data->rw }}@enderror">
                                                <div class="invalid-feedback" id="valid-rw">{{ $errors->first('rw') }}</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12 col-sm-12">
                                            <div class="form-group">
                                                <label for="desa">Desa/Kelurahan<sup class="text-danger">*</sup></label>
                                                <input type="text" class="form-control form-control-sm @error('desa') is-invalid @enderror" name="desa" id="desa" value="@error('desa'){{ old('desa') }}@else{{ $data->desa }}@enderror" placeholder="Masukkan desa">
                                                <div class="invalid-feedback" id="valid-desa">{{ $errors->first('desa') }}</div>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="row">
                                        <div class="col-md-12 col-sm-12">
                                            <div class="form-group">
                                                <label for="kecamatan">Kecamatan<sup class="text-danger">*</sup></label>
                                                <input type="text" class="form-control form-control-sm @error('kecamatan') is-invalid @enderror" name="kecamatan" id="kecamatan" value="@error('kecamatan'){{ old('kecamatan') }}@else{{ $data->kecamatan }}@enderror" placeholder="Masukkan kecamatan">
                                                <div class="invalid-feedback" id="valid-kecamatan">{{ $errors->first('kecamatan') }}</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12 col-sm-12">
                                            <div class="form-group">
                                                <label for="status_perkawinan">Status Perkawinan<sup class="text-danger">*</sup></label>
                                                <input type="text" class="form-control form-control-sm @error('status_perkawinan') is-invalid @enderror" name="status_perkawinan" id="status_perkawinan" value="@error('status_perkawinan'){{ old('status_perkawinan') }}@else{{ $data->status_perkawinan }}@enderror" placeholder="Masukkan status perkawinan">
                                                <div class="invalid-feedback" id="valid-status_perkawinan">{{ $errors->first('status_perkawinan') }}</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12 col-sm-12">
                                            <div class="form-group">
                                                <label for="keterangan">Keterangan</label>
                                                <input type="text" class="form-control form-control-sm @error('keterangan') is-invalid @enderror" name="keterangan" id="keterangan" value="@error('keterangan'){{ old('keterangan') }}@else{{ $data->keterangan }}@enderror" placeholder="Masukkan tempat perkawinan">
                                                <div class="invalid-feedback" id="valid-keterangan">{{ $errors->first('keterangan') }}</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12 col-sm-12">
                                            <div class="form-group">
                                                <label for="photo">Foto <sup class="text-danger">max : 2MB</sup></label>
                                                <input type="file" class="form-control-file @error('photo') is-invalid @enderror" id="photo" name="photo">
                                                <br>
                                                <img src="{{ asset('/img/ktp/' . $data->photo) }}" width="200" height="200">
                                                <div class="invalid-feedback" id="valid-photo">{{ $errors->first('photo') }}</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12 col-sm-12">
                                            <button type="submit" class="btn btn-primary btn-round float-right" id="btn-submit">
                                                <i class="fas fa-check"></i>
                                                Simpan
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </section>
    </div>
@endsection

@section('js')
    <script src="{{ asset('backend/modules/select2/dist/js/select2.full.min.js') }}"></script>
    <script src="{{ asset('backend/modules/summernote/summernote-bs4.js') }}"></script>
    <script src="{{ asset('backend/js/jquery.mask.min.js') }}"></script>
    <script src="{{ asset('backend/modules/sweetalert/sweetalert.min.js') }}"></script>
    <script>
        $(document).ready(function() {
            // Setup AJAX CSRF
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            $('.select2').on('select2:selecting', function() {
                $(this).removeClass('is-invalid');
            });
         
            function filePreview2(input) {
                if(input.files && input.files[0]) {
                    var reader = new FileReader();
                    reader.onload = function(e) {
                        $('img').remove();
                        $('#photo').after('<br><img src="' + e.target.result + '" width="200" height="200">');
                    };
                    reader.readAsDataURL(input.files[0]);
                };
            }

            $('#photo').change(function() {
                filePreview2(this);
                $('#valid-photo').html('');
            });

            $('form').submit(function() {
                $('#btn-submit').html('<i class="fas fa-cog fa-spin"></i> Saving...').attr("disabled", true);
            });
        })
    </script>
@endsection

