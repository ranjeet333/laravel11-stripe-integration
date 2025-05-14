<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Payment Task</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
        
        <!-- Styles / Scripts -->
        @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
            @vite(['resources/css/app.css', 'resources/js/app.js'])
        @else
            
        @endif
        <script type="text/javascript">
          var APP_URL = {!! json_encode(url('/')) !!}
        </script>
    </head>
    <body class="font-sans antialiased dark:bg-black dark:text-white/50">
        <header class="bg-black text-white">
          <nav class="mx-auto flex max-w-7xl items-center justify-between p-6 lg:px-8" aria-label="Global">
            <div class="flex lg:flex-1">
              <a href="#" class="-m-1.5 p-1.5">
                <span class="uppercase">NightBright</span>
              </a>
            </div>
            <div class="flex lg:hidden">
              <button type="button" class="-m-2.5 inline-flex items-center justify-center rounded-md p-2.5 text-white" id="menu">
                <span class="sr-only">Open main menu</span>
                <svg class="size-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" data-slot="icon">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                </svg>
              </button>
            </div>
            <div class="hidden lg:flex items-center lg:gap-x-12">
              <a href="#" class="text-sm/6 font-semibold text-white">Find</a>
              <a href="#" class="text-sm/6 font-semibold">Become</a>
              <a href="#" class="text-sm/6 font-semibold">Forum</a>
              <a href="#" class="text-sm/6 font-semibold">About</a>
              <a href="#" class="text-sm/6 font-semibold">Sign In</a>
            </div>
          </nav>
          <!-- Mobile menu, show/hide based on menu open state. -->
          <div class="hidden" role="dialog" aria-modal="true" id="mobile-menu">
            <!-- Background backdrop, show/hide based on slide-over state. -->
            <div class="fixed inset-0 z-10"></div>
            <div class="fixed inset-y-0 right-0 z-10 w-full overflow-y-auto bg-white px-6 py-6 sm:max-w-sm sm:ring-1 sm:ring-gray-900/10">
              <div class="flex items-center justify-between">
                <a href="#" class="-m-1.5 p-1.5">
                  <span class="uppercase text-gray-900">NightBright</span>
                </a>
                <button type="button" class="-m-2.5 rounded-md p-2.5 text-gray-700" id="close-menu">
                  <span class="sr-only">Close menu</span>
                  <svg class="size-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" data-slot="icon">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
                  </svg>
                </button>
              </div>
              <div class="mt-6 flow-root">
                <div class="-my-6 divide-y divide-gray-500/10">
                  <div class="space-y-2 py-6">
                    <a href="#" class="-mx-3 block rounded-lg px-3 py-2 text-base/7 font-semibold text-gray-900 hover:bg-gray-50">Find</a>
                    <a href="#" class="-mx-3 block rounded-lg px-3 py-2 text-base/7 font-semibold text-gray-900 hover:bg-gray-50">Become</a>
                    <a href="#" class="-mx-3 block rounded-lg px-3 py-2 text-base/7 font-semibold text-gray-900 hover:bg-gray-50">Forum</a>
                    <a href="#" class="-mx-3 block rounded-lg px-3 py-2 text-base/7 font-semibold text-gray-900 hover:bg-gray-50">About</a>
                    <a href="#" class="-mx-3 block rounded-lg px-3 py-2 text-base/7 font-semibold text-gray-900 hover:bg-gray-50">Sign In</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </header>
        <div class="min-h-screen flex items-center justify-center bg-gray-100 p-6">
          <div class="bg-white p-8 rounded-2xl shadow-lg max-w-md w-full text-center">
            <div class="flex items-center justify-center w-16 h-16 mx-auto mb-4 bg-green-100 rounded-full">
              <svg class="w-8 h-8 text-green-600" fill="none" stroke="currentColor" stroke-width="2"
                   viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" />
              </svg>
            </div>
            <h2 class="text-2xl font-semibold text-gray-800 mb-2">{{ $message }}</h2>
            <a href="{{ url('/') }}" class="inline-block bg-gray-800 text-white px-6 py-2 rounded-lg hover:bg-gray-700 transition">
              ← Back to Home
            </a>
          </div>
        </div>
    </body>
</html>
