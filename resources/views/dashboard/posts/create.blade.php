@extends('dashboard.layouts.main')

@section('container')
    <div class="px-4 py-3 mb-8 bg-white rounded-lg shadow-md">
        <form action="/dashboard/posts" method="POST">
            @csrf
            <div>
                <label for="title" class="block text-sm">
                    <span class="text-gray-700 font-semibold">Title</span>
                    <input type="text" id="title" name="title" required value="{{ old('title') }}"
                        class="block px-2 py-1 w-full mt-1 text-sm border border-gray-500 rounded focus:border-sky-800 focus:outline-none focus:shadow-sm focus:shadow-[#2c3e50] focus:transition-shadow" />
                </label>

                <label for="slug" class="block mt-4 text-sm">
                    <span class="text-gray-700 font-semibold">Slug</span>
                    <input type="text" id="slug" name="slug" disabled value="{{ old('slug') }}"
                        class="block px-2 py-1 w-full mt-1 text-sm border border-gray-500 rounded" />
                </label>

                <label for="category" class="block mt-4 text-sm">
                    <span class="text-gray-700 font-semibold">
                        Category
                    </span>
                    <select name="category_id" id="category" required
                        class="block w-full mt-1 text-sm form-select px-2 py-1 border border-gray-500 rounded focus:border-sky-800 focus:outline-none focus:shadow-sm focus:shadow-[#2c3e50] focus:transition-shadow">
                        <option value="" class="font-semibold">Select Category</option>
                        @foreach ($categories as $category)
                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                        @endforeach
                    </select>
                </label>

                <div class="mt-4">
                    <label for="body" class="block text-sm">
                        <span class="text-gray-700 font-semibold">Body</span>
                        <input id="body" type="hidden" name="body">
                        <trix-editor input="body"></trix-editor>
                    </label>
                </div>


                <button
                    class="mt-10 w-full px-3 py-3 bg-black text-white font-franklin font-bold rounded shadow-md hover:bg-[#333333]">Create
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
    </script>
@endsection
