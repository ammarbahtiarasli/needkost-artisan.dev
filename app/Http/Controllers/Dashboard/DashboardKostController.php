<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\Kost;
use Illuminate\Http\Request;
use App\Models\KostFasilitas;
use App\Http\Controllers\Controller;

class DashboardKostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $kost = Kost::where('id_user', auth()->user()->id)->paginate(6);
        return view('dashboard.kost.index', [
            'kosts' => $kost,
            'kostFasilitas' => KostFasilitas::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.kost.create');
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
    public function show(Kost $kost)
    {
        return view('dashboard.kost.show', compact('kost'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Kost $kost)
    {
        return view('dashboard.kost.edit', compact('kost'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Kost $kost)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Kost $kost)
    {
        $kost = Kost::find($kost->id);
        $kost->delete();
        return redirect()->route('kost.index')->with('success', 'Kamar Kost berhasil dihapus');
    }
}
