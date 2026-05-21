<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pesanan;

class PesananController extends Controller
{
    public function index()
    {
        $pesanan = Pesanan::latest()->first();

        return view('pesanananda', compact('pesanan'));
    }

    public function proses(Request $request)
    {
        $request->validate([
            'makanan' => 'required',
            'minuman' => 'required',
        ]);

        $pesananBaru = Pesanan::create([
            'makanan' => $request->input('makanan'),
            'minuman' => $request->input('minuman'),
        ]);

        return redirect('/pesanananda')
            ->with('success', true)
            ->with('success_id', $pesananBaru->id);
    }
}