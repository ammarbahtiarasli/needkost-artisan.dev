<?php

namespace App\Http\Controllers;

use App\Models\Kota;
use App\Models\Provinsi;
use App\Models\Kost;
use App\Models\KostFasilitas;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $kost = Kost::all();
        return view('home', [
            'kosts' => $kost,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Kota $kota)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Kota $kota)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Kota $kota)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Kota $kota)
    {
        //
    }

    public function about()
    {
        return view('about');
    }

    public function help()
    {
        return view('help');
    }
}
