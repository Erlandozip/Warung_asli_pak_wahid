<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
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

    public function show($id)
    {
        $order =Order::find($id);
        $successId = session('success_id');

        if ($successId) {
            $order = Order::find($successId);
        } else {
            $order = Order::latest()->first();
        }

        return view('pesanananda', compact('order'));
    }
}