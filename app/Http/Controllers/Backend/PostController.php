<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\Post\PostRequest;
use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class PostController extends Controller
{
    public function index(){
        $posts = Post::query()->latest()->with(['category'])->get();
        return view('backend.index', compact('posts'));
    }

    public function create()
    {
        $categories = Category::query()->get();
        return view('backend.create', compact('categories'));
    }

    public function store(PostRequest $postRequest){
        $payload = $postRequest->validated();
        $payload['slug'] = Str::slug($postRequest->validated('title'));
        Post::query()->create($payload);

        return redirect()->route('posts.index');
    }

    public function edit(int $id)
    {
       $post = Post::query()->findOrFail($id);
       $categories = Category::query()->get();
       return view('backend.edit', compact('post', 'categories'));
    }

    public function update(int $id, PostRequest $postRequest)
    {
        $payload = $postRequest->validated();
        $payload['slug'] = Str::slug($payload['title']);
        Post::query()->findOrFail($id)->update($payload);

        return redirect()->route('posts.index');
    }

    public function delete(int $id)
    {
        Post::query()->findOrFail($id)->delete();

        return redirect()->route('posts.index');
    }
}
