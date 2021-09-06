<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $article = Article::all();
        return view("article.article", compact("article"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("article.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        request()->validate([
            "name"=>["required"],
            "description"=>["required"],
            "author"=>["required"],
            "photo"=>["required"],
            "date"=>["required"]
        ]);


        $article = new Article();
        $article->name = $request->name;
        $article->date = $request->date;
        $article->author = $request->author;
        $article->description = $request->description;
        $article->photo = $request->photo;
        $article->save();
        $request->file("photo")->storePublicly("img", "public");
        return redirect()->route("article.index")->with('message', "added");

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function show(Article $article)
    {
        return view("article.show", compact("article"));
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function edit(Article $article)
    {
        return view("article.edit", compact("article"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Article $article)
    {
        request()->validate([
            "name"=>["required"],
            "description"=>["required"],
            "author"=>["required"],
            "photo"=>["required"],
            "date"=>["required"]
        ]);

        $article->name = $request->name;
        $article->date = $request->date;
        $article->author = $request->author;
        $article->description = $request->description;
        $article->photo = $request->photo;
        $article->save();
    
        return redirect()->route("article.index")->with('message', 'updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function destroy(Article $article)
    {
        $article->delete();
        return redirect()->route("article.index");
    }
}
