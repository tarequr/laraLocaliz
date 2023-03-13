<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class LocalizationController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function langChange($locale)
    {
        Session::put("locale",$locale);
        return redirect()->back();
    }
}
