<div>

    <div class="content">
        <div class="container">
            <div class="card my-3">
                
                <div class="card-body">
                    <form wire:submit.prevent="addCV">

                        @if ($currentStep == 1)
                        {{-- STEP 1 --}}
                        <div id="step-one">
                            <div class="step">
                              <div class="row">
                                <div class="form-group col-md-3">
                                  <label for="image">File Input</label>
                                  <input wire:model="image" id="image" type="file" class="form-control-file" id="image">
                                  @error('image')
                                  <p class="text-danger">{{$message}}</p>
                                  @enderror
                                </div>

                                <div class="form-group col-md-9">
                                    <label for="namaLengkap" class="form-label">Nama Lengkap</label>
                                    <input type="text" wire:model="namaLengkap" id="namaLengkap" class="form-control"
                                        placeholder="Nama Lengkap" value="{{ old('namaLengkap') }}">
                                    @error('namaLengkap')
                                    <p class="text-danger">{{$message}}</p>
                                    @enderror
                                </div>

                              </div>

                                <div class="row">
                                    <div class="form-group col-md-6">
                                        <label for="tempatLahir" class="form-label">Tempat Lahir</label>
                                        <input type="text" wire:model="tempatLahir" id="tempatLahir" class="form-control"
                                            placeholder="Tempat Lahir" value="{{ old('tempatLahir') }}">
                                        @error('tempatLahir')
                                        <p class="text-danger">{{$message}}</p>
                                        @enderror
                                    </div>

                                    <div class="form-group col-md-6">
                                        <label for="tanggalLahir" class="form-label">Tanggal Lahir</label>
                                        <input type="date" wire:model="tanggalLahir" id="tanggalLahir" class="form-control"
                                            placeholder="Tanggal Lahir" value="{{ old('tanggalLahir') }}">
                                        @error('tanggalLahir')
                                        <p class="text-danger">{{$message}}</p>
                                        @enderror
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="form-group col-md-6">
                                        <label for="jenisKelamin" class="form-label">Jenis Kelamin</label>
                                        <select wire:model="jenisKelamin" id="jenisKelamin" class="form-control"
                                            id="exampleFormControlSelect1">
                                            <option value="">--- Pilih ---</option>
                                            <option value="laki-laki">Laki-Laki</option>
                                            <option value="Perempuan">Perempuan</option>
                                        </select>
                                        @error('jenisKelamin')
                                        <p class="text-danger">{{$message}}</p>
                                        @enderror
                                    </div>

                                    <div class="form-group col-md-6">
                                        <label for="namaLengkap" class="form-label">Agama</label>
                                        <input type="text" wire:model="agama" id="agama" class="form-control"
                                            placeholder="Agama" value="{{ old('agama') }}">
                                        @error('agama')
                                        <p class="text-danger">{{$message}}</p>
                                        @enderror
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="form-group col-md-6">
                                        <label for="statusPernikahan" class="form-label">status Pernikahan</label>
                                        <select wire:model="statusPernikahan" id="statusPernikahan" class="form-control"
                                            id="exampleFormControlSelect1">
                                            <option value="">--- Pilih ---</option>
                                            <option value="Nikah">Nikah</option>
                                            <option value="Belum Nikah">Belum Nikah</option>
                                        </select>
                                        @error('statusPernikahan')
                                        <p class="text-danger">{{$message}}</p>
                                        @enderror
                                    </div>

                                    <div class="form-group col-md-6">
                                        <label for="nomortelp" class="form-label">Nomor Telepon</label>
                                        <input type="text" wire:model="nomortelp" id="nomortelp" class="form-control"
                                            placeholder="Nomer Telepon" value="{{ old('nomortelp') }}">
                                        @error('nomortelp')
                                        <p class="text-danger">{{$message}}</p>
                                        @enderror
                                    </div>
                                </div>


                                <div class="form-group">
                                    <label for="email" class="form-label">Email</label>
                                    <input type="text" wire:model="email" id="email" class="form-control" placeholder="Email"
                                        value="{{ old('email') }}">
                                    @error('email')
                                    <p class="text-danger">{{$message}}</p>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="alamat">Alamat</label>
                                    <textarea class="form-control" wire:model="alamat" id="alamat" rows="3"
                                        placeholder="Alamat">{{ old('alamat') }}</textarea>
                                    @error('alamat')
                                    <p class="text-danger">{{$message}}</p>
                                    @enderror
                                </div>

                                <div class="row">
                                    <div class="form-group col-md-6">
                                        <label for="kota">Kota</label>
                                        <input type="text" wire:model="kota" id="kota" class="form-control" placeholder="Kota"
                                            value="{{ old('kota') }}">
                                        @error('kota')
                                        <p class="text-danger">{{$message}}</p>
                                        @enderror
                                    </div>

                                    <div class="form-group col-md-6">
                                        <label for="negara">Negara</label>
                                        <input type="text" wire:model="negara" id="negara" class="form-control"
                                            placeholder="Negara" value="{{ old('negara') }}">
                                        @error('negara')
                                        <p class="text-danger">{{$message}}</p>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                        </div>
                        {{-- END STEP 1 --}}
                        @endif

                        @if ($currentStep == 2)
                        {{-- STEP 2 --}}
                        <div class="step-two">
                            <div class="form-group">
                                <label for="deskripsiDiri" class="form-label">Deskripsi Diri</label>
                                <textarea wire:model="deskripsiDiri" class="form-control" id="deskripsiDiri" rows="3"
                                    placeholder="Tentang Saya">{{ old('deskripsiDiri') }}</textarea>
                                @error('tentangSaya')
                                <p class="text-danger">{{$message}}</p>
                                @enderror
                            </div>

                            <div>
                                <h5 class="card-title">Riwayat Pendidikan</h5>

                                <div class="row">
                                    <div class="form-group col-md-6">
                                        <label for="gelar" class="form-label">Status/Gelar</label>
                                        <select wire:model="gelar" id="gelar" class="form-control"
                                            id="exampleFormControlSelect1">
                                            <option value="">--- Pilih ---</option>
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
                                        <label for="kotaGelar" class="form-label">Kota Sekolah</label>
                                        <input type="text" wire:model="kotaGelar" id="kotaGelar" class="form-control"
                                            placeholder="Kota" value="{{ old('kotaGelar') }}">
                                        @error('kotaGelar')
                                        <p class="text-danger">{{$message}}</p>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="namaInstansi" class="form-label">Nama Instansi (Sekolah, Universitas,
                                        dll)</label>
                                    <input type="text" wire:model="namaInstansi" id="namaInstansi" class="form-control"
                                        placeholder="nama Instansi" value="{{ old('namaInstansi') }}">
                                    @error('namaInstansi')
                                    <p class="text-danger">{{$message}}</p>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="">Mulai</label>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <input type="text" wire:model="mulaiInstansiBulan" id="mulaiInstansiBulan"
                                                class="form-control" placeholder="Bulan"
                                                value="{{ old('mulaiInstansiBulan') }}">
                                            @error('mulaiInstansiBulan')
                                            <p class="text-danger">{{$message}}</p>
                                            @enderror
                                        </div>
                                        <div class="col-md-6">
                                            <input type="text" wire:model="mulaiInstansiTahun" id="mulaiInstansiTahun"
                                                class="form-control" placeholder="Tahun"
                                                value="{{ old('mulaiInstansiTahun') }}">
                                            @error('mulaiInstansiTahun')
                                            <p class="text-danger">{{$message}}</p>
                                            @enderror
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="">Selesai</label>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <input type="text" wire:model="selesaiInstansiBulan" id="selesaiInstansiBulan"
                                                class="form-control" placeholder="Bulan"
                                                value="{{ old('selesaiInstansiBulan') }}">
                                            @error('selesaiInstansiBulan')
                                            <p class="text-danger">{{$message}}</p>
                                            @enderror
                                        </div>
                                        <div class="col-md-6">
                                            <input type="text" wire:model="selesaiInstansiTahun" id="selesaiInstansiTahun"
                                                class="form-control" placeholder="Tahun"
                                                value="{{ old('selesaiInstansiTahun') }}">
                                            @error('selesaiInstansiTahun')
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
                                        <input type="text" wire:model="namaOrganisasi" id="namaOrganisasi"
                                            class="form-control" placeholder="Tahun"
                                            value="{{ old('namaOrganisasi') }}">
                                        @error('namaOrganisasi')
                                        <p class="text-danger">{{$message}}</p>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="">Mulai</label>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <input type="text" wire:model="mulaiOrganisasiBulan" id="mulaiOrganisasiBulan" class="form-control"
                                                placeholder="Bulan" value="{{ old('mulaiOrganisasiBulan') }}">
                                            @error('mulaiOrganisasiBulan')
                                            <p class="text-danger">{{$message}}</p>
                                            @enderror
                                        </div>
                                        <div class="col-md-6">
                                            <input type="text" wire:model="mulaiOrganisasiTahun" id="mulaiOrganisasiTahun" class="form-control"
                                                placeholder="Tahun" value="{{ old('mulaiOrganisasiTahun') }}">
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
                                            <input type="text" wire:model="selesaiOrganisasiBulan" id="selesaiOrganisasiBulan"
                                                class="form-control" placeholder="Bulan"
                                                value="{{ old('selesaiOrganisasiBulan') }}">
                                            @error('selesaiOrganisasiBulan')
                                            <p class="text-danger">{{$message}}</p>
                                            @enderror
                                        </div>
                                        <div class="col-md-6">
                                            <input type="text" wire:model="selesaiOrganisasiTahun" id="selesaiOrganisasiTahun"
                                                class="form-control" placeholder="Tahun"
                                                value="{{ old('selesaiOrganisasiTahun') }}">
                                            @error('selesaiOrganisasiTahun')
                                            <p class="text-danger">{{$message}}</p>
                                            @enderror
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="deskripsiOrganisasi">Deskripsi Pengalaman Organisasi</label>
                                    <textarea wire:model="deskripsiOrganisasi" class="form-control" id="deskripsiOrganisasi" rows="3"
                                        placeholder="Tentang Saya">{{ old('deskripsiOrganisasi') }}</textarea>
                                    @error('deskripsiOrganisasi')
                                    <p class="text-danger">{{$message}}</p>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        {{-- END STEP 2 --}}
                        @endif
                        {{-- <div class="step">
                            <h2 class="card-title">Preview</h2>
                        </div> --}}

                        <div class="form-group">
                            @if ($currentStep == 1)
                            <a wire:click="increaseStep()"  class="btn btn-danger text-white">Next</a>
                            @endif
                            @if($currentStep == 2)
                            <a wire:click="decreaseStep()" class="btn btn-secondary text-white" type="button">Previous</a>
                            <button id="submit-btn" type="submit" class="btn btn-success">Submit</button>
                            @endif
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
