<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <link rel="icon" href="/favicon.ico" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="theme-color" content="#000000" />
    <meta
      name="description"
      content="Web site created using create-react-app"
    />
    <link rel="apple-touch-icon" href="https://mosaic.cruip.com/logo192.png" />
    <link rel="manifest" href="https://mosaic.cruip.com/manifest.json" />
    <title>React App</title>

    <!-- Styles -->
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    @livewireStyles

    <!-- Scripts -->
    <script src="{{ mix('js/app.js') }}" defer></script>
  </head>
  <body class="font-inter antialiased bg-gray-100 text-gray-600">
    <noscript>You need to enable JavaScript to run this app.</noscript>
    <script>
        if (localStorage.getItem('sidebar-expanded') != 'true') {
            document.querySelector('body').classList.add('sidebar-expanded');
        } else {
            document.querySelector('body').classList.remove('sidebar-expanded');
        }
    </script>    
    <div id="root">
			<div class="flex h-screen overflow-hidden">
			    <div class="fixed inset-0 bg-gray-900 bg-opacity-30 z-40 lg:hidden lg:z-auto transition-opacity duration-200 opacity-0 pointer-events-none" aria-hidden="true"></div>
			    
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
			            <li class="px-3 py-2 rounded-sm mb-0.5 last:mb-0 false">
			              <a aria-current="page" class="block text-gray-200 hover:text-white truncate transition duration-150 false active" href="/">
			                <div class="flex items-center">
			                  <svg class="shrink-0 h-6 w-6" viewBox="0 0 24 24">
			                    <path class="fill-current text-gray-600 false" d="M8 1v2H3v19h18V3h-5V1h7v23H1V1z"></path>
			                    <path class="fill-current text-gray-600 false" d="M1 1h22v23H1z"></path>
			                    <path class="fill-current text-gray-400 false" d="M15 10.586L16.414 12 11 17.414 7.586 14 9 12.586l2 2zM5 0h14v4H5z"></path>
			                  </svg>
			                  <span class="text-sm font-medium ml-3 lg:opacity-0 lg:sidebar-expanded:opacity-100 2xl:opacity-100 duration-200">Tasks</span>
			                </div>
			              </a>
			            </li>
			            <li class="px-3 py-2 rounded-sm mb-0.5 last:mb-0 false">
			              <a aria-current="page" class="block text-gray-200 hover:text-white truncate transition duration-150 false active" href="/">
			                <div class="flex items-center">
			                  <svg class="shrink-0 h-6 w-6" viewBox="0 0 24 24">
			                    <path class="fill-current text-gray-600 false" d="M16 13v4H8v-4H0l3-9h18l3 9h-8Z"></path>
			                    <path class="fill-current text-gray-400 false" d="m23.72 12 .229.686A.984.984 0 0 1 24 13v8a1 1 0 0 1-1 1H1a1 1 0 0 1-1-1v-8c0-.107.017-.213.051-.314L.28 12H8v4h8v-4H23.72ZM13 0v7h3l-4 5-4-5h3V0h2Z"></path>
			                  </svg>
			                  <span class="text-sm font-medium ml-3 lg:opacity-0 lg:sidebar-expanded:opacity-100 2xl:opacity-100 duration-200">Inbox</span>
			                </div>
			              </a>
			            </li>
			            <li class="px-3 py-2 rounded-sm mb-0.5 last:mb-0 false">
			              <a aria-current="page" class="block text-gray-200 hover:text-white truncate transition duration-150 false active" href="/">
			                <div class="flex items-center">
			                  <svg class="shrink-0 h-6 w-6" viewBox="0 0 24 24">
			                    <path class="fill-current text-gray-600 false" d="M1 3h22v20H1z"></path>
			                    <path class="fill-current text-gray-400 false" d="M21 3h2v4H1V3h2V1h4v2h10V1h4v2Z"></path>
			                  </svg>
			                  <span class="text-sm font-medium ml-3 lg:opacity-0 lg:sidebar-expanded:opacity-100 2xl:opacity-100 duration-200">Calendar</span>
			                </div>
			              </a>
			            </li>
			            <li class="px-3 py-2 rounded-sm mb-0.5 last:mb-0 false">
			              <a href="#0" class="block text-gray-200 hover:text-white truncate transition duration-150 false">
			                <div class="flex items-center justify-between">
			                  <div class="flex items-center">
			                    <svg class="shrink-0 h-6 w-6" viewBox="0 0 24 24">
			                      <path class="fill-current text-gray-600 false" d="M19.714 14.7l-7.007 7.007-1.414-1.414 7.007-7.007c-.195-.4-.298-.84-.3-1.286a3 3 0 113 3 2.969 2.969 0 01-1.286-.3z"></path>
			                      <path class="fill-current text-gray-400 false" d="M10.714 18.3c.4-.195.84-.298 1.286-.3a3 3 0 11-3 3c.002-.446.105-.885.3-1.286l-6.007-6.007 1.414-1.414 6.007 6.007z"></path>
			                      <path class="fill-current text-gray-600 false" d="M5.7 10.714c.195.4.298.84.3 1.286a3 3 0 11-3-3c.446.002.885.105 1.286.3l7.007-7.007 1.414 1.414L5.7 10.714z"></path>
			                      <path class="fill-current text-gray-400 false" d="M19.707 9.292a3.012 3.012 0 00-1.415 1.415L13.286 5.7c-.4.195-.84.298-1.286.3a3 3 0 113-3 2.969 2.969 0 01-.3 1.286l5.007 5.006z"></path>
			                    </svg>
			                    <span class="text-sm font-medium ml-3 lg:opacity-0 lg:sidebar-expanded:opacity-100 2xl:opacity-100 duration-200">Settings</span>
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
			                  <li class="mb-1 last:mb-0"><a aria-current="page" class="block text-gray-400 hover:text-gray-200 transition duration-150 truncate active" href="/"><span class="text-sm font-medium lg:opacity-0 lg:sidebar-expanded:opacity-100 2xl:opacity-100 duration-200">My Account</span></a></li>
			                  <li class="mb-1 last:mb-0"><a aria-current="page" class="block text-gray-400 hover:text-gray-200 transition duration-150 truncate active" href="/"><span class="text-sm font-medium lg:opacity-0 lg:sidebar-expanded:opacity-100 2xl:opacity-100 duration-200">My Notifications</span></a></li>
			                  <li class="mb-1 last:mb-0"><a aria-current="page" class="block text-gray-400 hover:text-gray-200 transition duration-150 truncate active" href="/"><span class="text-sm font-medium lg:opacity-0 lg:sidebar-expanded:opacity-100 2xl:opacity-100 duration-200">Connected Apps</span></a></li>
			                  <li class="mb-1 last:mb-0"><a aria-current="page" class="block text-gray-400 hover:text-gray-200 transition duration-150 truncate active" href="/"><span class="text-sm font-medium lg:opacity-0 lg:sidebar-expanded:opacity-100 2xl:opacity-100 duration-200">Plans</span></a></li>
			                  <li class="mb-1 last:mb-0"><a aria-current="page" class="block text-gray-400 hover:text-gray-200 transition duration-150 truncate active" href="/"><span class="text-sm font-medium lg:opacity-0 lg:sidebar-expanded:opacity-100 2xl:opacity-100 duration-200">Billing &amp; Invoices</span></a></li>
			                  <li class="mb-1 last:mb-0"><a aria-current="page" class="block text-gray-400 hover:text-gray-200 transition duration-150 truncate active" href="/"><span class="text-sm font-medium lg:opacity-0 lg:sidebar-expanded:opacity-100 2xl:opacity-100 duration-200">Give Feedback</span></a></li>
			                </ul>
			              </div>
			            </li>
			            <li class="px-3 py-2 rounded-sm mb-0.5 last:mb-0 false">
			              <a href="#0" class="block text-gray-200 hover:text-white truncate transition duration-150 false">
			                <div class="flex items-center justify-between">
			                  <div class="flex items-center">
			                    <svg class="shrink-0 h-6 w-6" viewBox="0 0 24 24">
			                      <circle class="fill-current text-gray-400 false" cx="18.5" cy="5.5" r="4.5"></circle>
			                      <circle class="fill-current text-gray-600 false" cx="5.5" cy="5.5" r="4.5"></circle>
			                      <circle class="fill-current text-gray-600 false" cx="18.5" cy="18.5" r="4.5"></circle>
			                      <circle class="fill-current text-gray-400 false" cx="5.5" cy="18.5" r="4.5"></circle>
			                    </svg>
			                    <span class="text-sm font-medium ml-3 lg:opacity-0 lg:sidebar-expanded:opacity-100 2xl:opacity-100 duration-200">Utility</span>
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
			                  <li class="mb-1 last:mb-0"><a aria-current="page" class="block text-gray-400 hover:text-gray-200 transition duration-150 truncate active" href="/"><span class="text-sm font-medium lg:opacity-0 lg:sidebar-expanded:opacity-100 2xl:opacity-100 duration-200">Changelog</span></a></li>
			                  <li class="mb-1 last:mb-0"><a aria-current="page" class="block text-gray-400 hover:text-gray-200 transition duration-150 truncate active" href="/"><span class="text-sm font-medium lg:opacity-0 lg:sidebar-expanded:opacity-100 2xl:opacity-100 duration-200">Roadmap</span></a></li>
			                  <li class="mb-1 last:mb-0"><a aria-current="page" class="block text-gray-400 hover:text-gray-200 transition duration-150 truncate active" href="/"><span class="text-sm font-medium lg:opacity-0 lg:sidebar-expanded:opacity-100 2xl:opacity-100 duration-200">FAQs</span></a></li>
			                  <li class="mb-1 last:mb-0"><a aria-current="page" class="block text-gray-400 hover:text-gray-200 transition duration-150 truncate active" href="/"><span class="text-sm font-medium lg:opacity-0 lg:sidebar-expanded:opacity-100 2xl:opacity-100 duration-200">Empty State</span></a></li>
			                  <li class="mb-1 last:mb-0"><a aria-current="page" class="block text-gray-400 hover:text-gray-200 transition duration-150 truncate active" href="/"><span class="text-sm font-medium lg:opacity-0 lg:sidebar-expanded:opacity-100 2xl:opacity-100 duration-200">404</span></a></li>
			                </ul>
			              </div>
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
			  <div class="relative flex flex-col flex-1 overflow-y-auto overflow-x-hidden">
			    <header class="sticky top-0 bg-white border-b border-gray-200 z-30">
			      <div class="px-4 sm:px-6 lg:px-8">
			        <div class="flex items-center justify-between h-16 -mb-px">
			          <div class="flex">
			            <button class="text-gray-500 hover:text-gray-600 lg:hidden" aria-controls="sidebar" aria-expanded="false">
			              <span class="sr-only">Open sidebar</span>
			              <svg class="w-6 h-6 fill-current" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
			                <rect x="4" y="5" width="16" height="2"></rect>
			                <rect x="4" y="11" width="16" height="2"></rect>
			                <rect x="4" y="17" width="16" height="2"></rect>
			              </svg>
			            </button>
			          </div>
			          <div class="flex items-center">
			            <div>
			              <button class="w-8 h-8 flex items-center justify-center bg-gray-100 hover:bg-gray-200 transition duration-150 rounded-full ml-3 false" aria-controls="search-modal">
			                <span class="sr-only">Search</span>
			                <svg class="w-4 h-4" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg">
			                  <path class="fill-current text-gray-500" d="M7 14c-3.86 0-7-3.14-7-7s3.14-7 7-7 7 3.14 7 7-3.14 7-7 7zM7 2C4.243 2 2 4.243 2 7s2.243 5 5 5 5-2.243 5-5-2.243-5-5-5z"></path>
			                  <path class="fill-current text-gray-400" d="M15.707 14.293L13.314 11.9a8.019 8.019 0 01-1.414 1.414l2.393 2.393a.997.997 0 001.414 0 .999.999 0 000-1.414z"></path>
			                </svg>
			              </button>
			              <div class="fixed inset-0 bg-gray-900 bg-opacity-30 z-50 transition-opacity" aria-hidden="true" style="display: none;"></div>
			              <div id="search-modal" class="fixed inset-0 z-50 overflow-hidden flex items-start top-20 mb-4 justify-center transform px-4 sm:px-6" role="dialog" aria-modal="true" style="display: none;">
			                <div class="bg-white overflow-auto max-w-2xl w-full max-h-full rounded shadow-lg">
			                  <form class="border-b border-gray-200">
			                    <div class="relative">
			                      <label for="modal-search" class="sr-only">Search</label><input id="modal-search" class="w-full border-0 focus:ring-transparent placeholder-gray-400 appearance-none py-3 pl-10 pr-4" type="search" placeholder="Search Anything…">
			                      <button class="absolute inset-0 right-auto group" type="submit" aria-label="Search">
			                        <svg class="w-4 h-4 shrink-0 fill-current text-gray-400 group-hover:text-gray-500 ml-4 mr-2" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg">
			                          <path d="M7 14c-3.86 0-7-3.14-7-7s3.14-7 7-7 7 3.14 7 7-3.14 7-7 7zM7 2C4.243 2 2 4.243 2 7s2.243 5 5 5 5-2.243 5-5-2.243-5-5-5z"></path>
			                          <path d="M15.707 14.293L13.314 11.9a8.019 8.019 0 01-1.414 1.414l2.393 2.393a.997.997 0 001.414 0 .999.999 0 000-1.414z"></path>
			                        </svg>
			                      </button>
			                    </div>
			                  </form>
			                  <div class="py-4 px-2">
			                    <div class="mb-3 last:mb-0">
			                      <div class="text-xs font-semibold text-gray-400 uppercase px-2 mb-2">Recent searches</div>
			                      <ul class="text-sm">
			                        <li>
			                          <a class="flex items-center p-2 text-gray-800 hover:text-white hover:bg-indigo-500 rounded group" href="/#0">
			                            <svg class="w-4 h-4 fill-current text-gray-400 group-hover:text-white group-hover:text-opacity-50 shrink-0 mr-3" viewBox="0 0 16 16">
			                              <path d="M15.707 14.293v.001a1 1 0 01-1.414 1.414L11.185 12.6A6.935 6.935 0 017 14a7.016 7.016 0 01-5.173-2.308l-1.537 1.3L0 8l4.873 1.12-1.521 1.285a4.971 4.971 0 008.59-2.835l1.979.454a6.971 6.971 0 01-1.321 3.157l3.107 3.112zM14 6L9.127 4.88l1.521-1.28a4.971 4.971 0 00-8.59 2.83L.084 5.976a6.977 6.977 0 0112.089-3.668l1.537-1.3L14 6z"></path>
			                            </svg>
			                            <span>Form Builder - 23 hours on-demand video</span>
			                          </a>
			                        </li>
			                        <li>
			                          <a class="flex items-center p-2 text-gray-800 hover:text-white hover:bg-indigo-500 rounded group" href="/#0">
			                            <svg class="w-4 h-4 fill-current text-gray-400 group-hover:text-white group-hover:text-opacity-50 shrink-0 mr-3" viewBox="0 0 16 16">
			                              <path d="M15.707 14.293v.001a1 1 0 01-1.414 1.414L11.185 12.6A6.935 6.935 0 017 14a7.016 7.016 0 01-5.173-2.308l-1.537 1.3L0 8l4.873 1.12-1.521 1.285a4.971 4.971 0 008.59-2.835l1.979.454a6.971 6.971 0 01-1.321 3.157l3.107 3.112zM14 6L9.127 4.88l1.521-1.28a4.971 4.971 0 00-8.59 2.83L.084 5.976a6.977 6.977 0 0112.089-3.668l1.537-1.3L14 6z"></path>
			                            </svg>
			                            <span>Access Mosaic on mobile and TV</span>
			                          </a>
			                        </li>
			                        <li>
			                          <a class="flex items-center p-2 text-gray-800 hover:text-white hover:bg-indigo-500 rounded group" href="/#0">
			                            <svg class="w-4 h-4 fill-current text-gray-400 group-hover:text-white group-hover:text-opacity-50 shrink-0 mr-3" viewBox="0 0 16 16">
			                              <path d="M15.707 14.293v.001a1 1 0 01-1.414 1.414L11.185 12.6A6.935 6.935 0 017 14a7.016 7.016 0 01-5.173-2.308l-1.537 1.3L0 8l4.873 1.12-1.521 1.285a4.971 4.971 0 008.59-2.835l1.979.454a6.971 6.971 0 01-1.321 3.157l3.107 3.112zM14 6L9.127 4.88l1.521-1.28a4.971 4.971 0 00-8.59 2.83L.084 5.976a6.977 6.977 0 0112.089-3.668l1.537-1.3L14 6z"></path>
			                            </svg>
			                            <span>Product Update - Q4 2021</span>
			                          </a>
			                        </li>
			                        <li>
			                          <a class="flex items-center p-2 text-gray-800 hover:text-white hover:bg-indigo-500 rounded group" href="/#0">
			                            <svg class="w-4 h-4 fill-current text-gray-400 group-hover:text-white group-hover:text-opacity-50 shrink-0 mr-3" viewBox="0 0 16 16">
			                              <path d="M15.707 14.293v.001a1 1 0 01-1.414 1.414L11.185 12.6A6.935 6.935 0 017 14a7.016 7.016 0 01-5.173-2.308l-1.537 1.3L0 8l4.873 1.12-1.521 1.285a4.971 4.971 0 008.59-2.835l1.979.454a6.971 6.971 0 01-1.321 3.157l3.107 3.112zM14 6L9.127 4.88l1.521-1.28a4.971 4.971 0 00-8.59 2.83L.084 5.976a6.977 6.977 0 0112.089-3.668l1.537-1.3L14 6z"></path>
			                            </svg>
			                            <span>Master Digital Marketing Strategy course</span>
			                          </a>
			                        </li>
			                        <li>
			                          <a class="flex items-center p-2 text-gray-800 hover:text-white hover:bg-indigo-500 rounded group" href="/#0">
			                            <svg class="w-4 h-4 fill-current text-gray-400 group-hover:text-white group-hover:text-opacity-50 shrink-0 mr-3" viewBox="0 0 16 16">
			                              <path d="M15.707 14.293v.001a1 1 0 01-1.414 1.414L11.185 12.6A6.935 6.935 0 017 14a7.016 7.016 0 01-5.173-2.308l-1.537 1.3L0 8l4.873 1.12-1.521 1.285a4.971 4.971 0 008.59-2.835l1.979.454a6.971 6.971 0 01-1.321 3.157l3.107 3.112zM14 6L9.127 4.88l1.521-1.28a4.971 4.971 0 00-8.59 2.83L.084 5.976a6.977 6.977 0 0112.089-3.668l1.537-1.3L14 6z"></path>
			                            </svg>
			                            <span>Dedicated forms for products</span>
			                          </a>
			                        </li>
			                        <li>
			                          <a class="flex items-center p-2 text-gray-800 hover:text-white hover:bg-indigo-500 rounded group" href="/#0">
			                            <svg class="w-4 h-4 fill-current text-gray-400 group-hover:text-white group-hover:text-opacity-50 shrink-0 mr-3" viewBox="0 0 16 16">
			                              <path d="M15.707 14.293v.001a1 1 0 01-1.414 1.414L11.185 12.6A6.935 6.935 0 017 14a7.016 7.016 0 01-5.173-2.308l-1.537 1.3L0 8l4.873 1.12-1.521 1.285a4.971 4.971 0 008.59-2.835l1.979.454a6.971 6.971 0 01-1.321 3.157l3.107 3.112zM14 6L9.127 4.88l1.521-1.28a4.971 4.971 0 00-8.59 2.83L.084 5.976a6.977 6.977 0 0112.089-3.668l1.537-1.3L14 6z"></path>
			                            </svg>
			                            <span>Product Update - Q4 2021</span>
			                          </a>
			                        </li>
			                      </ul>
			                    </div>
			                    <div class="mb-3 last:mb-0">
			                      <div class="text-xs font-semibold text-gray-400 uppercase px-2 mb-2">Recent pages</div>
			                      <ul class="text-sm">
			                        <li>
			                          <a class="flex items-center p-2 text-gray-800 hover:text-white hover:bg-indigo-500 rounded group" href="/#0">
			                            <svg class="w-4 h-4 fill-current text-gray-400 group-hover:text-white group-hover:text-opacity-50 shrink-0 mr-3" viewBox="0 0 16 16">
			                              <path d="M14 0H2c-.6 0-1 .4-1 1v14c0 .6.4 1 1 1h8l5-5V1c0-.6-.4-1-1-1zM3 2h10v8H9v4H3V2z"></path>
			                            </svg>
			                            <span><span class="font-medium text-gray-800 group-hover:text-white">Messages</span> - Conversation / … / Mike Mills</span>
			                          </a>
			                        </li>
			                        <li>
			                          <a class="flex items-center p-2 text-gray-800 hover:text-white hover:bg-indigo-500 rounded group" href="/#0">
			                            <svg class="w-4 h-4 fill-current text-gray-400 group-hover:text-white group-hover:text-opacity-50 shrink-0 mr-3" viewBox="0 0 16 16">
			                              <path d="M14 0H2c-.6 0-1 .4-1 1v14c0 .6.4 1 1 1h8l5-5V1c0-.6-.4-1-1-1zM3 2h10v8H9v4H3V2z"></path>
			                            </svg>
			                            <span><span class="font-medium text-gray-800 group-hover:text-white">Messages</span> - Conversation / … / Eva Patrick</span>
			                          </a>
			                        </li>
			                      </ul>
			                    </div>
			                  </div>
			                </div>
			              </div>
			            </div>
			            <div class="relative inline-flex ml-3">
			              <button class="w-8 h-8 flex items-center justify-center bg-gray-100 hover:bg-gray-200 transition duration-150 rounded-full false" aria-haspopup="true" aria-expanded="false">
			                <span class="sr-only">Notifications</span>
			                <svg class="w-4 h-4" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg">
			                  <path class="fill-current text-gray-500" d="M6.5 0C2.91 0 0 2.462 0 5.5c0 1.075.37 2.074 1 2.922V12l2.699-1.542A7.454 7.454 0 006.5 11c3.59 0 6.5-2.462 6.5-5.5S10.09 0 6.5 0z"></path>
			                  <path class="fill-current text-gray-400" d="M16 9.5c0-.987-.429-1.897-1.147-2.639C14.124 10.348 10.66 13 6.5 13c-.103 0-.202-.018-.305-.021C7.231 13.617 8.556 14 10 14c.449 0 .886-.04 1.307-.11L15 16v-4h-.012C15.627 11.285 16 10.425 16 9.5z"></path>
			                </svg>
			                <div class="absolute top-0 right-0 w-2.5 h-2.5 bg-red-500 border-2 border-white rounded-full"></div>
			              </button>
			              <div class="origin-top-right z-10 absolute top-full right-0 -mr-48 sm:mr-0 min-w-80 bg-white border border-gray-200 py-1.5 rounded shadow-lg overflow-hidden mt-1" style="display: none;">
			                <div>
			                  <div class="text-xs font-semibold text-gray-400 uppercase pt-1.5 pb-2 px-4">Notifications</div>
			                  <ul>
			                    <li class="border-b border-gray-200 last:border-0"><a class="block py-2 px-4 hover:bg-gray-50" href="/#0"><span class="block text-sm mb-2">📣 <span class="font-medium text-gray-800">Edit your information in a swipe</span> Sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim.</span><span class="block text-xs font-medium text-gray-400">Feb 12, 2021</span></a></li>
			                    <li class="border-b border-gray-200 last:border-0"><a class="block py-2 px-4 hover:bg-gray-50" href="/#0"><span class="block text-sm mb-2">📣 <span class="font-medium text-gray-800">Edit your information in a swipe</span> Sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim.</span><span class="block text-xs font-medium text-gray-400">Feb 9, 2021</span></a></li>
			                    <li class="border-b border-gray-200 last:border-0"><a class="block py-2 px-4 hover:bg-gray-50" href="/#0"><span class="block text-sm mb-2">🚀<span class="font-medium text-gray-800">Say goodbye to paper receipts!</span> Sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim.</span><span class="block text-xs font-medium text-gray-400">Jan 24, 2020</span></a></li>
			                  </ul>
			                </div>
			              </div>
			            </div>
			            <div class="relative inline-flex ml-3">
			              <button class="w-8 h-8 flex items-center justify-center bg-gray-100 hover:bg-gray-200 transition duration-150 rounded-full false" aria-haspopup="true" aria-expanded="false">
			                <span class="sr-only">Need help?</span>
			                <svg class="w-4 h-4" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg">
			                  <path class="fill-current text-gray-500" d="M8 0C3.6 0 0 3.6 0 8s3.6 8 8 8 8-3.6 8-8-3.6-8-8-8zm0 12c-.6 0-1-.4-1-1s.4-1 1-1 1 .4 1 1-.4 1-1 1zm1-3H7V4h2v5z"></path>
			                </svg>
			              </button>
			              <div class="origin-top-right z-10 absolute top-full right-0 min-w-44 bg-white border border-gray-200 py-1.5 rounded shadow-lg overflow-hidden mt-1" style="display: none;">
			                <div>
			                  <div class="text-xs font-semibold text-gray-400 uppercase pt-1.5 pb-2 px-4">Need help?</div>
			                  <ul>
			                    <li>
			                      <a class="font-medium text-sm text-indigo-500 hover:text-indigo-600 flex items-center py-1 px-3" href="/#0">
			                        <svg class="w-3 h-3 fill-current text-indigo-300 shrink-0 mr-2" viewBox="0 0 12 12">
			                          <rect y="3" width="12" height="9" rx="1"></rect>
			                          <path d="M2 0h8v2H2z"></path>
			                        </svg>
			                        <span>Documentation</span>
			                      </a>
			                    </li>
			                    <li>
			                      <a class="font-medium text-sm text-indigo-500 hover:text-indigo-600 flex items-center py-1 px-3" href="/#0">
			                        <svg class="w-3 h-3 fill-current text-indigo-300 shrink-0 mr-2" viewBox="0 0 12 12">
			                          <path d="M10.5 0h-9A1.5 1.5 0 000 1.5v9A1.5 1.5 0 001.5 12h9a1.5 1.5 0 001.5-1.5v-9A1.5 1.5 0 0010.5 0zM10 7L8.207 5.207l-3 3-1.414-1.414 3-3L5 2h5v5z"></path>
			                        </svg>
			                        <span>Support Site</span>
			                      </a>
			                    </li>
			                    <li>
			                      <a class="font-medium text-sm text-indigo-500 hover:text-indigo-600 flex items-center py-1 px-3" href="/#0">
			                        <svg class="w-3 h-3 fill-current text-indigo-300 shrink-0 mr-2" viewBox="0 0 12 12">
			                          <path d="M11.854.146a.5.5 0 00-.525-.116l-11 4a.5.5 0 00-.015.934l4.8 1.921 1.921 4.8A.5.5 0 007.5 12h.008a.5.5 0 00.462-.329l4-11a.5.5 0 00-.116-.525z"></path>
			                        </svg>
			                        <span>Contact us</span>
			                      </a>
			                    </li>
			                  </ul>
			                </div>
			              </div>
			            </div>
			            <hr class="w-px h-6 bg-gray-200 mx-3">
			            <div class="relative inline-flex">
			              <button class="inline-flex justify-center items-center group" aria-haspopup="true" aria-expanded="false">
			                <img class="w-8 h-8 rounded-full" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAEAAAABACAIAAAAlC+aJAAAD/ElEQVR4Ae2axXorRxCFq+by3VyT2NkENTecrC4zMz5A3sIw3mUXfoLQNsywCTOzMSiIhWZ7ZrpSU25NmGFGX/p8UneV8Pzq023E63edg3aWBVHIABgAA2AADIABMAAGwAAYAANw9VU39HTbbQzgurNbNvdv2zKQ6LHbEqBYfAsBerrz27b0b98mGO0FUG+MLi42AJFrdr9je//OHYPJhN1Om7hQehuImCEYAZOJ/M4dA7t2DqaSdnsAFEtvE0+BeQwmaVLJ/O5dA3v2CEbMASqVjzxvQawHEAKCXLJSCXvvnoF9+5x0yo4vgFJe+dv3CMQ4sAQkkCwIYipx2b59gwcOCEYMAeQselPME0tAQNTaGNJzqA4eHDx4yMmk7dgBlMvvKd+TJcBl51oUVrpIJ/OHDg0ePuxkMnaMAFxvfrL6MZBsgnA/i3QlM2kezKTzR444R486WcGIGkBUKLzV8qgllUzCxQPKLuFeWuJFOHp08NhxJ5u1owcold5CvY918kH6oAmF4UCo78dcxj5xwuFLLmdHCTC/0KjVRmUF9L5FSZNuxDFJp4VIROHj2f3Jk0OnTju9ghEBAKtQfDtcAVG4CsGgG11ryp88PpfdyAxnzg719m6MAqDwpvgKP2nkWawShkAo+QlZfunxuWz+7Fnn7PmhC/4Yxkr4h6SIFmZ5EPlKEciVS1KuxyVXvk++y6PyPd/3lL64ynU9Hj3X95Y8d8lnGG/F1wsrp8H6DwHSqesBqJVsZCJEUhRwoGUBIykgkHv0GMzyYFkTIrmbrX+zsPJFz/oKRP8dQCp5HeiDkidFSodFWEhnXbWSREIgt+IyE+IifDFjPb+04ssINvHaNR2dnRcF7nTukaVDjhZpKtAi7Tx8+IL/RWXprpq6dwm/d/+frkA6dR0p0oenUmISpBNJQlQAoS+Ss4Bj1p2oTD87701AqIgArkcLKYi5nJhIIsGAAAmxFSENB7OL46Xa07NL4yCKEmDVynXdnbYEwyImQFRilIH0kW9ZchgBWgA+TM+PFSaf4BFE0QMkE1ezRUAdaH2qy74Ux0ra4NqcHv2q9PjU7Gi8vp1OZ663GACAlAq//xEICb5lcd+YHvlo5PaPxu7Q7uMDYFkrE91XinVAxiC9AgIRDI2p4Xc+vvm9T29tzIzAzxV5hHq6L1+1ar18/CTBRzn1iYHqzeHRiYfqzc8gVOwA5ADFIOcKEclXgMCqNYdHxh6sNbT1WANkUtcSkYW4nKdK7dOR0Qeq9U9BFHeAjo6LV6/pANFk9dOR4ftD620BIN/AIVYqnwyP3F+taevtBLB69fpXXrmxItajkvl/IQNgAAyAATAABsAAGAADYAD+vwDfAQSHHlNp5b1mAAAAAElFTkSuQmCC" alt="User" width="32" height="32">
			                <div class="flex items-center truncate">
			                  <span class="truncate ml-2 text-sm font-medium group-hover:text-gray-800">Acme Inc.</span>
			                  <svg class="w-3 h-3 shrink-0 ml-1 fill-current text-gray-400" viewBox="0 0 12 12">
			                    <path d="M5.9 11.4L.5 6l1.4-1.4 4 4 4-4L11.3 6z"></path>
			                  </svg>
			                </div>
			              </button>
			              <div class="origin-top-right z-10 absolute top-full right-0 min-w-44 bg-white border border-gray-200 py-1.5 rounded shadow-lg overflow-hidden mt-1" style="display: none;">
			                <div>
			                  <div class="pt-0.5 pb-2 px-3 mb-1 border-b border-gray-200">
			                    <div class="font-medium text-gray-800">Acme Inc.</div>
			                    <div class="text-xs text-gray-500 italic">Administrator</div>
			                  </div>
			                  <ul>
			                    <li><a class="font-medium text-sm text-indigo-500 hover:text-indigo-600 flex items-center py-1 px-3" href="/">Settings</a></li>
			                    <li><a class="font-medium text-sm text-indigo-500 hover:text-indigo-600 flex items-center py-1 px-3" href="/">Sign Out</a></li>
			                  </ul>
			                </div>
			              </div>
			            </div>
			          </div>
			        </div>
			      </div>
			    </header>
			    <main>
			      <div class="px-4 sm:px-6 lg:px-8 py-8 w-full max-w-9xl mx-auto">
			        <div class="relative bg-indigo-200 p-4 sm:p-6 rounded-sm overflow-hidden mb-8">
			          <div class="absolute right-0 top-0 -mt-4 mr-16 pointer-events-none hidden xl:block" aria-hidden="true">
			            <svg width="319" height="198" xmlns:xlink="http://www.w3.org/1999/xlink">
			              <defs>
			                <path id="welcome-a" d="M64 0l64 128-64-20-64 20z"></path>
			                <path id="welcome-e" d="M40 0l40 80-40-12.5L0 80z"></path>
			                <path id="welcome-g" d="M40 0l40 80-40-12.5L0 80z"></path>
			                <linearGradient x1="50%" y1="0%" x2="50%" y2="100%" id="welcome-b">
			                  <stop stop-color="#A5B4FC" offset="0%"></stop>
			                  <stop stop-color="#818CF8" offset="100%"></stop>
			                </linearGradient>
			                <linearGradient x1="50%" y1="24.537%" x2="50%" y2="100%" id="welcome-c">
			                  <stop stop-color="#4338CA" offset="0%"></stop>
			                  <stop stop-color="#6366F1" stop-opacity="0" offset="100%"></stop>
			                </linearGradient>
			              </defs>
			              <g fill="none" fill-rule="evenodd">
			                <g transform="rotate(64 36.592 105.604)">
			                  <mask id="welcome-d" fill="#fff">
			                    <use xlink:href="#welcome-a"></use>
			                  </mask>
			                  <use fill="url(#welcome-b)" xlink:href="#welcome-a"></use>
			                  <path fill="url(#welcome-c)" mask="url(#welcome-d)" d="M64-24h80v152H64z"></path>
			                </g>
			                <g transform="rotate(-51 91.324 -105.372)">
			                  <mask id="welcome-f" fill="#fff">
			                    <use xlink:href="#welcome-e"></use>
			                  </mask>
			                  <use fill="url(#welcome-b)" xlink:href="#welcome-e"></use>
			                  <path fill="url(#welcome-c)" mask="url(#welcome-f)" d="M40.333-15.147h50v95h-50z"></path>
			                </g>
			                <g transform="rotate(44 61.546 392.623)">
			                  <mask id="welcome-h" fill="#fff">
			                    <use xlink:href="#welcome-g"></use>
			                  </mask>
			                  <use fill="url(#welcome-b)" xlink:href="#welcome-g"></use>
			                  <path fill="url(#welcome-c)" mask="url(#welcome-h)" d="M40.333-15.147h50v95h-50z"></path>
			                </g>
			              </g>
			            </svg>
			          </div>
			          <div class="relative">
			            <h1 class="text-2xl md:text-3xl text-gray-800 font-bold mb-1">Good afternoon, Acme Inc. 👋</h1>
			            <p>Here is what’s happening with your projects today:</p>
			          </div>
			        </div>
			        <div class="sm:flex sm:justify-between sm:items-center mb-8">
			          <ul class="flex flex-wrap justify-center sm:justify-start mb-8 sm:mb-0 -space-x-3 -ml-px">
			            <li><a class="block" href="/#0"><img class="w-9 h-9 rounded-full" src="data:image/jpeg;base64,/9j/4AAQSkZJRgABAQEASABIAAD/2wCEAAgGBgcGBQgHBwcJCQgKDBQNDAsLDBkSEw8UHRofHh0aHBwgJC4nICIsIxwcKDcpLDAxNDQ0Hyc5PTgyPC4zNDIBERISGBUYLxoaL2NCOEJjY2NjY2NjY2NjY2NjY2NjY2NjY2NjY2NjY2NjY2NjY2NjY2NjY2NjY2NjY2NjY2NjY//CABEIAEgASAMBIgACEQEDEQH/xAAbAAACAwEBAQAAAAAAAAAAAAAFBgMEBwIBAP/aAAgBAQAAAADmTqKtB7cKLvUsvPcXtkcW7Uj7wJayGCswZZ0ip8VqZaUN0Lxa1mnIxocAo5jPZN0Uf12CMLsq7l761Z9OSlc7+c13cNEfpFF/z//EABgBAQEBAQEAAAAAAAAAAAAAAAMCBAAB/9oACgICEAMQAAAA0DHsIh+cVko6FDo9ktHLWaxz6Kvkny8p7LI9NhMf/8QAMRAAAgIBAgMFBwQDAQAAAAAAAQIDBAAFEQYSIRMxQVFhBxQVIkJxgTIzkbFDocHh/9oACAEBAAE/AIoJ0AcTKDnxGzAf3QRnxYOvzb741yRv242OSWbneIn2+2GzYcbFGwBm/wAAJyrHytu8KjI7YVORQcNhn+sYk0e2zdTi2lUbImR2SJFDHbc7bAZLf1I02tEQqm/LHGgO7HwAyJZmRvfYSkqfusv6V++O7RNsNiD1DDxHngnc5BKfEHIdJszNsImytwpqMzALDtmr6FLoNFbFqaMSyErFGp67+eV76Gx2rN8iqVHovdvmnHmuVIJD0r7O/oc06WF4mYRLsw2PrnDej0p9c1TR5Yd/d2E1ceUT9dh6A74OFKkTbrVXINBqcuxqxD8ZpntC1rTH3kirz7d4dMpe2W/3HRq0h9HK5xpxbZ4nMdg1hUEMHZiMSc/Vm6nKQLXxWYfQvQDKlEafp8moWiBNYXovkc0vS+I/i6WbU5TThtyxpKdmGaSutcGcS6hrF0rcSaFuy6/SGxva3b8KMQ+75J7WdUP6IqyZHqML7g0gzE9AoyFoB2SS1ghkICxqN2Y+A2zifSoNPCxQoVVUTf7jbfNNihHELS/z6DKGr3NcsNPbk35JTtD3BF+kAZ8R1TUJzHGZYXgO0XKUA+55j1zsdRtaPrBv2TK0cHKnd0H4xq1pT+4DnY2wP1DBYeJtkblJ8c4AqG7xTBJIGlWHebbzIziSMOLysBzoinb1ZsEC0+Ilj5QRLXVwfUjLscmlXjJBuAdmKeYOVOJ9AmrKuo9rFL5R/Uc1CaCtwTqV+PmQWkPZB+/YkAYtp/EjPfCM+C1C/SE7+WcPaRW4S033kqo1G8RGieKDNe1JLOrXWh6x9iu/8nDIZ9ehlA6Rxqp/C5qsqWbKCIjZF25vPL8HJqdRmAPeco169rhuvBahSWBgoeNx026D+9s1/wBmFKwjzaLIa046iBzvG2S1LNaV4ZqrJIjFWUjuOaHWE1ppp12jgHM338APUnJeHZL6m1asETsuyKo+WIeQxtOmpW7tSZS8m+xb8EA/1mmVpbNGWSPo0pA3A69xO2UOHxIEPd3Kc1rRIj7qOQcwf5m9M4YlFnTo0kXpy/6b/wBIywGUcynOMqBj1RLajpOvzdPqGVS0UdV4ySkjkt+Mq3pZYxnEcCVbda8QCJTyPnC0SG7bolQNmZl9eU7/ANHFpPDYkcKeQ+HlmoQvbrSsByhVPXNEWKCUVwwAkiCJ9+QH/mT6/arW62nSAl3kbZ/NM4p7RtJWcDcxuP4Of//EAB4RAAMAAgIDAQAAAAAAAAAAAAABAhARAxITITFB/9oACAECAQE/ACqUi5kbw+Rjp19PonX4dbGJ4hm2diloTFWjyYfuMQty8f/EAB8RAAICAgMAAwAAAAAAAAAAAAACAREDIRASMhMiQf/aAAgBAwEBPwAhbPinmFgWKEHqG2WpBQsmb1xjS9inXRCQ2pHTrNGLyNpz8L+xm9H/2Q==" alt="User 01" width="36" height="36"></a></li>
			            <li><a class="block" href="/#0"><img class="w-9 h-9 rounded-full" src="data:image/jpeg;base64,/9j/4AAQSkZJRgABAQEASABIAAD/2wCEAAgGBgcGBQgHBwcJCQgKDBQNDAsLDBkSEw8UHRofHh0aHBwgJC4nICIsIxwcKDcpLDAxNDQ0Hyc5PTgyPC4zNDIBERISGBUYLxoaL2NCOEJjY2NjY2NjY2NjY2NjY2NjY2NjY2NjY2NjY2NjY2NjY2NjY2NjY2NjY2NjY2NjY2NjY//CABEIAEgASAMBIgACEQEDEQH/xAAaAAADAQEBAQAAAAAAAAAAAAADBAUGAgEA/9oACAEBAAAAAMLSnH1GRXXEGq1W1UKb9El+uPEOgQaNL6cGlMuglPUpec1dxfvLbFzKw9fpnsQXrzzkiLnPkgVIf0it2ifwnDMkz3//xAAYAQEBAQEBAAAAAAAAAAAAAAACAwEABP/aAAoCAhADEAAAAJtYadjmVyxKQaxHt7I2rKks3cj6eNJCmMr/xAAgEAADAQEAAgMBAQEAAAAAAAACAwQBBQARBhITFBUj/9oACAEBAAEIAOe8TP74YfaD7RsJmiHqEG20ApTfgvZKXcC+N0bmKepdbE4wTX+A4RBaCff0UbUuyjZq2HR/yeJY3GjwuuqAy1SOoshxnnyqqa1IOZl4OlxYMNbE/m/rySEj+iadovFanqb7cvQbpTKFe7wldScpwV8UQXFZIKPjm8mL8aqv5/wPYJn64PQVI3+ctCWRE5ZmLzPz9eUqmb7Gjo9BkHQF4h1CRXnS8l7mWdDbNGrVv/XEdA2Se8m6jH6StQ7T9MUuzN3NbBzKKxxp/Jo0AM65w/pMsX58dnVMOrcPwqWx2URdFNfNd9GyIjTKDx/zKFU5OPE+OIkEa+ra3Do3c6cJGj2EvPcVf185ygUxQZzqMT9N2l0XVjKeitjJXHMI+jeoDs6xAZYxFgGHvNzTS4gemKWJT5UmuYfL+3q6AQM3WYe5g27tL375Jv8AS0BCv9mMLR57j/JoaL9WoC8cGBQjMazS9ZuTnZa52zqljHG2M9uA6ZNsxA6NMjWUpBnlCjTb7MT3ZC8APYY8p+IVqGUHzUObOJCycSPJsHNklxHn/8QALBAAAgIBAwIGAQMFAAAAAAAAAQIDEQASITEiQQQTMkJRYRQFcbFScpGhwf/aAAgBAQAJPwB+1NGw2IxQpHKL3y9S8gnA8k0hpY4xZbJvBCXkQmXrwtFPHsY3WiMUlO5OJIA3dhkjVfBOJpjOxBNHJ0H84F0jmvnFSOWQFWlr0rniUIPfVgEk8FHUPct8E46XXTRqsViW2YnPKV4+zVTYdR3og4DGaokLtjlgT6rzxCwyxtqCyH1Z+oR/m/kX5Yk7Z4qN2mcXHGSxUYxRk2cMOqu5GLLLGO5GQkHRSgDviOWItSBYORKpDfuB91hRWGw3rVjNJqjGkv8AIwRP4y7KsjAfxWRjQidSn+o4w6r6SOcQJtQCjGFxnrXAW7UxoH7xo+n2qeThEULe+Xe/7RjO/SSzvVlryV9PyTkImRuVPc54holskRSG/wDeQpYHBFbf9GIiGXcg5Bz79Vr/AJxInlrpgCghP3+TgHSiDY7AnCbWRurClHupvACynUa+sNbE5CGQ8Hup+Ril3gOi2GKGj1LYAzqVTyp3rCCG3wi1qTSeG7EYWM3ijShmsp85WwAwkVz94wHyfjJqLAbVZJrEfWAWJY8ULxDrHIrF0lHsLm4YFGx42IRnAVr3Nb59Y4VNekHJ/IhXgEWzfZw6o11VKDZyRwT6fLPG2Tgv3ZkBxlPmJyq1xgsrvl2yHHp4k80guAGB4F/NDNMVj1+7HeR5OWc3Qx0EKgbx9Wn6PfP/xAAcEQACAwADAQAAAAAAAAAAAAAAAQIQEQMSITH/2gAIAQIBAT8AdKR2FJXjGq+nWpRMOOle4RfhySaXg26//8QAHBEBAQEAAwEBAQAAAAAAAAAAAQACAxEhMRAT/9oACAEDAQE/ABg7bXHfzJykZgD7d5jV43fUa7vAs6huV9ifwfIBfbZ03Fk1r2MBfL//2Q==" alt="User 02" width="36" height="36"></a></li>
			            <li><a class="block" href="/#0"><img class="w-9 h-9 rounded-full" src="data:image/jpeg;base64,/9j/4AAQSkZJRgABAQEASABIAAD/2wCEAAgGBgcGBQgHBwcJCQgKDBQNDAsLDBkSEw8UHRofHh0aHBwgJC4nICIsIxwcKDcpLDAxNDQ0Hyc5PTgyPC4zNDIBERISGBUYLxoaL2NCOEJjY2NjY2NjY2NjY2NjY2NjY2NjY2NjY2NjY2NjY2NjY2NjY2NjY2NjY2NjY2NjY2NjY//CABEIAEgASAMBIgACEQEDEQH/xAAbAAEAAgMBAQAAAAAAAAAAAAAABAUCAwYBB//aAAgBAQAAAAD7OAAAw0S9Hm8U8yZBiXI5HGTV2HQyjjKO0gZfRcyHwlHY9xdB5Fk5AA//xAAZAQEAAwEBAAAAAAAAAAAAAAAAAgMEBQH/2gAKAgIQAxAAAACUQA5uilvhpqOF0fYaY9PGZrs12/LOIAf/xAAvEAABAwMDAgQEBwEAAAAAAAACAQMEAAUREiExBlEUFSAiE0FSwSQwMkBhgbHS/9oACAEBAAE/AP2jroMtk44SCA8rTPi56a2/w7C8ESe5aS1NqnukPqvfXinYkuP7o73xhTltz7LUaUElCxkTHYwLkfTMfSTdBjFhWmMEadyqZe4VphLKnSAYZTbK1Gnsy4zciM6LrLiagMeFSovUlsuEyREiTGnpDGzgDU6QkaUE0dsLpcTuNIuUynz9DT6+Zzc7YdKrlaGr6/BJ93MRjURAC7mqphN6tFrdtNnkW9t/UJG4rJfQJcVbuk2bTKt8qO8XxmBIZClw5lKuEgTjGqEhJxstWwlO1xCLlWh/z0XuP4W7vieUYmAuC/rC1AmdPwlSLcIk+DJaTSbkR0tBfzjNeY9LqOpOpLwKfRv/AM1OuvS2jA+c3E+zjpCK1DikEVm3sMo07IcU1bDhvUv2Smm0ZZBseARET0XO2tXSGrDuRXkDTkSq7WZxpEbuLBKg/oktUtmBVyE8NPcg3q2WxsHk8I05Mk/I8e0KsdjW3qUmSSOSzTG3AJ6lRFTCoi0VsgGWooTCl3VtKbabaHS2AgPYUx+b/8QAIhEAAQMBCQEAAAAAAAAAAAAAAgABAwQQERITFCAhQUIi/9oACAECAQE/AN09T94GWc3lU0+aNrwu8pc3OtMXZMqALnJ7ZqYZee01C/okACA4R3//xAAgEQABBAEEAwAAAAAAAAAAAAABAAIDEQQQEiAiIUFh/9oACAEDAQE/AOQjoWqKkZt1LuoIW74sk9QNY5izwjkj0E5xcbPP/9k=" alt="User 03" width="36" height="36"></a></li>
			            <li><a class="block" href="/#0"><img class="w-9 h-9 rounded-full" src="data:image/jpeg;base64,/9j/4AAQSkZJRgABAQEASABIAAD/2wCEAAgGBgcGBQgHBwcJCQgKDBQNDAsLDBkSEw8UHRofHh0aHBwgJC4nICIsIxwcKDcpLDAxNDQ0Hyc5PTgyPC4zNDIBERISGBUYLxoaL2NCOEJjY2NjY2NjY2NjY2NjY2NjY2NjY2NjY2NjY2NjY2NjY2NjY2NjY2NjY2NjY2NjY2NjY//CABEIAEgASAMBIgACEQEDEQH/xAAbAAABBQEBAAAAAAAAAAAAAAACAwQFBgcAAf/aAAgBAQAAAACzmXLpcImXnWaCaqAv7EBKMwlQdlV2ssxfTQPTiaJd42Ukk5JTsGtbTTeTmDyegT1sv5pPM0zJW+PofVHWDQwItrZXX+nf/8QAGAEAAwEBAAAAAAAAAAAAAAAAAAEDAgT/2gAKAgIQAxAAAAAWd4pWIBK8635dZCdZdHRxtIxuXT0cbMADEz//xAAuEAACAQMCBAQGAwEBAAAAAAABAgMABAUGERITITEiMmFxBxQVQUJRM1KBQ4L/2gAIAQEAAT8AC0FoLTPHH522rkqRxKwKUy8Pf71w0VorQSgtTvyIHkI8o3rB2guoxc3Lc1m6gHsoowoU24V2/W1ZWzQbvCeE/mv2q3fjUqW4mXpvtRWitBKCVqaZIMNMvPSOVtuBd+rjfrWJ1firKWDH3E4jYjYSy+Bd/c0ddYhL2O23cpJ5J9wqN7E96yGq8MMhJZy3qwTlduCccG+43Gx7VjXY5CROuzJxUVopQjrlVrHFLJHb5GMzJNHvbMYWALRv3B3rF4jH/WMfj/kYIIY3N06TOsjyMFKgkVaxWizfJ2wx1xb2x5cbFuLg/SMO1ZbSmMfHzx3BbeaUOYkOyDbsAKwWH+mxwiJnWHgKiKReo/2ilMtCOhHWqIHfTV4YyVaNRLuB/UhjV/jYcnqO1+bEfLWNXhkSRgzA+1Wm5h5ccFs9r5CYyV6exFZ+9gtQsZlDOOnfuawV1cZHGpd3MHIY+BYw2/hHTeitMtLHQiowCQFCoYN0II7im1Zb4nN3FlyiYrG5kjgJ6kRhiAKT4g2E9qsdszNOfTYCreH6lePcXADGMbgDtvUNsILaKIAAIgWmSmSljoR18WM9KL22xFhfzwGJS85gkKEMewpdKnOcMsExDn8/WsDpSfCXi3N7MZEHRozDxqauLy2xWNN+bfwCRX5QGxYA71Y3MGTsIb21bigmTjQ00NNFV5e2mNtWub2dIIV7u5rUvxPmkD22DQwp2NzIPGfYVcl7ud3mld5ZDuXc7kn1NYzI3eFuw6ElPyU9jVnqvEZcRRwXqC4ZuXy3B83637VlcdJPbsZv4Y4GJ/0bVo/X507HFib6EzWx3dSnmSsbncVmow1heRyN94+zj3WpErP6lv8AUN38xdzbqP4408iD0repEDqV/frUkZlj5czNIvqdt/fap8cssYWGR4OoYGM9mHYkU+tMjJpN8ZkV5l2CFa5T/tGO3/qrc3UzGS4VY/6Kh7D1qKaSCVJYZHjlQ7q6HYg1o3Xj5CePGZYgzt4YZ+3Gf01f/8QAHBEAAgICAwAAAAAAAAAAAAAAAAECEBEgAyFB/9oACAECAQE/ACUsC5NJnRF5VzVJYVs9E9kf/8QAHhEAAQMEAwAAAAAAAAAAAAAAAQACEQMQICESQVH/2gAIAQMBAT8ATGckaWFKUQU9sG9M9KfE4ybsIB2tRrEEi/8A/9k=" alt="User 04" width="36" height="36"></a></li>
			            <li>
			              <button class="flex justify-center items-center w-9 h-9 rounded-full bg-white border border-gray-200 hover:border-gray-300 text-indigo-500 shadow-sm transition duration-150 ml-2">
			                <span class="sr-only">Add new user</span>
			                <svg class="w-4 h-4 fill-current" viewBox="0 0 16 16">
			                  <path d="M15 7H9V1c0-.6-.4-1-1-1S7 .4 7 1v6H1c-.6 0-1 .4-1 1s.4 1 1 1h6v6c0 .6.4 1 1 1s1-.4 1-1V9h6c.6 0 1-.4 1-1s-.4-1-1-1z"></path>
			                </svg>
			              </button>
			            </li>
			          </ul>
			          <div class="grid grid-flow-col sm:auto-cols-max justify-start sm:justify-end gap-2">
			            <div class="relative inline-flex">
			              <button class="btn bg-white border-gray-200 hover:border-gray-300 text-gray-500 hover:text-gray-600" aria-haspopup="true" aria-expanded="false">
			                <span class="sr-only">Filter</span><wbr>
			                <svg class="w-4 h-4 fill-current" viewBox="0 0 16 16">
			                  <path d="M9 15H7a1 1 0 010-2h2a1 1 0 010 2zM11 11H5a1 1 0 010-2h6a1 1 0 010 2zM13 7H3a1 1 0 010-2h10a1 1 0 010 2zM15 3H1a1 1 0 010-2h14a1 1 0 010 2z"></path>
			                </svg>
			              </button>
			              <div class="origin-top-right z-10 absolute top-full left-0 right-auto md:left-auto md:right-0 min-w-56 bg-white border border-gray-200 pt-1.5 rounded shadow-lg overflow-hidden mt-1" style="display: none;">
			                <div>
			                  <div class="text-xs font-semibold text-gray-400 uppercase pt-1.5 pb-2 px-4">Filters</div>
			                  <ul class="mb-4">
			                    <li class="py-1 px-3"><label class="flex items-center"><input type="checkbox" class="form-checkbox"><span class="text-sm font-medium ml-2">Direct VS Indirect</span></label></li>
			                    <li class="py-1 px-3"><label class="flex items-center"><input type="checkbox" class="form-checkbox"><span class="text-sm font-medium ml-2">Real Time Value</span></label></li>
			                    <li class="py-1 px-3"><label class="flex items-center"><input type="checkbox" class="form-checkbox"><span class="text-sm font-medium ml-2">Top Channels</span></label></li>
			                    <li class="py-1 px-3"><label class="flex items-center"><input type="checkbox" class="form-checkbox"><span class="text-sm font-medium ml-2">Sales VS Refunds</span></label></li>
			                    <li class="py-1 px-3"><label class="flex items-center"><input type="checkbox" class="form-checkbox"><span class="text-sm font-medium ml-2">Last Order</span></label></li>
			                    <li class="py-1 px-3"><label class="flex items-center"><input type="checkbox" class="form-checkbox"><span class="text-sm font-medium ml-2">Total Spent</span></label></li>
			                  </ul>
			                  <div class="py-2 px-3 border-t border-gray-200 bg-gray-50">
			                    <ul class="flex items-center justify-between">
			                      <li><button class="btn-xs bg-white border-gray-200 hover:border-gray-300 text-gray-500 hover:text-gray-600">Clear</button></li>
			                      <li><button class="btn-xs bg-indigo-500 hover:bg-indigo-600 text-white">Apply</button></li>
			                    </ul>
			                  </div>
			                </div>
			              </div>
			            </div>
			            <div class="relative">
			              <div class="flatpickr-wrapper">
			                <input class="form-input pl-9 text-gray-500 hover:text-gray-600 font-medium focus:border-gray-300 w-60 flatpickr-input" value="" type="text" readonly="readonly">
			                <div class="flatpickr-calendar rangeMode animate static" tabindex="-1">
			              
			                  <div class="flatpickr-innerContainer">
			                    <div class="flatpickr-rContainer">

			                    </div>
			                  </div>
			                </div>
			              </div>
			              <div class="absolute inset-0 right-auto flex items-center pointer-events-none">
			                <svg class="w-4 h-4 fill-current text-gray-500 ml-3" viewBox="0 0 16 16">
			                  <path d="M15 2h-2V0h-2v2H9V0H7v2H5V0H3v2H1a1 1 0 00-1 1v12a1 1 0 001 1h14a1 1 0 001-1V3a1 1 0 00-1-1zm-1 12H2V6h12v8z"></path>
			                </svg>
			              </div>
			            </div>
			            <button class="btn bg-indigo-500 hover:bg-indigo-600 text-white">
			              <svg class="w-4 h-4 fill-current opacity-50 shrink-0" viewBox="0 0 16 16">
			                <path d="M15 7H9V1c0-.6-.4-1-1-1S7 .4 7 1v6H1c-.6 0-1 .4-1 1s.4 1 1 1h6v6c0 .6.4 1 1 1s1-.4 1-1V9h6c.6 0 1-.4 1-1s-.4-1-1-1z"></path>
			              </svg>
			              <span class="hidden xs:block ml-2">Add view</span>
			            </button>
			          </div>
			        </div>
			        <div class="grid grid-cols-12 gap-6">
			          <div class="flex flex-col col-span-full sm:col-span-6 xl:col-span-4 bg-white shadow-lg rounded-sm border border-gray-200">
			            <div class="px-5 pt-5">
			              <header class="flex justify-between items-start mb-2">
			                <img src="https://mosaic.cruip.com/static/media/icon-01.dee86d90.svg" alt="Icon 01" width="32" height="32">
			                <div class="relative inline-flex">
			                  <button class="text-gray-400 hover:text-gray-500 rounded-full false" aria-haspopup="true" aria-expanded="false">
			                    <span class="sr-only">Menu</span>
			                    <svg class="w-8 h-8 fill-current" viewBox="0 0 32 32">
			                      <circle cx="16" cy="16" r="2"></circle>
			                      <circle cx="10" cy="16" r="2"></circle>
			                      <circle cx="22" cy="16" r="2"></circle>
			                    </svg>
			                  </button>
			                  <div class="origin-top-right z-10 absolute top-full right-0 min-w-36 bg-white border border-gray-200 py-1.5 rounded shadow-lg overflow-hidden mt-1" style="display: none;">
			                    <ul>
			                      <li><a class="font-medium text-sm text-gray-600 hover:text-gray-800 flex py-1 px-3" href="/#0">Option 1</a></li>
			                      <li><a class="font-medium text-sm text-gray-600 hover:text-gray-800 flex py-1 px-3" href="/#0">Option 2</a></li>
			                      <li><a class="font-medium text-sm text-red-500 hover:text-red-600 flex py-1 px-3" href="/#0">Remove</a></li>
			                    </ul>
			                  </div>
			                </div>
			              </header>
			              <h2 class="text-lg font-semibold text-gray-800 mb-2">Acme Plus</h2>
			              <div class="text-xs font-semibold text-gray-400 uppercase mb-1">Sales</div>
			              <div class="flex items-start">
			                <div class="text-3xl font-bold text-gray-800 mr-2">$24,780</div>
			                <div class="text-sm font-semibold text-white px-1.5 bg-green-500 rounded-full">+49%</div>
			              </div>
			            </div>
			            <div class="grow">
			              <canvas style="display: block; box-sizing: border-box; height: 128px; width: 369px;" width="738" height="256"></canvas>
			            </div>
			          </div>
			          <div class="flex flex-col col-span-full sm:col-span-6 xl:col-span-4 bg-white shadow-lg rounded-sm border border-gray-200">
			            <div class="px-5 pt-5">
			              <header class="flex justify-between items-start mb-2">
			                <img src="https://mosaic.cruip.com/static/media/icon-02.e87074ee.svg" alt="Icon 02" width="32" height="32">
			                <div class="relative inline-flex">
			                  <button class="text-gray-400 hover:text-gray-500 rounded-full false" aria-haspopup="true" aria-expanded="false">
			                    <span class="sr-only">Menu</span>
			                    <svg class="w-8 h-8 fill-current" viewBox="0 0 32 32">
			                      <circle cx="16" cy="16" r="2"></circle>
			                      <circle cx="10" cy="16" r="2"></circle>
			                      <circle cx="22" cy="16" r="2"></circle>
			                    </svg>
			                  </button>
			                  <div class="origin-top-right z-10 absolute top-full right-0 min-w-36 bg-white border border-gray-200 py-1.5 rounded shadow-lg overflow-hidden mt-1" style="display: none;">
			                    <ul>
			                      <li><a class="font-medium text-sm text-gray-600 hover:text-gray-800 flex py-1 px-3" href="/#0">Option 1</a></li>
			                      <li><a class="font-medium text-sm text-gray-600 hover:text-gray-800 flex py-1 px-3" href="/#0">Option 2</a></li>
			                      <li><a class="font-medium text-sm text-red-500 hover:text-red-600 flex py-1 px-3" href="/#0">Remove</a></li>
			                    </ul>
			                  </div>
			                </div>
			              </header>
			              <h2 class="text-lg font-semibold text-gray-800 mb-2">Acme Advanced</h2>
			              <div class="text-xs font-semibold text-gray-400 uppercase mb-1">Sales</div>
			              <div class="flex items-start">
			                <div class="text-3xl font-bold text-gray-800 mr-2">$17,489</div>
			                <div class="text-sm font-semibold text-white px-1.5 bg-yellow-500 rounded-full">-14%</div>
			              </div>
			            </div>
			            <div class="grow">
			              <canvas style="display: block; box-sizing: border-box; height: 128px; width: 369px;" width="738" height="256"></canvas>
			            </div>
			          </div>
			          <div class="flex flex-col col-span-full sm:col-span-6 xl:col-span-4 bg-white shadow-lg rounded-sm border border-gray-200">
			            <div class="px-5 pt-5">
			              <header class="flex justify-between items-start mb-2">
			                <img src="https://mosaic.cruip.com/static/media/icon-03.f73068ec.svg" alt="Icon 03" width="32" height="32">
			                <div class="relative inline-flex">
			                  <button class="text-gray-400 hover:text-gray-500 rounded-full false" aria-haspopup="true" aria-expanded="false">
			                    <span class="sr-only">Menu</span>
			                    <svg class="w-8 h-8 fill-current" viewBox="0 0 32 32">
			                      <circle cx="16" cy="16" r="2"></circle>
			                      <circle cx="10" cy="16" r="2"></circle>
			                      <circle cx="22" cy="16" r="2"></circle>
			                    </svg>
			                  </button>
			                  <div class="origin-top-right z-10 absolute top-full right-0 min-w-36 bg-white border border-gray-200 py-1.5 rounded shadow-lg overflow-hidden mt-1" style="display: none;">
			                    <ul>
			                      <li><a class="font-medium text-sm text-gray-600 hover:text-gray-800 flex py-1 px-3" href="/#0">Option 1</a></li>
			                      <li><a class="font-medium text-sm text-gray-600 hover:text-gray-800 flex py-1 px-3" href="/#0">Option 2</a></li>
			                      <li><a class="font-medium text-sm text-red-500 hover:text-red-600 flex py-1 px-3" href="/#0">Remove</a></li>
			                    </ul>
			                  </div>
			                </div>
			              </header>
			              <h2 class="text-lg font-semibold text-gray-800 mb-2">Acme Professional</h2>
			              <div class="text-xs font-semibold text-gray-400 uppercase mb-1">Sales</div>
			              <div class="flex items-start">
			                <div class="text-3xl font-bold text-gray-800 mr-2">$9,962</div>
			                <div class="text-sm font-semibold text-white px-1.5 bg-green-500 rounded-full">+49%</div>
			              </div>
			            </div>
			            <div class="grow">
			              <canvas style="display: block; box-sizing: border-box; height: 128px; width: 369px;" width="738" height="256"></canvas>
			            </div>
			          </div>
			          <div class="flex flex-col col-span-full sm:col-span-6 bg-white shadow-lg rounded-sm border border-gray-200">
			            <header class="px-5 py-4 border-b border-gray-100">
			              <h2 class="font-semibold text-gray-800">Direct VS Indirect</h2>
			            </header>
			            <div class="px-5 py-3">
			              <ul class="flex flex-wrap">
			                <li style="margin-right: 1rem;"><button style="display: inline-flex; align-items: center;"><span style="display: block; width: 0.75rem; height: 0.75rem; border-radius: 9999px; margin-right: 0.5rem; border-width: 3px; border-color: rgb(96, 165, 250); pointer-events: none;"></span><span style="display: flex; align-items: center;"><span style="color: rgb(30, 41, 59); font-size: 1.88rem; line-height: 1.33; font-weight: 700; margin-right: 0.5rem; pointer-events: none;">$8.25K</span><span style="color: rgb(100, 116, 139); font-size: 0.875rem; line-height: 1.5715;">Direct</span></span></button></li>
			                <li style="margin-right: 1rem;"><button style="display: inline-flex; align-items: center;"><span style="display: block; width: 0.75rem; height: 0.75rem; border-radius: 9999px; margin-right: 0.5rem; border-width: 3px; border-color: rgb(99, 102, 241); pointer-events: none;"></span><span style="display: flex; align-items: center;"><span style="color: rgb(30, 41, 59); font-size: 1.88rem; line-height: 1.33; font-weight: 700; margin-right: 0.5rem; pointer-events: none;">$27.7K</span><span style="color: rgb(100, 116, 139); font-size: 0.875rem; line-height: 1.5715;">Indirect</span></span></button></li>
			              </ul>
			            </div>
			            <div class="grow">
			              <canvas style="display: block; box-sizing: border-box; height: 288px; width: 567px;" width="1134" height="576"></canvas>
			            </div>
			          </div>
			          <div class="flex flex-col col-span-full sm:col-span-6 bg-white shadow-lg rounded-sm border border-gray-200">
			            <header class="px-5 py-4 border-b border-gray-100 flex items-center">
			              <h2 class="font-semibold text-gray-800">Real Time Value</h2>
			              <div class="relative ml-2">
			                <button class="block" aria-haspopup="true" aria-expanded="false">
			                  <svg class="w-4 h-4 fill-current text-gray-400" viewBox="0 0 16 16">
			                    <path d="M8 0C3.6 0 0 3.6 0 8s3.6 8 8 8 8-3.6 8-8-3.6-8-8-8zm0 12c-.6 0-1-.4-1-1s.4-1 1-1 1 .4 1 1-.4 1-1 1zm1-3H7V4h2v5z"></path>
			                  </svg>
			                </button>
			                <div class="z-10 absolute bottom-full left-1/2 transform -translate-x-1/2">
			                  <div class="bg-white border border-gray-200 p-3 rounded shadow-lg overflow-hidden mb-2 min-w-44" style="display: none;">
			                    <div class="text-sm text-center">Built with <a class="underline" href="https://www.chartjs.org/" target="_blank" rel="noreferrer">Chart.js</a></div>
			                  </div>
			                </div>
			              </div>
			            </header>
			            <div class="px-5 py-3">
			              <div class="flex items-start">
			                <div class="text-3xl font-bold text-gray-800 mr-2 tabular-nums">$<span>48.09</span></div>
			                <div class="text-sm font-semibold text-white px-1.5 rounded-full" style="background-color: rgb(234, 179, 8);">-3.14%</div>
			              </div>
			            </div>
			            <div class="grow">
			              <canvas data="[object Object]" style="box-sizing: border-box; display: block; height: 288px; width: 567px;" width="1134" height="576"></canvas>
			            </div>
			          </div>
			          <div class="flex flex-col col-span-full sm:col-span-6 xl:col-span-4 bg-white shadow-lg rounded-sm border border-gray-200">
			            <header class="px-5 py-4 border-b border-gray-100">
			              <h2 class="font-semibold text-gray-800">Top Countries</h2>
			            </header>
			            <div class="grow flex flex-col justify-center">
			              <div>
			                <canvas style="display: block; box-sizing: border-box; height: 260px; width: 369px;" width="738" height="520"></canvas>
			              </div>
			              <div class="px-5 pt-2 pb-6">
			                <ul class="flex flex-wrap justify-center -m-1">
			                  <li style="margin: 0.25rem;"><button class="btn-xs" style="background-color: rgb(255, 255, 255); border-color: rgb(226, 232, 240); color: rgb(100, 116, 139); box-shadow: rgba(0, 0, 0, 0.08) 0px 4px 6px -1px, rgba(0, 0, 0, 0.02) 0px 2px 4px -1px;"><span style="display: block; width: 0.5rem; height: 0.5rem; background-color: rgb(99, 102, 241); border-radius: 0.125rem; margin-right: 0.25rem; pointer-events: none;"></span><span style="display: flex; align-items: center;">United States</span></button></li>
			                  <li style="margin: 0.25rem;"><button class="btn-xs" style="background-color: rgb(255, 255, 255); border-color: rgb(226, 232, 240); color: rgb(100, 116, 139); box-shadow: rgba(0, 0, 0, 0.08) 0px 4px 6px -1px, rgba(0, 0, 0, 0.02) 0px 2px 4px -1px;"><span style="display: block; width: 0.5rem; height: 0.5rem; background-color: rgb(96, 165, 250); border-radius: 0.125rem; margin-right: 0.25rem; pointer-events: none;"></span><span style="display: flex; align-items: center;">Italy</span></button></li>
			                  <li style="margin: 0.25rem;"><button class="btn-xs" style="background-color: rgb(255, 255, 255); border-color: rgb(226, 232, 240); color: rgb(100, 116, 139); box-shadow: rgba(0, 0, 0, 0.08) 0px 4px 6px -1px, rgba(0, 0, 0, 0.02) 0px 2px 4px -1px;"><span style="display: block; width: 0.5rem; height: 0.5rem; background-color: rgb(55, 48, 163); border-radius: 0.125rem; margin-right: 0.25rem; pointer-events: none;"></span><span style="display: flex; align-items: center;">Other</span></button></li>
			                </ul>
			              </div>
			            </div>
			          </div>
			          <div class="col-span-full xl:col-span-8 bg-white shadow-lg rounded-sm border border-gray-200">
			            <header class="px-5 py-4 border-b border-gray-100">
			              <h2 class="font-semibold text-gray-800">Top Channels</h2>
			            </header>
			            <div class="p-3">
			              <div class="overflow-x-auto">
			                <table class="table-auto w-full">
			                  <thead class="text-xs uppercase text-gray-400 bg-gray-50 rounded-sm">
			                    <tr>
			                      <th class="p-2">
			                        <div class="font-semibold text-left">Source</div>
			                      </th>
			                      <th class="p-2">
			                        <div class="font-semibold text-center">Visitors</div>
			                      </th>
			                      <th class="p-2">
			                        <div class="font-semibold text-center">Revenues</div>
			                      </th>
			                      <th class="p-2">
			                        <div class="font-semibold text-center">Sales</div>
			                      </th>
			                      <th class="p-2">
			                        <div class="font-semibold text-center">Conversion</div>
			                      </th>
			                    </tr>
			                  </thead>
			                  <tbody class="text-sm font-medium divide-y divide-gray-100">
			                    <tr>
			                      <td class="p-2">
			                        <div class="flex items-center">
			                          <svg class="shrink-0 mr-2 sm:mr-3" width="36" height="36" viewBox="0 0 36 36">
			                            <circle fill="#24292E" cx="18" cy="18" r="18"></circle>
			                            <path d="M18 10.2c-4.4 0-8 3.6-8 8 0 3.5 2.3 6.5 5.5 7.6.4.1.5-.2.5-.4V24c-2.2.5-2.7-1-2.7-1-.4-.9-.9-1.2-.9-1.2-.7-.5.1-.5.1-.5.8.1 1.2.8 1.2.8.7 1.3 1.9.9 2.3.7.1-.5.3-.9.5-1.1-1.8-.2-3.6-.9-3.6-4 0-.9.3-1.6.8-2.1-.1-.2-.4-1 .1-2.1 0 0 .7-.2 2.2.8.6-.2 1.3-.3 2-.3s1.4.1 2 .3c1.5-1 2.2-.8 2.2-.8.4 1.1.2 1.9.1 2.1.5.6.8 1.3.8 2.1 0 3.1-1.9 3.7-3.7 3.9.3.4.6.9.6 1.6v2.2c0 .2.1.5.6.4 3.2-1.1 5.5-4.1 5.5-7.6-.1-4.4-3.7-8-8.1-8z" fill="#FFF"></path>
			                          </svg>
			                          <div class="text-gray-800">Github.com</div>
			                        </div>
			                      </td>
			                      <td class="p-2">
			                        <div class="text-center">2.4K</div>
			                      </td>
			                      <td class="p-2">
			                        <div class="text-center text-green-500">$3,877</div>
			                      </td>
			                      <td class="p-2">
			                        <div class="text-center">267</div>
			                      </td>
			                      <td class="p-2">
			                        <div class="text-center text-light-blue-500">4.7%</div>
			                      </td>
			                    </tr>
			                    <tr>
			                      <td class="p-2">
			                        <div class="flex items-center">
			                          <svg class="shrink-0 mr-2 sm:mr-3" width="36" height="36" viewBox="0 0 36 36">
			                            <circle fill="#1DA1F2" cx="18" cy="18" r="18"></circle>
			                            <path d="M26 13.5c-.6.3-1.2.4-1.9.5.7-.4 1.2-1 1.4-1.8-.6.4-1.3.6-2.1.8-.6-.6-1.5-1-2.4-1-1.7 0-3.2 1.5-3.2 3.3 0 .3 0 .5.1.7-2.7-.1-5.2-1.4-6.8-3.4-.3.5-.4 1-.4 1.7 0 1.1.6 2.1 1.5 2.7-.5 0-1-.2-1.5-.4 0 1.6 1.1 2.9 2.6 3.2-.3.1-.6.1-.9.1-.2 0-.4 0-.6-.1.4 1.3 1.6 2.3 3.1 2.3-1.1.9-2.5 1.4-4.1 1.4H10c1.5.9 3.2 1.5 5 1.5 6 0 9.3-5 9.3-9.3v-.4c.7-.5 1.3-1.1 1.7-1.8z" fill="#FFF" fill-rule="nonzero"></path>
			                          </svg>
			                          <div class="text-gray-800">Twitter</div>
			                        </div>
			                      </td>
			                      <td class="p-2">
			                        <div class="text-center">2.2K</div>
			                      </td>
			                      <td class="p-2">
			                        <div class="text-center text-green-500">$3,426</div>
			                      </td>
			                      <td class="p-2">
			                        <div class="text-center">249</div>
			                      </td>
			                      <td class="p-2">
			                        <div class="text-center text-light-blue-500">4.4%</div>
			                      </td>
			                    </tr>
			                    <tr>
			                      <td class="p-2">
			                        <div class="flex items-center">
			                          <svg class="shrink-0 mr-2 sm:mr-3" width="36" height="36" viewBox="0 0 36 36">
			                            <circle fill="#EA4335" cx="18" cy="18" r="18"></circle>
			                            <path d="M18 17v2.4h4.1c-.2 1-1.2 3-4 3-2.4 0-4.3-2-4.3-4.4 0-2.4 2-4.4 4.3-4.4 1.4 0 2.3.6 2.8 1.1l1.9-1.8C21.6 11.7 20 11 18.1 11c-3.9 0-7 3.1-7 7s3.1 7 7 7c4 0 6.7-2.8 6.7-6.8 0-.5 0-.8-.1-1.2H18z" fill="#FFF" fill-rule="nonzero"></path>
			                          </svg>
			                          <div class="text-gray-800">Google (organic)</div>
			                        </div>
			                      </td>
			                      <td class="p-2">
			                        <div class="text-center">2.0K</div>
			                      </td>
			                      <td class="p-2">
			                        <div class="text-center text-green-500">$2,444</div>
			                      </td>
			                      <td class="p-2">
			                        <div class="text-center">224</div>
			                      </td>
			                      <td class="p-2">
			                        <div class="text-center text-light-blue-500">4.2%</div>
			                      </td>
			                    </tr>
			                    <tr>
			                      <td class="p-2">
			                        <div class="flex items-center">
			                          <svg class="shrink-0 mr-2 sm:mr-3" width="36" height="36" viewBox="0 0 36 36">
			                            <circle fill="#4BC9FF" cx="18" cy="18" r="18"></circle>
			                            <path d="M26 14.3c-.1 1.6-1.2 3.7-3.3 6.4-2.2 2.8-4 4.2-5.5 4.2-.9 0-1.7-.9-2.4-2.6C14 19.9 13.4 15 12 15c-.1 0-.5.3-1.2.8l-.8-1c.8-.7 3.5-3.4 4.7-3.5 1.2-.1 2 .7 2.3 2.5.3 2 .8 6.1 1.8 6.1.9 0 2.5-3.4 2.6-4 .1-.9-.3-1.9-2.3-1.1.8-2.6 2.3-3.8 4.5-3.8 1.7.1 2.5 1.2 2.4 3.3z" fill="#FFF" fill-rule="nonzero"></path>
			                          </svg>
			                          <div class="text-gray-800">Vimeo.com</div>
			                        </div>
			                      </td>
			                      <td class="p-2">
			                        <div class="text-center">1.9K</div>
			                      </td>
			                      <td class="p-2">
			                        <div class="text-center text-green-500">$2,236</div>
			                      </td>
			                      <td class="p-2">
			                        <div class="text-center">220</div>
			                      </td>
			                      <td class="p-2">
			                        <div class="text-center text-light-blue-500">4.2%</div>
			                      </td>
			                    </tr>
			                    <tr>
			                      <td class="p-2">
			                        <div class="flex items-center">
			                          <svg class="shrink-0 mr-2 sm:mr-3" width="36" height="36" viewBox="0 0 36 36">
			                            <circle fill="#0E2439" cx="18" cy="18" r="18"></circle>
			                            <path d="M14.232 12.818V23H11.77V12.818h2.46zM15.772 23V12.818h2.462v4.087h4.012v-4.087h2.456V23h-2.456v-4.092h-4.012V23h-2.461z" fill="#E6ECF4"></path>
			                          </svg>
			                          <div class="text-gray-800">Indiehackers.com</div>
			                        </div>
			                      </td>
			                      <td class="p-2">
			                        <div class="text-center">1.7K</div>
			                      </td>
			                      <td class="p-2">
			                        <div class="text-center text-green-500">$2,034</div>
			                      </td>
			                      <td class="p-2">
			                        <div class="text-center">204</div>
			                      </td>
			                      <td class="p-2">
			                        <div class="text-center text-light-blue-500">3.9%</div>
			                      </td>
			                    </tr>
			                  </tbody>
			                </table>
			              </div>
			            </div>
			          </div>
			          <div class="flex flex-col col-span-full sm:col-span-6 bg-white shadow-lg rounded-sm border border-gray-200">
			            <header class="px-5 py-4 border-b border-gray-100 flex items-center">
			              <h2 class="font-semibold text-gray-800">Sales Over Time (all stores)</h2>
			            </header>
			            <div class="px-5 py-3">
			              <div class="flex flex-wrap justify-between items-end">
			                <div class="flex items-start">
			                  <div class="text-3xl font-bold text-gray-800 mr-2">$1,482</div>
			                  <div class="text-sm font-semibold text-white px-1.5 bg-yellow-500 rounded-full">-22%</div>
			                </div>
			                <div class="grow ml-2 mb-1">
			                  <ul class="flex flex-wrap justify-end">
			                    <li style="margin-left: 0.75rem;"><button style="display: inline-flex; align-items: center;"><span style="display: block; width: 0.75rem; height: 0.75rem; border-radius: 9999px; margin-right: 0.5rem; border-width: 3px; border-color: rgb(99, 102, 241); pointer-events: none;"></span><span style="color: rgb(100, 116, 139); font-size: 0.875rem; line-height: 1.5715;">Current</span></button></li>
			                    <li style="margin-left: 0.75rem;"><button style="display: inline-flex; align-items: center;"><span style="display: block; width: 0.75rem; height: 0.75rem; border-radius: 9999px; margin-right: 0.5rem; border-width: 3px; border-color: rgb(96, 165, 250); pointer-events: none;"></span><span style="color: rgb(100, 116, 139); font-size: 0.875rem; line-height: 1.5715;">Previous</span></button></li>
			                  </ul>
			                </div>
			              </div>
			            </div>
			            <div class="grow">
			              <canvas style="display: block; box-sizing: border-box; height: 248px; width: 567px;" width="1134" height="496"></canvas>
			            </div>
			          </div>
			          <div class="flex flex-col col-span-full sm:col-span-6 bg-white shadow-lg rounded-sm border border-gray-200">
			            <header class="px-5 py-4 border-b border-gray-100 flex items-center">
			              <h2 class="font-semibold text-gray-800">Sales VS Refunds</h2>
			              <div class="relative ml-2">
			                <button class="block" aria-haspopup="true" aria-expanded="false">
			                  <svg class="w-4 h-4 fill-current text-gray-400" viewBox="0 0 16 16">
			                    <path d="M8 0C3.6 0 0 3.6 0 8s3.6 8 8 8 8-3.6 8-8-3.6-8-8-8zm0 12c-.6 0-1-.4-1-1s.4-1 1-1 1 .4 1 1-.4 1-1 1zm1-3H7V4h2v5z"></path>
			                  </svg>
			                </button>
			                <div class="z-10 absolute bottom-full left-1/2 transform -translate-x-1/2">
			                  <div class="bg-white border border-gray-200 p-3 rounded shadow-lg overflow-hidden mb-2 min-w-80" style="display: none;">
			                    <div class="text-sm">Sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim.</div>
			                  </div>
			                </div>
			              </div>
			            </header>
			            <div class="px-5 py-3">
			              <div class="flex items-start">
			                <div class="text-3xl font-bold text-gray-800 mr-2">+$6,796</div>
			                <div class="text-sm font-semibold text-white px-1.5 bg-yellow-500 rounded-full">-34%</div>
			              </div>
			            </div>
			            <div class="grow">
			              <canvas style="display: block; box-sizing: border-box; height: 248px; width: 567px;" width="1134" height="496"></canvas>
			            </div>
			          </div>
			          <div class="col-span-full xl:col-span-6 bg-white shadow-lg rounded-sm border border-gray-200">
			            <header class="px-5 py-4 border-b border-gray-100">
			              <h2 class="font-semibold text-gray-800">Customers</h2>
			            </header>
			            <div class="p-3">
			              <div class="overflow-x-auto">
			                <table class="table-auto w-full">
			                  <thead class="text-xs font-semibold uppercase text-gray-400 bg-gray-50">
			                    <tr>
			                      <th class="p-2 whitespace-nowrap">
			                        <div class="font-semibold text-left">Name</div>
			                      </th>
			                      <th class="p-2 whitespace-nowrap">
			                        <div class="font-semibold text-left">Email</div>
			                      </th>
			                      <th class="p-2 whitespace-nowrap">
			                        <div class="font-semibold text-left">Spent</div>
			                      </th>
			                      <th class="p-2 whitespace-nowrap">
			                        <div class="font-semibold text-center">Country</div>
			                      </th>
			                    </tr>
			                  </thead>
			                  <tbody class="text-sm divide-y divide-gray-100">
			                    <tr>
			                      <td class="p-2 whitespace-nowrap">
			                        <div class="flex items-center">
			                          <div class="w-10 h-10 shrink-0 mr-2 sm:mr-3"><img class="rounded-full" src="data:image/jpeg;base64,/9j/4AAQSkZJRgABAQEASABIAAD/2wCEAAgGBgcGBQgHBwcJCQgKDBQNDAsLDBkSEw8UHRofHh0aHBwgJC4nICIsIxwcKDcpLDAxNDQ0Hyc5PTgyPC4zNDIBERISGBUYLxoaL2NCOEJjY2NjY2NjY2NjY2NjY2NjY2NjY2NjY2NjY2NjY2NjY2NjY2NjY2NjY2NjY2NjY2NjY//CABEIAEgASAMBIgACEQEDEQH/xAAbAAADAQEBAQEAAAAAAAAAAAAEBQYHAwIAAf/aAAgBAQAAAADXvX0/Es7sE7sGvwtTTG7B28JIvOdJ0nPaY5jNZYg3RJx6U/5D5013Dp4g6oWHlBNoIjgdPRLRWTIXOae/mKSrI4T8yQymrw5j7AimfX//xAAXAQADAQAAAAAAAAAAAAAAAAAAAQID/9oACgICEAMQAAAAYgYmRqiLuG1ARtebzUu0wIaphFk//8QALBAAAgEEAQIGAgICAwAAAAAAAQIDAAQFESEGEgcTIjFBURRhUnEyoRCB0f/aAAgBAQABPwD/AJ6k6rxnT1ru6uFErD0RryzVZ+Kjmby4sUzJ9tLomsZ4s4y6uPKvbSa1H8we8CluorqyFxayrLE67R0OwRVuKTZ9I/kCaEkf8xU+RWKXsGiKyfUUFhYTXMpGkUms1c3GUv5MhdsWnkPpT3CL8CklPmhFJeT4WMbNHpjKZXFvfx2U0V5Dye5decv/ALXQvV9xhrp7K6L/AIzHUkTe6H7FWxDIrIQVI2D91JcJEjxknuY0gQw7HI177q5kgRyASa6ruBMYLZSewku/9CstkxJI8UB49mcfP6rw86bgt8fHfSxhriTnZHtSAqmipFeI+BiFqmbtodTQHUxQf5JXQ18b/pu2LHbRkxGsowEzDu1tPf69zuom3bbI0de1ZCdhO21CgV1pmzJO8FudcdruK6UxQzPUVtbONxBu56vRDiccAtpcyxgaVLYHf+qxf5Ut0lzBaXlqHAby5pGPG9c7NdbyZFoJLYwzPB5bFgj9oavCS6L4S6jbkpIOKy+3u3hXhmVUDf3xUl7PDCD5yHj6rIXtzM0xkkIZt/8AQrM+qQsB6fv7roO+tosvFGFZJ+dt8GrTJxoRHIQQRV1kbG0ILSRwxkEs7cCnymOuQ0vejQkepiOBXhhewvms1BbKWgkmMkbD2C7NdUvJD58sQYuE2Avv7AD/AG1PhrUqoE++329VZmQiG7ZTyWVN/QNXDfls6shOh6OKxUb2OVg7u6ORjxsVhrqO/tu2TQnj4ZaurfKwdxtWhlgb4MXcyV4gZK7ssRBYTTFrq7DEqFCiOKvCa4Fv1T5JJCzW7VnFkWUuhG2OuaSUg1e9O29/cPIs0kYk/wA4wNgmpPDi+JHlSL2k7UMNFatPCe5mlWS8vgg2D6E9QrMdGZCzYXOMlMjJ7dh7XFWt71FHZSrL5S3KbCCaMqSfjeqzVvmJOoBcZ3kzcB15VV+hXhnhy3Ukt+0ifj2ymOH7es1IUVWUjlz6vo8cChJxWFxssLpc3Cab3jj+f7NQgxgdwUMfgUqGQbOz+hxUtvo8W6n991Za0l7JJFRT2Hvb71V9iYc7HHZSyNGjSBmK/IHxUSpjboNbWxW3WTyvLRBwvyay0SrjGljY+W8/eF19irW5a1nSdApZDsBhsVYzq1jFdsD3SKCoP3VsTIxY81HJunAZeDU8fq79bHsR9ioYfxs95O+EcgUZEtr8rIB2Oe4Vm1LYtVjAIMg/Wq//xAAbEQACAgMBAAAAAAAAAAAAAAAAEQECEBIxQf/aAAgBAgEBPwBm0DjN+FRlMWPBlSRCNRoZGZ4I/8QAHREAAgIDAQEBAAAAAAAAAAAAAAECERASMQNBUf/aAAgBAwEBPwBRb4atCTxR5dJu2JE0RaoifSif5hM2Y5uiK2JqmLPn0l0//9k=" alt="Alex Shatov" width="40" height="40"></div>
			                          <div class="font-medium text-gray-800">Alex Shatov</div>
			                        </div>
			                      </td>
			                      <td class="p-2 whitespace-nowrap">
			                        <div class="text-left">alexshatov@gmail.com</div>
			                      </td>
			                      <td class="p-2 whitespace-nowrap">
			                        <div class="text-left font-medium text-green-500">$2,890.66</div>
			                      </td>
			                      <td class="p-2 whitespace-nowrap">
			                        <div class="text-lg text-center">🇺🇸</div>
			                      </td>
			                    </tr>
			                    <tr>
			                      <td class="p-2 whitespace-nowrap">
			                        <div class="flex items-center">
			                          <div class="w-10 h-10 shrink-0 mr-2 sm:mr-3"><img class="rounded-full" src="data:image/jpeg;base64,/9j/4AAQSkZJRgABAQEASABIAAD/2wCEAAgGBgcGBQgHBwcJCQgKDBQNDAsLDBkSEw8UHRofHh0aHBwgJC4nICIsIxwcKDcpLDAxNDQ0Hyc5PTgyPC4zNDIBERISGBUYLxoaL2NCOEJjY2NjY2NjY2NjY2NjY2NjY2NjY2NjY2NjY2NjY2NjY2NjY2NjY2NjY2NjY2NjY2NjY//CABEIAEgASAMBIgACEQEDEQH/xAAbAAACAwEBAQAAAAAAAAAAAAAGBwMEBQIBCP/aAAgBAQAAAABr6vecprLSvUuLVNBDRwYNXjPE0vUob5U9uKsCpV9qJlOCegIqMW1x93tifGERtH2Kn02c2cTEVwDikTKPNWfHWi25NWKR4mrl+VYJe5tX/8QAFwEBAQEBAAAAAAAAAAAAAAAAAgEAA//aAAoCAhADEAAAALtikbDYg+nJQMqxjTIJgLn07cZZttv/xAAyEAABAwMCBQIEBAcAAAAAAAABAgMEAAURBiESEzFBUQciFCRhcSMyQ4EzQnKRodHx/9oACAEBAAE/AIqelJOwoVeb/atPQ/i7tOaitdis7qPgDqau/r/DD7jNus5eY6Bx9zhJrSmt9HaglhmTFFvmvH9TdCj/AFVDsVvQchlFG2Qj7Qyn+1Xy0Q3bS6gspPtpLfCRig62kbqFXW+QrPaZVwkugNR2y4aLi9YTn9QamK3T0jxUnCGkeBUphhExRabRyuLZJGdqtmndIX62MtuxnbfcE9JEdWM/cHY16c3u4224ztI3WSH3ogC4jp/Uapj8oJ61PQXIbg+lFPtNXeHIPOcTcHG/AHarpPu1znm2yZrz0YvgLBOxSner1MWgEEvNsg7IG1B9Ko4dOVY3zVh1S81wR34Lb7A3SsbOIpT3D6i6XnsgnnHklQ6qT/wmmlgJFOuFaVp7YpKc7VIsMJ9C1OjiKhvk16hswLK9bokNltvmIedUpA+wqdPZlS8uJSgDHGat8uxhp5pboAeRwha+ys1arcw5cij4tHLSSnIJG3mtNWwTdW2JAd5jUFt6QSf2AplJ80kZChTb2+K1BqeVAmLjoTkYzXqBdJ04Q57jJDbPE1nGMhVWduHOujy5XMUweoQkFQP70/YrUXOfCmIWpPuDbjK0K/xkUxLUuc88SpKQc77HNejjL01d0u7oVyglEVg9j3XTVNfmWKSFA5FXdrN5W4W+L2Cr9DYu1nfjPpDTfXi8EdDSFLts5xCwoHpkUm7SGkqU3JVxEYHY1GZflvoabSpaiegr06n2636Wi2ptQS4wMOnys7k1HcSvdKgRTX8VX2p1wpkpx0NaqbMSIqSw0688vACG05JrX89dss7cR10JlSN1sA5UhH1q4hudFadCRxcA3oxSCKsEJUdfOJAUdt60HDdfuMgqJ+HCMLUfPagufbnUlt0Fs9OKm75ISkq4EFWPNTghhlLpO/anp63AcqNeoOmH59vbkwWlvLaUS6gZUtef5qhIU2lbCgfw1Y3FG13K5P8AyUV9wdBy0GrJpG9Ij4nPR0k9G+HiUPuascQWuGGBjOcqPk0w62+zy3cKSdiFVcrVPiLLsErfY68APvT/ALq/S/neQDshIoKpTh7U8hvdRQ2VeSgZolR+30prCaLxFMzuAjJqNcQdirav/8QAHhEBAAICAQUAAAAAAAAAAAAAAQARAhAgEiEiMVH/2gAIAQIBAT8A1fB0ayag2QIfNJZKo7TFD3M/JsnVny//xAAcEQEAAgMAAwAAAAAAAAAAAAABAAIQERIgIVH/2gAIAQMBAT8AxzhwRjgNy1eYscDpg9PuJ8lXRqFavl//2Q==" alt="Philip Harbach" width="40" height="40"></div>
			                          <div class="font-medium text-gray-800">Philip Harbach</div>
			                        </div>
			                      </td>
			                      <td class="p-2 whitespace-nowrap">
			                        <div class="text-left">philip.h@gmail.com</div>
			                      </td>
			                      <td class="p-2 whitespace-nowrap">
			                        <div class="text-left font-medium text-green-500">$2,767.04</div>
			                      </td>
			                      <td class="p-2 whitespace-nowrap">
			                        <div class="text-lg text-center">🇩🇪</div>
			                      </td>
			                    </tr>
			                    <tr>
			                      <td class="p-2 whitespace-nowrap">
			                        <div class="flex items-center">
			                          <div class="w-10 h-10 shrink-0 mr-2 sm:mr-3"><img class="rounded-full" src="data:image/jpeg;base64,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" alt="Mirko Fisuk" width="40" height="40"></div>
			                          <div class="font-medium text-gray-800">Mirko Fisuk</div>
			                        </div>
			                      </td>
			                      <td class="p-2 whitespace-nowrap">
			                        <div class="text-left">mirkofisuk@gmail.com</div>
			                      </td>
			                      <td class="p-2 whitespace-nowrap">
			                        <div class="text-left font-medium text-green-500">$2,996.00</div>
			                      </td>
			                      <td class="p-2 whitespace-nowrap">
			                        <div class="text-lg text-center">🇫🇷</div>
			                      </td>
			                    </tr>
			                    <tr>
			                      <td class="p-2 whitespace-nowrap">
			                        <div class="flex items-center">
			                          <div class="w-10 h-10 shrink-0 mr-2 sm:mr-3"><img class="rounded-full" src="data:image/jpeg;base64,/9j/4AAQSkZJRgABAQEASABIAAD/2wCEAAgGBgcGBQgHBwcJCQgKDBQNDAsLDBkSEw8UHRofHh0aHBwgJC4nICIsIxwcKDcpLDAxNDQ0Hyc5PTgyPC4zNDIBERISGBUYLxoaL2NCOEJjY2NjY2NjY2NjY2NjY2NjY2NjY2NjY2NjY2NjY2NjY2NjY2NjY2NjY2NjY2NjY2NjY//CABEIAEgASAMBIgACEQEDEQH/xAAbAAACAgMBAAAAAAAAAAAAAAAEBQEGAgMHAP/aAAgBAQAAAADqnpHDN3RGcDVmrubxuifVZY9qVsebMfctLTV7qzNtnq49Zk6/oumwEY8OapjujL3raeUnUC/WutP7AvAHVmwNmVsOwD3qVB//xAAUAQEAAAAAAAAAAAAAAAAAAAAA/9oACgICEAMQAAAAAAAAAAAAP//EADIQAAIBAwIFAgMGBwAAAAAAAAECAwAEEQUSBiEiMVETQRAykRQgI2FxwVJTcoKSoeH/2gAIAQEAAT8ArHwuryGzQmRhnGcUNXYjcbZinkGra6huo90TZxyIPcVij2+5f3i2Vq0pwW7KPJrUbc6ikUiOXlkByc1KvE+iFnt4BPAnSisSdq1w5xZFq1y0QQwalEu54iuA4qC4SeMMv08fd4tu4oomDliETkq+TXD12JbQTFh6I6UYnkRU11CYwPUU1c21vBxVZXkO1Xk3I+335Vp10BGg37mxgnzioZN6g/Dc38tq3nGdhriK+F/qeqWMpIjmBjU+CBV/o1zqHDlumjzxRbYwNjxhtwxWmcO6zpelXlxPPtMcZdI89z+1aW+rpxdaNqZdkJYrh+kZU1pY32/L58nAqxu5M7GRRjy9K7kfKv8Al8J2K2khXJIViKtWWfiFxcAKg5nJ7VdXd1psCxWcfT2XHM4/IVqmuy29k9pb3lvIJ1xKLkFHBPetMmj1HXLZT1RWqh3dfI7GraOP8G4i5B8OQPPvS3G3UX9gWyKglygPwYZgYec1xVutLjUsDHqyrGD4BzWma3cQ6VZ3M8ZmzErN5z2NcUcRaHeRM8cLJP7gE9X6iuB0fYjzR7RdozL+1WS+nZov8DEfUVeNiWKQf0tWnzb4hzoZocovrXEulDWLwxjlGZQz474FabpipGbaRcxou3+2tW4clbVZ4HQDY31FcM2SNpdsjEhrZxgj9RUyoFkKkhSPbyKjWSW7mE2FT51ZT2NacxiIjY9QozKq7j2/UVd35ZRGvJT9TT20RQdA75p7cI+9MgitX01J7yCUjk4CvVrafYrL0o+r3yPIP/a1HUXs7BpEQu0RQlR7qe9PcwPbOIG7Q70P5Ubz7LEkzNkKcHB9jVjGLLT9xBWR+bGo5mmeM5+YZo/J37UwTp3YyewJ71d3tpFdW9pJKBNNyjTaeqkkjQMpYZx1Ant4Na20TWfqwtkzKEBA3A9yD/urC2ubdLhJjuVYeR8FhkipIBeaHKjH5lXB8Gv/xAAUEQEAAAAAAAAAAAAAAAAAAABA/9oACAECAQE/AE//xAAUEQEAAAAAAAAAAAAAAAAAAABA/9oACAEDAQE/AE//2Q==" alt="Olga Semklo" width="40" height="40"></div>
			                          <div class="font-medium text-gray-800">Olga Semklo</div>
			                        </div>
			                      </td>
			                      <td class="p-2 whitespace-nowrap">
			                        <div class="text-left">olga.s@cool.design</div>
			                      </td>
			                      <td class="p-2 whitespace-nowrap">
			                        <div class="text-left font-medium text-green-500">$1,220.66</div>
			                      </td>
			                      <td class="p-2 whitespace-nowrap">
			                        <div class="text-lg text-center">🇮🇹</div>
			                      </td>
			                    </tr>
			                    <tr>
			                      <td class="p-2 whitespace-nowrap">
			                        <div class="flex items-center">
			                          <div class="w-10 h-10 shrink-0 mr-2 sm:mr-3"><img class="rounded-full" src="data:image/jpeg;base64,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" alt="Burak Long" width="40" height="40"></div>
			                          <div class="font-medium text-gray-800">Burak Long</div>
			                        </div>
			                      </td>
			                      <td class="p-2 whitespace-nowrap">
			                        <div class="text-left">longburak@gmail.com</div>
			                      </td>
			                      <td class="p-2 whitespace-nowrap">
			                        <div class="text-left font-medium text-green-500">$1,890.66</div>
			                      </td>
			                      <td class="p-2 whitespace-nowrap">
			                        <div class="text-lg text-center">🇬🇧</div>
			                      </td>
			                    </tr>
			                  </tbody>
			                </table>
			              </div>
			            </div>
			          </div>
			          <div class="col-span-full xl:col-span-6 bg-white shadow-lg rounded-sm border border-gray-200">
			            <header class="px-5 py-4 border-b border-gray-100">
			              <h2 class="font-semibold text-gray-800">Reason for Refunds</h2>
			            </header>
			            <div class="px-5 py-3">
			              <div class="flex items-start">
			                <div class="text-3xl font-bold text-gray-800 mr-2">449</div>
			                <div class="text-sm font-semibold text-white px-1.5 bg-yellow-500 rounded-full">-22%</div>
			              </div>
			            </div>
			            <div class="grow">
			              <div class="grow flex flex-col justify-center">
			                <div>
			                  <canvas style="display: block; box-sizing: border-box; height: 48px; width: 567px;" width="1134" height="96"></canvas>
			                </div>
			                <div class="px-5 pt-2 pb-2">
			                  <ul class="text-sm divide-y divide-gray-100">
			                    <li style="display: flex; justify-content: space-between; align-items: center; padding-top: 0.625rem; padding-bottom: 0.625rem;">
			                      <div style="display: flex; align-items: center;">
			                        <div style="width: 0.75rem; height: 0.75rem; border-radius: 0.125rem; margin-right: 0.75rem; background-color: rgb(99, 102, 241);"></div>
			                        <div>Having difficulties using the product</div>
			                      </div>
			                      <div style="font-weight: 500; margin-left: 0.75rem; color: rgb(99, 102, 241);">29%</div>
			                    </li>
			                    <li style="display: flex; justify-content: space-between; align-items: center; padding-top: 0.625rem; padding-bottom: 0.625rem;">
			                      <div style="display: flex; align-items: center;">
			                        <div style="width: 0.75rem; height: 0.75rem; border-radius: 0.125rem; margin-right: 0.75rem; background-color: rgb(55, 48, 163);"></div>
			                        <div>Missing features I need</div>
			                      </div>
			                      <div style="font-weight: 500; margin-left: 0.75rem; color: rgb(55, 48, 163);">22%</div>
			                    </li>
			                    <li style="display: flex; justify-content: space-between; align-items: center; padding-top: 0.625rem; padding-bottom: 0.625rem;">
			                      <div style="display: flex; align-items: center;">
			                        <div style="width: 0.75rem; height: 0.75rem; border-radius: 0.125rem; margin-right: 0.75rem; background-color: rgb(56, 189, 248);"></div>
			                        <div>Not satisfied about the quality of the product</div>
			                      </div>
			                      <div style="font-weight: 500; margin-left: 0.75rem; color: rgb(56, 189, 248);">18%</div>
			                    </li>
			                    <li style="display: flex; justify-content: space-between; align-items: center; padding-top: 0.625rem; padding-bottom: 0.625rem;">
			                      <div style="display: flex; align-items: center;">
			                        <div style="width: 0.75rem; height: 0.75rem; border-radius: 0.125rem; margin-right: 0.75rem; background-color: rgb(74, 222, 128);"></div>
			                        <div>The product doesn’t look as advertised</div>
			                      </div>
			                      <div style="font-weight: 500; margin-left: 0.75rem; color: rgb(74, 222, 128);">14%</div>
			                    </li>
			                    <li style="display: flex; justify-content: space-between; align-items: center; padding-top: 0.625rem; padding-bottom: 0.625rem;">
			                      <div style="display: flex; align-items: center;">
			                        <div style="width: 0.75rem; height: 0.75rem; border-radius: 0.125rem; margin-right: 0.75rem; background-color: rgb(226, 232, 240);"></div>
			                        <div>Other</div>
			                      </div>
			                      <div style="font-weight: 500; margin-left: 0.75rem; color: rgb(148, 163, 184);">16%</div>
			                    </li>
			                  </ul>
			                  <ul class="text-sm divide-y divide-gray-100"></ul>
			                </div>
			              </div>
			            </div>
			          </div>
			          <div class="col-span-full xl:col-span-6 bg-white shadow-lg rounded-sm border border-gray-200">
			            <header class="px-5 py-4 border-b border-gray-100">
			              <h2 class="font-semibold text-gray-800">Recent Activity</h2>
			            </header>
			            <div class="p-3">
			              <div>
			                <header class="text-xs uppercase text-gray-400 bg-gray-50 rounded-sm font-semibold p-2">Today</header>
			                <ul class="my-1">
			                  <li class="flex px-2">
			                    <div class="w-9 h-9 rounded-full shrink-0 bg-indigo-500 my-2 mr-3">
			                      <svg class="w-9 h-9 fill-current text-indigo-50" viewBox="0 0 36 36">
			                        <path d="M18 10c-4.4 0-8 3.1-8 7s3.6 7 8 7h.6l5.4 2v-4.4c1.2-1.2 2-2.8 2-4.6 0-3.9-3.6-7-8-7zm4 10.8v2.3L18.9 22H18c-3.3 0-6-2.2-6-5s2.7-5 6-5 6 2.2 6 5c0 2.2-2 3.8-2 3.8z"></path>
			                      </svg>
			                    </div>
			                    <div class="grow flex items-center border-b border-gray-100 text-sm py-2">
			                      <div class="grow flex justify-between">
			                        <div class="self-center"><a class="font-medium text-gray-800 hover:text-gray-900" href="#0">Nick Mark</a> mentioned <a class="font-medium text-gray-800" href="#0">Sara Smith</a> in a new post</div>
			                        <div class="shrink-0 self-end ml-2"><a class="font-medium text-indigo-500 hover:text-indigo-600" href="#0">View<span class="hidden sm:inline"> -&gt;</span></a></div>
			                      </div>
			                    </div>
			                  </li>
			                  <li class="flex px-2">
			                    <div class="w-9 h-9 rounded-full shrink-0 bg-red-500 my-2 mr-3">
			                      <svg class="w-9 h-9 fill-current text-red-50" viewBox="0 0 36 36">
			                        <path d="M25 24H11a1 1 0 01-1-1v-5h2v4h12v-4h2v5a1 1 0 01-1 1zM14 13h8v2h-8z"></path>
			                      </svg>
			                    </div>
			                    <div class="grow flex items-center border-b border-gray-100 text-sm py-2">
			                      <div class="grow flex justify-between">
			                        <div class="self-center">The post <a class="font-medium text-gray-800" href="#0">Post Name</a> was removed by <a class="font-medium text-gray-800 hover:text-gray-900" href="#0">Nick Mark</a></div>
			                        <div class="shrink-0 self-end ml-2"><a class="font-medium text-indigo-500 hover:text-indigo-600" href="#0">View<span class="hidden sm:inline"> -&gt;</span></a></div>
			                      </div>
			                    </div>
			                  </li>
			                  <li class="flex px-2">
			                    <div class="w-9 h-9 rounded-full shrink-0 bg-green-500 my-2 mr-3">
			                      <svg class="w-9 h-9 fill-current text-green-50" viewBox="0 0 36 36">
			                        <path d="M15 13v-3l-5 4 5 4v-3h8a1 1 0 000-2h-8zM21 21h-8a1 1 0 000 2h8v3l5-4-5-4v3z"></path>
			                      </svg>
			                    </div>
			                    <div class="grow flex items-center text-sm py-2">
			                      <div class="grow flex justify-between">
			                        <div class="self-center"><a class="font-medium text-gray-800 hover:text-gray-900" href="#0">Patrick Sullivan</a> published a new <a class="font-medium text-gray-800" href="#0">post</a></div>
			                        <div class="shrink-0 self-end ml-2"><a class="font-medium text-indigo-500 hover:text-indigo-600" href="#0">View<span class="hidden sm:inline"> -&gt;</span></a></div>
			                      </div>
			                    </div>
			                  </li>
			                </ul>
			              </div>
			              <div>
			                <header class="text-xs uppercase text-gray-400 bg-gray-50 rounded-sm font-semibold p-2">Yesterday</header>
			                <ul class="my-1">
			                  <li class="flex px-2">
			                    <div class="w-9 h-9 rounded-full shrink-0 bg-light-blue-500 my-2 mr-3">
			                      <svg class="w-9 h-9 fill-current text-light-blue-50" viewBox="0 0 36 36">
			                        <path d="M23 11v2.085c-2.841.401-4.41 2.462-5.8 4.315-1.449 1.932-2.7 3.6-5.2 3.6h-1v2h1c3.5 0 5.253-2.338 6.8-4.4 1.449-1.932 2.7-3.6 5.2-3.6h3l-4-4zM15.406 16.455c.066-.087.125-.162.194-.254.314-.419.656-.872 1.033-1.33C15.475 13.802 14.038 13 12 13h-1v2h1c1.471 0 2.505.586 3.406 1.455zM24 21c-1.471 0-2.505-.586-3.406-1.455-.066.087-.125.162-.194.254-.316.422-.656.873-1.028 1.328.959.878 2.108 1.573 3.628 1.788V25l4-4h-3z"></path>
			                      </svg>
			                    </div>
			                    <div class="grow flex items-center border-b border-gray-100 text-sm py-2">
			                      <div class="grow flex justify-between">
			                        <div class="self-center"><a class="font-medium text-gray-800 hover:text-gray-900" href="#0">240+</a> users have subscribed to <a class="font-medium text-gray-800" href="#0">Newsletter #1</a></div>
			                        <div class="shrink-0 self-end ml-2"><a class="font-medium text-indigo-500 hover:text-indigo-600" href="#0">View<span class="hidden sm:inline"> -&gt;</span></a></div>
			                      </div>
			                    </div>
			                  </li>
			                  <li class="flex px-2">
			                    <div class="w-9 h-9 rounded-full shrink-0 bg-indigo-500 my-2 mr-3">
			                      <svg class="w-9 h-9 fill-current text-indigo-50" viewBox="0 0 36 36">
			                        <path d="M18 10c-4.4 0-8 3.1-8 7s3.6 7 8 7h.6l5.4 2v-4.4c1.2-1.2 2-2.8 2-4.6 0-3.9-3.6-7-8-7zm4 10.8v2.3L18.9 22H18c-3.3 0-6-2.2-6-5s2.7-5 6-5 6 2.2 6 5c0 2.2-2 3.8-2 3.8z"></path>
			                      </svg>
			                    </div>
			                    <div class="grow flex items-center text-sm py-2">
			                      <div class="grow flex justify-between">
			                        <div class="self-center">The post <a class="font-medium text-gray-800" href="#0">Post Name</a> was suspended by <a class="font-medium text-gray-800 hover:text-gray-900" href="#0">Nick Mark</a></div>
			                        <div class="shrink-0 self-end ml-2"><a class="font-medium text-indigo-500 hover:text-indigo-600" href="#0">View<span class="hidden sm:inline"> -&gt;</span></a></div>
			                      </div>
			                    </div>
			                  </li>
			                </ul>
			              </div>
			            </div>
			          </div>
			          <div class="col-span-full xl:col-span-6 bg-white shadow-lg rounded-sm border border-gray-200">
			            <header class="px-5 py-4 border-b border-gray-100">
			              <h2 class="font-semibold text-gray-800">Income/Expenses</h2>
			            </header>
			            <div class="p-3">
			              <div>
			                <header class="text-xs uppercase text-gray-400 bg-gray-50 rounded-sm font-semibold p-2">Today</header>
			                <ul class="my-1">
			                  <li class="flex px-2">
			                    <div class="w-9 h-9 rounded-full shrink-0 bg-red-500 my-2 mr-3">
			                      <svg class="w-9 h-9 fill-current text-red-50" viewBox="0 0 36 36">
			                        <path d="M17.7 24.7l1.4-1.4-4.3-4.3H25v-2H14.8l4.3-4.3-1.4-1.4L11 18z"></path>
			                      </svg>
			                    </div>
			                    <div class="grow flex items-center border-b border-gray-100 text-sm py-2">
			                      <div class="grow flex justify-between">
			                        <div class="self-center"><a class="font-medium text-gray-800 hover:text-gray-900" href="#0">Qonto</a> billing</div>
			                        <div class="shrink-0 self-start ml-2"><span class="font-medium text-gray-800">-$49.88</span></div>
			                      </div>
			                    </div>
			                  </li>
			                  <li class="flex px-2">
			                    <div class="w-9 h-9 rounded-full shrink-0 bg-green-500 my-2 mr-3">
			                      <svg class="w-9 h-9 fill-current text-green-50" viewBox="0 0 36 36">
			                        <path d="M18.3 11.3l-1.4 1.4 4.3 4.3H11v2h10.2l-4.3 4.3 1.4 1.4L25 18z"></path>
			                      </svg>
			                    </div>
			                    <div class="grow flex items-center border-b border-gray-100 text-sm py-2">
			                      <div class="grow flex justify-between">
			                        <div class="self-center"><a class="font-medium text-gray-800 hover:text-gray-900" href="#0">Cruip.com</a> Market Ltd 70 Wilson St London</div>
			                        <div class="shrink-0 self-start ml-2"><span class="font-medium text-green-500">+249.88</span></div>
			                      </div>
			                    </div>
			                  </li>
			                  <li class="flex px-2">
			                    <div class="w-9 h-9 rounded-full shrink-0 bg-green-500 my-2 mr-3">
			                      <svg class="w-9 h-9 fill-current text-green-50" viewBox="0 0 36 36">
			                        <path d="M18.3 11.3l-1.4 1.4 4.3 4.3H11v2h10.2l-4.3 4.3 1.4 1.4L25 18z"></path>
			                      </svg>
			                    </div>
			                    <div class="grow flex items-center border-b border-gray-100 text-sm py-2">
			                      <div class="grow flex justify-between">
			                        <div class="self-center"><a class="font-medium text-gray-800 hover:text-gray-900" href="#0">Notion Labs Inc</a></div>
			                        <div class="shrink-0 self-start ml-2"><span class="font-medium text-green-500">+99.99</span></div>
			                      </div>
			                    </div>
			                  </li>
			                  <li class="flex px-2">
			                    <div class="w-9 h-9 rounded-full shrink-0 bg-green-500 my-2 mr-3">
			                      <svg class="w-9 h-9 fill-current text-green-50" viewBox="0 0 36 36">
			                        <path d="M18.3 11.3l-1.4 1.4 4.3 4.3H11v2h10.2l-4.3 4.3 1.4 1.4L25 18z"></path>
			                      </svg>
			                    </div>
			                    <div class="grow flex items-center border-b border-gray-100 text-sm py-2">
			                      <div class="grow flex justify-between">
			                        <div class="self-center"><a class="font-medium text-gray-800 hover:text-gray-900" href="#0">Market Cap Ltd</a></div>
			                        <div class="shrink-0 self-start ml-2"><span class="font-medium text-green-500">+1,200.88</span></div>
			                      </div>
			                    </div>
			                  </li>
			                  <li class="flex px-2">
			                    <div class="w-9 h-9 rounded-full shrink-0 bg-gray-200 my-2 mr-3">
			                      <svg class="w-9 h-9 fill-current text-gray-400" viewBox="0 0 36 36">
			                        <path d="M21.477 22.89l-8.368-8.367a6 6 0 008.367 8.367zm1.414-1.413a6 6 0 00-8.367-8.367l8.367 8.367zM18 26a8 8 0 110-16 8 8 0 010 16z"></path>
			                      </svg>
			                    </div>
			                    <div class="grow flex items-center border-b border-gray-100 text-sm py-2">
			                      <div class="grow flex justify-between">
			                        <div class="self-center"><a class="font-medium text-gray-800 hover:text-gray-900" href="#0">App.com</a> Market Ltd 70 Wilson St London</div>
			                        <div class="shrink-0 self-start ml-2"><span class="font-medium text-gray-800 line-through">+$99.99</span></div>
			                      </div>
			                    </div>
			                  </li>
			                  <li class="flex px-2">
			                    <div class="w-9 h-9 rounded-full shrink-0 bg-red-500 my-2 mr-3">
			                      <svg class="w-9 h-9 fill-current text-red-50" viewBox="0 0 36 36">
			                        <path d="M17.7 24.7l1.4-1.4-4.3-4.3H25v-2H14.8l4.3-4.3-1.4-1.4L11 18z"></path>
			                      </svg>
			                    </div>
			                    <div class="grow flex items-center text-sm py-2">
			                      <div class="grow flex justify-between">
			                        <div class="self-center"><a class="font-medium text-gray-800 hover:text-gray-900" href="#0">App.com</a> Market Ltd 70 Wilson St London</div>
			                        <div class="shrink-0 self-start ml-2"><span class="font-medium text-gray-800">-$49.88</span></div>
			                      </div>
			                    </div>
			                  </li>
			                </ul>
			              </div>
			            </div>
			          </div>
			        </div>
			      </div>
			    </main>
			    <div class="fixed bottom-0 right-0 w-full md:bottom-8 md:right-12 md:w-auto z-60">
			      <div class="bg-gray-800 text-gray-50 text-sm p-3 md:rounded shadow-lg flex justify-between">
			        <div>👉 <a class="hover:underline" href="https://github.com/cruip/tailwind-dashboard-template" target="_blank" rel="noreferrer">Download Mosaic Lite on GitHub</a></div>
			        <button class="text-gray-500 hover:text-gray-400 ml-5">
			          <span class="sr-only">Close</span>
			          <svg class="w-4 h-4 shrink-0 fill-current" viewBox="0 0 16 16">
			            <path d="M12.72 3.293a1 1 0 00-1.415 0L8.012 6.586 4.72 3.293a1 1 0 00-1.414 1.414L6.598 8l-3.293 3.293a1 1 0 101.414 1.414l3.293-3.293 3.293 3.293a1 1 0 001.414-1.414L9.426 8l3.293-3.293a1 1 0 000-1.414z"></path>
			          </svg>
			        </button>
			      </div>
			    </div>
			  </div>
			</div>
	  </div>
  </body>
</html>