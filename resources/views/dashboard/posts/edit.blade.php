{{-- @dd($post->image) --}}
@extends('dashboard.layouts.main')

@section('container')
    <div class="px-4 py-3 mb-8 bg-white rounded-lg shadow-md">
        <form action="/dashboard/posts/{{ $post->slug }}" method="POST" enctype="multipart/form-data">
            @method('put')
            @csrf
            <div>
                <label for="title" class="block text-sm">
                    <span class="text-gray-700 font-semibold">Title</span>
                    <input type="text" id="title" name="title" required value="{{ old('title', $post->title) }}"
                        autofocus
                        class="block px-2 py-1 w-full mt-1 text-sm border border-gray-500 rounded focus:border-sky-800 focus:outline-none focus:shadow-sm focus:shadow-[#2c3e50] focus:transition-shadow @error('title')
                        border-red-600 focus:border-red-600 focus:ring-red-600
                        @enderror" />
                    @error('title')
                        <p class="text-xs mt-1 text-red-700 font-franklin">{{ $message }}</p>
                    @enderror
                </label>

                <label for="slug" class="block mt-4 text-sm">
                    <span class="text-gray-700 font-semibold">Slug</span>
                    <input type="text" id="slug" name="slug" required value="{{ old('slug', $post->slug) }}"
                        class="block px-2 py-1 w-full mt-1 text-sm border border-gray-500 rounded @error('slug')
                        border-red-600 focus:border-red-600 focus:ring-red-600
                        @enderror" />
                    @error('slug')
                        <p class="text-xs mt-1 text-red-700 font-franklin">{{ $message }}</p>
                    @enderror
                </label>

                <label for="category_id" class="block mt-4 text-sm">
                    <span class="text-gray-700 font-semibold">
                        Category
                    </span>
                    <select name="category_id" id="category" required
                        class="block w-full mt-1 text-sm form-select px-2 py-1 border border-gray-500 rounded focus:border-sky-800 focus:outline-none focus:shadow-sm focus:shadow-[#2c3e50] focus:transition-shadow">
                        <option value="" class="font-semibold">Select Category</option>
                        @foreach ($categories as $category)
                            @if (old('category_id', $post->category_id) == $category->id)
                                <option value="{{ $category->id }}" selected>{{ $category->name }}</option>
                            @else
                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                            @endif
                        @endforeach
                    </select>
                    @error('category_id')
                        <p class="text-xs mt-1 text-red-700 font-franklin">{{ $message }}</p>
                    @enderror
                </label>

                <label for="image" class="block text-sm mt-4">
                    <span class="text-gray-700 font-semibold">
                        Post Cover Image
                    </span>
                    <input type="hidden" name="oldImage" value="{{ $post->image }}">
                    @if ($post->image)
                        <img src="{{ asset('storage/' . $post->image) }}" alt="preview" id="preview"
                            class="block sm:flex-row flex-col min-w-0 my-7 mx-auto rounded shadow-md" width="700px">
                    @else
                        <img id="preview" class="hidden sm:flex-row flex-col min-w-0 my-7 mx-auto rounded shadow-md"
                            width="700px">
                    @endif
                    <input
                        class="block w-full text-sm mt-1 cursor-pointer border border-gray-500 rounded focus:border-sky-800 focus:outline-none focus:shadow-sm focus:shadow-[#2c3e50] focus:transition-shadow file:rounded file:border-0
                        file:text-sm file:text-white file:px-2 file:py-1 file:cursor-pointer file:bg-gradient-to-tl from-gray-900 to-slate-800 file:opacity-90 hover:font-semibold hover:opacity-100 @error('image')
                        border-red-600 focus:border-red-600 focus:ring-red-600
                        @enderror"
                        type="file" id="image" name="image" onchange="imgPreview()" />
                    @error('image')
                        <p class="text-xs mt-1 text-red-700 font-franklin">{{ $message }}</p>
                    @enderror
                </label>

                <div class="mt-4">
                    <label for="body" class="block text-sm">
                        <span class="text-gray-700 font-semibold">Body</span>
                        <input id="body" type="hidden" name="body" value="{{ old('body', $post->body) }}">
                        <trix-editor input="body"></trix-editor>
                        @error('body')
                            <p class="text-xs mt-1 text-red-700 font-franklin">{{ $message }}</p>
                        @enderror
                    </label>
                </div>
                <button
                    class="mt-10 w-full px-3 py-3 bg-black text-white font-franklin font-bold rounded shadow-md hover:bg-[#333333]">Update
                    Post</button>
            </div>
        </form>
    </div>

    <script>
        const title = document.getElementById('title');
        const slug = document.getElementById('slug');

        title.addEventListener('change', () => {
            fetch('/dashboard/posts/generateSlug?title=' + title.value)
                .then(response => response.json())
                .then(data => slug.value = data.slug)
        })

        document.addEventListener('trix-file-accept', (e) => {
            e.preventDefault()
        })

        function imgPreview() {
            const img = document.getElementById('image');
            const imgPreview = document.getElementById('preview');
            const imgPreview2 = document.getElementById('preview2');

            const oFReader = new FileReader();
            oFReader.readAsDataURL(img.files[0]);

            oFReader.onload = function(oFREvent) {
                imgPreview.classList.remove('hidden');
                imgPreview.classList.add('block');

                imgPreview.src = oFREvent.target.result;
            };
        }
    </script>
@endsection
