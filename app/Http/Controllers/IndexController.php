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

    public function preview() {

        $dataDiri = Formcv::latest()->first();
        return view('frontend.pages.previewcv2', compact('dataDiri'));

    }
}
