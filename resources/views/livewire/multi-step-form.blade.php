<div>
  
  <div class="content">
    <div class="container">
      <div class="card my-3">
        <div class="progress">
          <div aria-valuemax="100" aria-valuemin="0" aria-valuenow="50" class="progress-bar progress-bar-striped progress-bar-animated bg-danger" role="progressbar" style="width: 0%"></div>
        </div>
        <div class="card-body">
            <form class="form-wrapper" name="form-wrapper" method="POST">
                {{csrf_field()}}
                <div id="steps-container">
                  <div class="step">
                    <div class="form-group">
                      <label for="namaLengkap" class="form-label">Nama Lengkap</label>
                      <input type="text" name="namaLengkap" id="namaLengkap" class="form-control"
                          placeholder="Nama Lengkap" value="{{ old('namaLengkap') }}">
                      @error('namaLengkap')
                      <p class="text-danger">{{$message}}</p>
                      @enderror
                    </div>
    
                    <div class="row">
                      <div class="form-group col-md-6">
                        <label for="tempatLahir" class="form-label">Tempat Lahir</label>
                        <input type="text" name="tempatLahir" id="tempatLahir" class="form-control"
                            placeholder="Tempat Lahir" value="{{ old('tempatLahir') }}">
                        @error('tempatLahir')
                        <p class="text-danger">{{$message}}</p>
                        @enderror
                      </div>
    
                      <div class="form-group col-md-6">
                        <label for="tanggalLahir" class="form-label">Tanggal Lahir</label>
                        <input type="date" name="tanggalLahir" id="tanggalLahir" class="form-control"
                            placeholder="Tanggal Lahir" value="{{ old('tanggalLahir') }}">
                        @error('tanggalLahir')
                        <p class="text-danger">{{$message}}</p>
                        @enderror
                      </div>
                    </div>
    
                    <div class="row">
                      <div class="form-group col-md-6">
                        <label for="jenisKelamin" class="form-label">Jenis Kelamin</label>
                        <select name="jenisKelamin" id="jenisKelamin" class="form-control" id="exampleFormControlSelect1">
                          <option value="laki-laki">Laki-Laki</option>
                          <option value="Perempuan">Perempuan</option>
                        </select>
                        @error('jenisKelamin')
                        <p class="text-danger">{{$message}}</p>
                        @enderror
                      </div>
    
                      <div class="form-group col-md-6">
                        <label for="namaLengkap" class="form-label">Agama</label>
                        <input type="text" name="agama" id="agama" class="form-control" placeholder="Agama"
                            value="{{ old('agama') }}">
                        @error('agama')
                        <p class="text-danger">{{$message}}</p>
                        @enderror
                      </div>
                    </div>
    
                    <div class="row">
                      <div class="form-group col-md-6">
                        <label for="statusPernikahan" class="form-label">status Pernikahan</label>
                        <select name="statusPernikahan" id="statusPernikahan" class="form-control" id="exampleFormControlSelect1">
                          <option value="Nikah">Nikah</option>
                          <option value="Belum Nikah">Belum Nikah</option>
                        </select>
                        @error('statusPernikahan')
                        <p class="text-danger">{{$message}}</p>
                        @enderror
                      </div>
    
                      <div class="form-group col-md-6">
                        <label for="nomortelp" class="form-label">Nomor Telepon</label>
                        <input type="text" name="nomortelp" id="nomortelp" class="form-control"
                            placeholder="Nomer Telepon" value="{{ old('nomortelp') }}">
                        @error('nomortelp')
                        <p class="text-danger">{{$message}}</p>
                        @enderror
                      </div>
                    </div>
                    
    
                    <div class="form-group">
                      <label for="email" class="form-label">Email</label>
                        <input type="text" name="email" id="email" class="form-control" placeholder="Email"
                            value="{{ old('email') }}">
                        @error('email')
                        <p class="text-danger">{{$message}}</p>
                        @enderror
                    </div>
    
                    <div class="form-group">
                      <label for="alamat">Alamat</label>
                      <textarea class="form-control" name="alamat" id="alamat" rows="3" placeholder="Alamat">{{ old('alamat') }}</textarea>
                      @error('alamat')
                      <p class="text-danger">{{$message}}</p>
                      @enderror
                    </div>
    
                    <div class="row">
                      <div class="form-group col-md-6">
                        <label for="kota">Kota</label>
                        <input type="text" name="kota" id="kota" class="form-control" placeholder="Kota"
                            value="{{ old('kota') }}">
                        @error('kota')
                        <p class="text-danger">{{$message}}</p>
                        @enderror
                      </div>
    
                      <div class="form-group col-md-6">
                        <label for="negara">Negara</label>
                        <input type="text" name="negara" id="negara" class="form-control" placeholder="Negara"
                            value="{{ old('negara') }}">
                        @error('negara')
                        <p class="text-danger">{{$message}}</p>
                        @enderror
                      </div>
                    </div>
                  </div>
                </div>

                <div class="step">
                  <div class="form-group">
                    <label for="tentangSaya" class="form-label">Tentang Saya</label>
                    <textarea class="form-control" id="tentangSaya" rows="3" placeholder="Tentang Saya">{{ old('tentangSaya') }}</textarea>
                    @error('tentangSaya')
                    <p class="text-danger">{{$message}}</p>
                    @enderror
                  </div>

                  <div>
                    <h5 class="card-title">Riwayat Pendidikan</h5>

                    <div class="row">
                      <div class="form-group col-md-6">
                        <label for="gelar" class="form-label">Status/Gelar</label>
                        <select name="gelar" id="gelar" class="form-control" id="exampleFormControlSelect1">
                          <option value="SD">SD</option>
                          <option value="SMP">SMP</option>
                          <option value="SMA">SMA</option>
                          <option value="Lainnya">Lainnya</option>
                        </select>
                        @error('gelar')
                        <p class="text-danger">{{$message}}</p>
                        @enderror
                      </div>

                      <div class="form-group col-md-6">
                        <label for="kotaSekolah" class="form-label">Kota</label>
                        <input type="text" name="kotaSekolah" id="kotaSekolah" class="form-control" placeholder="Kota"
                        value="{{ old('kotaSekolah') }}">
                        @error('kotaSekolah')
                        <p class="text-danger">{{$message}}</p>
                        @enderror
                      </div>
                    </div>

                    <div class="form-group">
                      <label for="namaInstansi" class="form-label">Nama Instansi (Sekolah, Universitas, dll)</label>
                      <input type="text" name="namaInstansi" id="namaInstansi" class="form-control" placeholder="nama Instansi"
                        value="{{ old('namaInstansi') }}">
                      @error('namaInstansi')
                      <p class="text-danger">{{$message}}</p>
                      @enderror
                    </div>

                    <div class="form-group">
                      <label for="">Mulai</label>
                      <div class="row">
                        <div class="col-md-6">
                          <input type="text" name="bulanMulaiSekolah" id="bulanMulaiSekolah" class="form-control" placeholder="Bulan"
                            value="{{ old('namaInstansi') }}">
                          @error('namaInstansi')
                          <p class="text-danger">{{$message}}</p>
                          @enderror
                        </div>
                        <div class="col-md-6">
                          <input type="text" name="tahunMulaiSekolah" id="tahunMulaiSekolah" class="form-control" placeholder="Tahun"
                            value="{{ old('namaInstansi') }}">
                          @error('namaInstansi')
                          <p class="text-danger">{{$message}}</p>
                          @enderror
                        </div>
                      </div>
                    </div>

                    <div class="form-group">
                      <label for="">Selesai</label>
                      <div class="row">
                        <div class="col-md-6">
                          <input type="text" name="bulanSelesaiSekolah" id="bulanSelesaiSekolah" class="form-control" placeholder="Bulan"
                            value="{{ old('namaInstansi') }}">
                          @error('namaInstansi')
                          <p class="text-danger">{{$message}}</p>
                          @enderror
                        </div>
                        <div class="col-md-6">
                          <input type="text" name="tahunSelesaiSekolah" id="tahunSelesaiSekolah" class="form-control" placeholder="Tahun"
                            value="{{ old('namaInstansi') }}">
                          @error('namaInstansi')
                          <p class="text-danger">{{$message}}</p>
                          @enderror
                        </div>
                      </div>
                    </div>
                  </div>

                  <div>
                    <h5 class="card-title">Pengalaman Organisasi</h5>
                  
                    <div class="row">
                      <div class="form-group col-md-6">
                        <label for="namaOrganisasi" class="form-label">Nama Organisasi</label>
                        <input type="text" name="namaOrganisasi" id="namaOrganisasi" class="form-control" placeholder="Tahun"
                            value="{{ old('namaOrganisasi') }}">
                        @error('namaOrganisasi')
                        <p class="text-danger">{{$message}}</p>
                        @enderror
                      </div>

                      <div class="form-group col-md-6">
                        <label for="jabatan" class="form-label">Jabatan</label>
                        <input type="text" name="jabatan" id="jabatan" class="form-control" placeholder="Kota"
                        value="{{ old('jabatan') }}">
                        @error('jabatan')
                        <p class="text-danger">{{$message}}</p>
                        @enderror
                      </div>
                    </div>

                    <div class="form-group">
                      <label for="">Mulai</label>
                      <div class="row">
                        <div class="col-md-6">
                          <input type="text" name="bulanMulai" id="namaInstansi" class="form-control" placeholder="Bulan"
                            value="{{ old('namaInstansi') }}">
                          @error('namaInstansi')
                          <p class="text-danger">{{$message}}</p>
                          @enderror
                        </div>
                        <div class="col-md-6">
                          <input type="text" name="tahunMulai" id="namaInstansi" class="form-control" placeholder="Tahun"
                            value="{{ old('namaInstansi') }}">
                          @error('namaInstansi')
                          <p class="text-danger">{{$message}}</p>
                          @enderror
                        </div>
                      </div>
                    </div>

                    <div class="form-group">
                      <label for="">Selesai</label>
                      <div class="row">
                        <div class="col-md-6">
                          <input type="text" name="bulanSelesai" id="namaInstansi" class="form-control" placeholder="Bulan"
                            value="{{ old('namaInstansi') }}">
                          @error('namaInstansi')
                          <p class="text-danger">{{$message}}</p>
                          @enderror
                        </div>
                        <div class="col-md-6">
                          <input type="text" name="tahunSelesai" id="namaInstansi" class="form-control" placeholder="Tahun"
                            value="{{ old('namaInstansi') }}">
                          @error('namaInstansi')
                          <p class="text-danger">{{$message}}</p>
                          @enderror
                        </div>
                      </div>
                    </div>

                    <div class="form-group">
                      <label for="deskripsiOrgnisasi">Deskripsi Pengalaman Organisasi</label>
                      <textarea class="form-control" id="deskripsiOrgnisasi" rows="3" placeholder="Tentang Saya">{{ old('deskripsiOrgnisasi') }}</textarea>
                      @error('namaInstansi')
                      <p class="text-danger">{{$message}}</p>
                      @enderror
                    </div>
                  </div>
                </div>

                <div class="step">
                  <h2 class="card-title">Preview</h2>
                </div>
                
                <div class="form-group">
                  <button id="prev-btn" class="btn btn-secondary" type="button">Previous</button> 
                  <button id="next-btn" type="button" class="btn btn-danger">Next</button>
                  <button id="submit-btn" type="submit" class="btn btn-success">Submit</button>
                </div>
            </form>
        </div>
      </div>
    </div>
</div>
</div>

</div>