<?php

namespace App\Http\Controllers;

use App\Article;
use App\User;
use Auth;
use File;
use Illuminate\Http\Request;

class ArticlesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(Auth::user()->role === "member")
        {
            
            $user = Auth::user();
            $data = User::find($user->id);
            $articles = Article::where('username', $user->username)->get();
            return view('member.myArticle', ['articles' => $articles , 'data' => $data]);    
        }
        else if(Auth::user()->role === "admin")
        {
            $user = Auth::user();
            $data = User::find($user->id);
            $articles = Article::where('username', $user->username)->get();
            return view('admin.articlesAdmin', ['articles' => $articles , 'data' => $data]);    
        
        }
    
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if(Auth::user()->role === "member")
        {
            $user = Auth::user();
            $data = User::find($user->id);
            return view('member.createArticleMember',compact('data'));
        }
        else if(Auth::user()->role === "admin")
        {
            $user = Auth::user();
            $data = User::find($user->id);
            return view('admin.createArticleAdmin',compact('data'));
        }
        else 
        {
            return redirect()->back();
        }
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
            'title' => 'required',
            'content' =>'required',
            'picture' => 'required'
        ]);
        
        $file = $request->file('picture');
        $filename = time() . "_" . $file->getClientOriginalName();
        $destination = 'data_file';
        $file->move($destination, $filename);

        Article::create([
            'title' => $request->title,
            'username' => auth()->user()->username,
            'content' => $request->content,
            'picture' => $filename
            ]);
        return redirect('/articles');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        if(Auth::user()->role === "member")
        {
            $user = Auth::user();
            $data = User::find($user->id);
            $artics= Article::find($id);
            return view('viewArticle', ['data' => $data, 'artics' => $artics]);
        }
        else if(Auth::user()->role === "admin")
        {
            $user = Auth::user();
            $data = User::find($user->id);
            $artics= Article::find($id);
            return view('viewArticleAdmin', ['data' => $data, 'artics' => $artics]);        
        }
        

    }

    public function showGuest($id)
    {
        $artics = Article::find($id);
        return view('viewArticleGuest',compact('artics'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Article $article)
    {
        if(Auth::user()->role === "member")
        {
            return view('member.editArticleMember', compact('article'));
        }
        else if(Auth::user()->role === "admin")
        {
            return view('admin.editArticleAdmin', compact('article'));
        }
        else
        {
            return redirect()->back();
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Article $article)
    {
        $request->validate([
            'title' => 'required',
            'content' => 'required'
        ]);
        
        if($request->hasFile('picture'))
        {
            $article = Article::where('id',$article->id)->first();
            File::delete('data_file/' . $article->picture);

            $file = $request->file('picture');
            $filename = time() . "_" . $file->getClientOriginalName();
            $destination = 'data_file';
            $file->move($destination, $filename);

            Article::where('id', $article->id)
                ->update([
                    'title' => $request->title,
                    'content' => $request->content,
                    'picture' => $filename
            ]);
        }
        
        else
        {
            Article::where('id', $article->id)
                ->update([
                    'title' => $request->title,
                    'content' => $request->content
            ]);
        }
        return redirect('/articles');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $article = Article::where('id',$id)->first();
        File::delete('data_file/' . $article->picture);
        
        Article::where('id',$id)->delete();
        return redirect('/articles');
    }
    
}
