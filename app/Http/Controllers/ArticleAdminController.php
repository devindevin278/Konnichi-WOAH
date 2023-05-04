<?php

namespace App\Http\Controllers;
use App\Models\Article;
use Cviebrock\EloquentSluggable\Services\SlugService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
class ArticleAdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     */
    // @return \Illuminate\Http\Response
    public function index()
    {
        $articles = Article::latest();
        return view('admin.articleAdmin',[
            'articles' => $articles->get()
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
        return view('admin.addArticle');
    }

    /**
     * Store a newly created resource in storage.
     *
     */
    // @param  \Illuminate\Http\Request  $request
    //  @return \Illuminate\Http\Response
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required|max:255',
            'slug' => 'required|unique:articles',
            'body' => 'required',
            'image' => 'image'
        ]);
    }

    /**
     * Display the specified resource.
     *
     */
    // @param  int  $id
    // @return \Illuminate\Http\Response
    public function show(Article $article)
    {
        return view('admin.showArticleAdmin',[
            'articles' => $article
        ]);

        // $artikel = [];
        // foreach($article as $a){
        //     if($a["id"] == $article->id){
        //         $artikel = $a;
        //     }
        // }
        // return view('admin.showArticleAdmin', ["admin.showArticleAdmin" => $artikel]);

    }

    /**
     * Show the form for editing the specified resource.
     *
     */
    //  @param  int  $id
    //  @return \Illuminate\Http\Response
    public function edit(Article $article)
    {
        return view('admin.editArticle',[
            'articles' => $article
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     */
    // @param  \Illuminate\Http\Request  $request
    // @param  int  $id
    // @return \Illuminate\Http\Response
    public function update(Request $request, Article $article)
    {
        $rules = [
            'title' => 'required|max:255',
            'body' => 'required',
            'image' => 'image'
        ];

        if($request->slug != $article->slug){
            $rules['slug'] = 'required|unique:articles';
        }

        $validatedData = $request->validate($rules);

        if($request->file('image')){
            if($request->oldImage){
                Storage::delete($request->oldImage);
            }
            $validatedData['iamge'] = $request->file('image')->storage('article-images');
        }

        Article::where('id', $article->id)->update($validatedData);
        return redirect('/admin')->with('success','Article has been updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     */
    //  @param  int  $id
    //  @return \Illuminate\Http\Response
    public function destroy(Article $article)
    {
        if($article->image){
            Storage::delete($article->image);
        }
        // $articles = Article::findOrFail($article);
        // $articles->each()->delete();

        Article::destroy($article->id);

        return redirect('/admin')->with('success','Article has been deleted!');
    }

    public function checkSlug(Request $request){
        $slug = SlugService::createSlug(Article::class,'slug',$request->title);
        return response()->json(['slug' => $slug]);
    }
}
