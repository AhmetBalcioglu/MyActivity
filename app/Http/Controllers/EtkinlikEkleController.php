<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EtkinlikEkleController extends Controller
{
    public function index(){
        return view('etkinlikEkle');
    }
}
