<div id="sidebar" class="flex flex-col absolute z-40 left-0 top-0 lg:static lg:left-auto lg:top-auto lg:translate-x-0 transform h-screen overflow-y-scroll lg:overflow-y-auto no-scrollbar w-64 lg:w-20 lg:sidebar-expanded:!w-64 2xl:!w-64 shrink-0 bg-gray-800 p-4 transition-all duration-200 ease-in-out -translate-x-64">
    <div class="flex justify-between mb-10 pr-3 sm:px-2">
        <button class="lg:hidden text-gray-500 hover:text-gray-400" aria-controls="sidebar" aria-expanded="false">
            <span class="sr-only">Close sidebar</span>
            <svg class="w-6 h-6 fill-current" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path d="M10.7 18.7l1.4-1.4L7.8 13H20v-2H7.8l4.3-4.3-1.4-1.4L4 12z"></path>
            </svg>
        </button>
        <a aria-current="page" class="block active" href="/">
            <svg width="32" height="32" viewBox="0 0 32 32">
                <defs>
                    <linearGradient x1="28.538%" y1="20.229%" x2="100%" y2="108.156%" id="logo-a">
                        <stop stop-color="#A5B4FC" stop-opacity="0" offset="0%"></stop>
                        <stop stop-color="#A5B4FC" offset="100%"></stop>
                    </linearGradient>
                    <linearGradient x1="88.638%" y1="29.267%" x2="22.42%" y2="100%" id="logo-b">
                        <stop stop-color="#38BDF8" stop-opacity="0" offset="0%"></stop>
                        <stop stop-color="#38BDF8" offset="100%"></stop>
                    </linearGradient>
                </defs>
                <rect fill="#6366F1" width="32" height="32" rx="16"></rect>
                <path d="M18.277.16C26.035 1.267 32 7.938 32 16c0 8.837-7.163 16-16 16a15.937 15.937 0 01-10.426-3.863L18.277.161z" fill="#4F46E5"></path>
                <path d="M7.404 2.503l18.339 26.19A15.93 15.93 0 0116 32C7.163 32 0 24.837 0 16 0 10.327 2.952 5.344 7.404 2.503z" fill="url(#logo-a)"></path>
                <path d="M2.223 24.14L29.777 7.86A15.926 15.926 0 0132 16c0 8.837-7.163 16-16 16-5.864 0-10.991-3.154-13.777-7.86z" fill="url(#logo-b)"></path>
            </svg>
        </a>
    </div>
    <div class="space-y-8">
        <div>
            <h3 class="text-xs uppercase text-gray-500 font-semibold pl-3"><span class="hidden lg:block lg:sidebar-expanded:hidden 2xl:hidden text-center w-6" aria-hidden="true">•••</span><span class="lg:hidden lg:sidebar-expanded:block 2xl:block">Pages</span></h3>
            <ul class="mt-3">
                <li class="px-3 py-2 rounded-sm mb-0.5 last:mb-0 bg-gray-900">
                    <a aria-current="page" class="block text-gray-200 hover:text-white truncate transition duration-150 hover:text-gray-200 active" href="/">
                        <div class="flex items-center">
                            <svg class="shrink-0 h-6 w-6" viewBox="0 0 24 24">
                                <path class="fill-current text-gray-400 !text-indigo-500" d="M12 0C5.383 0 0 5.383 0 12s5.383 12 12 12 12-5.383 12-12S18.617 0 12 0z"></path>
                                <path class="fill-current text-gray-600 text-indigo-600" d="M12 3c-4.963 0-9 4.037-9 9s4.037 9 9 9 9-4.037 9-9-4.037-9-9-9z"></path>
                                <path class="fill-current text-gray-400 text-indigo-200" d="M12 15c-1.654 0-3-1.346-3-3 0-.462.113-.894.3-1.285L6 6l4.714 3.301A2.973 2.973 0 0112 9c1.654 0 3 1.346 3 3s-1.346 3-3 3z"></path>
                            </svg>
                            <span class="text-sm font-medium ml-3 lg:opacity-0 lg:sidebar-expanded:opacity-100 2xl:opacity-100 duration-200">Dashboard</span>
                        </div>
                    </a>
                </li>
                <li class="px-3 py-2 rounded-sm mb-0.5 last:mb-0 false">
                    <a aria-current="page" class="block text-gray-200 hover:text-white truncate transition duration-150 false active" href="/">
                        <div class="flex items-center">
                            <svg class="shrink-0 h-6 w-6" viewBox="0 0 24 24">
                                <path class="fill-current text-gray-600 false" d="M0 20h24v2H0z"></path>
                                <path class="fill-current text-gray-400 false" d="M4 18h2a1 1 0 001-1V8a1 1 0 00-1-1H4a1 1 0 00-1 1v9a1 1 0 001 1zM11 18h2a1 1 0 001-1V3a1 1 0 00-1-1h-2a1 1 0 00-1 1v14a1 1 0 001 1zM17 12v5a1 1 0 001 1h2a1 1 0 001-1v-5a1 1 0 00-1-1h-2a1 1 0 00-1 1z"></path>
                            </svg>
                            <span class="text-sm font-medium ml-3 lg:opacity-0 lg:sidebar-expanded:opacity-100 2xl:opacity-100 duration-200">Analytics</span>
                        </div>
                    </a>
                </li>
                <li class="px-3 py-2 rounded-sm mb-0.5 last:mb-0 false">
                    <a href="#0" class="block text-gray-200 hover:text-white truncate transition duration-150 false">
                        <div class="flex items-center justify-between">
                            <div class="flex items-center">
                                <svg class="shrink-0 h-6 w-6" viewBox="0 0 24 24">
                                    <path class="fill-current text-gray-400 false" d="M13 15l11-7L11.504.136a1 1 0 00-1.019.007L0 7l13 8z"></path>
                                    <path class="fill-current text-gray-700 false" d="M13 15L0 7v9c0 .355.189.685.496.864L13 24v-9z"></path>
                                    <path class="fill-current text-gray-600 false" d="M13 15.047V24l10.573-7.181A.999.999 0 0024 16V8l-11 7.047z"></path>
                                </svg>
                                <span class="text-sm font-medium ml-3 lg:opacity-0 lg:sidebar-expanded:opacity-100 2xl:opacity-100 duration-200">E-Commerce</span>
                            </div>
                            <div class="flex shrink-0 ml-2">
                                <svg class="w-3 h-3 shrink-0 ml-1 fill-current text-gray-400 false" viewBox="0 0 12 12">
                                    <path d="M5.9 11.4L.5 6l1.4-1.4 4 4 4-4L11.3 6z"></path>
                                </svg>
                            </div>
                        </div>
                    </a>
                    <div class="lg:hidden lg:sidebar-expanded:block 2xl:block">
                        <ul class="pl-9 mt-1 hidden">
                            <li class="mb-1 last:mb-0"><a aria-current="page" class="block text-gray-400 hover:text-gray-200 transition duration-150 truncate active" href="/"><span class="text-sm font-medium lg:opacity-0 lg:sidebar-expanded:opacity-100 2xl:opacity-100 duration-200">Customers</span></a></li>
                            <li class="mb-1 last:mb-0"><a aria-current="page" class="block text-gray-400 hover:text-gray-200 transition duration-150 truncate active" href="/"><span class="text-sm font-medium lg:opacity-0 lg:sidebar-expanded:opacity-100 2xl:opacity-100 duration-200">Orders</span></a></li>
                            <li class="mb-1 last:mb-0"><a aria-current="page" class="block text-gray-400 hover:text-gray-200 transition duration-150 truncate active" href="/"><span class="text-sm font-medium lg:opacity-0 lg:sidebar-expanded:opacity-100 2xl:opacity-100 duration-200">Invoices</span></a></li>
                            <li class="mb-1 last:mb-0"><a aria-current="page" class="block text-gray-400 hover:text-gray-200 transition duration-150 truncate active" href="/"><span class="text-sm font-medium lg:opacity-0 lg:sidebar-expanded:opacity-100 2xl:opacity-100 duration-200">Shop</span></a></li>
                            <li class="mb-1 last:mb-0"><a aria-current="page" class="block text-gray-400 hover:text-gray-200 transition duration-150 truncate active" href="/"><span class="text-sm font-medium lg:opacity-0 lg:sidebar-expanded:opacity-100 2xl:opacity-100 duration-200">Shop 2</span></a></li>
                            <li class="mb-1 last:mb-0"><a aria-current="page" class="block text-gray-400 hover:text-gray-200 transition duration-150 truncate active" href="/"><span class="text-sm font-medium lg:opacity-0 lg:sidebar-expanded:opacity-100 2xl:opacity-100 duration-200">Single Product</span></a></li>
                            <li class="mb-1 last:mb-0"><a aria-current="page" class="block text-gray-400 hover:text-gray-200 transition duration-150 truncate active" href="/"><span class="text-sm font-medium lg:opacity-0 lg:sidebar-expanded:opacity-100 2xl:opacity-100 duration-200">Cart</span></a></li>
                            <li class="mb-1 last:mb-0"><a aria-current="page" class="block text-gray-400 hover:text-gray-200 transition duration-150 truncate active" href="/"><span class="text-sm font-medium lg:opacity-0 lg:sidebar-expanded:opacity-100 2xl:opacity-100 duration-200">Cart 2</span></a></li>
                            <li class="mb-1 last:mb-0"><a aria-current="page" class="block text-gray-400 hover:text-gray-200 transition duration-150 truncate active" href="/"><span class="text-sm font-medium lg:opacity-0 lg:sidebar-expanded:opacity-100 2xl:opacity-100 duration-200">Pay</span></a></li>
                        </ul>
                    </div>
                </li>
                <li class="px-3 py-2 rounded-sm mb-0.5 last:mb-0 false">
                    <a aria-current="page" class="block text-gray-200 hover:text-white truncate transition duration-150 false active" href="/">
                        <div class="flex items-center">
                            <svg class="shrink-0 h-6 w-6" viewBox="0 0 24 24">
                                <path class="fill-current text-gray-600 false" d="M20 7a.75.75 0 01-.75-.75 1.5 1.5 0 00-1.5-1.5.75.75 0 110-1.5 1.5 1.5 0 001.5-1.5.75.75 0 111.5 0 1.5 1.5 0 001.5 1.5.75.75 0 110 1.5 1.5 1.5 0 00-1.5 1.5A.75.75 0 0120 7zM4 23a.75.75 0 01-.75-.75 1.5 1.5 0 00-1.5-1.5.75.75 0 110-1.5 1.5 1.5 0 001.5-1.5.75.75 0 111.5 0 1.5 1.5 0 001.5 1.5.75.75 0 110 1.5 1.5 1.5 0 00-1.5 1.5A.75.75 0 014 23z"></path>
                                <path class="fill-current text-gray-400 false" d="M17 23a1 1 0 01-1-1 4 4 0 00-4-4 1 1 0 010-2 4 4 0 004-4 1 1 0 012 0 4 4 0 004 4 1 1 0 010 2 4 4 0 00-4 4 1 1 0 01-1 1zM7 13a1 1 0 01-1-1 4 4 0 00-4-4 1 1 0 110-2 4 4 0 004-4 1 1 0 112 0 4 4 0 004 4 1 1 0 010 2 4 4 0 00-4 4 1 1 0 01-1 1z"></path>
                            </svg>
                            <span class="text-sm font-medium ml-3 lg:opacity-0 lg:sidebar-expanded:opacity-100 2xl:opacity-100 duration-200">Campaigns</span>
                        </div>
                    </a>
                </li>
                <li class="px-3 py-2 rounded-sm mb-0.5 last:mb-0 false">
                    <a href="#0" class="block text-gray-200 hover:text-white truncate transition duration-150 false">
                        <div class="flex items-center justify-between">
                            <div class="flex items-center">
                                <svg class="shrink-0 h-6 w-6" viewBox="0 0 24 24">
                                    <path class="fill-current text-gray-600 false" d="M18.974 8H22a2 2 0 012 2v6h-2v5a1 1 0 01-1 1h-2a1 1 0 01-1-1v-5h-2v-6a2 2 0 012-2h.974zM20 7a2 2 0 11-.001-3.999A2 2 0 0120 7zM2.974 8H6a2 2 0 012 2v6H6v5a1 1 0 01-1 1H3a1 1 0 01-1-1v-5H0v-6a2 2 0 012-2h.974zM4 7a2 2 0 11-.001-3.999A2 2 0 014 7z"></path>
                                    <path class="fill-current text-gray-400 false" d="M12 6a3 3 0 110-6 3 3 0 010 6zm2 18h-4a1 1 0 01-1-1v-6H6v-6a3 3 0 013-3h6a3 3 0 013 3v6h-3v6a1 1 0 01-1 1z"></path>
                                </svg>
                                <span class="text-sm font-medium ml-3 lg:opacity-0 lg:sidebar-expanded:opacity-100 2xl:opacity-100 duration-200">Team</span>
                            </div>
                            <div class="flex shrink-0 ml-2">
                                <svg class="w-3 h-3 shrink-0 ml-1 fill-current text-gray-400 transform rotate-180" viewBox="0 0 12 12">
                                    <path d="M5.9 11.4L.5 6l1.4-1.4 4 4 4-4L11.3 6z"></path>
                                </svg>
                            </div>
                        </div>
                    </a>
                    <div class="lg:hidden lg:sidebar-expanded:block 2xl:block">
                        <ul class="pl-9 mt-1 false">
                            <li class="mb-1 last:mb-0"><a aria-current="page" class="block text-gray-400 hover:text-gray-200 transition duration-150 truncate active" href="/"><span class="text-sm font-medium lg:opacity-0 lg:sidebar-expanded:opacity-100 2xl:opacity-100 duration-200">Team - Tabs</span></a></li>
                            <li class="mb-1 last:mb-0"><a aria-current="page" class="block text-gray-400 hover:text-gray-200 transition duration-150 truncate active" href="/"><span class="text-sm font-medium lg:opacity-0 lg:sidebar-expanded:opacity-100 2xl:opacity-100 duration-200">Team - Tiles</span></a></li>
                            <li class="mb-1 last:mb-0"><a aria-current="page" class="block text-gray-400 hover:text-gray-200 transition duration-150 truncate active" href="/"><span class="text-sm font-medium lg:opacity-0 lg:sidebar-expanded:opacity-100 2xl:opacity-100 duration-200">Profile</span></a></li>
                        </ul>
                    </div>
                </li>
                <li class="px-3 py-2 rounded-sm mb-0.5 last:mb-0 false">
                    <a aria-current="page" class="block text-gray-200 hover:text-white truncate transition duration-150 false active" href="/">
                        <div class="flex items-center">
                            <svg class="shrink-0 h-6 w-6" viewBox="0 0 24 24">
                                <path class="fill-current text-gray-600 false" d="M14.5 7c4.695 0 8.5 3.184 8.5 7.111 0 1.597-.638 3.067-1.7 4.253V23l-4.108-2.148a10 10 0 01-2.692.37c-4.695 0-8.5-3.184-8.5-7.11C6 10.183 9.805 7 14.5 7z"></path>
                                <path class="fill-current text-gray-400 false" d="M11 1C5.477 1 1 4.582 1 9c0 1.797.75 3.45 2 4.785V19l4.833-2.416C8.829 16.85 9.892 17 11 17c5.523 0 10-3.582 10-8s-4.477-8-10-8z"></path>
                            </svg>
                            <span class="text-sm font-medium ml-3 lg:opacity-0 lg:sidebar-expanded:opacity-100 2xl:opacity-100 duration-200">Messages</span>
                        </div>
                    </a>
                </li>
            </ul>
        </div>
    </div>
    <div class="pt-3 hidden lg:inline-flex 2xl:hidden justify-end mt-auto">
        <div class="px-3 py-2">
            <button>
                <span class="sr-only">Expand / collapse sidebar</span>
                <svg class="w-6 h-6 fill-current sidebar-expanded:rotate-180" viewBox="0 0 24 24">
                    <path class="text-gray-400" d="M19.586 11l-5-5L16 4.586 23.414 12 16 19.414 14.586 18l5-5H7v-2z"></path>
                    <path class="text-gray-600" d="M3 23H1V1h2z"></path>
                </svg>
            </button>
        </div>
    </div>
</div>