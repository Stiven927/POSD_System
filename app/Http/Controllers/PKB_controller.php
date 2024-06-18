<?php

namespace App\Http\Controllers;

use App\Models\pkb;
use Illuminate\Http\Request;

class PKB_controller extends Controller
{
    public function list()
    {
        $items = pkb::get(); // Filtra gli ordini dell'utente loggato
        return view('list_pkb', compact('items')); 
    }
    public function listAdmin()
    {
        $items = pkb::get(); // Filtra gli ordini dell'utente loggato
        return view('listad_pkb', compact('items')); 
    }
    public function add(Request $request)
    {

        {
            $pkb = new pkb();
     
            $pkb->Pattern = $request->pattern;
            $pkb->Strategia = $request->strategia;
            $pkb->CWE = $request->CWE;
            $pkb->save();
    
            return redirect()->route('listPKB')->with("success", "PKB Aggiunta");
        }
    }
    public function edit($id)
    {// Recupera l'ID dell'utente autenticato
        $data = pkb::select('id','Pattern','Strategia','CWE')->where('id', $id)->get();
        return view('editpkb', compact('data','id')); 
    }
    public function editPost(Request $request,$id)
    {
        $pkb = pkb::find($id);
        if (!$pkb) {
            return redirect()->route('listpkb')->with('error', 'PKB non trovata.');
        }
        $pkb->Pattern = $request->pattern;
            $pkb->Strategia = $request->strategia;
            $pkb->CWE = $request->CWE;
        
     
        $pkb->save();

        return redirect()->route('listPKB')->with("success", "Utente Aggiornato!");
    }
    public function deletePost($id)
    {
        // Trova il record PKB usando l'ID
        $pkb = pkb::find($id);
        
        // Controlla se il record esiste
        if (!$pkb) {
            return redirect()->route('listpkb')->with('error', 'PKB non trovata.');
        }
        
        $pkb->delete();
    
        return redirect()->route('listPKB')->with('success', 'PKB eliminata con successo!');
    }
    
}
