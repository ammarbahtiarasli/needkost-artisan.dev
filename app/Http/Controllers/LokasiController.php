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
        $provinsis = Provinsi::all();
        $kotas = Kota::all();

        if (request()->has('terapkan')) {

            $reqProv = str_replace('+', ' ', request('provinsi'));
            $provinsi = Provinsi::where('nama', $reqProv)->first();
            $reqKota = str_replace('+', ' ', request('kota'));
            $kota = Kota::where('nama', $reqKota)->first();

            if ($reqProv != null && $reqKota != null) {
                $kosts = Kost::where('provinsi_id', $provinsi->id)
                    ->where('kota_id', $kota->id)
                    ->get();
            } else if ($reqProv != null && $reqKota == null) {
                $kosts = Kost::where('provinsi_id', $provinsi->id)
                    ->get();
            } else if ($reqProv == null && $reqKota != null) {
                $kosts = Kost::where('kota_id', $kota->id)
                    ->get();
            }
        }

        return view('lokasi.index', compact('kosts', 'provinsis', 'kotas'));
    }

    public function getKota(Request $request)
    {
        $id_provinsi = $request->id_provinsi;
        $kotas = Kota::where('provinsis_id', $id_provinsi)->get();

        $options = '<option selected disabled>Pilih Kota/Kab</option>';

        foreach ($kotas as $kota) {
            $options .= "<option value='$kota->id'>$kota->nama</option>";
        }

        return response()->json(['options' => $options]);
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
