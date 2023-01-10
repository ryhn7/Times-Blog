@extends('layouts.main')

@section('container')
    <div class="max-w-full px-44 py-3 font-chelten">
        <div class="w-1/2 h-auto text-4xl font-bold mt-12 mx-auto">{{ $post->title }}</div>
        <div class="w-1/2 text-2xl mt-7 mx-auto text-[#333333]">{{ $post->excerpt }}</div>
        <div class="w-3/4 mt-10 mx-auto">
            @if ($post->image)
                <img src="{{ asset('images/' . $post->image) }}" alt="image" class="rounded shadow-lg" width="1000px"
                    height="650px">
            @else
                <img src="https://source.unsplash.com/1000x650?{{ $post->category->name }}" alt="image"
                    class="rounded shadow-lg">
            @endif
        </div>
        <div class="flex w-1/2 mt-8 mx-auto">
            <div class="flex items-center justify-center w-10 h-10 rounded-full mr-3 border border-slate-500">
                <img src="{{ asset('assets/icons/profile.png') }}" alt="icon" width="25px" class="block">
            </div>
            <div class="self-center font-semibold">By <a href="/authors/{{ $post->author->username }}"
                    class="hover:underline underline-offset-2">{{ $post->author->name }}</a></div>
        </div>
        <div class="flex w-1/2 mt-2 mx-auto text-xs">{{ $post->created_at->toFormattedDateString() }}</div>
        <div class="w-1/2 mt-8 mx-auto text-xl text-slate-700">{!! $post->body !!}</div>
    </div>
@endsection
