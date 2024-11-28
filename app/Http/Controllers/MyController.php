<?php

namespace App\Http\Controllers;

use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;

class MyController extends Controller
{
    public function index()
    {
        return 'Hola mundo';
    }

    public function juanito()
    {
        return view('juanito');
    }

    public function conControlador()
    {
        $nombre = 'Yhass';
        $fecha = Carbon::now()->subDays(6)->__toString();
        return 'Ruta con controlador, es mejor ' . $nombre . ' ' . $fecha;
    }

    public function listarUsuarios(){
        return User::all();
    }

    public function juanitoPost(Request $request){
        //dd($request->get('email'));
        $time=Carbon::now()->toTimeString();
        $user = new User();
        $user->name = 'Juanito';
        $user->email = $request->get('email');
        $user->password = 'passweord';
        $user->save();
        return $user;
    }
}
