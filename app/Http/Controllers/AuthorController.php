<?php

namespace App\Http\Controllers;
use App\Models\Author;
use App\Models\Article;
use Illuminate\Http\Request;

class AuthorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     */
    // @return \Illuminate\Http\Response
    public function index(Author $author)
    {

        return view('admin.articleByAuthor',[
            'title' => "Article by: $author->name",
            'articles' => $author->articles
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     */
    // @return \Illuminate\Http\Response
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     */
    // @param  \Illuminate\Http\Request  $request
    // @return \Illuminate\Http\Response
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     */
    // @param  \App\Models\s  $s
    // @return \Illuminate\Http\Response
    public function show(Author $author, Article $article)
    {
        if(request('author')){
            $author = Author::firstWhere('name',request('author'));
        }

        return view('admin.showArticleAdmin',[

            'author' => $author,
            'articles' => Article::all()
        ]);
    }


    /**
     * Show the form for editing the specified resource.
     *
     */
    // @param  \App\Models\s  $s
    // @return \Illuminate\Http\Response
    public function edit(Author $author)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     */
    // @param  \Illuminate\Http\Request  $request
    // @param  \App\Models\s  $s
    // @return \Illuminate\Http\Response
    public function update(Request $request, Author $author)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     */
    // @param  \App\Models\s  $s
    // @return \Illuminate\Http\Response
    public function destroy(Author $author)
    {
        //
    }
}
