<?php

namespace App\Http\Controllers;
use App\Models\Article;
use App\Models\Author;
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

        if(request('search')){
            $articles->where('title','like','%'.request('search').'%')
            ->orWhere('body','like','%'.request('search').'%');
        }

        return view('admin.articleAdmin',[
            'articles' => $articles->paginate(2),
            'authors' => Author::all()
        ]);
    }

    public function indexStudent()
    {
        $articles = Article::latest();

        if(request('search')){
            $articles->where('title','like','%'.request('search').'%')
            ->orWhere('body','like','%'.request('search').'%');
        }

        return view('student.articleStudent',[
            'articles' => $articles->paginate(2),
            'authors' => Author::all()
        ]);
    }

    public function indexTeacher()
    {
        $articles = Article::latest();

        if(request('search')){
            $articles->where('title','like','%'.request('search').'%')
            ->orWhere('body','like','%'.request('search').'%');
        }

        return view('teacher.articleTeacher',[
            'articles' => $articles->paginate(2),
            'authors' => Author::all()
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
        return view('admin.addArticle', [
            'authors' => Author::all()
        ]);
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
            'author_id' => 'required',
            'articlepublish' => 'required',
            'slug' => 'required|unique:articles',
            'body' => 'required',
            'image' => 'image'
        ]);

        // dd($validatedData);
        if($request->file('image')){
            $validatedData['image'] = $request->file('image')->store('article-images');

        }


        Article::create($validatedData);
        return redirect('/admin')->with('success', 'New post has been added');

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
            'articles' => $article,
            'authors' => Author::all()
        ]);
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
            'articles' => $article,
            'authors' => Author::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     */
    // @param  \Illuminate\Http\Request  $request
    // @param  int  $id
    // @return \Illuminate\Http\Response
    public function update(Request $request, $slug)
    {
        $article = Article::where('slug',$slug)->get();
        $this->middleware('auth');
        $rules = [
            'title' => 'required|max:255',
            'author_id' => 'required',
            'articlepublish' => 'required',
            'body' => 'required',
            'image' => 'image'
        ];


        if($request->slug != $article[0]->slug){
            $rules['slug'] = 'required|unique:articles';
        }

        // dd($request);



        // dd($request);
        try {
            $validatedData = $request->validate($rules);

        } catch (\Illuminate\Validation\ValidationException $e) {
            dd($e->getMessage());
        }

        if($request->file('image')){
            if($request->oldImage){
                Storage::delete($request->oldImage);
            }
            $validatedData['image'] = $request->file('image')->store('article-images');
        }

        $article[0]->update($validatedData);

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
            // dd( Storage::delete($article->image));
        }
        Article::destroy($article->id);

        return redirect('/admin')->with('success','Article has been deleted!');
    }

    public function checkSlug(Request $request){
        $slug = SlugService::createSlug(Article::class,'slug',$request->title);
        return response()->json(['slug' => $slug]);
    }
}
