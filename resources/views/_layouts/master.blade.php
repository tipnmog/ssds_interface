<!DOCTYPE html>
<html lang="{{ $page->language ?? 'en' }}">
    <head>
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
    </head>
    <body>
        <x-jet-banner />
        <div x-data="{ sidebarOpen: false }" class="flex h-screen bg-gray-200 font-roboto">
            @include('_layouts.sidebar')

            <div class="flex-1 flex flex-col overflow-hidden">
                {{-- @include('_layouts.header') --}}
                @livewire('navigation-menu')

                <!-- Page Heading -->
                @if (isset($header))
                    <header class="bg-white shadow">
                        <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                            {{ $header }}
                        </div>
                    </header>
                @endif

                <main class="flex-1 overflow-x-hidden overflow-y-auto bg-gray-200">
                    <main class="container mx-auto px-6 py-8">
                        @yield('body')
                        @if( isset($slot) )
                            {{ $slot }}
                        @endif
                    </main>
                </main>
            </div>
        </div>
        @stack('modals')

        @livewireScripts
    </body>
</html>
