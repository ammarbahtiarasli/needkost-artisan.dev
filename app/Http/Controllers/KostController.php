<?php

namespace App\Http\Controllers;

use App\Models\Kost;
use App\Http\Requests\StoreKostRequest;
use App\Http\Requests\UpdateKostRequest;

class KostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
    public function store(StoreKostRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function detail(Kost $kost)
    {
        $kost = Kost::find($kost->id);
        $other = Kost::where('id', '!=', $kost->id)->get();
        return view('kost.detail-kost', compact('kost', 'other'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Kost $kost)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateKostRequest $request, Kost $kost)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Kost $kost)
    {
        //
    }

    public function payment()
    {
        return view('kost.payment');
    }

    public function history()
    {
        return view('kost.riwayat');
    }
}
