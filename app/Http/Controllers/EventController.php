<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EventController extends Controller
{
    //
    public function music(){
        return view('event.music');
    }

    public function stage(){
        return view('event.stage');
    }

    public function cinema(){
        return view('event.cinema');
    }

    public function shows(){
        return view('event.show');
    }

    public function lecture(){
        return view('event.lecture');
    }

    public function workshop(){
        return view('event.workshop');
    }
}
