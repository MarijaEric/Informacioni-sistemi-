<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CheckController extends Controller
{

    public function check(Request $request) {
        $email = $request->get("email");
        if(str_starts_with($email, "admin")) {
            return redirect("home");
        }else if (str_starts_with($email, "klijent")){
            return redirect("klijent");
        }

    }

}
