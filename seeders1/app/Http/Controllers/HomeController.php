<?php

namespace App\Http\Controllers;

use App\Models\Personne;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $dataPersonnes = Personne::all();
        return view("welcome", compact("dataPersonnes"));
    }

    public function delete(Personne $id){
        $id->delete();
        return redirect() -> back();
    }

    public function edit(Personne $id){
        $newEntry = $id;
        return view("backoffice", compact("newEntry"));
    }

    public function update (Personne $id, Request $request) {
        $newEntry = $id;
        $newEntry->name = $request->name;
        $newEntry->age = $request->age;
        $newEntry->email = $request->email;
        $newEntry->gsm = $request->gsm;
        $newEntry->save();
        return redirect()->route('home', $newEntry->id);
    }
}
