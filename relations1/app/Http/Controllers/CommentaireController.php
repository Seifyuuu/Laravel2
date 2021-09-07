<?php

namespace App\Http\Controllers;

use App\Models\Commentaire;
use Illuminate\Http\Request;

class CommentaireController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $commentaires = Commentaire::all();
        return view("comment.comment", compact("commentaires"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $commentaire = Commentaire::all();
        return view("comment.create", compact("commentaire"));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $commentaire = new Commentaire();
        $commentaire->nom = $request->nom;
        $commentaire->prenom = $request->prenom;
        $commentaire->date = $request->date;
        $commentaire->contenu = $request->contenu;
        $commentaire->video_id = $request->video_id;
        $commentaire->save();
        return redirect()->route('commentaires.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Commentaire  $commentaire
     * @return \Illuminate\Http\Response
     */
    public function show(Commentaire $commentaire)
    {
        return view("comment.show", compact("commentaire"));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Commentaire  $commentaire
     * @return \Illuminate\Http\Response
     */
    public function edit(Commentaire $commentaire)
    {
        return view("comment.edit", compact("commentaire"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Commentaire  $commentaire
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Commentaire $commentaire)
    {
        $commentaire->nom = $request->nom;
        $commentaire->prenom = $request->prenom;
        $commentaire->date = $request->date;
        $commentaire->contenu = $request->contenu;
        $commentaire->video_id = $request->video_id;
        $commentaire->save();
        return redirect()->route('commentaires.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Commentaire  $commentaire
     * @return \Illuminate\Http\Response
     */
    public function destroy(Commentaire $commentaire)
    {
        $commentaire->delete();
        return redirect()->route("commentaires.index");
    }
}
