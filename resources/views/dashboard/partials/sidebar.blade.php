    <!-- sidenav  -->
    <aside
        class="max-w-62.5 ease-nav-brand z-990 fixed inset-y-0 my-4 ml-4 block w-full -translate-x-full flex-wrap items-center justify-between overflow-y-auto rounded-2xl border-0 bg-white p-0 antialiased shadow-none transition-transform duration-200 xl:left-0 xl:translate-x-0 xl:bg-transparent">
        <div class="h-19.5">
            <i class="absolute top-0 right-0 hidden p-4 opacity-50 cursor-pointer fas fa-times text-slate-400 xl:hidden"
                sidenav-close></i>
            <a class="block px-8 py-6 m-0 text-sm whitespace-nowrap text-slate-700">
                <img src="{{ asset('assets/img/times.svg') }}"
                    class="inline h-full max-w-full transition-all duration-200 ease-nav-brand max-h-8" alt="main_logo" />
                <span class="ml-1 self-center text-lg font-chelten whitespace-nowrap">Times Dashboard</span>
            </a>
        </div>

        <hr class="h-px mt-0 bg-transparent bg-gradient-to-r from-transparent via-black/40 to-transparent mb-5" />

        <div class="items-center block w-auto max-h-screen overflow-auto h-sidenav grow basis-full">
            <ul class="flex flex-col pl-0 mb-0">
                <li class="mt-0.5 w-full">
                    <a class="py-2.7 text-sm ease-nav-brand my-0 mx-4 flex items-center whitespace-nowrap rounded-lg px-4 {{ Request::is('dashboard') ? 'shadow-soft-xl bg-white font-semibold text-slate-700' : '' }} transition-colors"
                        href="/dashboard">
                        <div
                            class="{{ Request::is('dashboard') ? 'bg-gradient-to-tl from-gray-900 to-slate-800 opacity-80 ' : '' }} shadow-soft-2xl mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-white bg-center stroke-0 text-center xl:p-2.5">
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                viewBox="0,0,256,256" width="12px" height="12px" fill-rule="nonzero">
                                <g fill="{{ Request::is('dashboard') ? '#ffffff' : '#000000' }}" fill-rule="nonzero"
                                    stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter"
                                    stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none"
                                    font-weight="none" font-size="none" text-anchor="none"
                                    style="mix-blend-mode: normal">
                                    <g transform="scale(10.66667,10.66667)">
                                        <path
                                            d="M9,2h-5c-1.103,0 -2,0.897 -2,2v7c0,1.103 0.897,2 2,2h5c1.103,0 2,-0.897 2,-2v-7c0,-1.103 -0.897,-2 -2,-2zM20,2h-5c-1.103,0 -2,0.897 -2,2v3c0,1.103 0.897,2 2,2h5c1.103,0 2,-0.897 2,-2v-3c0,-1.103 -0.897,-2 -2,-2zM9,15h-5c-1.103,0 -2,0.897 -2,2v3c0,1.103 0.897,2 2,2h5c1.103,0 2,-0.897 2,-2v-3c0,-1.103 -0.897,-2 -2,-2zM20,11h-5c-1.103,0 -2,0.897 -2,2v7c0,1.103 0.897,2 2,2h5c1.103,0 2,-0.897 2,-2v-7c0,-1.103 -0.897,-2 -2,-2z">
                                        </path>
                                    </g>
                                </g>
                            </svg>
                        </div>
                        <span class="ml-1 duration-300 opacity-100 pointer-events-none ease-soft">Dashboard</span>
                    </a>
                </li>

                <li class="mt-0.5 w-full">
                    <a class="py-2.7 text-sm ease-nav-brand my-0 mx-4 flex items-center whitespace-nowrap rounded-lg px-4 {{ Request::is('dashboard/posts') ? 'shadow-soft-xl bg-white font-semibold text-slate-700' : '' }} transition-colors"
                        href="/dashboard/posts">
                        <div
                            class="{{ Request::is('dashboard/posts') ? 'bg-gradient-to-tl from-gray-900 to-slate-800 opacity-80 ' : '' }} shadow-soft-2xl mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-white bg-center stroke-0 text-center xl:p-2.5">
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                viewBox="0,0,256,256" width="12px" height="12px" fill-rule="nonzero">
                                <g fill="{{ Request::is('dashboard/posts') ? '#FFFFFF' : '#000000' }}" fill-rule="nonzero"
                                    stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter"
                                    stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none"
                                    font-weight="none" font-size="none" text-anchor="none"
                                    style="mix-blend-mode: normal">
                                    <g transform="scale(4,4)">
                                        <path
                                            d="M16,4v42h32v-34h-7c-0.55228,0 -1,-0.44772 -1,-1v-7zM42,5.41406v4.58594h4.58594zM19,6h10c0.55228,0 1,0.44772 1,1v8c0,0.55228 -0.44772,1 -1,1h-10c-0.55228,0 -1,-0.44772 -1,-1v-8c0,-0.55228 0.44772,-1 1,-1zM20,8v6h8v-6zM32,8h2v2h-2zM36,8h2v2h-2zM32,12h2v2h-2zM36,12h4v2h-4zM4,14v36h56v-36h-10v2h7c0.55228,0 1,0.44772 1,1v30c0,0.55228 -0.44772,1 -1,1h-50c-0.55228,0 -1,-0.44772 -1,-1v-30c0,-0.55228 0.44772,-1 1,-1h7v-2zM8,18v28h6v-28zM19,18h10c0.55228,0 1,0.44772 1,1v12c0,0.55228 -0.44772,1 -1,1h-10c-0.55228,0 -1,-0.44772 -1,-1v-12c0,-0.55228 0.44772,-1 1,-1zM50,18v28h6v-28zM20,20v10h8v-10zM32,20h2v2h-2zM36,20h10v2h-10zM32,24h2v2h-2zM36,24h10v2h-10zM32,28h2v2h-2zM36,28h10v2h-10zM35,34h10c0.55228,0 1,0.44772 1,1v8c0,0.55228 -0.44772,1 -1,1h-10c-0.55228,0 -1,-0.44772 -1,-1v-8c0,-0.55228 0.44772,-1 1,-1zM18,36h2v2h-2zM22,36h10v2h-10zM36,36v6h8v-6zM18,40h2v2h-2zM22,40h10v2h-10zM31,52v4h2v-4zM23.41406,58l-2,2h21.17188l-2,-2z">
                                        </path>
                                    </g>
                                </g>
                            </svg>
                        </div>
                        <span class="ml-1 duration-300 opacity-100 pointer-events-none ease-soft">My Posts</span>
                    </a>
                </li>
            </ul>
        </div>

        <div class="mx-4">
            <!-- load phantom colors for card after: -->
            <p
                class="invisible hidden text-gray-800 text-red-500 text-red-600 after:bg-gradient-to-tl after:from-gray-900 after:to-slate-800 after:bg-gradient-to-tl after:from-blue-600 after:to-cyan-400 after:bg-gradient-to-tl after:from-red-500 after:to-yellow-400 after:bg-gradient-to-tl after:from-green-600 after:to-lime-400 after:bg-gradient-to-tl after:from-red-600 after:to-rose-400 after:bg-gradient-to-tl after:from-slate-600 after:to-slate-300 text-lime-500 text-cyan-500 text-slate-400 text-fuchsia-500">
            </p>
            <div class="after:opacity-65 after:bg-gradient-to-tl after:from-slate-600 after:to-slate-300 relative flex min-w-0 flex-col items-center break-words rounded-2xl border-0 border-solid border-blue-900 bg-white bg-clip-border shadow-none after:absolute after:top-0 after:bottom-0 after:left-0 after:z-10 after:block after:h-full after:w-full after:rounded-2xl after:content-['']"
                sidenav-card>
                <div class="mb-7.5 absolute h-full w-full rounded-2xl bg-cover bg-center"
                    style="background-image: url('../assets/img/curved-images/white-curved.jpeg')"></div>
                <div class="relative z-20 flex-auto w-full p-4 text-left text-white">
                    <div
                        class="flex items-center justify-center w-8 h-8 mb-4 text-center bg-white bg-center rounded-lg icon shadow-soft-2xl">
                        <i class="top-0 z-10 text-transparent ni leading-none ni-diamond text-lg bg-gradient-to-tl from-slate-600 to-slate-300 bg-clip-text opacity-80"
                            sidenav-card-icon></i>
                    </div>
                    <div class="transition-all duration-200 ease-nav-brand">
                        <h6 class="mb-0 text-white">Need help?</h6>
                        <p class="mt-0 mb-4 font-semibold leading-tight text-xs">Please check our docs</p>
                        <a href="#"
                            class="inline-block w-full px-8 py-2 mb-0 font-bold text-center text-black uppercase transition-all ease-in bg-white border-0 border-white rounded-lg shadow-soft-md bg-150 leading-pro text-xs hover:shadow-soft-2xl hover:scale-102">Documentation</a>
                    </div>
                </div>
            </div>
            <!-- pro btn  -->
            <a class="inline-block w-full px-6 py-3 my-4 font-bold text-center text-white uppercase align-middle transition-all ease-in border-0 rounded-lg select-none shadow-soft-md bg-150 bg-x-25 leading-pro text-xs bg-gradient-to-tl from-purple-700 to-pink-500 hover:shadow-soft-2xl hover:scale-102"
                href="#">Upgrade to
                pro</a>
        </div>
    </aside>
    <!-- end sidenav -->
