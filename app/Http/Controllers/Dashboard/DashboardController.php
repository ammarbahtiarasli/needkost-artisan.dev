<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\Kost;
use App\Models\Kota;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    public function index()
    {
        $kost = count(Kost::all());
        $kota = count(Kota::all());
        $user = count(User::all());
        return view(
            'dashboard.dashboard',
            [
                'kosts' => $kost,
                'kotas' => $kota,
                'users' => $user,
            ]
        );
    }
}
