<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {

    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

        public function index(Request $request)
    {
        $go_to_field = 'menu1';
        if(!empty($request->go_to_field)){
            $go_to_field = $request->go_to_field;
        }
        return view('welcome')
            ->with('go_to_field',$go_to_field);
    }


}
