<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Formcv;

class IndexController extends Controller
{
    public function index()
    {
        return view('admin.content');
    }

    public function create()
    {
        return view('frontend.pages.formcv');
    }

    public function store(Request $request)
    {

        $validated = $request->validate([
            'namaLengkap' => 'required',
            'tempatLahir' => 'required',
            'tanggalLahir' => 'required',
            'agama' => 'required',
            'nomortelp' => 'required',
            'email' => 'required',
            'alamat' => 'required',
            'kota' => 'required',
            'negara' => 'required',
            'jenisKelamin' => 'required',
            'statusPernikahan' => 'required'
        ],
        [
            'namaLengkap.required' => 'Nama Lengkap masih kosong',
            'tempatLahir.required' => 'Tempat Lahir masih kosong',
            'tanggalLahir.required' => 'Tanggal Lahir masih kosong',
            'agama.required' => 'Agama masih kosong',
            'nomortelp.required' => 'Nomor Telp masih kosong',
            'email.required' => 'Email masih kosong',
            'alamat.required' => 'Alamat masih kosong',
            'kota.required' => 'Kota masih kosong',
            'negara.required' => 'Negara masih kosong',
            'jenisKelamin.required' => 'Jenis Kelamin masih kosong',
            'statusPernikahan.required' => 'Status Pernikahan masih kosong'
        ]);

        Formcv::create([
            'id' => $request->id,
            'namaLengkap' => $request->namaLengkap,
            'tempatLahir' => $request -> tempatLahir,
            'tanggalLahir' => $request -> tanggalLahir,
            'agama' => $request -> agama,
            'nomortelp' => $request -> nomortelp,
            'email' => $request -> email,
            'alamat' => $request -> alamat,
            'kota' => $request -> kota,
            'negara' => $request -> negara,
            'jenisKelamin' => $request -> jenisKelamin,
            'statusPernikahan' => $request -> statusPernikahan
        ]);


        return redirect()->back();
    }
}
