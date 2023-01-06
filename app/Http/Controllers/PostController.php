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
        // dd(request(['search', 'category']));

        return view('posts', [
            'title' => 'All Post',
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
            'title' => 'Category',
            'titles' => $category->name,
            'posts' => $category->posts,
            'slug' => $category->slug,
        ]);
    }

    public function author(User $author)
    {
        return view('author', [
            'title' => "Author",
            'titles' => $author->name,
            'posts' => $author->posts,
            'author' => $author->name,
            'uName' => $author->username,
        ]);
    }

    public function search()
    {
        // dd(request(['search', 'category']));
        return view('search', [
            'title' => 'Search',
            'posts' => Post::latest()->filter(request(['search', 'category', 'author']))->paginate(5),
        ]);
    }
}
