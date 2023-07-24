<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
        <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.6/flowbite.min.css" rel="stylesheet" />


        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        @livewireStyles
    </head>
    <body class="font-sans antialiased">
        <div class="min-h-screen bg-gray-100 dark:bg-gray-900">



             <!-- Page Heading -->
             @if (isset($header))
                 <header class="bg-white dark:bg-gray-800 shadow">
                     <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                         {{ $header }}
                     </div>
                 </header>
             @endif

        <main>
            <div class="flex ">
                <div class=" w-full max-w-xs md:fixed md:w-1/6  overflow-y-auto ">
                    <x-sidebar>

                    </x-sidebar>
                </div>
                <div class="w-5/6 ml-auto sm:ml-auto">
                    @include('layouts.navigation')
                    {{$slot}}
                </div>
            </div>
        </main>



        </div>






        <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.6/flowbite.min.js"></script>
    <x-flash-message/>

        @livewireScripts
    </body>
</html>
