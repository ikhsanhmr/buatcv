<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
}
