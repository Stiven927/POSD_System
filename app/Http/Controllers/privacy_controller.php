<?php

namespace App\Http\Controllers;

use App\Models\privacy;
use Illuminate\Http\Request;

class privacy_controller extends Controller
{
    public function list()
    {
        $items = privacy::get(); // Filtra gli ordini dell'utente loggato
        return view('list_privacy', compact('items')); 
    }
}
