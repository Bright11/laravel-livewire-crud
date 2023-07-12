<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class pagecontroller extends Controller
{
    //

    function home() {

        return view("welcome");
    }
    function form() {

        return view('submitform');
    }
}
