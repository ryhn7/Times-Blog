@if ($title == 'Login' || $title == 'Register')
    <nav class="px-2 sm:px-4 py-2.5 border shadow-lg">
        <div class="container flex flex-wrap items-center justify-center px-44">
            <a href="/" class=" my-auto">
                <img src="{{ asset('assets/img/nyt-logo.svg') }}" class="h-6 mx-auto sm:h-9" width="70%" height="70%"
                    alt="Times Logo" />
            </a>
        </div>
    </nav>
@else
    <nav class="px-2 sm:px-4 py-2.5">
        @if ($title == 'Search')
            <div class="container flex flex-wrap items-center justify-between px-44 mx-auto">
                <a href="/" class="flex items-center">
                    <img src="{{ asset('assets/img/times.svg') }}" class="h-6 mr-3 sm:h-9" alt="Times Logo" />
                    <span class="self-center text-2xl font-chelten whitespace-nowrap">Times</span>
                </a>
                <div class="flex md:order-2">
                    <div class="pl-2.5 -mr-4 w-200 my-auto">
                        @auth
                            <div>
                                <button id="dropdownNavbarLink" data-dropdown-toggle="dropdownNavbar"
                                    class="flex items-center justify-between w-full py-2 pl-3 pr-4 rounded group hover:bg-slate-200 md:border-0 md:p-0 md:w-auto">
                                    <div class="">
                                        <span class="inline-block py-1 px-1.5 text-sm group-hover:font-semibold"> Hello,
                                            {{ auth()->user()->name }}</span>
                                    </div>
                                    <svg class="w-5 h-5 ml-1" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd"
                                            d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                            clip-rule="evenodd"></path>
                                    </svg>
                                </button>
                                <!-- Dropdown menu -->
                                <div id="dropdownNavbar"
                                    class="z-10 hidden font-normal bg-white divide-y divide-gray-100 rounded shadow w-44 dark:bg-gray-700 dark:divide-gray-600">
                                    <ul class="py-1 text-sm text-gray-700 dark:text-gray-400"
                                        aria-labelledby="dropdownLargeButton">
                                        <li>
                                            <a href="/dashboard" class="block px-4 py-2 hover:bg-gray-300">Dashboard</a>
                                        </li>
                                    </ul>
                                    <div class="py-1">
                                        <form action="/logout" method="POST">
                                            @csrf
                                            <button type="submit"
                                                class="w-full block px-4 py-2 text-sm text-left text-gray-700 hover:bg-gray-300">Log
                                                Out</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        @else
                            <div
                                class="w-full rounded-md shadow-lg bg-[#567B95] px-2 py-1.5 text-white font-semibold hover:bg-[#346890] focus:bg-[#346890]">
                                <a href="/login">Log In</a>
                            </div>
                        @endauth
                    </div>
                </div>
                <div class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1" id="navbar-search">
                    <div class="relative mt-3 md:hidden">
                        <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                            <svg class="w-5 h-5 text-gray-500" aria-hidden="true" fill="currentColor"
                                viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                                    clip-rule="evenodd"></path>
                            </svg>
                        </div>
                        {{-- when collapse --}}
                        <form action="/search" method="GET">
                            <input type="text" id="search" name="search"
                                class="block w-full p-2 pl-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-[#346890] focus:border-[#346890]"
                                placeholder="Search... "value="{{ request('search') }}">
                        </form>
                    </div>
                    <ul
                        class="flex flex-col p-4 mt-4 -translate-x-10 border border-gray-100 rounded-lg bg-gray-50 md:flex-row md:space-x-8 md:mt-0 md:text-sm md:font-medium md:border-0 md:bg-white">
                        <li>
                            <a href="/home"
                                class="block py-2 pl-3 pr-4 {{ $title === 'Home' ? 'text-[#587B8F]' : 'text-gray-700' }} text-lg font-chelten font-semibold rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-[#346890] md:p-0"
                                aria-current="page">Home</a>
                        </li>
                        <li>
                            <a href="/about"
                                class="block py-2 pl-3 pr-4 {{ $title === 'About' ? 'text-[#587B8F]' : 'text-gray-700' }} text-lg font-chelten font-semibold rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-[#346890] md:p-0">About</a>
                        </li>
                        <li>
                            <a href="/"
                                class="block py-2 pl-3 pr-4 {{ $title === 'All Post' ? 'text-[#587B8F]' : 'text-gray-700' }} text-lg font-chelten font-semibold rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-[#346890] md:p-0">Blog</a>
                        </li>
                    </ul>
                </div>
            </div>
        @elseif ($title == 'Category')
            <div class="container flex flex-wrap items-center justify-between px-44 mx-auto">
                <a href="/" class="flex items-center">
                    <img src="{{ asset('assets/img/times.svg') }}" class="h-6 mr-3 sm:h-9" alt="Times Logo" />
                    <span class="self-center text-2xl font-chelten whitespace-nowrap">Times</span>
                </a>
                <div class="flex md:order-2">
                    <div class="pl-2.5 -mr-4 w-200 my-auto">
                        @auth
                            <div>
                                <button id="dropdownNavbarLink" data-dropdown-toggle="dropdownNavbar"
                                    class="flex items-center justify-between w-full py-2 pl-3 pr-4 rounded group hover:bg-slate-200 md:border-0 md:p-0 md:w-auto">
                                    <div class="">
                                        <span class="inline-block py-1 px-1.5 text-sm group-hover:font-semibold"> Hello,
                                            {{ auth()->user()->name }}</span>
                                    </div>
                                    <svg class="w-5 h-5 ml-1" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd"
                                            d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                            clip-rule="evenodd"></path>
                                    </svg>
                                </button>
                                <!-- Dropdown menu -->
                                <div id="dropdownNavbar"
                                    class="z-10 hidden font-normal bg-white divide-y divide-gray-100 rounded shadow w-44 dark:bg-gray-700 dark:divide-gray-600">
                                    <ul class="py-1 text-sm text-gray-700 dark:text-gray-400"
                                        aria-labelledby="dropdownLargeButton">
                                        <li>
                                            <a href="/dashboard" class="block px-4 py-2 hover:bg-gray-300">Dashboard</a>
                                        </li>
                                    </ul>
                                    <div class="py-1">
                                        <form action="/logout" method="POST">
                                            @csrf
                                            <button type="submit"
                                                class="w-full block px-4 py-2 text-sm text-left text-gray-700 hover:bg-gray-300">Log
                                                Out</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        @else
                            <div
                                class="w-full rounded-md shadow-lg bg-[#567B95] px-2 py-1.5 text-white font-semibold hover:bg-[#346890] focus:bg-[#346890]">
                                <a href="/login">Log In</a>
                            </div>
                        @endauth
                    </div>
                </div>
                <div class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1"
                    id="navbar-search">
                    <div class="relative mt-3 md:hidden">
                        <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                            <svg class="w-5 h-5 text-gray-500" aria-hidden="true" fill="currentColor"
                                viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                                    clip-rule="evenodd"></path>
                            </svg>
                        </div>
                        {{-- when collapse --}}
                        <form action="/search" method="GET">
                            <input type="text" id="search" name="search"
                                class="block w-full p-2 pl-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-[#346890] focus:border-[#346890]"
                                placeholder="Search... "value="{{ request('search') }}">
                        </form>
                    </div>
                    <ul
                        class="flex flex-col p-4 mt-4 -translate-x-10 border border-gray-100 rounded-lg bg-gray-50 md:flex-row md:space-x-8 md:mt-0 md:text-sm md:font-medium md:border-0 md:bg-white">
                        <li>
                            <a href="/home"
                                class="block py-2 pl-3 pr-4 {{ $title === 'Home' ? 'text-[#587B8F]' : 'text-gray-700' }} text-lg font-chelten font-semibold rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-[#346890] md:p-0"
                                aria-current="page">Home</a>
                        </li>
                        <li>
                            <a href="/about"
                                class="block py-2 pl-3 pr-4 {{ $title === 'About' ? 'text-[#587B8F]' : 'text-gray-700' }} text-lg font-chelten font-semibold rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-[#346890] md:p-0">About</a>
                        </li>
                        <li>
                            <a href="/"
                                class="block py-2 pl-3 pr-4 {{ $title === 'All Post' ? 'text-[#587B8F]' : 'text-gray-700' }} text-lg font-chelten font-semibold rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-[#346890] md:p-0">Blog</a>
                        </li>
                    </ul>
                </div>
            </div>
        @elseif ($title == 'Author')
            <div class="container flex flex-wrap items-center justify-between px-44 mx-auto">
                <a href="/" class="flex items-center">
                    <img src="{{ asset('assets/img/times.svg') }}" class="h-6 mr-3 sm:h-9" alt="Times Logo" />
                    <span class="self-center text-2xl font-chelten whitespace-nowrap">Times</span>
                </a>
                <div class="flex md:order-2">
                    <div class="pl-2.5 -mr-4 w-200 my-auto">
                        @auth
                            <div>
                                <button id="dropdownNavbarLink" data-dropdown-toggle="dropdownNavbar"
                                    class="flex items-center justify-between w-full py-2 pl-3 pr-4 rounded group hover:bg-slate-200 md:border-0 md:p-0 md:w-auto">
                                    <div class="">
                                        <span class="inline-block py-1 px-1.5 text-sm group-hover:font-semibold"> Hello,
                                            {{ auth()->user()->name }}</span>
                                    </div>
                                    <svg class="w-5 h-5 ml-1" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd"
                                            d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                            clip-rule="evenodd"></path>
                                    </svg>
                                </button>
                                <!-- Dropdown menu -->
                                <div id="dropdownNavbar"
                                    class="z-10 hidden font-normal bg-white divide-y divide-gray-100 rounded shadow w-44 dark:bg-gray-700 dark:divide-gray-600">
                                    <ul class="py-1 text-sm text-gray-700 dark:text-gray-400"
                                        aria-labelledby="dropdownLargeButton">
                                        <li>
                                            <a href="/dashboard" class="block px-4 py-2 hover:bg-gray-300">Dashboard</a>
                                        </li>
                                    </ul>
                                    <div class="py-1">
                                        <form action="/logout" method="POST">
                                            @csrf
                                            <button type="submit"
                                                class="w-full block px-4 py-2 text-sm text-left text-gray-700 hover:bg-gray-300">Log
                                                Out</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        @else
                            <div
                                class="w-full rounded-md shadow-lg bg-[#567B95] px-2 py-1.5 text-white font-semibold hover:bg-[#346890] focus:bg-[#346890]">
                                <a href="/login">Log In</a>
                            </div>
                        @endauth
                    </div>
                </div>
                <div class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1"
                    id="navbar-search">
                    <div class="relative mt-3 md:hidden">
                        <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                            <svg class="w-5 h-5 text-gray-500" aria-hidden="true" fill="currentColor"
                                viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                                    clip-rule="evenodd"></path>
                            </svg>
                        </div>
                        {{-- when collapse --}}
                        <form action="/search" method="GET">
                            <input type="text" id="search" name="search"
                                class="block w-full p-2 pl-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-[#346890] focus:border-[#346890]"
                                placeholder="Search... "value="{{ request('search') }}">
                        </form>
                    </div>
                    <ul
                        class="flex flex-col p-4 mt-4 -translate-x-10 border border-gray-100 rounded-lg bg-gray-50 md:flex-row md:space-x-8 md:mt-0 md:text-sm md:font-medium md:border-0 md:bg-white">
                        <li>
                            <a href="/home"
                                class="block py-2 pl-3 pr-4 {{ $title === 'Home' ? 'text-[#587B8F]' : 'text-gray-700' }} text-lg font-chelten font-semibold rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-[#346890] md:p-0"
                                aria-current="page">Home</a>
                        </li>
                        <li>
                            <a href="/about"
                                class="block py-2 pl-3 pr-4 {{ $title === 'About' ? 'text-[#587B8F]' : 'text-gray-700' }} text-lg font-chelten font-semibold rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-[#346890] md:p-0">About</a>
                        </li>
                        <li>
                            <a href="/"
                                class="block py-2 pl-3 pr-4 {{ $title === 'All Post' ? 'text-[#587B8F]' : 'text-gray-700' }} text-lg font-chelten font-semibold rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-[#346890] md:p-0">Blog</a>
                        </li>
                    </ul>
                </div>
            </div>
        @else
            <div class="container flex flex-wrap items-center justify-between px-44 mx-auto">
                <a href="/" class="flex items-center">
                    <img src="{{ asset('assets/img/times.svg') }}" class="h-6 mr-3 sm:h-9" alt="Times Logo" />
                    <span class="self-center text-2xl font-chelten whitespace-nowrap">Times</span>
                </a>
                <div class="flex md:order-2">
                    <button type="button" data-collapse-toggle="navbar-search" aria-controls="navbar-search"
                        aria-expanded="false"
                        class="md:hidden text-gray-500 hover:bg-gray-100 focus:outline-none focus:ring-4 focus:ring-gray-200 rounded-lg text-sm p-2.5 mr-1">
                        <svg class="w-5 h-5" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                                clip-rule="evenodd"></path>
                        </svg>
                        <span class="sr-only">Search</span>
                    </button>
                    <div class="relative hidden md:block">
                        {{-- <div class="absolute inset-y-0 left-0 flex items-center pl-2 pointer-events-none">
                        <svg class="w-5 h-5 text-gray-500" aria-hidden="true" fill="currentColor"
                            viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                                clip-rule="evenodd"></path>
                        </svg>
                        <span class="sr-only">Search icon</span>
                    </div> --}}
                        <form action="/search" method="GET">
                            {{-- <input type="text" id="search" name="search"
                            class="peer cursor-pointer relative z-10 h-9 w-9 rounded-md border bg-transparent pl-12 outline-none focus:block focus:w-full focus:p-2 focus:pl-10 focus:text-sm focus:text-gray-900 focus:border-gray-300 focus:ring-0 focus:rounded-lg"
                            value="{{ request('search') }}"> --}}

                            {{-- alternatif search --}}
                            <input type="search" id="search" name="search"
                                class="peer cursor-pointer relative z-10 h-9 w-9 rounded-md border bg-transparent pl-2 outline-none focus:w-full focus:cursor-text focus:border-gray-300 focus:pl-16 focus:pr-4 focus:text-sm focus:ring-0" />
                            <svg xmlns="http://www.w3.org/2000/svg"
                                class="absolute inset-y-0 my-auto -left-1 flex items-center pointer-events-none h-8 w-12 border-r border-transparent px-3.5 stroke-gray-500 peer-focus:border-gray-300"
                                fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                            </svg>
                        </form>
                    </div>
                    <button data-collapse-toggle="navbar-search" type="button"
                        class="inline-flex items-center p-2 text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200"
                        aria-controls="navbar-search" aria-expanded="false">
                        <span class="sr-only">Open menu</span>
                        <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
                                clip-rule="evenodd"></path>
                        </svg>
                    </button>
                    <div class="pl-2.5 -mr-4 w-200 my-auto">
                        @auth
                            <div>
                                <button id="dropdownNavbarLink" data-dropdown-toggle="dropdownNavbar"
                                    class="flex items-center justify-between w-full py-2 pl-3 pr-4 rounded group hover:bg-slate-200 md:border-0 md:p-0 md:w-auto">
                                    <div class="">
                                        <span class="inline-block py-1 px-2 text-sm group-hover:font-semibold"> Hello,
                                            {{ auth()->user()->name }}</span>
                                    </div>
                                    <svg class="w-5 h-5 ml-1" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd"
                                            d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                            clip-rule="evenodd"></path>
                                    </svg>
                                </button>
                                <!-- Dropdown menu -->
                                <div id="dropdownNavbar"
                                    class="z-10 hidden font-normal bg-white divide-y divide-gray-100 rounded shadow w-44 dark:bg-gray-700 dark:divide-gray-600">
                                    <ul class="py-1 text-sm text-gray-700 dark:text-gray-400"
                                        aria-labelledby="dropdownLargeButton">
                                        <li>
                                            <a href="/dashboard" class="block px-4 py-2 hover:bg-gray-300">Dashboard</a>
                                        </li>
                                    </ul>
                                    <div class="py-1">
                                        <form action="/logout" method="POST">
                                            @csrf
                                            <button type="submit"
                                                class="w-full block px-4 py-2 text-sm text-left text-gray-700 hover:bg-gray-300">Log
                                                Out</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        @else
                            <div
                                class="w-full rounded-md shadow-lg bg-[#567B95] px-2 py-1.5 text-white font-semibold hover:bg-[#346890] focus:bg-[#346890]">
                                <a href="/login">Log In</a>
                            </div>
                        @endauth
                    </div>
                </div>
                <div class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1"
                    id="navbar-search">
                    <div class="relative mt-3 md:hidden">
                        <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                            <svg class="w-5 h-5 text-gray-500" aria-hidden="true" fill="currentColor"
                                viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                                    clip-rule="evenodd"></path>
                            </svg>
                        </div>
                        {{-- when collapse --}}
                        <form action="/search" method="GET">
                            <input type="text" id="search" name="search"
                                class="block w-full p-2 pl-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-[#346890] focus:border-[#346890]"
                                placeholder="Search... "value="{{ request('search') }}">
                        </form>
                    </div>
                    <ul class="flex flex-col p-4 mt-4 border border-gray-100 rounded-lg bg-gray-50 md:flex-row md:space-x-8 md:mt-0 md:text-sm md:font-medium md:border-0 md:bg-white"
                        id="menu">
                        <li>
                            <a href="/home"
                                class="block py-2 pl-3 pr-4 {{ $title === 'Home' ? 'text-[#587B8F]' : 'text-gray-700' }} text-lg font-chelten font-semibold rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-[#346890] md:p-0"
                                aria-current="page">Home</a>
                        </li>
                        <li>
                            <a href="/about"
                                class="block py-2 pl-3 pr-4 {{ $title === 'About' ? 'text-[#587B8F]' : 'text-gray-700' }} text-lg font-chelten font-semibold rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-[#346890] md:p-0">About</a>
                        </li>
                        <li>
                            <a href="/"
                                class="block py-2 pl-3 pr-4 {{ $title === 'All Post' ? 'text-[#587B8F]' : 'text-gray-700' }} text-lg font-chelten font-semibold rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-[#346890] md:p-0">Blog</a>
                        </li>
                    </ul>
                </div>
            </div>
        @endif
    </nav>
@endif
