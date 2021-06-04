<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Notification;
use App\Notifications\ContactUs;


class ContactController extends Controller
{
    public function sendMail( Request $request){
        $to = ["gasantaella@gmail.com" , "luigijhernandez7575@gmail.com"];
        for($i = 0 ; $i < count($to) ; $i++)
        {
            Notification::route('mail', $to[$i])->notify(new ContactUs($request));
        }
        return back()->with("swal" , true);
    }
}
