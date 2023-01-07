@extends('layouts.main')

@section('container')
    <div class="max-w-full  mx-auto pt-7">
        <div class="w-full text-3xl text-center font-chelten">Log in to your account </div>
        <div class="mt-5">
            <form action="POST">
                <div class="flex justify-center">
                    <div class="w-1/3">
                        <div class="flex flex-col">
                            <label for="email" class="text-sm font-franklin font-bold mb-1">Email Address</label>
                            <input type="email" name="email" id="email"
                                class="block font-semibold px-3 py-2 border rounded focus:ring-0">
                        </div>
                        <div class="flex flex-col mt-5">
                            <label for="password" class="text-sm font-franklin font-bold mb-1">Password</label>
                            <input type="password" name="password" id="password"
                                class="block font-semibold px-3 py-2 border rounded focus:ring-0">
                        </div>
                        <div class="mt-7 text-sm font-franklin">Not Register? <a href="/register"
                                class="underline underline-offset-2 hover:font-semibold">Register Now!</a></div>
                        <button
                            class="mt-2.5 w-full px-3 py-3 bg-black text-white font-franklin font-bold rounded shadow-md hover:bg-[#333333]">Log
                            In</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
