<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Auth\Events\Verified;
use Illuminate\Http\Request;
use Illuminate\support\Facades\Auth;


class PostController extends Controller
{
    public function index()
    {
        return view('posts.index', [
        "posts" => Post::with("category")->get()
    ]);
    }
    public function show(Post $post)
    {
        if(Auth::check()){
            return view("posts.show", [
                'post'=> $post
            ]);
        }
        return view("auth.no_auth");
        
    }
    public function category(Category $category)
    {
        return view('posts', [
        "posts" => $category->posts->load([
            "category", "author"
        ])
    ]);
    }
    public function author(User $author)
    {
        return view('posts', [
        "posts" => $author->posts->load([
            "category", "author"
        ])
    ]);
    }
}
