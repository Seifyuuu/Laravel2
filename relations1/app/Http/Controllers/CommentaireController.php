<?php

namespace App\Http\Controllers;

use App\Models\Commentaire;
use App\Models\Video;
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
        $video = Video::all();
        return view("comment.create", compact("video"))->with("message", "created");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            "nom"=>["required"],
            "prenom"=>["required"],
            "date"=>["required"],
            "contenu"=>["required"],
            "video_id"=>["required"]
        ]);

        $commentaire = new Commentaire();
        $commentaire->nom = $request->nom;
        $commentaire->prenom = $request->prenom;
        $commentaire->date = $request->date;
        $commentaire->contenu = $request->contenu;
        $commentaire->video_id = $request->video_id;
        $commentaire->save();
        return redirect()->route('commentaires.index')->with('message', 'Created');
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
        $request->validate([
            "url"=>["required"],
            "img"=>["required"],
            "duration"=>["required"],
            "titre"=>["required"],
            "description"=>["required"]
        ]);

        $commentaire->nom = $request->nom;
        $commentaire->prenom = $request->prenom;
        $commentaire->date = $request->date;
        $commentaire->contenu = $request->contenu;
        $commentaire->video_id = $request->video_id;
        $commentaire->save();
        return redirect()->route('commentaires.index')->with('message', 'Updated');
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
