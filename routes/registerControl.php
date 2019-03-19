<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;




class registersControl extends Controller
{

public function showRegister()
{
   return view('custom.registers');
}



public function registers(Request $request)
{
   return $request->all();
}




}
