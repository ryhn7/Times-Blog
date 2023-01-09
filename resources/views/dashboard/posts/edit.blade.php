@extends('dashboard.layouts.main')

@section('container')
    <div class="px-4 py-3 mb-8 bg-white rounded-lg shadow-md">
        <form action="/dashboard/posts" method="PUT">
            @csrf
            <div>
                <label for="title" class="block text-sm">
                    <span class="text-gray-700 font-semibold">Title</span>
                    <input type="text" id="title" name="title"
                        class="block px-2 py-1 w-full mt-1 text-sm border border-gray-500 rounded focus:border-sky-800 focus:outline-none focus:shadow-sm focus:shadow-[#2c3e50] focus:transition-shadow" />
                </label>

                <label for="slug" class="block mt-4 text-sm">
                    <span class="text-gray-700 font-semibold">Slug</span>
                    <input type="text" id="slug" name="slug" disabled
                        class="block px-2 py-1 w-full mt-1 text-sm border border-gray-500 rounded" />
                </label>

                <label for="category" class="block mt-4 text-sm">
                    <span class="text-gray-700 font-semibold">
                        Category
                    </span>
                    <select name="category_id"
                        class="block w-full mt-1 text-sm form-select px-2 py-1 border border-gray-500 rounded focus:border-sky-800 focus:outline-none focus:shadow-sm focus:shadow-[#2c3e50] focus:transition-shadow">
                        <option value="">Select Category</option>
                        <option>$1,000</option>
                        <option>$5,000</option>
                        <option>$10,000</option>
                        <option>$25,000</option>
                    </select>
                </label>
                <button
                    class="mt-10 w-full px-3 py-3 bg-black text-white font-franklin font-bold rounded shadow-md hover:bg-[#333333]">Edit
                    Post</button>
            </div>
        </form>
    </div>
@endsection
