@extends('layouts.main')

@section('container')
    <div class="max-w-full px-44 mb-5">
        <div class="flex justify-between">
            <h1 class="text-4xl mb-3 font-franklin font-extrabold">{{ $titles }}</h1>
            <div class="w-200 my-auto">
                <div
                    class="w-full rounded-md shadow-lg bg-[#567B95] px-2 py-1 text-white font-semibold hover:bg-[#346890] focus:bg-[#346890]">
                    <a href="/search?category={{ $slug }}">Filter Search</a>
                </div>
            </div>
        </div>
        <hr class="border-t-[3px] border-black">
    </div>
    <div class="max-w-full px-44 py-3 font-imperial">
        <div class="flex">
            {{-- Right --}}
            <div class="flex-col w-[80%]">
                <div class="mb-10">
                    <div class="flex mr-5 mb-5">
                        <div class="w-2/3">
                            @if ($posts[0]->image)
                                <img src="{{ asset('images/' . $posts[0]->image) }}" alt="image"
                                    class="rounded shadow-lg" width="600px" height="350px">
                            @else
                                <img src="https://source.unsplash.com/600x350?{{ $posts[0]->category->name }}"
                                    alt="image" class="rounded shadow-lg">
                            @endif
                            <div class="flex text-xs text-slate-600 w-full mt-1 px-0.5 justify-end">Source</div>
                            <h3 class="text-2xl font-bold text-slate-900 mt-3 mb-2 group"><a
                                    href="/post/{{ $posts[0]->slug }}"
                                    class="group-hover:text-slate-700">{{ $posts[0]->title }}</a></h3>
                            <div class="text-[#5A5A5A]">{{ $posts[0]->excerpt }}</div>
                            <div class="flex text-xs text-[#727272] mt-2">
                                <img src="{{ asset('assets/icons/clock.svg') }}" alt="clock" width="14"
                                    class="mr-2">
                                {{ $posts[0]->created_at->diffForHumans() }}
                            </div>
                        </div>
                        <hr class="h-auto bg-slate-200 border ml-5">
                        <div class="w-1/3 pl-5">
                            <div class="w-full">
                                @if ($posts[0]->image)
                                    <img src="{{ asset('images/' . $posts[0]->image) }}" alt="image"
                                        class="rounded shadow-lg" width="400px" height="250px">
                                @else
                                    <img src="https://source.unsplash.com/400x250?{{ $posts[0]->category->name }}"
                                        alt="image" class="rounded shadow-lg">
                                @endif
                                <div class="flex text-xs text-slate-600 w-full mt-1 px-0.5 justify-end">Source</div>
                            </div>
                            <h3 class="text-2xl font-bold text-slate-900 mb-2 group"><a href="/post/{{ $posts[0]->slug }}"
                                    class="group-hover:text-slate-700">{{ $posts[0]->title }}</a></h3>
                            <div class="text-[#5A5A5A]">{{ $posts[0]->excerpt }}</div>
                            <div class="flex text-xs text-[#727272] mt-2">
                                <img src="{{ asset('assets/icons/clock.svg') }}" alt="clock" width="14"
                                    class="mr-2">
                                {{ $posts[0]->created_at->diffForHumans() }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <hr class="h-auto bg-slate-200 border mr-5">

            {{-- Left --}}
            <div class="flex-col w-[20%]">
                <div class="mb-5">
                    <h3 class="text-xl font-semibold mt-3 mb-2 group"><a href="/post/{{ $posts[0]->slug }}"
                            class="group-hover:text-slate-700">{{ $posts[0]->title }}</a></h3>
                    <div class="grid grid-cols-1">
                        <div class="flex justify-start">
                            @if ($posts[0]->image)
                                <img src="{{ asset('images/' . $posts[0]->image) }}" alt="image"
                                    class="rounded shadow-lg" width="75px" height="75px">
                            @else
                                <img src="https://source.unsplash.com/75x75?{{ $posts[0]->category->name }}" alt="image"
                                    class="rounded shadow-lg">
                            @endif
                        </div>
                        <div class="text-[#5A5A5A]">{{ $posts[0]->excerpt }}</div>
                    </div>
                    <div class="flex text-xs text-[#727272] mt-2">
                        <img src="{{ asset('assets/icons/clock.svg') }}" alt="clock" width="14" class="mr-2">
                        {{ $posts[0]->created_at->diffForHumans() }}
                    </div>
                </div>
            </div>
        </div>

        <hr class="border-t-1 border-slate-300">

        <div class="grid grid-cols-5 gap-5 mt-5">
            @foreach ($posts as $post)
                <div class="aspect-[5/6]">
                    <a href="/post/{{ $post->slug }}" class="group">
                        <div class="w-full mb-2">
                            @if ($post->image)
                                <img src="{{ asset('images/' . $post->image) }}" alt="image" class="rounded shadow-lg"
                                    width="220px" height="150px">
                            @else
                                <img src="https://source.unsplash.com/220x150?{{ $post->category->name }}" alt="image"
                                    class="rounded shadow-lg">
                            @endif
                        </div>
                        <div class="text-base font-semibold text-slate-900 group-hover:underline underline-offset-4">
                            {{ $post->title }}
                        </div>
                    </a>
                </div>
            @endforeach
        </div>
        <hr class="border-t-1 border-slate-300">
    </div>
@endsection
