<?php

namespace App\Http\Controllers;

use App\Models\Orders;
use http\Env\Request;

class OrderController extends Controller
{

    public function order(\Illuminate\Http\Request $request) {
        $order = new Orders();
        $order->adresa = $request->input('adresa');
        $order->status = "Obrađeno";
        $order->datum_narucivanja = date("Y-m-d H:i:s");
        $order->kolicina = $request->input('kolicina');
        $order->aktivna = 1;
        $order->save();
        return true;
    }

    public function cancel(\Illuminate\Http\Request $request) {
        $order = Orders::find($request->input('id'));
        $order->aktivna = 0;
        $order->status = "Otkazano";
        $order->datum_isporuke = date("Y-m-d H:i:s");
        $order->save();
        return true;
    }
}
