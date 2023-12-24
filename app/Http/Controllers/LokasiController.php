<?php

namespace App\Http\Controllers;

use App\Models\Provinsi;
use App\Models\Kota;
use Illuminate\Http\Request;

class LokasiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('lokasi.index');
    }

    public function kotas()
    {
        return view('lokasi.kotas');
    }

    public function kota()
    {
        return view('lokasi.kota');
    }

    public function provinsis()
    {
        return view('lokasi.provinsis');
    }

    public function provinsi()
    {
        return view('lokasi.provinsi');
    }
}
