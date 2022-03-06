<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>TCL Demo Form UI</title>

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>

        <!-- Fonts -->
        <link rel="dns-prefetch" href="//fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/notyf@3/notyf.min.css">

        <!-- Icons -->
        <link href="https://unpkg.com/ionicons@4.5.10-0/dist/css/ionicons.min.css" rel="stylesheet">

        <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>

    </head>
    <body class="antialiased">

        <div class="min-h-screen bg-gray-100">
            <header class="pb-24 bg-gradient-to-r from-light-blue-800 to-cyan-500">
            <div class="max-w-3xl mx-auto px-4 sm:px-6 lg:max-w-7xl lg:px-8">
                <div class="relative flex flex-wrap items-center justify-center lg:justify-between">
                <!-- Logo -->
                <div class="absolute left-0 py-5 flex-shrink-0 lg:static">
                    <a href="/dash">
                    <span class="sr-only">TCL Tankers</span>
                    <!-- https://tailwindui.com/img/logos/workflow-mark-cyan-200.svg -->
                    <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                    height="60px" viewBox="0 0 259 123.5" style="enable-background:new 0 0 259 123.5;" xml:space="preserve">
               <path style="fill:#FFFFFF;" d="M245.7,85.4c0-0.7-0.1-1.2-0.2-1.7c-0.1-0.5-0.4-0.9-0.7-1.2c-0.3-0.3-0.7-0.5-1.2-0.7
                   c-0.5-0.1-1.1-0.2-1.8-0.2c-0.7,0-1.3,0.1-1.8,0.2c-0.5,0.1-0.9,0.4-1.2,0.7c-0.3,0.3-0.5,0.7-0.7,1.2c-0.1,0.5-0.2,1-0.2,1.7v1.9
                   h7.7V85.4z M237.2,85c0-1.4,0.4-2.5,1.2-3.2c0.8-0.7,1.9-1.1,3.4-1.1c1.5,0,2.7,0.4,3.4,1.1c0.8,0.7,1.1,1.8,1.2,3.2v3.2h-9.2V85z
                    M237.2,89.1h0.8v3.2h8.5v0.9h-8.5v3.2h-0.8V89.1z M237.2,100.3h8.5v-5.2h0.8v6.1h-9.2V100.3z"/>
               <path style="fill:#FFFFFF;" d="M220.4,101.2h12.9v-1.1h-11.6V80.7h-1.3V101.2z M205.3,93.6l4.6-11.6h0.1l4.4,11.6H205.3z M201,101.2
                   h1.4l2.6-6.6h9.8l2.6,6.6h1.4l-8.1-20.5h-1.4L201,101.2z M195.6,81.8v19.4h1.3V81.8h7.2v-1.1h-15.7v1.1H195.6z M170.8,101.2h1.3v-19
                   h0.1l13,19h1.5V80.7h-1.3v18.8h-0.1l-13-18.8h-1.6V101.2z M154.8,101.2h13.9v-1.1H156v-9h11.8V90H156v-8.2h12.5v-1.1h-13.8V101.2z
                    M137.7,90.8v-9h7.3c0.7,0,1.4,0.1,2,0.2s1.2,0.4,1.7,0.7c0.5,0.3,0.9,0.8,1.1,1.3c0.3,0.5,0.4,1.2,0.4,2c0,0.8-0.1,1.5-0.4,2.1
                   c-0.3,0.6-0.6,1.1-1.1,1.5c-0.5,0.4-1,0.7-1.7,0.8c-0.6,0.2-1.3,0.3-2.1,0.3H137.7z M136.4,101.2h1.3v-9.3h7.3
                   c1.2,0,2.1,0.2,2.8,0.5c0.7,0.3,1.1,0.8,1.5,1.3c0.3,0.5,0.5,1.1,0.5,1.8c0.1,0.7,0.1,1.4,0.1,2.1c0,0.7,0,1.4,0,2
                   c0,0.6,0.2,1.2,0.4,1.7h1.4c-0.2-0.2-0.3-0.4-0.4-0.7c-0.1-0.3-0.1-0.6-0.2-0.9c0-0.3-0.1-0.7-0.1-1.1v-1.2c0-0.7,0-1.3-0.1-2
                   c-0.1-0.7-0.2-1.3-0.5-1.8c-0.3-0.6-0.7-1-1.2-1.4c-0.5-0.4-1.3-0.6-2.2-0.7v-0.1c1.4-0.2,2.5-0.8,3.2-1.8c0.8-0.9,1.2-2.1,1.2-3.5
                   c0-1-0.2-1.8-0.5-2.5c-0.3-0.7-0.8-1.2-1.4-1.6s-1.3-0.7-2.1-0.9c-0.8-0.2-1.6-0.3-2.5-0.3h-8.6V101.2z"/>
               <path style="fill:#FFFFFF;" d="M221.3,62.2v-9h7.3c0.7,0,1.3,0.1,2,0.2c0.6,0.2,1.2,0.4,1.7,0.7c0.5,0.3,0.9,0.8,1.1,1.3
                   c0.3,0.5,0.4,1.2,0.4,2c0,0.8-0.1,1.5-0.4,2.1c-0.3,0.6-0.6,1.1-1.1,1.5c-0.5,0.4-1,0.7-1.7,0.8c-0.6,0.2-1.3,0.3-2.1,0.3H221.3z
                    M220,72.6h1.3v-9.3h7.3c1.2,0,2.1,0.2,2.8,0.5c0.7,0.3,1.1,0.8,1.5,1.3c0.3,0.5,0.5,1.1,0.5,1.8c0.1,0.7,0.1,1.4,0.1,2.1
                   c0,0.7,0,1.4,0,2c0,0.6,0.2,1.2,0.4,1.7h1.4c-0.2-0.2-0.3-0.4-0.4-0.7c-0.1-0.3-0.1-0.6-0.2-0.9c0-0.3-0.1-0.7-0.1-1.1v-1.2
                   c0-0.7,0-1.3-0.1-2c-0.1-0.7-0.2-1.3-0.5-1.8c-0.3-0.6-0.7-1-1.2-1.4c-0.5-0.4-1.3-0.6-2.2-0.7v-0.1c1.4-0.2,2.5-0.8,3.2-1.8
                   c0.8-0.9,1.2-2.1,1.2-3.5c0-1-0.2-1.8-0.5-2.5c-0.3-0.7-0.8-1.2-1.4-1.6c-0.6-0.4-1.3-0.7-2.1-0.9c-0.8-0.2-1.6-0.3-2.5-0.3H220
                   V72.6z M204,72.6h13.9v-1.1h-12.7v-9H217v-1.1h-11.8v-8.2h12.5v-1.1H204V72.6z M186,72.6h1.3v-7.2l4.3-3.9l9.3,11.1h1.6l-9.9-12
                   l9.4-8.5h-1.6l-12.9,11.8V52.1H186V72.6z M166.3,72.6h1.3v-19h0.1l13,19h1.5V52.1h-1.3v18.8h-0.1l-13-18.8h-1.6V72.6z M151.2,65
                   l4.6-11.6h0.1l4.4,11.6H151.2z M146.8,72.6h1.4l2.6-6.6h9.8l2.6,6.6h1.4l-8.1-20.5h-1.4L146.8,72.6z M141.4,53.2v19.4h1.3V53.2h7.2
                   v-1.1h-15.7v1.1H141.4z"/>
               <path style="fill:#FFFFFF;" d="M179.7,23.5v16.7h10V44h-14.5V23.5H179.7z M167,29c-0.3-0.4-0.6-0.8-1-1.1c-0.4-0.3-0.9-0.6-1.4-0.8
                   c-0.5-0.2-1-0.3-1.6-0.3c-1,0-1.9,0.2-2.6,0.6c-0.7,0.4-1.3,0.9-1.7,1.6c-0.4,0.7-0.8,1.4-1,2.3c-0.2,0.8-0.3,1.7-0.3,2.6
                   c0,0.9,0.1,1.7,0.3,2.5c0.2,0.8,0.5,1.5,1,2.2c0.4,0.7,1,1.2,1.7,1.6c0.7,0.4,1.6,0.6,2.6,0.6c1.4,0,2.5-0.4,3.2-1.3
                   c0.8-0.8,1.2-2,1.4-3.3h4.4c-0.1,1.3-0.4,2.4-0.9,3.5c-0.5,1-1.1,1.9-1.9,2.6s-1.7,1.3-2.8,1.7c-1.1,0.4-2.2,0.6-3.5,0.6
                   c-1.6,0-3-0.3-4.2-0.8c-1.3-0.5-2.3-1.3-3.2-2.3c-0.9-1-1.5-2.1-2-3.4c-0.5-1.3-0.7-2.7-0.7-4.2c0-1.5,0.2-3,0.7-4.3
                   c0.5-1.3,1.1-2.5,2-3.4c0.9-1,1.9-1.7,3.2-2.3c1.3-0.6,2.7-0.8,4.2-0.8c1.1,0,2.2,0.2,3.2,0.5c1,0.3,1.9,0.8,2.7,1.4
                   c0.8,0.6,1.5,1.4,2,2.3c0.5,0.9,0.8,2,1,3.2h-4.4C167.4,29.9,167.2,29.4,167,29 M135,27.3v-3.8h16.8v3.8h-6.1V44h-4.5V27.3H135z"/>
               <g>
                   <path style="fill:#FFFFFF;" d="M61,0.8C27.1,0.8-0.4,28.2-0.4,62.1c0,33.9,27.5,61.4,61.4,61.4c33.9,0,61.4-27.5,61.4-61.4
                       C122.3,28.2,94.8,0.8,61,0.8z M47.6,106.8c-19.4-5.7-33.3-23.6-33.3-44.7c0-8.2,2.2-15.9,5.9-22.5L32.3,47
                       c-2.4,4.5-3.8,9.7-3.8,15.1c0,13.2,8.1,24.5,19.1,29.6V106.8z M61,108.8c-2.3,0-4.6-0.3-6.8-0.6v-1.6V93.8V30.4
                       c-7,1.6-13.7,5.6-18.3,11.1l-12.2-7.4c8.5-11.3,22-18.6,37.3-18.6c15.1,0,28.5,7.2,37,18.3l-10.8,9.3C82.8,37,76.2,32.5,68.7,30.6
                       v63C81.9,90.4,92,78.9,93.2,65.2h14.2C106,89.5,85.7,108.8,61,108.8z"/>
               </g>
               </svg>
                    </a>
                </div>

                <!-- Right section on desktop -->
                <div class="hidden lg:ml-4 lg:flex lg:items-center lg:py-5 lg:pr-0.5">
                    <button type="button" class="flex-shrink-0 p-1 text-cyan-200 rounded-full hover:text-white hover:bg-white hover:bg-opacity-10 focus:outline-none focus:ring-2 focus:ring-white">
                    <span class="sr-only">View notifications</span>
                    <!-- Heroicon name: bell -->
                    <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9" />
                    </svg>
                    </button>

                    <!-- Profile dropdown -->
                    <div class="ml-4 relative flex-shrink-0">


                        <x-dropdown align="right" width="48">
                            <x-slot name="trigger">
                                <button class="flex items-center text-sm font-medium text-gray-500 hover:text-gray-700 hover:border-gray-300 focus:outline-none focus:text-gray-700 focus:border-gray-300 transition duration-150 ease-in-out">
                                    <div>
                                        {{-- {{ Auth::user()->name }} --}}
                                            <span class="sr-only">Open user menu</span>
                                            <img class="h-8 w-8 rounded-full" src="https://images.unsplash.com/photo-1550525811-e5869dd03032?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=facearea&amp;facepad=2&amp;w=256&amp;h=256&amp;q=80" alt="">
                                    </div>

                                </button>
                            </x-slot>

                            <x-slot name="content">
                                <!-- Authentication -->
                                {{-- <form method="POST" action="{{ route('logout') }}">
                                    @csrf

                                    <x-dropdown-link :href="route('logout')"
                                            onclick="event.preventDefault();
                                                        this.closest('form').submit();">
                                        {{ __('Logout') }}
                                    </x-dropdown-link>
                                </form> --}}
                                {{-- <div class="origin-top-right z-40 absolute -right-2 mt-2 w-48 rounded-md shadow-lg py-1 bg-white ring-1 ring-black ring-opacity-5" role="menu" aria-orientation="vertical" aria-labelledby="user-menu"> --}}
                                    <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100" role="menuitem">Your Profile</a>
                                    <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100" role="menuitem">Settings</a>
                                    <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100" role="menuitem">Sign out</a>
                                {{-- </div> --}}
                            </x-slot>
                        </x-dropdown>




                    <!--
                        Profile dropdown panel, show/hide based on dropdown state.

                        Entering: ""
                        From: ""
                        To: ""
                        Leaving: "transition ease-in duration-75"
                        From: "transform opacity-100 scale-100"
                        To: "transform opacity-0 scale-95"
                    -->

                    </div>
                </div>

                <div class="w-full py-5 lg:border-t lg:border-white lg:border-opacity-20">
                    <div class="lg:grid lg:grid-cols-3 lg:gap-8 lg:items-center">
                    <!-- Left nav -->
                    <div class="hidden lg:block lg:col-span-2">
                        <nav class="flex space-x-4">
                        <a href="/dash" class="text-white text-sm font-medium rounded-md bg-white bg-opacity-0 px-3 py-2 hover:bg-opacity-10" aria-current="page">
                            Home
                        </a>

                        <a href="#" class="text-cyan-100 text-sm font-medium rounded-md bg-white bg-opacity-0 px-3 py-2 hover:bg-opacity-10" aria-current="false">
                            Hires
                        </a>

                        <a href="#" class="text-cyan-100 text-sm font-medium rounded-md bg-white bg-opacity-0 px-3 py-2 hover:bg-opacity-10" aria-current="false">
                            Fleet
                        </a>

                        <a href="#" class="text-cyan-100 text-sm font-medium rounded-md bg-white bg-opacity-0 px-3 py-2 hover:bg-opacity-10" aria-current="false">
                            Customers
                        </a>

                        <a href="#" class="text-cyan-100 text-sm font-medium rounded-md bg-white bg-opacity-0 px-3 py-2 hover:bg-opacity-10" aria-current="false">
                            Activities
                        </a>
                        </nav>
                    </div>
                    <div class="px-12 lg:px-0">
                        <!-- Search -->
                        <div class="max-w-xs mx-auto w-full lg:max-w-md">
                        <label for="search" class="sr-only">Search</label>
                        <div class="relative text-white focus-within:text-gray-600">
                            <div class="pointer-events-none absolute inset-y-0 left-0 pl-3 flex items-center">
                            <!-- Heroicon name: search -->
                            <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                <path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd" />
                            </svg>
                            </div>
                            <input id="search" class="block w-full text-white bg-white bg-opacity-20 py-2 pl-10 pr-3 border border-transparent rounded-md leading-5 focus:text-gray-900 placeholder-white focus:outline-none focus:bg-opacity-100 focus:border-transparent focus:placeholder-gray-500 focus:ring-0 sm:text-sm" placeholder="Search" type="search" name="search">
                        </div>
                        </div>
                    </div>
                    </div>
                </div>

                <!-- Menu button -->
                <div class="absolute right-0 flex-shrink-0 lg:hidden">
                    <!-- Mobile menu button -->
                    <button @click.prevent="showMenu = !showMenu " class="bg-transparent p-2 rounded-md inline-flex items-center justify-center text-cyan-200 hover:text-white hover:bg-white hover:bg-opacity-10 focus:outline-none focus:ring-2 focus:ring-white" aria-expanded="false">
                    <span class="sr-only">Open main menu</span>
                    <!--
                        Heroicon name: menu

                        Menu open: "hidden", Menu closed: "block"
                    -->
                    <svg class="block h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                    <!--
                        Heroicon name: x

                        Menu open: "block", Menu closed: "hidden"
                    -->
                    <svg class="hidden h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                    </button>
                </div>
                </div>
            </div>
            <div x-data="{showMenu : false}" class="bg-white shadow-sm">
                <!--
                    Mobile menu overlay, show/hide based on mobile menu state.

                    Entering: "duration-150 ease-out"
                    From: "opacity-0"
                    To: "opacity-100"
                    Leaving: "duration-150 ease-in"
                    From: "opacity-100"
                    To: "opacity-0"
                -->
                <div x-show="showMenu" class="hidden z-20 fixed inset-0 bg-black bg-opacity-25 lg:hidden" aria-hidden="true"></div>

                <!--
                    Mobile menu, show/hide based on mobile menu state.

                    Entering: "duration-150 ease-out"
                    From: "opacity-0 scale-95"
                    To: "opacity-100 scale-100"
                    Leaving: "duration-150 ease-in"
                    From: "opacity-100 scale-100"
                    To: "opacity-0 scale-95"
                -->
                <div x-show="showMenu" class="hidden z-30 absolute top-0 inset-x-0 max-w-3xl mx-auto w-full p-2 transition transform origin-top lg:hidden">
                    <div class="rounded-lg shadow-lg ring-1 ring-black ring-opacity-5 bg-white divide-y divide-gray-200">
                    <div class="pt-3 pb-2">
                        <div class="flex items-center justify-between px-4">
                        <div>
                            <img class="h-8 w-auto" src="https://tailwindui.com/img/logos/workflow-mark-cyan-600.svg" alt="Workflow">
                        </div>
                        <div class="-mr-2">
                            <button type="button" class="bg-white rounded-md p-2 inline-flex items-center justify-center text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-cyan-500">
                            <span class="sr-only">Close menu</span>
                            <!-- Heroicon name: x -->
                            <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                            </svg>
                            </button>
                        </div>
                        </div>
                        <div class="mt-3 px-2 space-y-1">
                        <a href="/dash" class="block rounded-md px-3 py-2 text-base text-gray-900 font-medium hover:bg-gray-100 hover:text-gray-800">Home</a>
                        <a href="#" class="block rounded-md px-3 py-2 text-base text-gray-900 font-medium hover:bg-gray-100 hover:text-gray-800">Hires</a>
                        <a href="#" class="block rounded-md px-3 py-2 text-base text-gray-900 font-medium hover:bg-gray-100 hover:text-gray-800">Fleet</a>
                        <a href="#" class="block rounded-md px-3 py-2 text-base text-gray-900 font-medium hover:bg-gray-100 hover:text-gray-800">Customers</a>
                        <a href="#" class="block rounded-md px-3 py-2 text-base text-gray-900 font-medium hover:bg-gray-100 hover:text-gray-800">Activities</a>
                        </div>
                    </div>
                    <div class="pt-4 pb-2">
                        <div class="flex items-center px-5">
                        <div class="flex-shrink-0">
                            <img class="h-10 w-10 rounded-full" src="https://images.unsplash.com/photo-1550525811-e5869dd03032?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=facearea&amp;facepad=2&amp;w=256&amp;h=256&amp;q=80" alt="">
                        </div>
                        <div class="ml-3 min-w-0 flex-1">
                            <div class="text-base font-medium text-gray-800 truncate">Rachel Mathews</div>
                            <div class="text-sm font-medium text-gray-500 truncate">rachel@tclui.snappy.io</div>
                        </div>
                        <button class="ml-auto flex-shrink-0 bg-white p-1 text-gray-400 rounded-full hover:text-gray-500 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-cyan-500">
                            <span class="sr-only">View notifications</span>
                            <!-- Heroicon name: bell -->
                            <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9" />
                            </svg>
                        </button>
                        </div>
                        <div class="mt-3 px-2 space-y-1">
                        <a href="#" class="block rounded-md px-3 py-2 text-base text-gray-900 font-medium hover:bg-gray-100 hover:text-gray-800">Your Profile</a>
                        <a href="#" class="block rounded-md px-3 py-2 text-base text-gray-900 font-medium hover:bg-gray-100 hover:text-gray-800">Settings</a>
                        <a href="#" class="block rounded-md px-3 py-2 text-base text-gray-900 font-medium hover:bg-gray-100 hover:text-gray-800">Sign out</a>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
            </header>

            <main class="-mt-24 pb-8">
                <section aria-labelledby="hire-contract">

                <div class="max-w-3xl mx-auto px-4 sm:px-6 lg:max-w-7xl lg:px-8">


                    <div class="mb-10 rounded-lg bg-white overflow-hidden shadow">
                        <h2 class="sr-only" id="profile-overview-title">Hire Contract</h2>
                        <div class="bg-white p-6">
                          <div class="sm:flex sm:items-center sm:justify-between">
                            <div class="sm:flex sm:space-x-5">
                              <div class="mt-4 text-center sm:mt-0 sm:pt-1 sm:text-left">
                                <p class="text-sm font-medium text-gray-600">TCL Tankers</p>
                                <p class="text-xl font-bold text-gray-900 sm:text-2xl">Hire Contract</p>
                                <p class="text-sm font-medium text-gray-400">To be completed by TCL and customer.</p>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>

                    <div>
                        <div class="md:grid md:grid-cols-3 md:gap-6">
                        <div class="md:col-span-1">
                            <div class="px-4 sm:px-0">
                            <h3 class="text-lg font-medium leading-6 text-gray-900">Hiring Company</h3>
                            <p class="mt-1 text-sm text-gray-600">
                                We can add some notes/instructions here.
                            </p>
                            </div>
                        </div>
                        <div class="mt-5 md:mt-0 md:col-span-2">
                            <div class="shadow sm:rounded-md sm:overflow-hidden">
                                <div class="px-4 py-5 bg-white space-y-6 sm:p-6">


                                <div class="grid grid-cols-6 gap-6 pb-6">
                                    {{-- Column 1 50% --}}
                                    <div class="col-span-6 sm:col-span-3">
                                        <div class="">
                                            <label for="company" class="block text-sm font-medium text-gray-700">Company</label>
                                            <input type="text" name="company" id="company" autocomplete="company" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                        </div>
                                        <div class="mt-6">
                                            <label for="contact" class="block text-sm font-medium text-gray-700">Contact</label>
                                            <input type="text" name="contact" id="contact" autocomplete="name" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                        </div>
                                        <div class="mt-6">
                                            <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                                            <input type="text" name="email" id="email" autocomplete="email" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                        </div>

                                   </div>
                                    {{-- Column 2 50%--}}
                                    <div class="col-span-6 sm:col-span-3">
                                        <div class="">
                                            <label for="phone" class="block text-sm font-medium text-gray-700">Contact Number</label>
                                            <input type="text" name="phone" id="phone" autocomplete="phone" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">

                                        </div>
                                        <div class="mt-6">
                                            <label for="mobile" class="block text-sm font-medium text-gray-700">Mobile Number</label>
                                            <input type="text" name="mobile" id="mobile" autocomplete="mobile" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                        </div>
                                        <div class="mt-6">
                                            <label for="order-number" class="block text-sm font-medium text-gray-700">Order Number</label>
                                            <input type="text" name="order-number" id="order-number" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                        </div>
                                    </div>
                                    {{-- Column 3 100%--}}
                                    <div class="col-span-6 sm:col-span-6">
                                        <div class="">
                                            <label for="address" class="block text-sm font-medium text-gray-700">Address</label>
                                            <input type="text" name="address" id="address" autocomplete="address" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        </div>
                    </div>

                    <div class="hidden sm:block" aria-hidden="true">
                        <div class="py-5">
                        <div class="border-t border-gray-200"></div>
                        </div>
                    </div>


                    <div>
                        <div class="md:grid md:grid-cols-3 md:gap-6">
                        <div class="md:col-span-1">
                            <div class="px-4 sm:px-0">
                            <h3 class="text-lg font-medium leading-6 text-gray-900">Equipment Details</h3>
                            <p class="mt-1 text-sm text-gray-600">
                                We can add some notes/instructions here.
                            </p>
                            </div>
                        </div>
                        <div class="mt-5 md:mt-0 md:col-span-2">
                            <div class="shadow sm:rounded-md sm:overflow-hidden">
                                <div class="px-4 py-5 bg-white space-y-6 sm:p-6">


                                <div class="grid grid-cols-6 gap-6 pb-6">
                                    {{-- Column 1 50% --}}
                                    <div class="col-span-6 sm:col-span-3">
                                        <div class="">
                                            <label for="fleet-num" class="block text-sm font-medium text-gray-700">Fleet Number</label>
                                            <input type="text" name="fleet-num" id="fleet-num" autocomplete="" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                        </div>
                                        <div class="mt-6">
                                            <label for="equipment" class="block text-sm font-medium text-gray-700">Equipment</label>
                                            <input type="text" name="equipment" id="equipment" autocomplete="" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                        </div>
                                        <div class="mt-6">
                                            <label for="make" class="block text-sm font-medium text-gray-700">Make</label>
                                            <input type="text" name="make" id="make" autocomplete="" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                        </div>
                                        <div class="mt-6">
                                            <label for="chassis" class="block text-sm font-medium text-gray-700">Chassis Number</label>
                                            <input type="text" name="chassis" id="chassis" autocomplete="" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                        </div>
                                   </div>
                                    {{-- Column 2 50%--}}
                                    <div class="col-span-6 sm:col-span-3">
                                        <div class="">
                                            {{-- <label for="motexpiry" class="block text-sm font-medium text-gray-700">MOT Expiry Date</label>
                                            <input type="date" name="motexpiry" id="motexpiry" autocomplete="" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md"> --}}

                                                <div x-data="app()" x-init="[initDate(), getNoOfDays()]" x-cloak>

                                                    <div class="">
                                                            <label for="datepicker" class="block text-sm font-medium text-gray-700">MOT Expiry Date</label>

                                                            <div class="relative">
                                                                <input type="hidden" name="date" x-ref="date">
                                                                <input
                                                                    type="text"
                                                                    readonly
                                                                    x-model="datepickerValue"
                                                                    @click="showDatepicker = !showDatepicker"
                                                                    @keydown.escape="showDatepicker = false"
                                                                    class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md"
                                                                    placeholder="Select date">

                                                                    <div class="absolute top-0 right-0 px-3 py-2">
                                                                        <svg class="h-6 w-6 text-gray-400"  fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                                                                        </svg>
                                                                    </div>


                                                                    <!-- <div x-text="no_of_days.length"></div>
                                                                    <div x-text="32 - new Date(year, month, 32).getDate()"></div>
                                                                    <div x-text="new Date(year, month).getDay()"></div> -->

                                                                    <div
                                                                        class="bg-white mt-12 rounded-lg shadow p-4 absolute top-0 left-0"
                                                                        style="width: 17rem"
                                                                        x-show.transition="showDatepicker"
                                                                        @click.away="showDatepicker = false">

                                                                        <div class="flex justify-between items-center mb-2">
                                                                            <div>
                                                                                <span x-text="MONTH_NAMES[month]" class="text-lg font-bold text-gray-800"></span>
                                                                                <span x-text="year" class="ml-1 text-lg text-gray-600 font-normal"></span>
                                                                            </div>
                                                                            <div>
                                                                                <button
                                                                                    type="button"
                                                                                    class="transition ease-in-out duration-100 inline-flex cursor-pointer hover:bg-gray-200 p-1 rounded-full"
                                                                                    :class="{'cursor-not-allowed opacity-25': month == 0 }"
                                                                                    :disabled="month == 0 ? true : false"
                                                                                    @click="month--; getNoOfDays()">
                                                                                    <svg class="h-6 w-6 text-gray-500 inline-flex"  fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"/>
                                                                                    </svg>
                                                                                </button>
                                                                                <button
                                                                                    type="button"
                                                                                    class="transition ease-in-out duration-100 inline-flex cursor-pointer hover:bg-gray-200 p-1 rounded-full"
                                                                                    :class="{'cursor-not-allowed opacity-25': month == 11 }"
                                                                                    :disabled="month == 11 ? true : false"
                                                                                    @click="month++; getNoOfDays()">
                                                                                    <svg class="h-6 w-6 text-gray-500 inline-flex"  fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                                                                                    </svg>
                                                                                </button>
                                                                            </div>
                                                                        </div>

                                                                        <div class="flex flex-wrap mb-3 -mx-1">
                                                                            <template x-for="(day, index) in DAYS" :key="index">
                                                                                <div style="width: 14.26%" class="px-1">
                                                                                    <div
                                                                                        x-text="day"
                                                                                        class="text-gray-800 font-medium text-center text-xs"></div>
                                                                                </div>
                                                                            </template>
                                                                        </div>

                                                                        <div class="flex flex-wrap -mx-1">
                                                                            <template x-for="blankday in blankdays">
                                                                                <div
                                                                                    style="width: 14.28%"
                                                                                    class="text-center border p-1 border-transparent text-sm"
                                                                                ></div>
                                                                            </template>
                                                                            <template x-for="(date, dateIndex) in no_of_days" :key="dateIndex">
                                                                                <div style="width: 14.28%" class="px-1 mb-1">
                                                                                    <div
                                                                                        @click="getDateValue(date)"
                                                                                        x-text="date"
                                                                                        class="cursor-pointer text-center text-sm leading-none rounded-full leading-loose transition ease-in-out duration-100"
                                                                                        :class="{'bg-blue-500 text-white': isToday(date) == true, 'text-gray-700 hover:bg-blue-200': isToday(date) == false }"
                                                                                    ></div>
                                                                                </div>
                                                                            </template>
                                                                        </div>
                                                                    </div>

                                                            </div>
                                                        </div>
                                                </div>

                                                <script>
                                                    const MONTH_NAMES = ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'];
                                                    const DAYS = ['Sun', 'Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat'];

                                                    function app() {
                                                        return {
                                                            showDatepicker: false,
                                                            datepickerValue: '',

                                                            month: '',
                                                            year: '',
                                                            no_of_days: [],
                                                            blankdays: [],
                                                            days: ['Sun', 'Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat'],

                                                            initDate() {
                                                                let today = new Date();
                                                                this.month = today.getMonth();
                                                                this.year = today.getFullYear();
                                                                this.datepickerValue = new Date(this.year, this.month, today.getDate()).toDateString();
                                                            },

                                                            isToday(date) {
                                                                const today = new Date();
                                                                const d = new Date(this.year, this.month, date);

                                                                return today.toDateString() === d.toDateString() ? true : false;
                                                            },

                                                            getDateValue(date) {
                                                                let selectedDate = new Date(this.year, this.month, date);
                                                                this.datepickerValue = selectedDate.toDateString();

                                                                this.$refs.date.value = selectedDate.getFullYear() +"-"+ ('0'+ selectedDate.getMonth()).slice(-2) +"-"+ ('0' + selectedDate.getDate()).slice(-2);

                                                                console.log(this.$refs.date.value);

                                                                this.showDatepicker = false;
                                                            },

                                                            getNoOfDays() {
                                                                let daysInMonth = new Date(this.year, this.month + 1, 0).getDate();

                                                                // find where to start calendar day of week
                                                                let dayOfWeek = new Date(this.year, this.month).getDay();
                                                                let blankdaysArray = [];
                                                                for ( var i=1; i <= dayOfWeek; i++) {
                                                                    blankdaysArray.push(i);
                                                                }

                                                                let daysArray = [];
                                                                for ( var i=1; i <= daysInMonth; i++) {
                                                                    daysArray.push(i);
                                                                }

                                                                this.blankdays = blankdaysArray;
                                                                this.no_of_days = daysArray;
                                                            }
                                                        }
                                                    }
                                                </script>
                                            </input>
                                        </div>
                                        <div class="mt-6">
                                            <label for="adrexpiry" class="block text-sm font-medium text-gray-700">ADR Expiry Date</label>
                                            <input type="date" name="adrexpiry" id="adrexpiry" autocomplete="adrexpiry" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                        </div>
                                        <div class="mt-6">
                                            <label for="order-number" class="block text-sm font-medium text-gray-700">Service Interval (weeks)</label>
                                            <input type="text" name="order-number" id="order-number" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                        </div>
                                        <div class="mt-6">
                                            <label for="order-number" class="block text-sm font-medium text-gray-700">Discharge Pump Fitted</label>
                                            <div class="mt-2">
                                                <div>
                                                  <label class="inline-flex items-center">
                                                    <input type="radio" class="form-radio" name="discharge-filled" value="yes">
                                                    <span class="ml-2">Yes</span>
                                                  </label>

                                                  <label class="inline-flex items-center">
                                                    <input type="radio" class="form-radio" name="discharge-filled" value="no">
                                                    <span class="ml-2">No</span>
                                                  </label>
                                                </div>
                                              </div>
                                        </div>
                                    </div>


                                </div>
                            </div>
                        </div>
                        </div>
                    </div>

                    <div class="hidden sm:block" aria-hidden="true">
                        <div class="py-5">
                        <div class="border-t border-gray-200"></div>
                        </div>
                    </div>


                    <div>
                        <div class="md:grid md:grid-cols-3 md:gap-6">
                        <div class="md:col-span-1">
                            <div class="px-4 sm:px-0">
                            <h3 class="text-lg font-medium leading-6 text-gray-900">Hire Details</h3>
                            <p class="mt-1 text-sm text-gray-600">
                                We can add some notes/instructions here.
                            </p>
                            </div>
                        </div>
                        <div class="mt-5 md:mt-0 md:col-span-2">
                            <div class="shadow sm:rounded-md sm:overflow-hidden">
                                <div class="px-4 py-5 bg-white space-y-6 sm:p-6">


                                <div class="grid grid-cols-6 gap-6 pb-6">
                                    {{-- Column 1 50% --}}
                                    <div class="col-span-6 sm:col-span-3">
                                        <div class="">
                                            <div x-data="app()" x-init="[initDate(), getNoOfDays()]" x-cloak>

                                                <div class="">
                                                        <label for="datepicker" class="block text-sm font-medium text-gray-700">Hire Start Date</label>

                                                        <div class="relative">
                                                            <input type="hidden" name="date" x-ref="date">
                                                            <input
                                                                type="text"
                                                                readonly
                                                                x-model="datepickerValue"
                                                                @click="showDatepicker = !showDatepicker"
                                                                @keydown.escape="showDatepicker = false"
                                                                class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md"
                                                                placeholder="Select date">

                                                                <div class="absolute top-0 right-0 px-3 py-2">
                                                                    <svg class="h-6 w-6 text-gray-400"  fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                                                                    </svg>
                                                                </div>


                                                                <!-- <div x-text="no_of_days.length"></div>
                                                                <div x-text="32 - new Date(year, month, 32).getDate()"></div>
                                                                <div x-text="new Date(year, month).getDay()"></div> -->

                                                                <div
                                                                    class="bg-white mt-12 rounded-lg shadow p-4 absolute top-0 left-0"
                                                                    style="width: 17rem"
                                                                    x-show.transition="showDatepicker"
                                                                    @click.away="showDatepicker = false">

                                                                    <div class="flex justify-between items-center mb-2">
                                                                        <div>
                                                                            <span x-text="MONTH_NAMES[month]" class="text-lg font-bold text-gray-800"></span>
                                                                            <span x-text="year" class="ml-1 text-lg text-gray-600 font-normal"></span>
                                                                        </div>
                                                                        <div>
                                                                            <button
                                                                                type="button"
                                                                                class="transition ease-in-out duration-100 inline-flex cursor-pointer hover:bg-gray-200 p-1 rounded-full"
                                                                                :class="{'cursor-not-allowed opacity-25': month == 0 }"
                                                                                :disabled="month == 0 ? true : false"
                                                                                @click="month--; getNoOfDays()">
                                                                                <svg class="h-6 w-6 text-gray-500 inline-flex"  fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"/>
                                                                                </svg>
                                                                            </button>
                                                                            <button
                                                                                type="button"
                                                                                class="transition ease-in-out duration-100 inline-flex cursor-pointer hover:bg-gray-200 p-1 rounded-full"
                                                                                :class="{'cursor-not-allowed opacity-25': month == 11 }"
                                                                                :disabled="month == 11 ? true : false"
                                                                                @click="month++; getNoOfDays()">
                                                                                <svg class="h-6 w-6 text-gray-500 inline-flex"  fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                                                                                </svg>
                                                                            </button>
                                                                        </div>
                                                                    </div>

                                                                    <div class="flex flex-wrap mb-3 -mx-1">
                                                                        <template x-for="(day, index) in DAYS" :key="index">
                                                                            <div style="width: 14.26%" class="px-1">
                                                                                <div
                                                                                    x-text="day"
                                                                                    class="text-gray-800 font-medium text-center text-xs"></div>
                                                                            </div>
                                                                        </template>
                                                                    </div>

                                                                    <div class="flex flex-wrap -mx-1">
                                                                        <template x-for="blankday in blankdays">
                                                                            <div
                                                                                style="width: 14.28%"
                                                                                class="text-center border p-1 border-transparent text-sm"
                                                                            ></div>
                                                                        </template>
                                                                        <template x-for="(date, dateIndex) in no_of_days" :key="dateIndex">
                                                                            <div style="width: 14.28%" class="px-1 mb-1">
                                                                                <div
                                                                                    @click="getDateValue(date)"
                                                                                    x-text="date"
                                                                                    class="cursor-pointer text-center text-sm leading-none rounded-full leading-loose transition ease-in-out duration-100"
                                                                                    :class="{'bg-blue-500 text-white': isToday(date) == true, 'text-gray-700 hover:bg-blue-200': isToday(date) == false }"
                                                                                ></div>
                                                                            </div>
                                                                        </template>
                                                                    </div>
                                                                </div>

                                                        </div>
                                                    </div>
                                            </div>
                                        </div>
                                        <div class="mt-6">
                                            <div x-data="app()" x-init="[initDate(), getNoOfDays()]" x-cloak>

                                                <div class="">
                                                        <label for="datepicker" class="block text-sm font-medium text-gray-700">Proposed Hire End Date</label>

                                                        <div class="relative">
                                                            <input type="hidden" name="date" x-ref="date">
                                                            <input
                                                                type="text"
                                                                readonly
                                                                x-model="datepickerValue"
                                                                @click="showDatepicker = !showDatepicker"
                                                                @keydown.escape="showDatepicker = false"
                                                                class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md"
                                                                placeholder="Select date">

                                                                <div class="absolute top-0 right-0 px-3 py-2">
                                                                    <svg class="h-6 w-6 text-gray-400"  fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                                                                    </svg>
                                                                </div>


                                                                <!-- <div x-text="no_of_days.length"></div>
                                                                <div x-text="32 - new Date(year, month, 32).getDate()"></div>
                                                                <div x-text="new Date(year, month).getDay()"></div> -->

                                                                <div
                                                                    class="bg-white mt-12 rounded-lg shadow p-4 absolute top-0 left-0"
                                                                    style="width: 17rem"
                                                                    x-show.transition="showDatepicker"
                                                                    @click.away="showDatepicker = false">

                                                                    <div class="flex justify-between items-center mb-2">
                                                                        <div>
                                                                            <span x-text="MONTH_NAMES[month]" class="text-lg font-bold text-gray-800"></span>
                                                                            <span x-text="year" class="ml-1 text-lg text-gray-600 font-normal"></span>
                                                                        </div>
                                                                        <div>
                                                                            <button
                                                                                type="button"
                                                                                class="transition ease-in-out duration-100 inline-flex cursor-pointer hover:bg-gray-200 p-1 rounded-full"
                                                                                :class="{'cursor-not-allowed opacity-25': month == 0 }"
                                                                                :disabled="month == 0 ? true : false"
                                                                                @click="month--; getNoOfDays()">
                                                                                <svg class="h-6 w-6 text-gray-500 inline-flex"  fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"/>
                                                                                </svg>
                                                                            </button>
                                                                            <button
                                                                                type="button"
                                                                                class="transition ease-in-out duration-100 inline-flex cursor-pointer hover:bg-gray-200 p-1 rounded-full"
                                                                                :class="{'cursor-not-allowed opacity-25': month == 11 }"
                                                                                :disabled="month == 11 ? true : false"
                                                                                @click="month++; getNoOfDays()">
                                                                                <svg class="h-6 w-6 text-gray-500 inline-flex"  fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                                                                                </svg>
                                                                            </button>
                                                                        </div>
                                                                    </div>

                                                                    <div class="flex flex-wrap mb-3 -mx-1">
                                                                        <template x-for="(day, index) in DAYS" :key="index">
                                                                            <div style="width: 14.26%" class="px-1">
                                                                                <div
                                                                                    x-text="day"
                                                                                    class="text-gray-800 font-medium text-center text-xs"></div>
                                                                            </div>
                                                                        </template>
                                                                    </div>

                                                                    <div class="flex flex-wrap -mx-1">
                                                                        <template x-for="blankday in blankdays">
                                                                            <div
                                                                                style="width: 14.28%"
                                                                                class="text-center border p-1 border-transparent text-sm"
                                                                            ></div>
                                                                        </template>
                                                                        <template x-for="(date, dateIndex) in no_of_days" :key="dateIndex">
                                                                            <div style="width: 14.28%" class="px-1 mb-1">
                                                                                <div
                                                                                    @click="getDateValue(date)"
                                                                                    x-text="date"
                                                                                    class="cursor-pointer text-center text-sm leading-none rounded-full leading-loose transition ease-in-out duration-100"
                                                                                    :class="{'bg-blue-500 text-white': isToday(date) == true, 'text-gray-700 hover:bg-blue-200': isToday(date) == false }"
                                                                                ></div>
                                                                            </div>
                                                                        </template>
                                                                    </div>
                                                                </div>

                                                        </div>
                                                    </div>
                                            </div>
                                        </div>
                                        <div class="mt-6">
                                            <label for="fleet-num" class="block text-sm font-medium text-gray-700">Deposit Month</label>
                                            <div class="mt-1 relative rounded-md shadow-sm">
                                                <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                                  <span class="text-gray-500 sm:text-sm">
                                                    £
                                                  </span>
                                                </div>
                                                <input type="text" name="price" id="price" class="focus:ring-indigo-500 focus:border-indigo-500 block w-full pl-7 pr-12 sm:text-sm border-gray-300 rounded-md" placeholder="0000.00" aria-describedby="price-currency">
                                              </div>
                                        </div>
                                        <div class="mt-6">
                                            <span class="block text-sm font-medium text-gray-700">Hire Type</span>
                                            <div class="mt-2">
                                              <div>
                                                <label class="inline-flex items-center">
                                                  <input type="radio" class="form-radio" name="radio" value="1" checked>
                                                  <span class="ml-2">Spot Rental (2 week minimum)</span>
                                                </label>
                                              </div>
                                              <div>
                                                <label class="inline-flex items-center">
                                                  <input type="radio" class="form-radio" name="radio" value="2">
                                                  <span class="ml-2">Monthly</span>
                                                </label>
                                              </div>
                                              <div>
                                                <label class="inline-flex items-center">
                                                  <input type="radio" class="form-radio" name="radio" value="3">
                                                  <span class="ml-2">12 Months +</span>
                                                </label>
                                              </div>
                                            </div>
                                        </div>
                                        <div class="mt-6">
                                            <label for="fleet-num" class="block text-sm font-medium text-gray-700">Delivery</label>
                                            <div class="mt-1 relative rounded-md shadow-sm">
                                                <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                                  <span class="text-gray-500 sm:text-sm">
                                                    £
                                                  </span>
                                                </div>
                                                <input type="text" name="price" id="price" class="focus:ring-indigo-500 focus:border-indigo-500 block w-full pl-7 pr-12 sm:text-sm border-gray-300 rounded-md" placeholder="0000.00" aria-describedby="price-currency">
                                                <div class="absolute inset-y-0 right-0 pr-3 flex items-center pointer-events-none">
                                                  <span class="text-gray-500 sm:text-sm" id="price-currency">
                                                    + VAT
                                                  </span>
                                                </div>
                                              </div>
                                        </div>
                                        <div class="mt-6">
                                            <label for="fleet-num" class="block text-sm font-medium text-gray-700">Collection</label>
                                            <div class="mt-1 relative rounded-md shadow-sm">
                                                <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                                  <span class="text-gray-500 sm:text-sm">
                                                    £
                                                  </span>
                                                </div>
                                                <input type="text" name="price" id="price" class="focus:ring-indigo-500 focus:border-indigo-500 block w-full pl-7 pr-12 sm:text-sm border-gray-300 rounded-md" placeholder="0000.00" aria-describedby="price-currency">
                                                <div class="absolute inset-y-0 right-0 pr-3 flex items-center pointer-events-none">
                                                  <span class="text-gray-500 sm:text-sm" id="price-currency">
                                                    + VAT
                                                  </span>
                                                </div>
                                              </div>
                                        </div>
                                   </div>
                                    {{-- Column 2 50%--}}
                                    <div class="col-span-6 sm:col-span-3">
                                        <div class="">
                                            <label for="fleet-num" class="block text-sm font-medium text-gray-700">Weekly (7 Days)</label>
                                            <div class="mt-1 relative rounded-md shadow-sm">
                                                <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                                  <span class="text-gray-500 sm:text-sm">
                                                    £
                                                  </span>
                                                </div>
                                                <input type="text" name="price" id="price" class="focus:ring-indigo-500 focus:border-indigo-500 block w-full pl-7 pr-12 sm:text-sm border-gray-300 rounded-md" placeholder="0000.00" aria-describedby="price-currency">
                                                <div class="absolute inset-y-0 right-0 pr-3 flex items-center pointer-events-none">
                                                  <span class="text-gray-500 sm:text-sm" id="price-currency">
                                                    + VAT
                                                  </span>
                                                </div>
                                              </div>
                                        </div>
                                        <div class="mt-6">
                                            <label for="fleet-num" class="block text-sm font-medium text-gray-700">Monthly (7 Days)</label>
                                            <div class="mt-1 relative rounded-md shadow-sm">
                                                <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                                  <span class="text-gray-500 sm:text-sm">
                                                    £
                                                  </span>
                                                </div>
                                                <input type="text" name="price" id="price" class="focus:ring-indigo-500 focus:border-indigo-500 block w-full pl-7 pr-12 sm:text-sm border-gray-300 rounded-md" placeholder="0.00" aria-describedby="price-currency">
                                                <div class="absolute inset-y-0 right-0 pr-3 flex items-center pointer-events-none">
                                                  <span class="text-gray-500 sm:text-sm" id="price-currency">
                                                    + VAT
                                                  </span>
                                                </div>
                                              </div>
                                        </div>
                                        <div class="mt-6">
                                            <span class="block text-sm font-medium text-gray-700">Maintenance</span>
                                            <div class="mt-2">
                                              <div>
                                                <label class="inline-flex items-center">
                                                  <input type="radio" class="form-radio" name="radio" value="1" checked>
                                                  <span class="ml-2">None</span>
                                                </label>
                                              </div>
                                              <div>
                                                <label class="inline-flex items-center">
                                                  <input type="radio" class="form-radio" name="radio" value="2">
                                                  <span class="ml-2">Maintenance Included</span>
                                                </label>
                                              </div>
                                              <div>
                                                <label class="inline-flex items-center">
                                                  <input type="radio" class="form-radio" name="radio" value="3">
                                                  <span class="ml-2">Maintenance &amp; Tyres Included</span>
                                                </label>
                                              </div>
                                            </div>
                                        </div>
                                        <div class="mt-6">
                                            <label for="fleet-num" class="block text-sm font-medium text-gray-700">Water Fill</label>
                                            <div class="mt-1 relative rounded-md shadow-sm">
                                                <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                                  <span class="text-gray-500 sm:text-sm">
                                                    £
                                                  </span>
                                                </div>
                                                <input type="text" name="price" id="price" class="focus:ring-indigo-500 focus:border-indigo-500 block w-full pl-7 pr-12 sm:text-sm border-gray-300 rounded-md" placeholder="0000.00" aria-describedby="price-currency">
                                                <div class="absolute inset-y-0 right-0 pr-3 flex items-center pointer-events-none">
                                                  <span class="text-gray-500 sm:text-sm" id="price-currency">
                                                    + VAT
                                                  </span>
                                                </div>
                                              </div>
                                        </div>
                                        <div class="mt-6">
                                            <label for="fleet-num" class="block text-sm font-medium text-gray-700">Tyre Wear SOR</label>
                                            <div class="mt-1 relative rounded-md shadow-sm">
                                                <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                                  <span class="text-gray-500 sm:text-sm">
                                                    £
                                                  </span>
                                                </div>
                                                <input type="text" name="price" id="price" value="22.00" class="focus:ring-indigo-500 focus:border-indigo-500 block w-full pl-7 pr-12 sm:text-sm border-gray-300 rounded-md" placeholder="0000.00" aria-describedby="price-currency">
                                                <div class="absolute inset-y-0 right-0 pr-3 flex items-center pointer-events-none">
                                                  <span class="text-gray-500 sm:text-sm" id="price-currency">
                                                    Per mm + VAT
                                                  </span>
                                                </div>
                                              </div>
                                        </div>
                                        <div class="mt-6">
                                            <label for="fleet-num" class="block text-sm font-medium text-gray-700">Other</label>
                                            <div class="mt-1 relative rounded-md shadow-sm">
                                                <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                                  <span class="text-gray-500 sm:text-sm">
                                                    £
                                                  </span>
                                                </div>
                                                <input type="text" name="price" id="price" class="focus:ring-indigo-500 focus:border-indigo-500 block w-full pl-7 pr-12 sm:text-sm border-gray-300 rounded-md" placeholder="0000.00" aria-describedby="price-currency">
                                                <div class="absolute inset-y-0 right-0 pr-3 flex items-center pointer-events-none">
                                                  <span class="text-gray-500 sm:text-sm" id="price-currency">
                                                    + VAT
                                                  </span>
                                                </div>
                                              </div>
                                        </div>
                                    </div>
                            </div>
                        </div>
                        </div>
                    </div>
                    </div>

                    <div class="hidden sm:block" aria-hidden="true">
                        <div class="py-5">
                        <div class="border-t border-gray-200"></div>
                        </div>
                    </div>

                    <div>
                        <div class="md:grid md:grid-cols-3 md:gap-6">
                        <div class="md:col-span-1">
                            <div class="px-4 sm:px-0">
                            <h3 class="text-lg font-medium leading-6 text-gray-900">Insurance Information</h3>
                            <p class="mt-1 text-sm text-gray-600">
                                We can add some notes/instructions here.
                            </p>
                            </div>
                        </div>
                        <div class="mt-5 md:mt-0 md:col-span-2">
                            <div class="shadow sm:rounded-md sm:overflow-hidden">
                                <div class="px-4 py-5 bg-white space-y-6 sm:p-6">


                                <div class="grid grid-cols-6 gap-6 pb-6">
                                    {{-- Column 1 50% --}}
                                    <div class="col-span-6 sm:col-span-3">
                                        <div class="">
                                            <label for="fleet-num" class="block text-sm font-medium text-gray-700">Insurance Company</label>
                                            <input type="text" name="fleet-num" id="fleet-num" autocomplete="" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                        </div>
                                        <div class="mt-6">
                                            <label for="equipment" class="block text-sm font-medium text-gray-700">Policy Number</label>
                                            <input type="text" name="equipment" id="equipment" autocomplete="" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                        </div>
                                   </div>
                                    {{-- Column 2 50%--}}
                                    <div class="col-span-6 sm:col-span-3">
                                        <div class="">
                                            {{-- <label for="motexpiry" class="block text-sm font-medium text-gray-700">MOT Expiry Date</label>
                                            <input type="date" name="motexpiry" id="motexpiry" autocomplete="" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md"> --}}

                                            <div x-data="app()" x-init="[initDate(), getNoOfDays()]" x-cloak>

                                                <div class="">
                                                        <label for="datepicker" class="block text-sm font-medium text-gray-700">Insurance Expiry Date</label>

                                                        <div class="relative">
                                                            <input type="hidden" name="date" x-ref="date">
                                                            <input
                                                                type="text"
                                                                readonly
                                                                x-model="datepickerValue"
                                                                @click="showDatepicker = !showDatepicker"
                                                                @keydown.escape="showDatepicker = false"
                                                                class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md"
                                                                placeholder="Select date">

                                                                <div class="absolute top-0 right-0 px-3 py-2">
                                                                    <svg class="h-6 w-6 text-gray-400"  fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                                                                    </svg>
                                                                </div>


                                                                <!-- <div x-text="no_of_days.length"></div>
                                                                <div x-text="32 - new Date(year, month, 32).getDate()"></div>
                                                                <div x-text="new Date(year, month).getDay()"></div> -->

                                                                <div
                                                                    class="bg-white mt-12 rounded-lg shadow p-4 absolute top-0 left-0"
                                                                    style="width: 17rem"
                                                                    x-show.transition="showDatepicker"
                                                                    @click.away="showDatepicker = false">

                                                                    <div class="flex justify-between items-center mb-2">
                                                                        <div>
                                                                            <span x-text="MONTH_NAMES[month]" class="text-lg font-bold text-gray-800"></span>
                                                                            <span x-text="year" class="ml-1 text-lg text-gray-600 font-normal"></span>
                                                                        </div>
                                                                        <div>
                                                                            <button
                                                                                type="button"
                                                                                class="transition ease-in-out duration-100 inline-flex cursor-pointer hover:bg-gray-200 p-1 rounded-full"
                                                                                :class="{'cursor-not-allowed opacity-25': month == 0 }"
                                                                                :disabled="month == 0 ? true : false"
                                                                                @click="month--; getNoOfDays()">
                                                                                <svg class="h-6 w-6 text-gray-500 inline-flex"  fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"/>
                                                                                </svg>
                                                                            </button>
                                                                            <button
                                                                                type="button"
                                                                                class="transition ease-in-out duration-100 inline-flex cursor-pointer hover:bg-gray-200 p-1 rounded-full"
                                                                                :class="{'cursor-not-allowed opacity-25': month == 11 }"
                                                                                :disabled="month == 11 ? true : false"
                                                                                @click="month++; getNoOfDays()">
                                                                                <svg class="h-6 w-6 text-gray-500 inline-flex"  fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                                                                                </svg>
                                                                            </button>
                                                                        </div>
                                                                    </div>

                                                                    <div class="flex flex-wrap mb-3 -mx-1">
                                                                        <template x-for="(day, index) in DAYS" :key="index">
                                                                            <div style="width: 14.26%" class="px-1">
                                                                                <div
                                                                                    x-text="day"
                                                                                    class="text-gray-800 font-medium text-center text-xs"></div>
                                                                            </div>
                                                                        </template>
                                                                    </div>

                                                                    <div class="flex flex-wrap -mx-1">
                                                                        <template x-for="blankday in blankdays">
                                                                            <div
                                                                                style="width: 14.28%"
                                                                                class="text-center border p-1 border-transparent text-sm"
                                                                            ></div>
                                                                        </template>
                                                                        <template x-for="(date, dateIndex) in no_of_days" :key="dateIndex">
                                                                            <div style="width: 14.28%" class="px-1 mb-1">
                                                                                <div
                                                                                    @click="getDateValue(date)"
                                                                                    x-text="date"
                                                                                    class="cursor-pointer text-center text-sm leading-none rounded-full leading-loose transition ease-in-out duration-100"
                                                                                    :class="{'bg-blue-500 text-white': isToday(date) == true, 'text-gray-700 hover:bg-blue-200': isToday(date) == false }"
                                                                                ></div>
                                                                            </div>
                                                                        </template>
                                                                    </div>
                                                                </div>

                                                        </div>
                                                    </div>
                                            </div>
                                        </div>
                                        <div class="mt-6">
                                            <label for="fleet-num" class="block text-sm font-medium text-gray-700">Replacement Value</label>
                                            <div class="mt-1 relative rounded-md shadow-sm">
                                                <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                                  <span class="text-gray-500 sm:text-sm">
                                                    £
                                                  </span>
                                                </div>
                                                <input type="text" name="price" id="price" class="focus:ring-indigo-500 focus:border-indigo-500 block w-full pl-7 pr-12 sm:text-sm border-gray-300 rounded-md" placeholder="000000" aria-describedby="price-currency">
                                              </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        </div>
                    </div>

                    <div class="hidden sm:block" aria-hidden="true">
                        <div class="py-5">
                        <div class="border-t border-gray-200"></div>
                        </div>
                    </div>


                    <div>
                        <div class="md:grid md:grid-cols-3 md:gap-6">
                        <div class="md:col-span-1">
                            <div class="px-4 sm:px-0">
                            <h3 class="text-lg font-medium leading-6 text-gray-900">Signatures</h3>
                            <p class="mt-1 text-sm text-gray-600">
                                To be signed by TCL, customer and driver.
                            </p>
                            </div>
                        </div>
                        <div class="mt-5 md:mt-0 md:col-span-2">
                            <div class="shadow sm:rounded-md sm:overflow-hidden">

                                <div class="px-4 py-5 bg-white space-y-6 sm:p-6">
                                    <div class="grid grid-cols-6 gap-6 pb-6">
                                        {{-- Column 1 50% --}}
                                        <div class="col-span-6 sm:col-span-3">
                                            <div class="">
                                                <label for="fleet-num" class="block text-sm font-medium text-gray-700">Name</label>
                                                <input type="text" name="fleet-num" id="fleet-num" autocomplete="" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                            </div>
                                            <div class="mt-6">
                                                <label for="equipment" class="block text-sm font-medium text-gray-700">Position</label>
                                                <input type="text" name="equipment" id="equipment" autocomplete="" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                            </div>
                                            <div class="mt-6">
                                                <label for="fleet-num" class="block text-sm font-medium text-gray-700">For &amp; on behalf of (customer)</label>
                                                <input type="text" name="fleet-num" id="fleet-num" autocomplete="" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                            </div>
                                            <div class="mt-6">
                                                <label for="about" class="block text-sm font-medium text-gray-700">
                                                  Signature
                                                </label>
                                                <div class="mt-1">
                                                  <textarea id="about" name="about" rows="3" class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 mt-1 block w-full sm:text-sm border-gray-300 rounded-md" placeholder="sign here"></textarea>
                                                </div>
                                                <p class="mt-2 text-sm text-gray-500">
                                                  demo only, can't sign yet.
                                                </p>
                                              </div>
                                            <div class="mt-6">
                                                <label for="equipment" class="block text-sm font-medium text-gray-700">Date</label>
                                                <input type="text" name="equipment" id="equipment" autocomplete="" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                            </div>
                                        </div>
                                        {{-- Column 2 50%--}}
                                        <div class="col-span-6 sm:col-span-3">
                                            <div class="">
                                                <label for="fleet-num" class="block text-sm font-medium text-gray-700">Name</label>
                                                <input type="text" name="fleet-num" value="Rachel Mathews" id="fleet-num" autocomplete="" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" disabled>
                                            </div>
                                            <div class="mt-6">
                                                <label for="equipment" class="block text-sm font-medium text-gray-700">Position</label>
                                                <input type="text" name="equipment" value="Rental Administrator" id="equipment" autocomplete="" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" disabled>
                                            </div>
                                            <div class="mt-6">
                                                <label for="fleet-num" class="block text-sm font-medium text-gray-700">For &amp; on behalf of</label>
                                                <input type="text" name="fleet-num" value="TCL Tanker Rental Limited" id="fleet-num" autocomplete="" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" disabled>
                                            </div>
                                            <div class="mt-6">
                                                <label for="about" class="block text-sm font-medium text-gray-700">
                                                  Signature
                                                </label>
                                                <div class="mt-1">
                                                  <textarea id="about" name="about" rows="3" class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 mt-1 block w-full sm:text-sm border-gray-300 rounded-md" placeholder="sign here"></textarea>
                                                </div>
                                                <p class="mt-2 text-sm text-gray-500">
                                                  demo only, can't sign yet.
                                                </p>
                                              </div>
                                            <div class="mt-6">
                                                <label for="equipment" class="block text-sm font-medium text-gray-700">Date</label>
                                                <input type="text" name="equipment" id="equipment" autocomplete="" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                            </div>
                                        </div>
                                    </div>

                                </div>

                                <div class="px-4 py-3 bg-gray-50 text-right sm:px-6">
                                <button type="submit" class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                                    Save
                                </button>
                                </div>
                            </div>
                        </div>
                        </div>
                    </div>

                    <div class="hidden sm:block" aria-hidden="true">
                        <div class="py-5">
                        <div class="border-t border-gray-200"></div>
                        </div>
                    </div>
                </div>



                </section>
            </main>
            <footer>
            <div class="max-w-3xl mx-auto px-4 sm:px-6 lg:px-8 lg:max-w-7xl">
                <div class="border-t border-gray-200 py-8 text-sm text-gray-500 text-center sm:text-left"><span class="block sm:inline">&copy; 2021 TCL Tanker Rental LTD.</span> <span class="block sm:inline">All rights reserved.</span></div>
            </div>
            </footer>
        </div>


    </body>
</html>
