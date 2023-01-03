@extends('layouts.main')

@section('container')
    <div class="max-w-full h-36 px-80 py-7 bg-[#F7F7F7]">
        <div class="text-xs text-[#666666]">Showing x result for:</div>
        <div class="flex w-3/4 group hover:border-b">
            <div class="w-full h-12">
                <form action="">
                    <input type="text"
                        class="appearance-none bg-transparent border-none w-full text-4xl font-franklin focus:ring-0">
                </form>
            </div>
            <button class="w-10 h-full my-auto opacity-60 group-hover:opacity-80 focus:opacity-100" type="submit">
                <img src="{{ asset('assets/icons/search.png') }}" alt="icon">
            </button>
        </div>
    </div>

    <div class="max-w-full px-80 py-7 mt-3">
        <div class="mb-10">
            <div class="flex">
                <div class="w-1/12 text-xs font-karnak mr-9">{{ now()->toFormattedDateString() }}
                </div>
                <div class="w-11/12">
                    <a href="#" class="group">
                        <div class="flex">
                            <div class="w-2/3 mr-5">
                                <div class="text-xs font-karnak">CATEGORY</div>
                                <h2 class="text-2xl font-chelten mb-2 group-hover:text-gray-700">
                                    Title</h2>
                                <h4 class="text-[#363636] font-imperial">Lorem ipsum dolor sit amet consectetur adipisicing
                                    elit. Inventore amet dicta dolorum, dolor similique maiores.</h4>
                                <div class="text-xs font-karnak mt-1">By Author
                                </div>
                            </div>
                            <div class="w-1/3">
                                <img src="https://source.unsplash.com/270x150" alt="image" class="rounded shadow-lg">
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
        <div class="mb-10">
            <hr class="bg-slate-300 border border-t-1 mb-5">
            <div class="flex">
                <div class="w-1/12 text-xs font-karnak mr-9">{{ now()->toFormattedDateString() }}
                </div>
                <div class="w-11/12">
                    <a href="#" class="group">
                        <div class="flex">
                            <div class="w-2/3 mr-5">
                                <div class="text-xs font-karnak">CATEGORY</div>
                                <h2 class="text-2xl font-chelten mb-2 group-hover:text-gray-700">
                                    Title</h2>
                                <h4 class="text-[#363636] font-imperial">Lorem ipsum dolor sit amet consectetur adipisicing
                                    elit. Inventore amet dicta dolorum, dolor similique maiores.</h4>
                                <div class="text-xs font-karnak mt-1">By Author
                                </div>
                            </div>
                            <div class="w-1/3">
                                <img src="https://source.unsplash.com/270x150" alt="image" class="rounded shadow-lg">
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection
