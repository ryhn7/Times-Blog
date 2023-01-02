@extends('layouts.main')

@section('menu')
    <div class="px-44 py-2 max-w-full">
        <hr class="mb-2 border-t-1 border-slate-300">
        <div class="flex">
            @foreach ($categories as $category)
                <div class="px-2 rounded group hover:bg-slate-200">
                    <a href="/categories/{{ $category->slug }}"
                        class="inline-block py-1 px-auto text-sm group-hover:font-semibold">{{ $category->name }}</a>
                </div>
            @endforeach
        </div>
        <hr class="mt-2 border-t-1 border-slate-900">
        <hr class="mt-1 border-t-1 border-slate-900">
    </div>
@endsection

@section('container')
    @if ($posts->count())
        <div class="max-w-full px-44 py-3 font-imperial">
            <div class="flex">
                {{-- Right --}}
                <div class="flex-col w-[70%]">
                    <div class="mb-10">
                        <div class="flex mr-5 mb-5">
                            <div class="flex-col w-1/3 mr-3">
                                <h3 class="text-2xl font-bold text-slate-900 mb-2 group"><a
                                        href="/post/{{ $posts[0]->slug }}"
                                        class="group-hover:text-slate-700">{{ $posts[0]->title }}</a></h3>
                                <div class="text-[#5A5A5A]">{{ $posts[0]->excerpt }}</div>
                                <div class="flex text-xs text-[#727272] mt-2">
                                    <img src="{{ asset('assets/icons/clock.svg') }}" alt="clock" width="14"
                                        class="mr-2">
                                    {{ $posts[0]->created_at->diffForHumans() }}
                                </div>
                            </div>
                            <div class="w-2/3">
                                <img src="https://source.unsplash.com/550x350?{{ $posts[0]->category->name }}"
                                    alt="image">
                                <div class="flex text-xs text-slate-600 w-full mt-1 px-0.5 justify-end">Source</div>
                            </div>
                        </div>
                    </div>
                    @foreach ($posts->skip(1) as $post)
                        <div class="mb-10">
                            <hr class="bg-slate-900 border border-t-1 mb-5 mr-5">
                            <div class="flex mr-5 mb-5">
                                <div class="flex-col w-1/3 mr-3">
                                    <h3 class="text-2xl font-bold text-slate-900 mb-2 group"><a
                                            href="/post/{{ $post->slug }}"
                                            class="group-hover:text-slate-700">{{ $post->title }}</a></h3>
                                    <div class="text-[#5A5A5A]">{{ $post->excerpt }}</div>
                                    <div class="flex text-xs text-[#727272] mt-2">
                                        <img src="{{ asset('assets/icons/clock.svg') }}" alt="clock" width="14"
                                            class="mr-2">
                                        {{ $posts[0]->created_at->diffForHumans() }}
                                    </div>
                                </div>
                                <div class="w-2/3">
                                    <img src="https://source.unsplash.com/550x350?{{ $post->category->name }}"
                                        alt="image">
                                    <div class="flex text-xs text-slate-600 w-full mt-1 px-0.5 justify-end">Source</div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>

                <hr class="h-auto bg-slate-200 border mr-5">

                {{-- Left --}}
                <div class="flex-col w-[30%]">
                    @foreach ($posts as $post)
                        <div class="mb-5">
                            <div class="w-full">
                                <img src="https://source.unsplash.com/400x250?{{ $post->category->name }}" alt="image">
                                <div class="flex text-xs text-slate-600 w-full mt-1 px-0.5 justify-end">Source</div>
                            </div>
                            <h3 class="text-2xl font-semibold mt-3 mb-2 group"><a href="/post/{{ $post->slug }}"
                                    class="group-hover:text-slate-700">{{ $post->title }}</a></h3>
                            <div class="text-[#5A5A5A]">{{ $post->excerpt }}</div>
                            <div class="flex text-xs text-[#727272] mt-2">
                                <img src="{{ asset('assets/icons/clock.svg') }}" alt="clock" width="14"
                                    class="mr-2">
                                {{ $posts[0]->created_at->diffForHumans() }}
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
            {{-- <hr class="border-t-1 border-slate-900"> --}}
        </div>
    @else
        <div class="max-w-full px-[450px] py-7">
            <div class="text-3xl font-bold mb-3 font-franklin">Page Not Found</div>
            <div class="text-lg text-slate-500 font-semibold">We’re sorry, we seem to have lost this page, but we don’t want
                to lose you.
            </div>
        </div>
    @endif
@endsection
