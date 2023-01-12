{{-- @dd($category) --}}
@extends('dashboard.layouts.main')

@section('container')
    <div class="mt-2 mb-3 -mx-3">
        @if (session()->has('success'))
            <div class="bg-green-100 border border-green-400 text-green-700 mx-3 mb-5 px-4 py-3 rounded relative"
                role="alert">
                <strong class="font-bold">Woaa!</strong>
                <span class="block sm:inline">{{ session('success') }}</span>
                <span class="absolute top-0 bottom-0 right-0 px-4 py-3">
                </span>
            </div>
        @endif

        <div class="flex flex-wrap">
            <!-- card 2 -->

            <div class="w-full max-w-full px-3 md:w-1/2 md:flex-none lg:w-1/3 lg:flex-none">
                <div
                    class="border-black/12.5 shadow-soft-xl relative flex h-auto min-w-0 flex-col break-words rounded-2xl border-0 border-solid bg-white bg-clip-border">
                    <div class="border-black/12.5 mb-0 rounded-t-2xl border-b-0 border-solid bg-white p-6 pb-0">
                        <h6 class="font-semibold text-xl mb-3">Edit Post Categories</h6>
                    </div>
                    <div class="flex-auto p-4">
                        <form action="/dashboard/categories/{{ $category->id }}" method="POST">
                            @method('put')
                            @csrf
                            <div>
                                <label for="name" class="block text-sm">
                                    <span class="text-gray-700 font-semibold">Category Name</span>
                                    <input type="text" id="name" name="name" required
                                        value="{{ old('name', $category->name) }}" autofocus
                                        class="block px-2 py-1 w-full mt-1 text-sm border border-gray-500 rounded focus:border-sky-800 focus:outline-none focus:shadow-sm focus:shadow-[#2c3e50] focus:transition-shadow @error('name')
                                    border-red-600 focus:border-red-600 focus:ring-red-600
                                    @enderror" />
                                    @error('name')
                                        <p class="text-xs mt-1 text-red-700 font-franklin">{{ $message }}</p>
                                    @enderror
                                </label>

                                <label for="slug" class="block mt-4 text-sm">
                                    <span class="text-gray-700 font-semibold">Slug</span>
                                    <input type="text" id="slug" name="slug" required
                                        value="{{ old('slug', $category->slug) }}"
                                        class="block px-2 py-1 w-full mt-1 text-sm border border border-gray-500 rounded focus:border-sky-800 focus:outline-none focus:shadow-sm focus:shadow-[#2c3e50] focus:transition-shadow @error('slug')
                                    border-red-600 focus:border-red-600 focus:ring-red-600
                                    @enderror" />
                                    @error('slug')
                                        <p class="text-xs mt-1 text-red-700 font-franklin">{{ $message }}</p>
                                    @enderror
                                </label>

                                <button
                                    class="mt-10 w-full px-3 py-3 bg-black text-white font-franklin font-bold rounded shadow-md hover:bg-[#333333]">Edit
                                    Category</button>
                            </div>
                        </form>
                    </div>
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
