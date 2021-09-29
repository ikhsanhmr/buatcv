<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Formcv extends Model
{
    protected $table = 'formcv';
    protected $primaryKey = 'id';
    protected $fillable = [
        'id',
        'image',
        'namaLengkap',
        'tempatLahir', 
        'tanggalLahir', 
        'agama', 
        'nomortelp', 
        'email', 
        'alamat', 
        'kota', 
        'negara', 
        'jenisKelamin', 
        'statusPernikahan',
        'deskripsiDiri',
        'gelar',
        'kotaGelar',
        'namaInstansi',
        'mulaiInstansiBulan',
        'mulaiInstansiTahun',
        'selesaiInstansiBulan',
        'selesaiInstansiTahun',
        'NamaOrganisasi',
        'mulaiOrganisasiBulan',
        'mulaiOrganisasiTahun',
        'selesaiOrganisasiBulan',
        'selesaiOrganisasiTahun',
        'deskripsiOrganisasi'
    ];
}
