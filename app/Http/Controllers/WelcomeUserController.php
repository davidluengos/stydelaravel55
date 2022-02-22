<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeUserController extends Controller
{
    public function index($name, $nick = null){
        $name = ucfirst($name);

        if($nick){
            return "Hola, {$name}, tu apodo es {$nick}.";
        }else{
            return "Hola, {$name}, no tienes apodo.";
        }
    }
}
