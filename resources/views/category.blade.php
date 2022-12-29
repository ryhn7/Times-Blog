@extends('layouts.main')

@section('container')
    <article class="rounded-lg shadow-xl px-5 py-2 font-imperial">
        @foreach ($posts as $post)
            <h2 class="text-3xl font-bold text-slate-900 mb-2 group"><a href="/posts/{{ $post->slug }}"
                    class="group-hover:text-slate-700">{{ $post->title }}</a>
            </h2>
            <h5 class="text-lg font-semibold text-slate-600 mb-5">by {{ $post->author }}</h5>
            <div class="text-md text-slate-500 mb-5">{!! $post->body !!}</div>
        @endforeach
    </article>
@endsection
