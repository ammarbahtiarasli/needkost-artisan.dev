<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\PaginatedResourceResponse;
use Illuminate\Support\Facades\Http;
use App\Models\Kost;
use App\Models\Kota;
use App\Models\Provinsi;

class DashboardLokasiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $provinsi = Provinsi::all();
        $kota = Kota::paginate(6);

        // dd($kota);
        return view('dashboard.lokasi.index', compact('provinsi', 'kota'));
    }
}
