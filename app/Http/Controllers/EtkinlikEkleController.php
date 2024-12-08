<?php

namespace App\Http\Controllers;

use App\Models\etkinlikler;
use Illuminate\Http\Request;

class EtkinlikEkleController extends Controller
{
    public function index()
    {
        return view('etkinlikEkle');
    }

    public function etkinlikEkle(Request $request)
    {
        $etkinliklerDB = new etkinlikler();

        $etkinliklerDB->etkinlikBaslik = $request->etkinlikBaslik;
        $etkinliklerDB->etkinlikAciklama = $request->etkinlikAciklama;
        $etkinliklerDB->save();

        return redirect('/');
    }
}
