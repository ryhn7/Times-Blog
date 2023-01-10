<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Category;
use Illuminate\Http\Request;
use \Cviebrock\EloquentSluggable\Services\SlugService;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class DashboardPostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.posts.index', [
            'posts' => Post::where('user_id', auth()->user()->id)->get(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.posts.create', [
            'categories' => Category::all(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|max:255',
            'slug' => 'required|unique:posts',
            'category_id' => 'required',
            'image' => 'image|file|max:2048',
            'body' => 'required',
        ]);

        if ($request->file('image')) {
            //alternate to save img upload direct to public folder


            // $image = $request->file('image');
            // $name = time() . '.' . $image->getClientOriginalExtension();
            // $destinationPath = public_path('/images');
            // $image->move($destinationPath, $name);
            // $validated['image'] = $name;

            $image = $request->file('image');
            $name = time() . '.' . $image->getClientOriginalExtension();
            // save $name to database with function storeAs()
            $validated['image'] = $image->storeAs('posts-images', $name);
        }

        $validated['user_id'] = auth()->user()->id;

        $validated['excerpt'] = Str::limit(strip_tags($request->body), 150, '.');

        Post::create($validated);

        return redirect('/dashboard/posts')->with('success', 'Post created successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {

        if ($post->author->id != auth()->user()->id) {
            abort(403, 'You are not authorized to access this resource!');
        }

        return $post;
        return view('dashboard.posts.show', [
            'post' => $post,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        if ($post->author->id != auth()->user()->id) {
            abort(403, 'You are not authorized to access this resource!');
        }

        return view('dashboard.posts.edit', [
            'post' => $post,
            'categories' => Category::all(),
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {
        // dd($request->oldImage);

        $rules = [
            'title' => 'required|max:255',
            'category_id' => 'required',
            'image' => 'image|file|max:2048',
            'body' => 'required',
        ];

        if ($request->slug != $post->slug) {
            $rules['slug'] = 'required|unique:posts';
        }

        $validated = $request->validate($rules);

        if ($request->file('image')) {

            if ($request->oldImage) {
                Storage::delete($request->oldImage);
            }

            //alternate to save img upload direct to public folder

            // $image = $request->file('image');
            // $name = time() . '.' . $image->getClientOriginalExtension();
            // $destinationPath = public_path('/images');
            // $image->move($destinationPath, $name);
            // $validated['image'] = $name;

            $image = $request->file('image');
            $name = time() . '.' . $image->getClientOriginalExtension();
            // save $name to database with function storeAs()
            $validated['image'] = $image->storeAs('posts-images', $name);
        }

        $validated['user_id'] = auth()->user()->id;

        $validated['excerpt'] = Str::limit(strip_tags($request->body), 150, '.');

        Post::where('id', $post->id)->update($validated);

        return redirect('/dashboard/posts')->with('success', 'Post updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     * 
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {

        if ($post->image) {
            Storage::delete($post->image);
        }

        Post::destroy($post->id);

        return redirect('/dashboard/posts')->with('success', 'Post deleted successfully!');
    }

    public function generateSlug(Request $request)
    {
        $slug = SlugService::createSlug(Post::class, 'slug', $request->title);

        return response()->json(['slug' => $slug]);
    }
}
