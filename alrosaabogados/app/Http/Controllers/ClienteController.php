<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Cliente;

class ClienteController extends Controller
{
    //
    public function contactanos(){
        return view('contactanos');
    }

    public function registro(Request $request){
        Cliente::create($request->all());
        return redirect()->route('contactanos');
    }
}
