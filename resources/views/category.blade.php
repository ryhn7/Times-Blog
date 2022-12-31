@extends('layouts.main')

@section('container')
    {{-- <div class="w-full rounded-lg shadow-xl px-5 py-2 font-imperial">
        @foreach ($posts as $post)
            <article class="mb-8 px-8 py-2">
                <h2 class="text-3xl font-bold text-slate-900 group"><a href="/posts/{{ $post->slug }}"
                        class="group-hover:text-slate-700">{{ $post->title }}</a></h2>
                <h5 class="text-lg font-semibold text-slate-600 mb-5">by <a
                        href="/authors/{{ $post->author->username }}">{{ $post->author->name }}</a></h5>
                <p class="text-md text-slate-500">{{ $post->excerpt }}</p>
                <hr class="bg-slate-500 border border-t-1 mt-9">
            </article>
        @endforeach
    </div> --}}
    <div class="max-w-full px-44 py-3 font-imperial">
        <div class="flex">
            {{-- Right --}}
            <div class="flex-col w-[80%]">
                <div class="mb-10">
                    <div class="flex mr-5 mb-5">
                        <div class="w-2/3">
                            <img src="https://source.unsplash.com/600x350" alt="image">
                            <div class="flex text-xs text-slate-600 w-full mt-1 px-0.5 justify-end">Source</div>
                            <h3 class="text-2xl font-bold text-slate-900 mt-3 mb-2 group"><a
                                    href="/posts/{{ $posts[0]->slug }}"
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
                                <img src="https://source.unsplash.com/400x250" alt="image">
                                <div class="flex text-xs text-slate-600 w-full mt-1 px-0.5 justify-end">Source</div>
                            </div>
                            <h3 class="text-2xl font-bold text-slate-900 mb-2 group"><a href="/posts/{{ $posts[1]->slug }}"
                                    class="group-hover:text-slate-700">{{ $posts[1]->title }}</a></h3>
                            <div class="text-[#5A5A5A]">{{ $posts[1]->excerpt }}</div>
                            <div class="flex text-xs text-[#727272] mt-2">
                                <img src="{{ asset('assets/icons/clock.svg') }}" alt="clock" width="14"
                                    class="mr-2">
                                {{ $posts[1]->created_at->diffForHumans() }}
                            </div>
                        </div>
                    </div>
                </div>
                {{-- @foreach ($posts->skip(1) as $post)
                    <div class="mb-10">
                        <hr class="bg-slate-900 border border-t-1 mb-5 mr-5">
                        <div class="flex mr-5 mb-5">
                            <div class="flex-col w-1/3 mr-3">
                                <h3 class="text-2xl font-bold text-slate-900 mb-2 group"><a
                                        href="/posts/{{ $post->slug }}"
                                        class="group-hover:text-slate-700">{{ $post->title }}</a></h3>
                                <div class="text-[#5A5A5A]">{{ $post->excerpt }}</div>
                                <div class="flex text-xs text-[#727272] mt-2">
                                    <img src="{{ asset('assets/icons/clock.svg') }}" alt="clock" width="14"
                                        class="mr-2">
                                    {{ $posts[0]->created_at->diffForHumans() }}
                                </div>
                            </div>
                            <div class="w-2/3">
                                <img src="https://source.unsplash.com/550x350" alt="image">
                                <div class="flex text-xs text-slate-600 w-full mt-1 px-0.5 justify-end">Source</div>
                            </div>
                        </div>
                    </div>
                @endforeach --}}
            </div>

            <hr class="h-auto bg-slate-200 border mr-5">

            {{-- Left --}}
            <div class="flex-col w-[20%]">
                <div class="mb-5">
                    {{-- <div class="w-full">
                        <img src="https://source.unsplash.com/400x250" alt="image">
                        <div class="flex text-xs text-slate-600 w-full mt-1 px-0.5 justify-end">Source</div>
                    </div> --}}
                    <h3 class="text-2xl font-semibold mt-3 mb-2 group"><a href="/posts/{{ $posts[0]->slug }}"
                            class="group-hover:text-slate-700">{{ $posts[0]->title }}</a></h3>
                    <div class="grid grid-cols-1">
                        <div class="flex justify-start">
                            <img src="https://source.unsplash.com/75x75" alt="image">
                        </div>
                        <div class="text-[#5A5A5A]">{{ $posts[0]->excerpt }}</div>
                    </div>
                    <div class="flex text-xs text-[#727272] mt-2">
                        <img src="{{ asset('assets/icons/clock.svg') }}" alt="clock" width="14" class="mr-2">
                        {{ $posts[0]->created_at->diffForHumans() }}
                    </div>
                </div>
                {{-- @foreach ($posts as $post)
                    <div class="mb-5">
                        <div class="w-full">
                            <img src="https://source.unsplash.com/400x250" alt="image">
                            <div class="flex text-xs text-slate-600 w-full mt-1 px-0.5 justify-end">Source</div>
                        </div>
                        <h3 class="text-2xl font-semibold mt-3 mb-2 group"><a href="/posts/{{ $post->slug }}"
                                class="group-hover:text-slate-700">{{ $post->title }}</a></h3>
                        <div class="text-[#5A5A5A]">{{ $post->excerpt }}</div>
                        <div class="flex text-xs text-[#727272] mt-2">
                            <img src="{{ asset('assets/icons/clock.svg') }}" alt="clock" width="14" class="mr-2">
                            {{ $posts[0]->created_at->diffForHumans() }}
                        </div>
                    </div>
                @endforeach --}}
            </div>
        </div>
        <hr class="border-t-1 border-slate-900">
    </div>
@endsection
