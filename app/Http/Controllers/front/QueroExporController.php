<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class QueroExporController extends Controller
{
    public function index()
    {
        return view('front.quero-expor');
    }

    public function expositores()
    {
        return view('front.expositores');
    }
}
