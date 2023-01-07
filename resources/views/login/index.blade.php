@extends('layouts.main')

@section('container')
    <div class="max-w-full  mx-auto pt-7">
        <div class="w-full text-3xl text-center font-chelten">Log in to your account </div>
        <div class="mt-5">
            <form action="/login" method="POST">
                @csrf
                <div class="flex justify-center">
                    <div class="w-1/3">
                        <div class="flex flex-col">
                            <label for="email" class="text-sm font-franklin font-bold mb-1">Email Address</label>
                            <input type="email" name="email" id="email" autofocus required
                                value="{{ old('email') }}"
                                class="block font-semibold px-3 py-2 border rounded focus:ring-0">
                            @error('email')
                                <p class="text-xs mt-1 text-red-700 font-franklin">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="flex flex-col mt-5">
                            <label for="password" class="text-sm font-franklin font-bold mb-1">Password</label>
                            <input type="password" name="password" id="password" required
                                class="block font-semibold px-3 py-2 border rounded focus:ring-0">
                            @error('password')
                                <p class="text-xs mt-1 text-red-700 font-franklin">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="mt-7 text-sm font-franklin">Not Register? <a href="/register"
                                class="underline underline-offset-2 hover:font-semibold">Register Now!</a></div>
                        @if (session()->has('loginError'))
                            <div class="mt-3 text-sm text-red-700 font-franklin">{{ session('loginError') }}</div>
                        @endif
                        <button
                            class="mt-2.5 w-full px-3 py-3 bg-black text-white font-franklin font-bold rounded shadow-md hover:bg-[#333333]">Log
                            In</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
