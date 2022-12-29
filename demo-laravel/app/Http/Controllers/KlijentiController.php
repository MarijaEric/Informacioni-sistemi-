<?php

namespace App\Http\Controllers;

use App\Models\Clients;
use Illuminate\Http\Request;
use \App\Http\Requests\ClientRequest;

class KlijentiController extends Controller
{
    public function dodaj()
    {
        return view('klijenti.dodaj');
    }

    public function napraviNovog(ClientRequest $request)
    {
        $klijent = new \App\Models\Clients();
        $klijent->company_name = $request->company_name;
        $klijent->company_address = $request->company_address;
        $klijent->company_city = $request->grad;
        $klijent->company_zip = $request->company_post_code;
        $klijent->company_mb = $request->company_mb;
        $klijent->company_pib = $request->company_pib;
        $klijent->num_of_active_warehouses = $request->broj_aktivnih_magacina;
        $klijent->save();

        return redirect()->route('home');
    }

    public function pocetna()
    {
        $klijenti = \App\Models\Clients::all();
        if($klijenti->count() > 0) {
            return view('klijenti.pocetna', ['clients' => $klijenti]);
        }else {
            return view('klijenti.pocetna',['clients' =>  null]);
        }
    }


    public function cancel(\Illuminate\Http\Request $request)
    {
        $client = Clients::find($request->input('id'));
        //delete client
        $client->delete();
        return true;
    }
}
