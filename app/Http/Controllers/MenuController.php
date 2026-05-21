<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
class MenuController extends Controller
{
    public function storePesanan(Request $request)
{
    $pesanan = Pesanan::create([
        'makanan' => $request->makanan,
        'minuman' => $request->minuman,
    ]);

    return redirect('/pesanan/' . $pesanan->id)->with('success_id', true);
}
}