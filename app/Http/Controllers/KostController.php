<?php

namespace App\Http\Controllers;

use App\Models\Kost;
use App\Models\Photo;
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
        $kosts = Kost::latest()->paginate(12);
        return view('kost.index', compact('kosts'));
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

    public function search(Request $request)
    {
        if ($request->search == null) {
            $kosts = Kost::paginate(6);
            $photo = $kosts->first()->photo()->get()->first()->photo;
        } else {
            $kosts = Kost::where('nama', 'like', '%' . $request->search . '%')->paginate(6);
            $photo = asset('storage/' . $kosts->first()->photo()->get()->first()->photo);
            if ($photo == null) {
                $photo = 'https://images.pexels.com/photos/439227/pexels-photo-439227.jpeg';
            }
        }
        return view('kost.search', compact('kosts', 'photo'));
    }

    /**
     * Display the specified resource.
     */
    public function detail(Kost $kost)
    {
        Riwayat::query()->where('status', 'pending')->delete();

        $kost = Kost::find($kost->id);
        $other = Kost::where('id', '!=', $kost->id)->inRandomOrder()->paginate(3);
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
        $kost = Kost::find($id);

        if ($kost->kamar_tersedia === 0) {
            return redirect()->back()->with('error', 'Kamar sudah penuh');
        }

        $id_riwayat = rand();
        $tanggal_mulai = str_replace('-', ' ', date('d-F-Y', strtotime($request->tanggalSewa)));
        $waktu_sewa = $request->waktuSewa;
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

        Riwayat::query()->where('status', 'pending')->delete();

        Riwayat::create([
            'nomor_invoice' => $sewa['nomor_invoice'],
            'user_id' => $sewa['user_id'],
            'kost_id' => $sewa['kost_id'],
            'tanggal_mulai' => $request->tanggalSewa,
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
                'first_name' => $penyewa->nama,
                'email' => $penyewa->email,
                'phone' => $penyewa->no_hp,
            ),
            'item_details' => array(
                array(
                    'id' => $kost->id,
                    'price' => $kost->harga_per_bulan,
                    'quantity' => $waktu_sewa,
                    'name' => $kost->nama,
                    'merchant_name' => 'NeedKost',
                )
            )
        );

        $snapToken = \Midtrans\Snap::getSnapToken($params);
        return view('kost.payment', compact('snapToken', 'sewa', 'kost'));
    }

    public function invoice($invoice)
    {
        $riwayat = Riwayat::where('nomor_invoice', $invoice)->first();
        $kamar_tersedia = $riwayat->kost->kamar_tersedia - 1;
        $riwayat->kost->update(['kamar_tersedia' => $kamar_tersedia]);
        $riwayat->update(['status' => 'success']);

        return view('kost.invoice', compact('riwayat'));
    }

    public function print($invoice)
    {
        $riwayat = Riwayat::where('nomor_invoice', $invoice)->first();

        return view('kost.pdf', compact('riwayat'));
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
        Riwayat::query()->where('status', 'pending')->delete();
        $riwayat = Riwayat::where('user_id', auth()->user()->id)->get();
        return view('kost.riwayat', compact('riwayat'));
    }
}
