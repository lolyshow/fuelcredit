<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{

    function index(){
        return response()->json([
            "status"=>200,
            "message"=>"Holla!!!",
        ]);
    }


    function home(){
        
    }
}
