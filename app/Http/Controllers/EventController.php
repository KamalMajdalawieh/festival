<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EventController extends Controller
{
    //
    public function music(){
        return view('music');
    }

    public function stage(){
        return view('stage');
    }

    public function cinema(){
        return view('cinema');
    }

    public function shows(){
        return view('event.show');
    }

    public function lecture(){
        return view('event.lecture');
    }

    public function workshop(){
        return view('workshop');
    }
}
