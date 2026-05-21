<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
class PesananController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'makanan' => 'required|string',
            'minuman' => 'required|string',
        ]);

        $order = Order::create([
            'makanan' => $request->input('makanan'),
            'minuman' => $request->input('minuman'),
        ]);

        return redirect('/pesanananda')->with('success_id', $order->id);
    }

    public function show(pesanan $pesanan)
    {
        return view('pesanan.show', compact('pesanan'));
    }
}