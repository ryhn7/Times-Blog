@extends('layouts.main')

@section('container')
    <div class="max-w-full h-36 px-80 py-7 bg-[#F7F7F7]">
        <div class="text-xs text-[#666666]">Showing {{ $posts->count() }} result for:</div>
        <div class="flex w-3/4 group hover:border-b">
            <div class="w-full h-12">
                <form action="/search" method="GET">
                    <input type="text" id="search" name="search"
                        class="appearance-none bg-transparent border-none w-full text-4xl font-franklin placeholder:text-3xl placeholder:font-imperial placeholder:text-[#B3B3C1] focus:ring-0"
                        placeholder="Search The Times" value="{{ request('search') }}">
                </form>
            </div>
            <button class="w-10 h-full my-auto opacity-60 group-hover:opacity-80 focus:opacity-100" type="submit">
                <img src="{{ asset('assets/icons/search.png') }}" alt="icon">
            </button>
        </div>
    </div>
    @if ($posts->count())
        <div class="max-w-full px-80 py-7 mt-3">
            <div class="mb-10">
                <div class="flex">
                    <div class="w-1/12 text-xs font-karnak mr-9">{{ $posts[0]->created_at->toFormattedDateString() }}
                    </div>
                    <div class="w-11/12">
                        <a href="/post/{{ $posts[0]->slug }}" class="group">
                            <div class="flex">
                                <div class="w-2/3 mr-5">
                                    <div class="text-xs font-karnak">{{ str($posts[0]->category->name)->upper() }}</div>
                                    <h2 class="text-2xl font-chelten mb-2 group-hover:text-gray-700">
                                        {{ $posts[0]->title }}</h2>
                                    <h4 class="text-[#363636] font-imperial">{{ $posts[0]->excerpt }}</h4>
                                    <div class="text-xs font-karnak mt-1">By {{ str($posts[0]->author->name)->upper() }}
                                    </div>
                                </div>
                                <div class="w-1/3">
                                    <img src="https://source.unsplash.com/270x150?{{ $posts[0]->category->name }}"
                                        alt="image" class="rounded shadow-lg">
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            @foreach ($posts->skip(1) as $post)
                <div class="mb-10">
                    <hr class="bg-slate-300 border border-t-1 mb-5">
                    <div class="flex">
                        <div class="w-1/12 text-xs font-karnak mr-9">{{ $post->created_at->toFormattedDateString() }}
                        </div>
                        <div class="w-11/12">
                            <a href="/post/{{ $post->slug }}" class="group">
                                <div class="flex">
                                    <div class="w-2/3 mr-5">
                                        <div class="text-xs font-karnak">{{ str($post->category->name)->upper() }}</div>
                                        <h2 class="text-2xl font-chelten mb-2 group-hover:text-gray-700">
                                            {{ $post->title }}</h2>
                                        <h4 class="text-[#363636] font-imperial">{{ $post->excerpt }}</h4>
                                        <div class="text-xs font-karnak mt-1">By {{ str($post->author->name)->upper() }}
                                        </div>
                                    </div>
                                    <div class="w-1/3">
                                        <img src="https://source.unsplash.com/270x150?{{ $post->category->name }}"
                                            alt="image" class="rounded shadow-lg">
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    @else
        <div class="max-w-full px-[450px] py-7">
            <div class="text-3xl font-bold mb-3 font-franklin text-center">Page Not Found</div>
            <div class="text-lg text-slate-500 font-semibold">We’re sorry, we seem to have lost this page, but we don’t want
                to lose you.
            </div>
        </div>
    @endif

@endsection
