@extends('dashboard.layouts.main')

@section('container')
    <div class="w-full px-3 overflow-hidden rounded-lg shadow-xs">
        @if (session()->has('success'))
            <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative mb-3" role="alert">
                <strong class="font-bold">Woaa!</strong>
                <span class="block sm:inline">{{ session('success') }}</span>
                <span class="absolute top-0 bottom-0 right-0 px-4 py-3">
                </span>
            </div>
        @endif

        <div class="flex justify-end mb-5 mr-1">
            <div
                class="flex w-30 px-2 py-1 rounded-md shadow-lg text-center group bg-gradient-to-tl from-sky-500 to-teal-500 hover:bg-gradient-to-tl hover:from-sky-600 hover:to-teal-600">
                <div class="mr-3 self-center">
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0,0,256,256"
                        width="20px" height="20px" fill-rule="nonzero">
                        <g fill="#ffffff" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt"
                            stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0"
                            font-family="none" font-weight="none" font-size="none" text-anchor="none"
                            style="mix-blend-mode: normal">
                            <g transform="scale(9.84615,9.84615)">
                                <path
                                    d="M19,3h-12c-2.19922,0 -4,1.80078 -4,4v12c0,2.19922 1.80078,4 4,4h12c2.19922,0 4,-1.80078 4,-4v-12c0,-2.19922 -1.80078,-4 -4,-4zM19,14h-5v5h-2v-5h-5v-2h5v-5h2v5h5z">
                                </path>
                            </g>
                        </g>
                    </svg>
                </div>
                <div class="text-sm text-white font-semibold group-hover:font-bold"><a href="/dashboard/posts/create">Add
                        Post</a></div>
            </div>
        </div>
        <div class="w-full overflow-x-auto rounded shadow-lg">
            <table class="bg-white w-full whitespace-no-wrap">
                <thead>
                    <tr class="text-xs font-semibold tracking-wide text-left text-gray-700 uppercase border-b">
                        <th class="px-4 py-3">Title</th>
                        <th class="px-4 py-3">Category</th>
                        <th class="px-8 py-3">Date</th>
                        <th class="pl-8 py-3">Actions</th>
                    </tr>
                </thead>
                <tbody class="bg-white divide-y">
                    @foreach ($posts as $post)
                        <tr class="text-gray-700">
                            <td class="px-4 py-3">
                                <div>
                                    <p class="font-bold">{{ $post->title }}</p>
                                </div>
                            </td>
                            <td class="px-4 py-3 text-sm">
                                {{ $post->category->name }}
                            </td>
                            <td class="px-4 py-3 text-sm">
                                {{ $post->created_at->toDateString() }}
                            </td>
                            <td class="px-4 py-3">
                                <div class="flex items-center space-x-4 text-sm">
                                    <button
                                        class="flex items-center justify-between px-2 py-2 text-sm font-medium leading-5 text-orange-500 rounded-lg hover:bg-orange-400 hover:text-white"
                                        aria-label="Edit">
                                        <a href="/dashboard/posts/{{ $post->slug }}">
                                            <svg class="w-5 h-5" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20">
                                                <path
                                                    d="M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L3 14.172V17h2.828l8.38-8.379-2.83-2.828z">
                                                </path>
                                            </svg></a>
                                    </button>
                                    <form action="/dashboard/posts/{{ $post->slug }}" method="POST">
                                        @method('delete')
                                        @csrf
                                        <button
                                            class="flex items-center justify-between px-2 py-2 text-sm font-medium leading-5 text-pink-600 rounded-lg hover:bg-pink-500 hover:text-white"
                                            aria-label="Delete" onclick="return confirm('Are you sure?')">
                                            <svg class="w-5 h-5" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20">
                                                <path fill-rule="evenodd"
                                                    d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z"
                                                    clip-rule="evenodd"></path>
                                            </svg>
                                        </button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        {{-- <div
        class="grid px-4 py-3 text-xs font-semibold tracking-wide text-gray-500 uppercase border-t dark:border-gray-700 bg-gray-50 sm:grid-cols-9 dark:bg-gray-800">
        <span class="flex items-center col-span-3">
            Showing 21-30 of 100
        </span>
        <span class="col-span-2"></span>
        <!-- Pagination -->
        <span class="flex col-span-4 mt-2 sm:mt-auto sm:justify-end">
            <nav aria-label="Table navigation">
                <ul class="inline-flex items-center">
                    <li>
                        <button
                            class="px-3 py-1 rounded-md rounded-l-lg focus:outline-none focus:shadow-outline-purple"
                            aria-label="Previous">
                            <svg class="w-4 h-4 fill-current" aria-hidden="true" viewBox="0 0 20 20">
                                <path
                                    d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z"
                                    clip-rule="evenodd" fill-rule="evenodd"></path>
                            </svg>
                        </button>
                    </li>
                    <li>
                        <button class="px-3 py-1 rounded-md focus:outline-none focus:shadow-outline-purple">
                            1
                        </button>
                    </li>
                    <li>
                        <button class="px-3 py-1 rounded-md focus:outline-none focus:shadow-outline-purple">
                            2
                        </button>
                    </li>
                    <li>
                        <button
                            class="px-3 py-1 text-white transition-colors duration-150 bg-purple-600 border border-r-0 border-purple-600 rounded-md focus:outline-none focus:shadow-outline-purple">
                            3
                        </button>
                    </li>
                    <li>
                        <button class="px-3 py-1 rounded-md focus:outline-none focus:shadow-outline-purple">
                            4
                        </button>
                    </li>
                    <li>
                        <span class="px-3 py-1">...</span>
                    </li>
                    <li>
                        <button class="px-3 py-1 rounded-md focus:outline-none focus:shadow-outline-purple">
                            8
                        </button>
                    </li>
                    <li>
                        <button class="px-3 py-1 rounded-md focus:outline-none focus:shadow-outline-purple">
                            9
                        </button>
                    </li>
                    <li>
                        <button
                            class="px-3 py-1 rounded-md rounded-r-lg focus:outline-none focus:shadow-outline-purple"
                            aria-label="Next">
                            <svg class="w-4 h-4 fill-current" aria-hidden="true" viewBox="0 0 20 20">
                                <path
                                    d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                                    clip-rule="evenodd" fill-rule="evenodd"></path>
                            </svg>
                        </button>
                    </li>
                </ul>
            </nav>
        </span>
    </div> --}}
    </div>
@endsection
