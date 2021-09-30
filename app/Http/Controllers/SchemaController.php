<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SchemaController extends Controller
{
    public function Schema(){
        return view('schema');
    }
}
