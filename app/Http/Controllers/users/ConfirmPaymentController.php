<?php

namespace App\Http\Controllers\users;

use App\Http\Controllers\Controller;
use App\Models\users\ConfirmPayment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class ConfirmPaymentController extends Controller
{
    
    public function index() {
        return view('frontend.users.pages.konfirmasi_pembayaran');
    }

    public function store(Request $request) {
        
        $confirmPayment = ConfirmPayment::latest();

        $request->validate([
            'no_order' => 'required',
            'tanggal_transfer' => 'required|date',
            'jumlah_transfer' => 'required|numeric',
            'nama_pemilik_rekening' => 'required',
            'nama_bank' => 'required',
            'bukti_pembayaran' => 'required|mimes:jpeg,jpg'
        ]);

        $params = $request->except('_token');
        if($request->has('bukti_pembayaran')) {
            $image = $request->file('image');
            $name = Str::slug($params['bukti_pembayaran']).'_'.time();
            $fileName = $name.'.'.$image->getClientOriginalExtension();
        
            $folder = '/upload/images';
            $filePath = $image->storeAs($folder, $fileName, 'public');

            $params['bukti_pembayaran'] = $filePath;
            $params['user_id'] = Auth::user()->id;

            ConfirmPayment::create($params);

            return redirect()->route('user.dashboard');
        }
    }

    public function dashboard() {
        return view('frontend.users.pages.home');
    }

}
