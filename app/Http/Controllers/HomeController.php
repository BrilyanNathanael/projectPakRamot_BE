<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\User;
use App\Article;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware(['auth']);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $article = Article::latest()->paginate(3);
        $user = Auth::user();
        $userRole = $user->role;
        if($userRole == "admin"){
            $data = User::all();
            $account = User::find($user->id);
            return view('admin/blogPageAdmin',['account' => $account, 'data' => $data, 'article' => $article]);
        }
        else{
            $data = User::find($user->id);
            return view('member/blogPageMember',['data' => $data, 'article' => $article]);
        }
    }
}
