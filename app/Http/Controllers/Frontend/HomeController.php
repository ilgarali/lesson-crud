<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $categories = Category::query()->with(['posts'])->get();
        $posts      = Post::query()->with(['category'])->get();

        return view('home', compact('categories', 'posts'));
    }
}
