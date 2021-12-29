<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ mix('css/app.css') }}">

        @livewireStyles

        <!-- Scripts -->
        <script src="{{ mix('js/app.js') }}" defer></script>
    </head>
    <body class="font-inter antialiased bg-gray-100 text-gray-600">
        <script>
            if (localStorage.getItem('sidebar-expanded') != 'true') {
                document.querySelector('body').classList.add('sidebar-expanded');
            } else {
                document.querySelector('body').classList.remove('sidebar-expanded');
            }
        </script>
        <div class="flex h-screen overflow-hidden">
            <div class="fixed inset-0 bg-gray-900 bg-opacity-30 z-40 lg:hidden lg:z-auto transition-opacity duration-200 opacity-0 pointer-events-none" aria-hidden="true"></div>

            @livewire('admin.sidebar')

            <div class="relative flex flex-col flex-1 overflow-y-auto overflow-x-hidden">
              @livewire('admin.header')
              <main>
                {{ $slot }}
              </main>

              <div class="fixed bottom-0 right-0 w-full md:bottom-8 md:right-12 md:w-auto z-60">
                <div class="bg-gray-800 text-gray-50 text-sm p-3 md:rounded shadow-lg flex justify-between">
                  <div>👉 <a class="hover:underline" href="https://github.com/cruip/tailwind-dashboard-template" target="_blank" rel="noreferrer">Download Mosaic Lite on GitHub</a>
                  </div>
                  <button class="text-gray-500 hover:text-gray-400 ml-5">
                    <span class="sr-only">Close</span>
                    <svg class="w-4 h-4 shrink-0 fill-current" viewBox="0 0 16 16">
                      <path d="M12.72 3.293a1 1 0 00-1.415 0L8.012 6.586 4.72 3.293a1 1 0 00-1.414 1.414L6.598 8l-3.293 3.293a1 1 0 101.414 1.414l3.293-3.293 3.293 3.293a1 1 0 001.414-1.414L9.426 8l3.293-3.293a1 1 0 000-1.414z"></path>
                    </svg>
                  </button>
                </div>
              </div> <!-- End of Tips -->

            </div>
        </div>
        @livewireScripts
    </body>
</html>
