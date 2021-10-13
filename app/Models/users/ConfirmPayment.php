<?php

namespace App\Models\users;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ConfirmPayment extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'no_order',
        'tanggal_transfer',
        'jumlah_transfer',
        'nama_pemilik_rekening',
        'nama_bank',
        'bukti_pembayaran',
    ];

    public function user() {
        return $this->hasOne('App/Models/User', 'id');
    }
}
