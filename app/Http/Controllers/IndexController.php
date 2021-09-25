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
        Formcv::create([
            'id' => $request -> id,
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


        return redirect('create-cv');
    }
}
