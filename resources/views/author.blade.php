@extends('layouts.main')

@section('container')
    <div class="max-w-full px-44 py-3">
        {{-- Author Profile --}}
        <div class="flex">
            <div class="flex items-center justify-center w-20 h-20 rounded-full mr-8 border border-slate-500">
                <img src="{{ asset('assets/icons/profile.png') }}" alt="icon" width="45px" class="block">
            </div>
            <div class="w-1/2 flex-col">
                <div class="text-4xl font-franklin font-bold mb-3">{{ $author }}</div>
                <p class="text-lg text-[#727272] font-chelten">Lorem ipsum dolor sit amet, consectetur adipisicing
                    elit.
                    Unde autem quis
                    eligendi aliquid dolorum neque rerum praesentium sapiente ducimus nisi.</p>
            </div>
        </div>

        <hr class="border-t-[3px] border-black mt-10 mb-3">

        {{-- Right Section --}}
        <div class="flex">
            <div class="w-3/4 mr-5">
                <div class="mb-10">
                    <div class="flex">
                        <div class="w-1/12 text-xs font-karnak mr-9">{{ $posts[0]->created_at->toFormattedDateString() }}
                        </div>
                        <div class="w-11/12">
                            <a href="/post/{{ $posts[0]->slug }}" class="group">
                                <div class="flex">
                                    <div class="w-2/3 mr-5">
                                        <div class="text-xs font-karnak">{{ str($posts[0]->category->name)->upper() }}</div>
                                        <h2
                                            class="text-2xl font-bold font-chelten mb-2 group-hover:underline underline-offset-[6px]">
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
                                            <div class="text-xs font-karnak">{{ str($post->category->name)->upper() }}
                                            </div>
                                            <h2
                                                class="text-2xl font-bold font-chelten mb-2 group-hover:underline underline-offset-[6px]">
                                                {{ $post->title }}</h2>
                                            <h4 class="text-[#363636] font-imperial">{{ $post->excerpt }}</h4>
                                            <div class="text-xs font-karnak mt-1">By
                                                {{ str($post->author->name)->upper() }}
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

            {{-- Left Section --}}
            <div class="w-1/4">
                <hr class="bg-slate-300 border border-t-1 mb-1 border-dotted">
                <div>
                    <div class="text-xs font-bold">FOLLOW ELSEWHERE</div>
                </div>
                <div class="grid grid-rows-3 gap-1">
                    <div class="mt-2">
                        <div class="flex">
                            <div class="flex items-center justify-start py-2 w-5 h-6 mr-1">
                                <img src="{{ asset('assets/icons/twitter.png') }}" alt="icon" width="15px"
                                    class="block">
                            </div>
                            <div class="text-slate-500">{{ str($author)->camel() }}</div>
                        </div>
                        <div class="flex">
                            <div class="flex items-center justify-start py-2 w-5 h-6 mr-1">
                                <img src="{{ asset('assets/icons/facebook.png') }}" alt="icon" width="15px"
                                    class="block">
                            </div>
                            <div class="text-slate-500">{{ str($author)->camel() }}</div>
                        </div>
                        <div class="flex">
                            <div class="flex items-center justify-start py-2 w-5 h-6 mr-1">
                                <img src="{{ asset('assets/icons/instagram.png') }}" alt="icon" width="15px"
                                    class="block">
                            </div>
                            <div class="text-slate-500">{{ str($author)->camel() }}</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
