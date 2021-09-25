<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Formcv extends Model
{
    protected $table = 'formcv';
    protected $primaryKey = 'id';
    protected $fillable = [
        'id','namaLengkap','tempatLahir', 'tanggalLahir', 'agama', 'nomortelp', 'email', 'alamat', 'kota', 'negara', 'jenisKelamin', 'statusPernikahan'];
}
