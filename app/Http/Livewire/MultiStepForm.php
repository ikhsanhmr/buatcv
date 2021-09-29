<?php

namespace App\Http\Livewire;

use App\Models\Formcv;
use Livewire\Component;
use Livewire\WithFileUploads;
use Intervention\Image\Facades\Image;

class MultiStepForm extends Component
{
    use WithFileUploads;

    public $image;
    public $namaLengkap;
    public $tempatLahir;
    public $tanggalLahir;
    public $agama;
    public $nomortelp;
    public $email;
    public $alamat;
    public $kota;
    public $negara;
    public $jenisKelamin;
    public $statusPernikahan;
    public $deskripsiDiri;
    public $gelar;
    public $kotaGelar;
    public $namaInstansi;
    public $mulaiInstansiBulan;
    public $mulaiInstansiTahun;
    public $selesaiInstansiBulan;
    public $selesaiInstansiTahun;
    public $namaOrganisasi;
    public $mulaiOrganisasiBulan;
    public $mulaiOrganisasiTahun;
    public $selesaiOrganisasiBulan;
    public $selesaiOrganisasiTahun;
    public $deskripsiOrganisasi;

    public $totalSteps = 2;
    public $currentStep = 1;

    public function mount() {
        $this->currentStep = 1;
    }

    public function render()
    {
        return view('livewire.multi-step-form');
    }

    public function increaseStep() {
        $this->resetErrorBag();
        $this->validateData();
        $this->currentStep++;
        if($this->currentStep > $this->totalSteps) {
            $this->currentStep = $this->totalSteps;
        }
    }

    public function decreaseStep() {
        $this->resetErrorBag();
        $this->validateData();
        $this->currentStep--;
        if($this->currentStep < 1) {
            $this->currentStep = 1;
        }
    }

    public function validateData() {
        if($this->currentStep == 1) {
            $this->validate([
                'image' => 'required|mimes:png,jpg,jpeg',
                'namaLengkap' => 'required|string',
                'tempatLahir' => 'required|string',
                'tanggalLahir' => 'required',
                'agama' => 'required',
                'nomortelp' => 'required',
                'email' => 'required',
                'alamat' => 'required',
                'kota' => 'required',
                'negara' => 'required'

            ]);
        }else if($this->currentStep == 2) {
            $this->validate([
                'deskripsiDiri' => 'required',
                'gelar' => 'required',
                'kotaGelar' => 'required',
                'namaInstansi' => 'required',
                'mulaiInstansiBulan' => 'required',
                'mulaiInstansiTahun' => 'required',
                'selesaiInstansiBulan' => 'required',
                'selesaiInstansiTahun' => 'required',
                'namaOrganisasi' => 'required',
                'mulaiOrganisasiBulan' => 'required',
                'mulaiOrganisasiTahun' => 'required',
                'selesaiOrganisasiBulan' => 'required',
                'selesaiOrganisasiTahun' => 'required',
                'deskripsiOrganisasi' => 'required'
            ]);
        }
    }

    public function addCV() {

        
        $image_name = hexdec(uniqid()).'.'.$this->image->getClientOriginalName();
        $image = Image::make($this->image);
        $image->save('images/profile/'. $image_name);

        $image_loc = 'images/profile/'. $image_name;

        $values = array(
            "image" => $image_loc,
            "namaLengkap" => $this->namaLengkap,
            "tempatLahir" => $this->tempatLahir,
            "tanggalLahir" => $this->tanggalLahir,
            "agama" => $this->agama,
            "jenisKelamin" => $this->jenisKelamin,
            "nomortelp" => $this->nomortelp,
            "email" => $this->email,
            "alamat" => $this->alamat,
            "kota" => $this->kota,
            "negara" => $this->negara,
            "deskripsiDiri" => $this->deskripsiDiri,
            "gelar" => $this->gelar,
            "kotaGelar" => $this->kotaGelar,
            "namaInstansi" => $this->namaInstansi,
            "mulaiInstansiBulan" => $this->mulaiInstansiBulan,
            "mulaiInstansiTahun" => $this->mulaiInstansiTahun,
            "selesaiInstansiBulan" => $this->selesaiInstansiBulan,
            "selesaiInstansiTahun" => $this->selesaiInstansiTahun,
            "namaOrganisasi" => $this->namaOrganisasi,
            "statusPernikahan" => $this->statusPernikahan,
            "mulaiOrganisasiBulan" => $this->mulaiOrganisasiBulan,
            "mulaiOrganisasiTahun" => $this->mulaiOrganisasiTahun,
            "selesaiOrganisasiBulan" => $this->selesaiOrganisasiBulan,
            "selesaiOrganisasiTahun" => $this->selesaiOrganisasiTahun,
            "deskripsiOrganisasi" => $this->deskripsiOrganisasi
        );

        Formcv::insert($values);
        return redirect()->route('preview-cv');
    }
}
