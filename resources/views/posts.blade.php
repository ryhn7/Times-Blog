@extends('layouts.main')

@section('menu')
    <div class="flex max-w-full">
        <div class="flex px-4 py-2">
            @foreach ($categories as $category)
                <div class="px-2 rounded group hover:bg-slate-200">
                    <a href="/categories/{{ $category->slug }}"
                        class="inline-block py-1 px-auto text-sm group-hover:font-semibold">{{ $category->name }}</a>
                </div>
            @endforeach
        </div>
    </div>
    <hr class="mt-1 border-t-1 border-slate-900">
    <hr class="mt-1 border-t-1 border-slate-900">
@endsection

@section('container')
    <div class="w-full rounded-lg shadow-xl px-5 py-2 font-imperial">
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
    </div>
    <div class="mb-20"></div>

    <div class="flex max-w-full px-28 py-3 font-imperial">
        {{-- Right --}}
        <div class="flex-col w-[70%]">
            @foreach ($posts as $post)
                <div class="mb-10">
                    <div class="flex mr-5 mb-5">
                        <div class="flex-col w-1/3 mr-3">
                            <h3 class="text-2xl font-bold text-slate-900 mb-2"><a href="/posts/{{ $post->slug }}"
                                class="group-hover:text-slate-700">{{ $post->title }}</a></h3>
                            <div class="">{{ $post->excerpt }}</div>
                        </div>
                        <div class="w-2/3">
                            <img src="https://source.unsplash.com/550x350" alt="image">
                        </div>
                    </div>
                    <hr class="bg-slate-300 border border-t-1 mt-12 mr-8">
                </div>
            @endforeach
        </div>

        <hr class="h-auto bg-black border border-t-0 mr-10">

        {{-- Left --}}
        <div class="flex-col w-[30%]">
            <div class="mb-5">
                <div class="w-full">
                    <img src="https://source.unsplash.com/400x250" alt="image">
                    {{-- <div class="flex w-full px-2 justify-end">dsfsdfsdf</div> --}}
                </div>
                <div class="text-2xl font-semibold mt-3 mb-2">Lorem ipsum, dolor sit amet consectetur adipisicing.</div>
                <div>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ipsum provident vero ex laboriosam tenetur,
                    necessitatibus vel. Illo blanditiis laboriosam eveniet.</div>
            </div>
            <div class="mb-5">
                <div class="w-full">
                    <img src="https://source.unsplash.com/400x250" alt="image">
                    {{-- <div class="flex w-full px-2 justify-end">dsfsdfsdf</div> --}}
                </div>
                <div class="text-2xl font-semibold mt-3 mb-2">Lorem ipsum, dolor sit amet consectetur adipisicing.</div>
                <div>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ipsum provident vero ex laboriosam tenetur,
                    necessitatibus vel. Illo blanditiis laboriosam eveniet.</div>
            </div>
        </div>
    </div>

    <div class="mb-96"></div>
@endsection
