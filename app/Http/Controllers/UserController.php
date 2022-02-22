<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        $users2 = ['Pedro', 'Juan', 'Luis', 'Marco'];
        $users =[];
        $title = 'Listado de usuarios';
        return view('users',[
            'users'=>$users,
            'title'=>$title
        ]);
    }

    public function show($id){
        return "Mostrando el usuario: {$id}";
    }

    public function create(){
        return "Crear nuevo usuario";
    }
}
