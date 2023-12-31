<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\Kost;
use App\Models\Kota;
use App\Models\User;
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

        if (Auth::user()->role->nama == 'Pemilik') {
            $kost = count(Kost::where('user_id', auth()->user()->id)->get());
        }

        return view('dashboard.dashboard', [
            'kosts' => $kosts,
            'users' => $users,
            'kotas' => count(Kota::all()),
        ]);
    }
}
