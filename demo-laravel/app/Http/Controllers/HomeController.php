<?php

namespace App\Http\Controllers;

use App\Models\Orders;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        return view('dashboard');
    }

    public function client() {
        return view('klijent.info');
    }

    public function clientOrder() {
        $orders = Orders::where('aktivna', '=', 1)->get();
        return view('klijent.aktivne', ['orders' => $orders]);
    }

    public function clientHistory() {
        $orders = Orders::where('aktivna', '=', 0)->get();
        return view('klijent.istorija', ['orders' => $orders]);
    }

    public function clientPlaceOrder() {
        return view('klijent.naruci');
    }

    public function random() {
        return view('klijent.narudzbineaktivne');
    }


}
