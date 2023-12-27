<?php

namespace App\Http\Controllers;

use App\Models\Kost;
use App\Models\Riwayat;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreKostRequest;
use App\Http\Requests\UpdateKostRequest;

class KostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('kost.index');
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
        Riwayat::query()->where('status', 'pending')->delete();

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

    public function payment(Request $request)
    {
        $id = $request->id;
        $id_riwayat = rand();
        $tanggal_mulai = str_replace('-', ' ', date('d-F-Y', strtotime($request->tanggalSewa)));
        $waktu_sewa = $request->waktuSewa;
        $kost = Kost::find($id);
        $penyewa = auth()->user();
        $total = $kost->harga_per_bulan * $waktu_sewa;
        $sewa = array(
            'nama_user' => auth()->user()->nama,
            'no_hp' => auth()->user()->no_hp,
            'email' => auth()->user()->email,
            'tanggal_mulai' => $tanggal_mulai,
            'waktu_sewa' => $waktu_sewa,
            'user_id' => auth()->user()->id,
            'kost_id' => $kost->id,
            'durasi' => $waktu_sewa,
            'harga_total' => $total,
            'status' => 'pending',
            'nomor_invoice' => 'INV-' . $id_riwayat . '-' . date('dmy'),
        );

        Riwayat::create([
            'nomor_invoice' => $sewa['nomor_invoice'],
            'user_id' => $sewa['user_id'],
            'kost_id' => $sewa['kost_id'],
            'durasi' => $sewa['durasi'],
            'harga_total' => $sewa['harga_total'],
            'status' => $sewa['status'],
        ]);

        // dd($sewa);

        // Set your Merchant Server Key
        \Midtrans\Config::$serverKey = config('midtrans.server_key');
        // Set to Development/Sandbox Environment (default). Set to true for Production Environment (accept real transaction).
        \Midtrans\Config::$isProduction = false;
        // Set sanitization on (default)
        \Midtrans\Config::$isSanitized = true;
        // Set 3DS transaction for credit card to true
        \Midtrans\Config::$is3ds = true;

        $params = array(
            'transaction_details' => array(
                'order_id' => $id_riwayat,
                'gross_amount' => $total,
            ),
            'customer_details' => array(
                'name' => $penyewa->nama,
                'phone' => $penyewa->no_hp,
            ),
        );

        $snapToken = \Midtrans\Snap::getSnapToken($params);
        return view('kost.payment', compact('snapToken', 'sewa', 'kost'));
    }

    public function invoice($invoice)
    {
        $riwayat = Riwayat::where('nomor_invoice', $invoice)->first();
        $riwayat->update(['status' => 'success']);

        return view('kost.invoice', compact('riwayat'));
    }

    public function callback(Request $request)
    {
        $serverKey = config('midtrans.server_key');
        $hashed = hash('sha512', $request->order_id . $request->status_code . $request->gross_amount . $serverKey);
        if ($hashed == $request->signature_key) {
            $riwayat = Riwayat::find($request->order_id);
            $riwayat->update(['status' => 'success']);
        }
    }

    public function history()
    {
        return view('kost.riwayat');
    }
}
