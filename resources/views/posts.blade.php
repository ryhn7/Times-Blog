@extends('layouts.main')

@section('menu')
    <div class="flex max-w-full">
        <div class="flex px-4 py-2">
            @foreach ($categories as $category)
                <div class="px-2 rounded group hover:bg-slate-200">
                    <a href="/categories/{{ $category->slug }}"
                        class="inline-block py-1 px-auto text-sm group-hover:font-semibold">{{ $category->name }}</a>
                </div>
            @endforeach

        </div>
    </div>
    <hr class="mt-1 border-t-1 border-slate-900">
    <hr class="mt-1 border-t-1 border-slate-900">
@endsection

@section('container')
    <div class="rounded-lg shadow-xl px-5 py-2 font-imperial">
        @foreach ($posts as $post)
            <article class="mb-8">
                <h2 class="text-3xl font-bold text-slate-900 group"><a
                        href="/posts/{{ $post->slug }}" class="group-hover:text-slate-700">{{ $post->title }}</a></h2>
                <h5 class="text-lg font-semibold text-slate-600 mb-5">by {{ $post->author }}</h5>
                <p class="text-md text-slate-500">{{ $post->excerpt }}</p>
            </article>
        @endforeach
    </div>
@endsection
