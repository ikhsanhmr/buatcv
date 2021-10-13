@extends('frontend.users.app')
@section('users.content')
  
<div class="container my-4">
  <div class="row">
    <div class="col-12 grid-margin stretch-card">
      <div class="card">
        <div class="card-body">
          <h4 class="card-title">Konfirmasi Pembayaran</h4>
          <form action="{{ route('user.store.konfirmasi-pembayaran') }}" class="forms-sample" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
              <label for="exampleInputName1">Nomor Order</label>
              <input type="text" name="no_order" class="form-control" id="exampleInputName1" placeholder="Name">
            </div>
            <div class="form-group">
              <label for="exampleInputEmail3">Tanggal Transfer</label>
              <input type="text" name="tanggal_transfer" class="form-control" id="exampleInputEmail3" placeholder="Email">
            </div>
            <div class="form-group">
              <label for="exampleInputPassword4">Jumlah Transfer</label>
              <input type="text" name="jumlah_transfer" class="form-control" id="exampleInputPassword4" placeholder="Password">
            </div>
            <div class="form-group">
              <label for="exampleInputPassword4">Nama Pemilik Rekening</label>
              <input type="text" name="nama_pemilik_rekening" class="form-control" id="exampleInputPassword4" placeholder="Password">
            </div>
            <div class="form-group">
              <label for="exampleInputPassword4">Nama Bank</label>
              <input type="text" name="nama_bank" class="form-control" id="exampleInputPassword4" placeholder="Password">
            </div>
            <div class="form-group">
              <label>Bukti Transfer</label>
              <input type="file" name="bukti_pembayaran" class="file-upload-default">
              <div class="input-group col-xs-12">
                <input type="text" class="form-control file-upload-info" disabled placeholder="Upload Image">
                <span class="input-group-append">
                  <button class="file-upload-browse btn btn-primary" type="button">Upload</button>
                </span>
              </div>
            </div>
            <button type="submit" class="btn btn-primary me-2">Submit</button>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>

@endsection