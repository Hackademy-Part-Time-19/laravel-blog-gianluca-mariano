<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Mail;
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

        $email = $request->input('email');
        $name = $request->input('name');
        $msg = $request->input('msg');


        if ($email != null && $name != null && $msg != null ) {
            
            Mail::to('indirizzo@example.com')->send(new SendMsg($name,$email,$msg));
        
            return redirect()->route("chisono")->with("sent", true);

        } else {

            return redirect()->route("chisono")->with("notSent", true);


        }

        
        
        

    }

}
