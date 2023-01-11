@extends('dashboard.layouts.main')

@section('container')
    <div class="flex flex-wrap my-6 -mx-3">
        <!-- card 1 -->
        <div class="w-full max-w-full px-3 mt-0 mb-6 md:mb-0 md:w-1/2 md:flex-none lg:w-2/3 lg:flex-none">
            <div
                class="border-black/12.5 shadow-soft-xl relative flex min-w-0 flex-col break-words rounded-2xl border-0 border-solid bg-white bg-clip-border">
                <div class="border-black/12.5 mb-0 rounded-t-2xl border-b-0 border-solid bg-white p-6 pb-0">
                    <div class="flex flex-wrap mt-0 -mx-3">
                        <div class="flex-none w-7/12 max-w-full px-3 mt-0 lg:w-1/2 lg:flex-none">
                            <h6 class="font-semibold text-xl">Post Categories</h6>
                        </div>
                        <div class="flex-none w-5/12 max-w-full px-3 my-auto text-right lg:w-1/2 lg:flex-none">
                            <div class="relative pr-6 lg:float-right">
                                <a dropdown-trigger class="cursor-pointer" aria-expanded="false">
                                    <i class="fa fa-ellipsis-v text-slate-400"></i>
                                </a>
                                <p class="hidden transform-dropdown-show"></p>

                                <ul dropdown-menu
                                    class="z-100 text-sm transform-dropdown shadow-soft-3xl duration-250 before:duration-350 before:font-awesome before:ease-soft min-w-44 -ml-34 before:text-5.5 pointer-events-none absolute top-0 m-0 mt-2 list-none rounded-lg border-0 border-solid border-transparent bg-white bg-clip-padding px-2 py-4 text-left text-slate-500 opacity-0 transition-all before:absolute before:top-0 before:right-7 before:left-auto before:z-40 before:text-white before:transition-all before:content-['\f0d8']">
                                    <li class="relative">
                                        <a class="py-1.2 lg:ease-soft clear-both block w-full whitespace-nowrap rounded-lg border-0 bg-transparent px-4 text-left font-normal text-slate-500 lg:transition-colors lg:duration-300"
                                            href="javascript:;">Action</a>
                                    </li>
                                    <li class="relative">
                                        <a class="py-1.2 lg:ease-soft clear-both block w-full whitespace-nowrap rounded-lg border-0 bg-transparent px-4 text-left font-normal text-slate-500 lg:transition-colors lg:duration-300"
                                            href="javascript:;">Another action</a>
                                    </li>
                                    <li class="relative">
                                        <a class="py-1.2 lg:ease-soft clear-both block w-full whitespace-nowrap rounded-lg border-0 bg-transparent px-4 text-left font-normal text-slate-500 lg:transition-colors lg:duration-300"
                                            href="javascript:;">Something else here</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="flex-auto p-6 px-0 pb-2">
                    <div class="flex justify-center overflow-x-auto">
                        <div class="w-full">
                            <table class="items-center w-full mb-0 align-top border-gray-200 text-slate-500">
                                <thead>
                                    <tr
                                        class="text-xs font-semibold tracking-wide text-center text-gray-700 uppercase border-b">
                                        <th class="px-4 py-3">Name</th>
                                        <th class="px-8 py-3">Actions</th>
                                    </tr>
                                </thead>
                                <tbody class="bg-white divide-y">
                                    @foreach ($categories as $category)
                                        <tr class="text-gray-700 text-center">
                                            <td class="px-4 py-3">
                                                <div>
                                                    <p class="font-bold">{{ $category->name }}</p>
                                                </div>
                                            </td>
                                            <td class="px-4 py-3">
                                                <div class="flex justify-center">
                                                    <div class="flex items-center space-x-4 text-sm">
                                                        <button
                                                            class="flex items-center justify-between px-2 py-2 text-sm font-medium leading-5 text-orange-500 rounded-lg hover:bg-orange-400 hover:text-white"
                                                            aria-label="Edit">
                                                            <a href="#">
                                                                <svg class="w-5 h-5" aria-hidden="true" fill="currentColor"
                                                                    viewBox="0 0 20 20">
                                                                    <path
                                                                        d="M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L3 14.172V17h2.828l8.38-8.379-2.83-2.828z">
                                                                    </path>
                                                                </svg></a>
                                                        </button>
                                                        <form action="#" method="POST">
                                                            @method('delete')
                                                            @csrf
                                                            <button
                                                                class="flex items-center justify-between px-2 py-2 text-sm font-medium leading-5 text-pink-600 rounded-lg hover:bg-pink-500 hover:text-white"
                                                                aria-label="Delete"
                                                                onclick="return confirm('Are you sure?')">
                                                                <svg class="w-5 h-5" aria-hidden="true" fill="currentColor"
                                                                    viewBox="0 0 20 20">
                                                                    <path fill-rule="evenodd"
                                                                        d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z"
                                                                        clip-rule="evenodd"></path>
                                                                </svg>
                                                            </button>
                                                        </form>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>

        <!-- card 2 -->

        <div class="w-full max-w-full px-3 md:w-1/2 md:flex-none lg:w-1/3 lg:flex-none">
            <div
                class="border-black/12.5 shadow-soft-xl relative flex h-auto min-w-0 flex-col break-words rounded-2xl border-0 border-solid bg-white bg-clip-border">
                <div class="border-black/12.5 mb-0 rounded-t-2xl border-b-0 border-solid bg-white p-6 pb-0">
                    <h6 class="font-semibold text-xl mb-3">Post Categories</h6>
                </div>
                <div class="flex-auto p-4">
                    <form action="/dashboard/categories" method="GET">
                        @csrf
                        <div>
                            <label for="name" class="block text-sm">
                                <span class="text-gray-700 font-semibold">Category Name</span>
                                <input type="text" id="name" name="name" required value="{{ old('name') }}"
                                    autofocus
                                    class="block px-2 py-1 w-full mt-1 text-sm border border-gray-500 rounded focus:border-sky-800 focus:outline-none focus:shadow-sm focus:shadow-[#2c3e50] focus:transition-shadow @error('name')
                                    border-red-600 focus:border-red-600 focus:ring-red-600
                                    @enderror" />
                                @error('name')
                                    <p class="text-xs mt-1 text-red-700 font-franklin">{{ $message }}</p>
                                @enderror
                            </label>

                            <label for="slug" class="block mt-4 text-sm">
                                <span class="text-gray-700 font-semibold">Slug</span>
                                <input type="text" id="slug" name="slug" required value="{{ old('slug') }}"
                                    class="block px-2 py-1 w-full mt-1 text-sm border border border-gray-500 rounded focus:border-sky-800 focus:outline-none focus:shadow-sm focus:shadow-[#2c3e50] focus:transition-shadow @error('slug')
                                    border-red-600 focus:border-red-600 focus:ring-red-600
                                    @enderror" />
                                @error('slug')
                                    <p class="text-xs mt-1 text-red-700 font-franklin">{{ $message }}</p>
                                @enderror
                            </label>

                            <button
                                class="mt-10 w-full px-3 py-3 bg-black text-white font-franklin font-bold rounded shadow-md hover:bg-[#333333]">Create
                                Category</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script>
        const name = document.getElementById('name');
        const slug = document.getElementById('slug');

        name.addEventListener('change', () => {
            fetch('/dashboard/categories/generateSlug?name=' + name.value)
                .then(response => response.json())
                .then(data => slug.value = data.slug)
        })
    </script>
@endsection
