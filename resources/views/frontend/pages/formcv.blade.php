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
        <div class="content">
            <div class="card card-info card-outline">

                <div class="card-body">
                    <form action="" method="">
                      <!-- {{csrf_field()}} -->
                      <div class="form-group">
                        <input type="text" name="nama" id="nama" class="form-control" placeholder="Nama Lengkap">
                      </div>

                      <div class="form-group">
                        <input type="text" name="jenis_kelamin" id="jenis_kelamin" class="form-control" placeholder="Tempat Lahir">
                      </div>

                      <div class="form-group">
                        <input type="date" name="tglLahir" id="tglLahir" class="form-control" placeholder="Tanggal Lahir">
                      </div>

                      <div class="form-group">
                        <input type="text" name="nama" id="nama" class="form-control" placeholder="Agama">
                      </div>

                      <div class="form-group">
                        <input type="text" name="nama" id="nama" class="form-control" placeholder="Nomer Telepon">
                      </div>

                      <div class="form-group">
                        <input type="text" name="nama" id="nama" class="form-control" placeholder="Email">
                      </div>

                      <div class="form-group">
                        <input type="text" name="nama" id="nama" class="form-control" placeholder="Alamat">
                      </div>

                      <div class="form-group">
                        <input type="text" name="nama" id="nama" class="form-control" placeholder="Kota">
                      </div>

                      <div class="form-group">
                        <input type="text" name="nama" id="nama" class="form-control" placeholder="Negara">
                      </div>
                      <div class="form-group">
                        <input type="text" name="nama" id="nama" class="form-control" placeholder="Jenis Kelamim">
                      </div>
                      <div class="form-group">
                        <input type="text" name="nama" id="nama" class="form-control" placeholder="Status Pernikahan">
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