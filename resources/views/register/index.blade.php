@extends('layouts.main')

@section('container')
    <div class="max-w-full  mx-auto pt-7">
        <div class="w-full text-3xl text-center font-chelten">Create your free account </div>
        <div class="mt-5">
            <form action="POST">
                <div class="flex justify-center">
                    <div class="w-1/3">
                        <div class="flex flex-col">
                            <label for="name" class="text-sm font-franklin font-bold mb-1">Name</label>
                            <input type="name" name="name" id="name"
                                class="block font-semibold px-3 py-2 border border-black rounded focus:ring-0">
                        </div>
                        <div class="flex flex-col mt-5">
                            <label for="username" class="text-sm font-franklin font-bold mb-1">Username</label>
                            <input type="username" name="username" id="username"
                                class="block font-semibold px-3 py-2 border border-black rounded focus:ring-0">
                        </div>
                        <div class="flex flex-col mt-5">
                            <label for="email" class="text-sm font-franklin font-bold mb-1">Email Address</label>
                            <input type="email" name="email" id="email"
                                class="block font-semibold px-3 py-2 border rounded focus:ring-0">
                        </div>
                        <div class="flex flex-col mt-5">
                            <label for="password" class="text-sm font-franklin font-bold mb-1">Password</label>
                            <input type="password" name="password" id="password"
                                class="block font-semibold px-3 py-2 border rounded focus:ring-0">
                        </div>
                        <div class="mt-10 text-sm font-franklin">By creating an account, you agree to the <span
                                class="underline underline-offset-2 hover:font-semibold hover:cursor-pointer">Terms of Service</span> and
                            acknowledge our <span class="underline underline-offset-2 hover:font-semibold hover:cursor-pointer">Privacy
                                Policy</span>.</div>
                        <button
                            class="mt-3 w-full px-3 py-3 bg-black text-white font-franklin font-bold rounded shadow-md hover:bg-[#333333]">Create
                            Account</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
