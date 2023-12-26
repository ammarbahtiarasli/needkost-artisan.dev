<?php

namespace App\Http\Controllers;

use App\Models\Provinsi;
use App\Models\Kota;
use App\Models\Kost;
use App\Models\KostFasilitas;
use Illuminate\Http\Request;

class LokasiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $kosts = Kost::all();
        return view('lokasi.index', ['kosts' => $kosts]);
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
