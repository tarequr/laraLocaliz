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
        // dd(Session::get("locale"));
        return redirect()->back();
    }
}
