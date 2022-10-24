<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function me(){
        return[
            "NIS" => 3103120139,
            "Name" => "Muhamad Yanuar Putra Pradana",
            "Phone" => "081327041504",
            "Class" => "XII RPL 4"
        ];
    }
}
