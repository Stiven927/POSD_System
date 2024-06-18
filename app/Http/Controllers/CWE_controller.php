<?php

namespace App\Http\Controllers;

use App\Models\cwe;
use Illuminate\Http\Request;

class CWE_controller extends Controller
{
    public function list()
    {
        $items = cwe::get(); // Filtra gli ordini dell'utente loggato
        return view('list_cwe', compact('items')); 
    }
}
