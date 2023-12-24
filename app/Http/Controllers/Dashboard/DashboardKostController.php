<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\Kost;
use App\Models\Kota;
use App\Models\Provinsi;
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
        $kost = Kost::where('user_id', auth()->user()->id)
            ->paginate(6);

        if (request()->has('search')) {
            $kost = Kost::where('user_id', auth()->user()->id)
                ->where('nama', 'like', '%' . request('search') . '%')
                ->paginate(6);
        }

        // dd($kost);

        return view('dashboard.kost.index', [
            'kosts' => $kost,
            // 'kostFasilitas' => $fasilitas,
        ]);
    }

    public function search(Request $request)
    {
        $fasilitas = KostFasilitas::all();
        $kost = Kost::where('id_user', auth()->user()->id)
            ->where('nama', 'like', '%' . $request->search . '%')
            ->paginate(6);
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
        $provinsi = Provinsi::all();
        $kota = Kota::all();
        return view(
            'dashboard.kost.create',
            [
                'fasilitas' => $fasilitas,
                'provinsi' => $provinsi,
                'kota' => $kota,
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
            'id_kota' => $request['kota'],
            'id_provinsi' => $request['provinsi'],
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
        $kota = Kota::all();
        $provinsi = Provinsi::all();
        return view('dashboard.kost.edit', compact('kost', 'kostFasilitas', 'fasilitas', 'kota', 'provinsi'));
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
            'id_kota' => $request['kota'],
            'id_provinsi' => $request['provinsi'],
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
