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
    <div class="container my-3">
        @livewire('multi-step-form')
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
