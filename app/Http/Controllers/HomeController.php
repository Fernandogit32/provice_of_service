<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Autonomo;
use App\Pedido;

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
     * @return \Illuminate\Http\Response
     */
    public function index()
    {  if(Auth::user()->tipo==1){      
        $autonomos = Autonomo::all();  
        return view('home')->with('autonomos',$autonomos);
    }else{
        return view('homeAutonomo');
    }      
       
    }
}
