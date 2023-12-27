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
        $provinsis = $this->getProvinsis();
        $kotas = $this->getKotas();
        return view('lokasi.index', compact('kosts', 'provinsis', 'kotas'));
    }

    private function getProvinsis()
    {
        return Provinsi::all();
    }

    private function getKotas()
    {
        return Kota::all();
    }

    public function kotas()
    {
        return view('lokasi.kotas');
    }

    public function kota($kota)
    {
        return view('lokasi.kota', compact('kota'));
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
