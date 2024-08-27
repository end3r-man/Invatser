<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>{{ $title ?? 'Page Title' }} | {{ config('app.name') }} </title>
        
        {{-- Tailwind Vite Link --}}
        @vite('resources/css/app.css')

        {{-- Livewie Style --}}
        @livewireStyles
    </head>
    <body>

        <div class="w-screen h-dvh font-poppine">
            {{ $slot }}
        </div>

        {{-- Push Script --}}
        @stack('js')

        {{-- Livewire Script --}}
        @livewireScripts

        {{-- Iconify CDN --}}
        <script src="https://cdn.jsdelivr.net/npm/iconify-icon@2.1.0/dist/iconify-icon.min.js"></script>
    </body>
</html>
