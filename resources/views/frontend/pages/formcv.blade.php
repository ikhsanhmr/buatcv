@extends('frontend.layout')

@section('content')
<!--MAIN BANNER AREA START -->
<div class="page-banner-area page-contact" id="page-banner">
	    <div class="overlay dark-overlay"></div>
	    <div class="container">
	        <div class="row justify-content-center">
	            <div class="col-lg-8 m-auto text-center col-sm-12 col-md-12">
	                <div class="banner-content content-padding">
	                    <h1 class="text-white">Formulir CV</h1>
	                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Unde, perferendis?</p>
	                </div>
	            </div>
	        </div>
	    </div>
	</div>
	<!--MAIN HEADER AREA END -->
<div class="content">
  <div></div>
        <div class="content">
            <div class="card card-info card-outline">

                <div class="card-body">
                    <form action="{{route('simpan-form')}}" method="POST">
                      {{csrf_field()}}
                      <div class="form-group">
                        <input type="text" name="namaLengkap" id="namaLengkap" class="form-control" placeholder="Nama Lengkap" value="{{ old('namaLengkap') }}">
                        @error('namaLengkap')
                          <p class="text-danger">{{$message}}</p>
                        @enderror
                      </div>

                      <div class="form-group">
                        <input type="text" name="tempatLahir" id="tempatLahir" class="form-control" placeholder="Tempat Lahir" value="{{ old('tempatLahir') }}">
                      </div>

                      <div class="form-group">
                        <input type="date" name="tanggalLahir" id="tanggalLahir" class="form-control" placeholder="Tanggal Lahir" value="{{ old('tanggalLahir') }}">
                        @error('tanggalLahir')
                          <p class="text-danger">{{$message}}</p>
                        @enderror
                      </div>

                      <div class="form-group">
                        <input type="text" name="agama" id="agama" class="form-control" placeholder="Agama" value="{{ old('agama') }}">
                        @error('agama')
                          <p class="text-danger">{{$message}}</p>
                        @enderror
                      </div>

                      <div class="form-group">
                        <input type="text" name="nomortelp" id="nomortelp" class="form-control" placeholder="Nomer Telepon" value="{{ old('nomortelp') }}">
                        @error('nomortelp')
                          <p class="text-danger">{{$message}}</p>
                        @enderror
                      </div>

                      <div class="form-group">
                        <input type="text" name="email" id="email" class="form-control" placeholder="Email" value="{{ old('email') }}">
                        @error('email')
                          <p class="text-danger">{{$message}}</p>
                        @enderror
                      </div>

                      <div class="form-group">
                        <input type="text" name="alamat" id="alamat" class="form-control" placeholder="Alamat" value="{{ old('alamat') }}">
                        @error('alamat')
                          <p class="text-danger">{{$message}}</p>
                        @enderror
                      </div>

                      <div class="form-group">
                        <input type="text" name="kota" id="kota" class="form-control" placeholder="Kota" value="{{ old('kota') }}">
                        @error('kota')
                          <p class="text-danger">{{$message}}</p>
                        @enderror
                      </div>

                      <div class="form-group">
                        <input type="text" name="negara" id="negara" class="form-control" placeholder="Negara" value="{{ old('negara') }}">
                        @error('negara')
                          <p class="text-danger">{{$message}}</p>
                        @enderror
                      </div>
                      <div class="form-group">
                        <input type="text" name="jenisKelamin" id="jenisKelamin" class="form-control" placeholder="Jenis Kelamim" value="{{ old('jenisKelamin') }}">
                        @error('jenisKelamin')
                          <p class="text-danger">{{$message}}</p>
                        @enderror
                      </div>
                      <div class="form-group">
                        <input type="text" name="statusPernikahan" id="statusPernikahan" class="form-control" placeholder="Status Pernikahan" value="{{ old('statusPernikahan') }}">
                        @error('statusPernikahan')
                          <p class="text-danger">{{$message}}</p>
                        @enderror
                      </div>
                      <div class="form-group">
                        <button type="submit" class="btn btn-success">Simpan Data</button>
                      </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
  </div>
@endsection

@section('title')
	<title> Beranda </title>
@endsection

@section('author')
	<meta name="author" content="">
@endsection

@section('keywords')
	<meta name="keywords" content="">
@endsection

@section('description')
	<meta name="description" content="">
@endsection