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

        $dataDiri = Formcv::find(3);
        return view('frontend.pages.previewcv', compact('dataDiri'));

    }
}
