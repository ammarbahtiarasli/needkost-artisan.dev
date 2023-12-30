<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\Kost;
use App\Models\Kota;
use App\Models\Photo;
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
        if (auth()->user()->role->nama === 'Admin') {
            $kost = Kost::paginate(6);
        } else {
            $kost = Kost::where('user_id', auth()->user()->id)->paginate(6);
        }

        if (request()->has('search')) {
            if (auth()->user()->role->nama === 'Admin') {
                $kost = Kost::where('nama', 'like', '%' . request('search') . '%')->paginate(6);
            } else {
                $kost = Kost::where('user_id', auth()->user()->id)
                    ->where('nama', 'like', '%' . request('search') . '%')
                    ->paginate(6);
            }
        }

        // dd($kost);

        return view('dashboard.kost.index', [
            'kosts' => $kost,
        ]);
    }

    public function search(Request $request)
    {
        $kost = Kost::where('user_id', auth()->user()->id)
            ->where('nama', 'like', '%' . $request->search . '%')
            ->paginate(6);
        return view('dashboard.kost.index', [
            'kosts' => $kost,
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
        return view('dashboard.kost.create', [
            'fasilitas' => $fasilitas,
            'provinsi' => $provinsi,
            'kota' => $kota,
        ]);
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

        $id = Kost::max('id') + 1;

        // Filter Berdasarkan Harga
        $harga = substr($request->get('harga_perbulan'), 4, 20);

        $harga = (int) str_replace('.', '', $harga);

        $kostBaru = Kost::create([
            'id' => $id,
            'nama' => $request['nama'],
            'slug' => str_replace(' ', '-', strtolower($request['nama'])),
            'kota_id' => $request['kota'],
            'provinsi_id' => $request['provinsi'],
            'alamat' => $request['alamat'],
            'deskripsi' => $request['deskripsi'],
            'harga_per_bulan' => $harga,
            'kamar_tersedia' => $request['kamar_tersedia'],
            'gender_id' => $gender,
            'user_id' => auth()->user()->id,
        ]);

        foreach ($request['fasilitas'] as $fasilitas) {
            KostFasilitas::create([
                'kost_id' => $kostBaru->id,
                'fasilitas_id' => $fasilitas,
            ]);
        }

        if ($request->hasFile('photo')) {
            Photo::create([
                'kost_id' => $kostBaru->id,
                'photo' => $request->file('photo')->store('photo/kost', 'public'),
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

        // Filter Berdasarkan Harga
        $harga = substr($request->get('harga_perbulan'), 4, 20);

        $harga = (int) str_replace('.', '', $harga);

        $kost->update([
            'nama' => $request['nama'],
            'kota_id' => $request['kota'],
            'provinsi_id' => $request['provinsi'],
            'alamat' => $request['alamat'],
            'deskripsi' => $request['deskripsi'],
            'harga_per_bulan' => $harga,
            'kamar_tersedia' => $request['kamar_tersedia'],
            'gender_id' => $gender,
        ]);

        KostFasilitas::where('kost_id', $kost->id)->delete();

        foreach ($request['fasilitas'] as $fasilitas) {
            KostFasilitas::create([
                'kost_id' => $kost->id,
                'fasilitas_id' => $fasilitas,
            ]);
        }

        if ($request->hasFile('photo')) {
            if ($kost->photo()->exists()) {
                Photo::where('kost_id', $kost->id)->delete();
                unlink(storage_path('app/public/' . $kost->photo->photo));
            }
            Photo::create([
                'kost_id' => $kost->id,
                'photo' => $request->file('photo')->store('photo/kost', 'public'),
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
        $kost->kostFasilitas()->delete();
        $kost->photo()->delete();
        $kost->delete();
        return redirect()
            ->route('kost.index')
            ->with('success', 'Kamar Kost berhasil dihapus');
    }
}
