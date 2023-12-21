<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\Kost;
use App\Models\Fasilitas;
use Illuminate\Http\Request;
use App\Models\KostFasilitas;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreKostRequest;
use App\Http\Requests\UpdateKostRequest;

class DashboardKostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $fasilitas = KostFasilitas::all();
        $kost = Kost::where('id_user', auth()->user()->id)->paginate(6);
        return view('dashboard.kost.index', [
            'kosts' => $kost,
            'kostFasilitas' => $fasilitas,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $fasilitas = Fasilitas::all();
        return view(
            'dashboard.kost.create',
            [
                'fasilitas' => $fasilitas,
            ]
        );
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreKostRequest $request)
    {
        if (count($request['check']) > 1) {
            $gender = 3;
        } else {
            $gender = $request['check'][0];
        }
        $kostBaru = Kost::create([
            'nama' => $request['nama'],
            'slug' => str_replace(' ', '-', strtolower($request['nama'])),
            'kota' => $request['kota'],
            'kecamatan' => $request['kecamatan'],
            'alamat' => $request['alamat'],
            'deskripsi' => $request['deskripsi'],
            'harga_per_bulan' => $request['harga_perbulan'],
            'kamar_tersedia' => $request['kamar_tersedia'],
            'id_gender' => $gender,
            'id_user' => auth()->user()->id,
        ]);

        foreach ($request['fasilitas'] as $fasilitas) {
            KostFasilitas::create([
                'id_kost' => $kostBaru->id,
                'id_fasilitas' => $fasilitas,
            ]);
        }

        return to_route('kost.index')->with('success', 'Kamar Kost berhasil ditambahkan');
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
        $fasilitas = Fasilitas::all();
        $kostFasilitas = KostFasilitas::all();
        return view('dashboard.kost.edit', compact('kost', 'kostFasilitas', 'fasilitas'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateKostRequest $request, Kost $kost)
    {
        if (count($request['check']) > 1) {
            $gender = 3;
        } else {
            $gender = $request['check'][0];
        }
        $kost->update([
            'nama' => $request['nama'],
            'kota' => $request['kota'],
            'kecamatan' => $request['kecamatan'],
            'alamat' => $request['alamat'],
            'deskripsi' => $request['deskripsi'],
            'harga_per_bulan' => $request['harga_perbulan'],
            'kamar_tersedia' => $request['kamar_tersedia'],
            'id_gender' => $gender,
        ]);

        KostFasilitas::where('id_kost', $kost->id)->delete();

        foreach ($request['fasilitas'] as $fasilitas) {
            KostFasilitas::create([
                'id_kost' => $kost->id,
                'id_fasilitas' => $fasilitas,
            ]);
        }

        return to_route('kost.index')->with('success', 'Kamar Kost berhasil dirubah');
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
