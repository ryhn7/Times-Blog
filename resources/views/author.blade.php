@extends('layouts.main')

@section('container')
    <div class="w-full rounded-lg shadow-xl px-5 py-2 font-imperial">
        @foreach ($posts as $post)
            <article class="mb-8 px-8 py-2">
                <h2 class="text-3xl font-bold text-slate-900 group"><a href="/{{ $post->slug }}"
                        class="group-hover:text-slate-700">{{ $post->title }}</a></h2>
                <h5 class="text-lg font-semibold text-slate-600 mb-5">by {{ $post->author->name }}</h5>
                <p class="text-md text-slate-500">{{ $post->excerpt }}</p>
                <hr class="bg-slate-500 border border-t-1 mt-9">
            </article>
        @endforeach
    </div>
@endsection
