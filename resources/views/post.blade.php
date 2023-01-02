@extends('layouts.main')

@section('container')
    <div class="max-w-full px-44 py-3 font-chelten">
        <div class="w-1/2 h-24 text-4xl font-bold mt-12 mx-auto">{{ $post->title }}</div>
    </div>
    {{-- <article class="rounded-lg shadow-xl px-5 py-2 font-imperial">
        <h2 class="text-3xl font-bold text-slate-900 mb-2">{{ $post->title }}</h2>
        <h5 class="text-lg font-semibold text-slate-600 mb-5">by <a
                href="/authors/{{ $post->author->username }}">{{ $post->author->name }}</a></h5>
        <div class="text-md text-slate-500 mb-5">{!! $post->body !!}</div>
    </article> --}}
@endsection
