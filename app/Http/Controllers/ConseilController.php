<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ConseilController extends Controller
{
    public function Conseil(){
        return view('conseil');
    }
}
