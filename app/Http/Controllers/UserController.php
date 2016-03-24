<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    private $path = "users";

    public function index($name = ""){

        $array = [
            'name' => $name,
            'version' => '0.01'
        ];

        return view($this->path.'.index', $array);
    }

   public function showProfile(){
        return "Hola Mundo";
   }
}
