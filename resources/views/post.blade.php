@extends('layouts.main')

@section('container')
    <article class="rounded-lg shadow-xl px-5 py-2 font-imperial">
        <h2 class="text-3xl font-bold text-slate-900 mb-2">{{ $post->title }}</h2>
        <h5 class="text-lg font-semibold text-slate-600 mb-5">by {{ $post->author }}</h5>
        <div class="text-md text-slate-500 mb-5">{!! $post->body !!}</div>
    </article>
@endsection
