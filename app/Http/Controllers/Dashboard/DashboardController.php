<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\Kost;
use App\Models\Kota;
use App\Models\User;
use App\Models\Riwayat;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index(Request $request)
    {
        $kost = count(Kost::all());
        $kota = count(Kota::all());
        $user = count(User::all());
        $kosts = Kost::all();
        $users = User::whereNot('id', auth()->user()->id)->get();
        $riwayat = Riwayat::all();
        $total = Riwayat::sum('harga_total');

        if (Auth::user()->role->nama == 'Pemilik') {
            $kost = count(Kost::where('user_id', auth()->user()->id)->get());
            $riwayat = Riwayat::where('user_id', auth()->user()->id)->get();
            $total = Riwayat::where('user_id', auth()->user()->id)->sum('harga_total');
        }

        return view('dashboard.dashboard', [
            'kosts' => $kosts,
            'users' => $users,
            'kotas' => count(Kota::all()),
            'riwayat' => $riwayat,
            'total' => $total,
        ]);
    }
}
