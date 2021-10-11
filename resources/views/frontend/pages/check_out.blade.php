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

<div class="container">
    <div class="row justify-content-center mt-4">
        <div class="col-lg-8 m-auto text-center col-sm-12 col-md-12">
            <h3>CV kamu sudah siap!</h3>
            <p>Lakukan pembayaran sejumlah Rp 100 untuk dapat mengunduh CV kamu.</p>
        </div>
    </div>

    <div class="box-shadow rounded px-4 py-3 my-4 mx-5">
        <form class="d-flex justify-content-between">
            <input type="text" class="form-control mr-4" aria-label="Recipient's username" aria-describedby="basic-addon2">
            <button type="submit" class="btn btn-primary rounded">Cek Kupon</button>
        </form>
    </div>

    <div class="box-shadow rounded p-3 my-4 mx-5">
        <div class="d-flex justify-content-between align-content-center">
            <h3>Pilih cara pembayaran</h3>
            <p class="bg-danger text-white px-2">Total Harga: Rp 100</p>
        </div>
        <div class="border border-grey p-3 my-4">
            <h4>Pembayaran Manual</h4>
            <img src="{{ url('images/bri.png') }}" alt="logo" width="60px" class="m-2">
            <p class="mb-0">Pembayaran via transfer ke rekening BCA, kamu harus melakukan konfirmasi pembayaran setelahnya.</p>
        </div>
        <div class="border border-grey p-3 my-4">
            <h4>Pembayaran Otomatis dengan Midtrans</h4>
            <img src="{{ url('images/bri.png') }}" alt="logo" width="60px" class="m-2">
            <img src="{{ url('images/bri.png') }}" alt="logo" width="60px" class="m-2">
            <p class="mb-0">Pembayaran via transfer ke rekening BCA, kamu harus melakukan konfirmasi pembayaran setelahnya.</p>
        </div>
        <div class="border border-grey p-3 my-4">
            <h4>Pembayaran Otomatis dengan Xendit</h4>
            <img src="{{ url('images/bri.png') }}" alt="logo" width="60px" class="m-2">
            <p class="mb-0">Pembayaran via transfer ke rekening BCA, kamu harus melakukan konfirmasi pembayaran setelahnya.</p>
        </div>
    </div>
</div>

<div class="d-flex justify-content-end">
  <a href="{{ route('konfirmasi') }}" class="btn btn-success btn-lg m-4">Simpan</a>
</div>

@endsection
