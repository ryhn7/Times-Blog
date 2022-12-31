<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class PostController extends Controller
{
    public function index()
    {
        return view('posts', [
            'title' => 'Blog',
            'posts' => Post::latest()->get(),
            'categories' => Category::all()
        ]);
    }

    public function show(Post $post)
    {
        return view('post', [
            'title' => 'Single Post',
            'post' => $post
        ]);
    }

    public function category(Category $category)
    {
        return view('category', [
            'title' => 'Post By Category',
            'posts' => $category->posts,
        ]);
    }

    public function author(User $author)
    {
        return view('author', [
            'title' => 'Post By Author',
            'posts' => $author->posts,
        ]);
    }
}
