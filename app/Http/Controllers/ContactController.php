<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\SendMsg;

class ContactController extends Controller
{
    
    public function contacts() {

        $titolo = "Chi sono";

        $bio = "Sono un programmatore HTML, CSS, JavaScript e PHP Junior e studio presso Aulab.";

        return view("chisono", ['titolo' => $titolo, 'bio' => $bio]);


    }

    public function sendMail(Request $request) {

        $request->input('email');


        
        return redirect()->route("chisono")->with("sent", true);

    }

}
