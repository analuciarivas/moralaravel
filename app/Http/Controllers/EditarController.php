<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;

class EditarController extends Controller
{
  public function edit($id)
  {
    $usuario = \App\User::find($id);

    return view('home',["user"=>$usuario]);

  }

  public function cambiar($id) {
    // {{ Auth::user()->name }} => $data['name'],
    // {{ Auth::user()->password }} => bcrypt($data['password']),


  }

}
