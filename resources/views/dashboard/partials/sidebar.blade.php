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
                    <a class="py-2.7 text-sm ease-nav-brand my-0 mx-4 flex items-center whitespace-nowrap rounded-lg px-4 {{ request()->is('dashboard') ? 'shadow-soft-xl bg-white font-semibold text-slate-700' : '' }} transition-colors"
                        href="/dashboard">
                        <div
                            class="{{ request()->is('dashboard') ? 'bg-gradient-to-tl from-gray-900 to-slate-800 opacity-80 ' : '' }} shadow-soft-2xl mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-white bg-center stroke-0 text-center xl:p-2.5">
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                viewBox="0,0,256,256" width="12px" height="12px" fill-rule="nonzero">
                                <g fill="{{ request()->is('dashboard') ? '#ffffff' : '#000000' }}" fill-rule="nonzero"
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
                    <a class="py-2.7 text-sm ease-nav-brand my-0 mx-4 flex items-center whitespace-nowrap rounded-lg px-4 {{ request()->is('dashboard/posts*') ? 'shadow-soft-xl bg-white font-semibold text-slate-700' : '' }} transition-colors"
                        href="/dashboard/posts">
                        <div
                            class="{{ request()->is('dashboard/posts*') ? 'bg-gradient-to-tl from-gray-900 to-slate-800 opacity-80 ' : '' }} shadow-soft-2xl mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-white bg-center stroke-0 text-center xl:p-2.5">
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                viewBox="0,0,256,256" width="12px" height="12px" fill-rule="nonzero">
                                <g fill="{{ request()->is('dashboard/posts*') ? '#FFFFFF' : '#000000' }}"
                                    fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt"
                                    stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray=""
                                    stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none"
                                    text-anchor="none" style="mix-blend-mode: normal">
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

                @can('isAdmin')
                    <li class="w-full mt-4">
                        <h6 class="pl-6 ml-2 font-bold leading-tight uppercase text-xs opacity-60">Administrator pages</h6>
                    </li>

                    <li class="mt-3 w-full">
                        <a class="py-2.7 text-sm ease-nav-brand my-0 mx-4 flex items-center whitespace-nowrap rounded-lg px-4 {{ request()->is('dashboard/categories*') ? 'shadow-soft-xl bg-white font-semibold text-slate-700' : '' }} transition-colors"
                            href="/dashboard/categories">
                            <div
                                class="{{ request()->is('dashboard/categories*') ? 'bg-gradient-to-tl from-gray-900 to-slate-800 opacity-80 ' : '' }} shadow-soft-2xl mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-white bg-center stroke-0 text-center xl:p-2.5">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256" width="12px" height="12px">
                                    <path fill="#478cf7"
                                        d="M128,71.231c-31.352,0-56.769,25.416-56.769,56.769S96.648,184.769,128,184.769 s56.769-25.416,56.769-56.769S159.352,71.231,128,71.231z" />
                                    <path fill="#377de2"
                                        d="M162.82,83.18c7.481,9.616,11.949,21.693,11.949,34.82c0,31.353-25.416,56.769-56.769,56.769 c-13.127,0-25.204-4.468-34.82-11.949c10.387,13.35,26.594,21.949,44.82,21.949c31.353,0,56.769-25.416,56.769-56.769 C184.769,109.775,176.17,93.567,162.82,83.18z" />
                                    <path fill="#2266d3"
                                        d="M165.554,85.446c8.84,10.009,14.214,23.151,14.214,37.554c0,31.353-25.416,56.769-56.769,56.769 c-14.404,0-27.545-5.375-37.554-14.214c10.402,11.778,25.606,19.214,42.554,19.214c31.353,0,56.769-25.416,56.769-56.769 C184.769,111.051,177.332,95.847,165.554,85.446z" />
                                    <path fill="#2266d3"
                                        d="M183.294,115.091l13.802-12.176c2.078-1.833,2.576-4.877,1.19-7.277l-7.341-12.715 c-1.385-2.4-4.271-3.49-6.898-2.607l-17.601,5.917C174.683,93.819,180.67,103.809,183.294,115.091z" />
                                    <path fill="#377de2"
                                        d="M58.904,102.915l13.802,12.176c2.624-11.282,8.611-21.272,16.848-28.858l-17.601-5.917 c-2.627-0.883-5.512,0.208-6.898,2.607l-7.341,12.715C56.328,98.038,56.826,101.082,58.904,102.915z" />
                                    <path fill="#377de2"
                                        d="M128,71.231c5.784,0,11.365,0.865,16.622,2.473l-3.574-17.697c-0.548-2.716-2.936-4.669-5.707-4.669 h-14.681c-2.771,0-5.159,1.953-5.707,4.669l-3.574,17.697C116.635,72.097,122.216,71.231,128,71.231z" />
                                    <path fill="#2266d3"
                                        d="M196.647,152.307l-13.28-11.716c-2.533,11.185-8.368,21.116-16.427,28.715l16.659,5.601 c2.627,0.883,5.512-0.208,6.898-2.608l7.341-12.715C199.223,157.185,198.725,154.141,196.647,152.307z" />
                                    <path fill="#2266d3"
                                        d="M128,184.769c-5.784,0-11.365-0.865-16.622-2.473l3.574,17.697c0.548,2.716,2.936,4.669,5.707,4.669 h14.681c2.771,0,5.159-1.953,5.707-4.669l3.574-17.697C139.365,183.903,133.784,184.769,128,184.769z" />
                                    <path fill="#377de2"
                                        d="M72.633,140.591l-13.28,11.716c-2.078,1.834-2.576,4.878-1.19,7.277l7.341,12.715 c1.385,2.4,4.271,3.491,6.898,2.608l16.659-5.601C81.001,161.708,75.166,151.777,72.633,140.591z" />
                                    <g>
                                        <path fill="#ffa91a"
                                            d="M128,95.844c-17.759,0-32.156,14.397-32.156,32.156s14.397,32.156,32.156,32.156 s32.156-14.397,32.156-32.156S145.759,95.844,128,95.844z M128,142.085c-7.779,0-14.085-6.306-14.085-14.085 s6.306-14.085,14.085-14.085s14.085,6.306,14.085,14.085S135.779,142.085,128,142.085z" />
                                        <path fill="#f79219"
                                            d="M147.376,102.339c4.075,5.389,6.495,12.099,6.495,19.376c0,17.759-14.397,32.156-32.156,32.156 c-7.277,0-13.987-2.42-19.376-6.495c5.87,7.762,15.178,12.78,25.661,12.78c17.759,0,32.156-14.397,32.156-32.156 C160.156,117.518,155.138,108.21,147.376,102.339z" />
                                        <path fill="#ffc91d"
                                            d="M159.321,120.688l7.818-6.897c1.177-1.038,1.459-2.763,0.674-4.122l-4.158-7.202 c-0.785-1.359-2.419-1.977-3.907-1.477l-9.97,3.352C154.443,108.638,157.835,114.297,159.321,120.688z" />
                                        <path fill="#ffc91d"
                                            d="M88.861,113.791l7.818,6.897c1.486-6.39,4.878-12.049,9.543-16.346l-9.97-3.352 c-1.488-0.5-3.122,0.118-3.907,1.477l-4.158,7.202C87.402,111.028,87.684,112.752,88.861,113.791z" />
                                        <path fill="#ffc91d"
                                            d="M128,95.844c3.276,0,6.437,0.49,9.416,1.401l-2.025-10.024c-0.311-1.539-1.663-2.645-3.233-2.645h-8.316 c-1.57,0-2.922,1.106-3.233,2.645l-2.025,10.024C121.563,96.334,124.724,95.844,128,95.844z" />
                                        <path fill="#ffc91d"
                                            d="M166.885,141.769l-7.523-6.636c-1.435,6.336-4.74,11.961-9.305,16.266l9.436,3.172 c1.488,0.5,3.122-0.118,3.907-1.477l4.158-7.202C168.344,144.532,168.062,142.808,166.885,141.769z" />
                                        <path fill="#ffc91d"
                                            d="M128,160.156c-3.276,0-6.437-0.49-9.416-1.401l2.025,10.024c0.311,1.539,1.663,2.645,3.233,2.645h8.316 c1.57,0,2.922-1.106,3.233-2.645l2.025-10.024C134.437,159.666,131.276,160.156,128,160.156z" />
                                        <path fill="#ffc91d"
                                            d="M96.638,135.132l-7.523,6.636c-1.177,1.039-1.459,2.763-0.674,4.122l4.158,7.202 c0.785,1.36,2.419,1.977,3.907,1.477l9.436-3.172C101.378,147.093,98.073,141.468,96.638,135.132z" />
                                    </g>
                                    <g>
                                        <path fill="#ffa91a"
                                            d="M94.066,235.7C36.22,217.502,2.298,155.904,19.616,96.368C35.997,40.049,93.575,5.453,150.992,17.43 c62.984,13.138,102.025,76.032,86.603,137.887c-7.908,31.717-29.157,58.433-58.298,73.297l-5.907-11.581 c25.789-13.154,44.593-36.796,51.591-64.862c13.647-54.735-20.9-110.388-76.633-122.013 C97.541,19.56,46.591,50.174,32.095,100.009c-15.323,52.68,14.689,107.183,65.87,123.289c3.279,1.032,5.192,4.431,4.361,7.766 v0C101.42,234.697,97.637,236.823,94.066,235.7z" />
                                        <path fill="#f79219"
                                            d="M205.256,45.65c25.377,27.065,36.963,66.068,27.339,104.667c-7.732,31.01-28.222,57.233-56.367,72.28 l3.07,6.018c29.141-14.864,50.39-41.58,58.298-73.297C247.83,114.268,234.072,72.768,205.256,45.65z" />
                                        <path fill="#ffa91a"
                                            d="M195.677,232.412l-18.482-30.759c-1.625-2.704-5.605-2.513-6.963,0.334l-13.997,29.342 c-1.221,2.559,0.567,5.533,3.399,5.657l32.479,1.417C195.264,238.541,197.302,235.116,195.677,232.412z" />
                                        <path fill="#f79219"
                                            d="M195.677,232.412l-18.482-30.759c-0.725-1.207-1.92-1.833-3.142-1.908l16.624,27.667 c1.625,2.704-0.413,6.129-3.564,5.991l-31.132-1.358c-0.62,2.367,1.082,4.829,3.653,4.941l32.479,1.417 C195.264,238.541,197.302,235.116,195.677,232.412z" />
                                    </g>
                                    <g>
                                        <circle cx="128" cy="203.988" r="27.915" fill="#e6e7e8" />
                                        <path fill="#fff"
                                            d="M106.08,205.99c-1.101,0-1.99-0.9-1.99-2s0.89-2,1.99-2c1.1,0,2,0.89,2,1.98c0,0.01,0.01,0.01,0.01,0.02 C108.09,205.09,107.189,205.99,106.08,205.99z M107.53,198.17c-0.25,0-0.49-0.05-0.721-0.14c-0.5-0.19-0.89-0.56-1.109-1.05 c-0.221-0.49-0.23-1.03-0.04-1.53c1.71-4.47,4.699-8.3,8.64-11.06c4.03-2.82,8.77-4.32,13.7-4.32c1.1,0,2,0.9,2,2 c0,1.11-0.9,2-2,2c-8.19,0-15.67,5.15-18.601,12.81c-0.01,0-0.01,0.01-0.01,0.01C109.09,197.65,108.35,198.17,107.53,198.17z" />
                                        <path fill="#d1d3d4"
                                            d="M147.739,184.249c-0.847-0.847-1.74-1.621-2.663-2.337c8.491,10.95,7.717,26.761-2.337,36.815 s-25.865,10.828-36.815,2.337c0.716,0.923,1.489,1.816,2.337,2.663c10.902,10.901,28.576,10.901,39.478,0 S158.641,195.151,147.739,184.249z" />
                                        <path fill="#478cf7"
                                            d="M124.977,218.782c-1.252,0-2.504-0.478-3.46-1.433l-9.634-9.634c-1.91-1.911-1.91-5.008,0-6.919 c1.911-1.91,5.008-1.91,6.919,0l6.175,6.176l12.254-12.255c1.911-1.91,5.008-1.91,6.919,0c1.91,1.911,1.91,5.008,0,6.919 l-15.714,15.714C127.481,218.305,126.229,218.782,124.977,218.782z" />
                                        <path fill="#377de2"
                                            d="M144.15,194.717c-0.35-0.35-0.749-0.613-1.164-0.835c0.988,1.851,0.724,4.194-0.836,5.754l-15.714,15.714 c-0.955,0.955-2.207,1.433-3.459,1.433s-2.504-0.478-3.459-1.433l2,2c0.955,0.955,2.207,1.433,3.459,1.433 s2.504-0.478,3.459-1.433l15.714-15.714C146.06,199.725,146.06,196.628,144.15,194.717z" />
                                    </g>
                                </svg>
                            </div>
                            <span class="ml-1 duration-300 opacity-100 pointer-events-none ease-soft">Manage Ops</span>
                        </a>
                    </li>
                @endcan
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
                    style="background-image: url('../assets/img/curved-storage/white-curved.jpeg')"></div>
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
