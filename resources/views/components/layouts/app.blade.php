<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8" />

        <meta name="application-name" content="{{ config('app.name') }}" />
        <meta name="csrf-token" content="{{ csrf_token() }}" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />

        <title>{{ config('app.name') }}</title>

        <style>
            [x-cloak] {
                display: none !important;
            }
        </style>

        <script>
            if (localStorage.theme === 'dark' || (!('theme' in localStorage) && window.matchMedia(
                '(prefers-color-scheme: dark)').matches)) {
                document.documentElement.classList.add('dark');
            } else {
                document.documentElement.classList.remove('dark');
            }
        </script>


        @filamentStyles
        @vite('resources/css/app.css')
    </head>

    <body class="antialiased bg-gray-50 dark:bg-gray-900">
        <button
        class="hover:text-primary-700 dark:hover:text-primary-100 flex w-full p-2 text-sm font-semibold text-gray-600 hover:bg-gray-100 dark:text-gray-50 dark:hover:bg-gray-600"
        @click="toggle;" x-data="{
                                    buttonText: () => {
                                        if (localStorage.theme === 'dark') {
                                            return 'Light Mode';
                                        } else {
                                            return 'Dark Mode';
                                        }
                                    },
                                    toggle() {
                                        if (localStorage.theme === 'dark') {
                                            localStorage.theme = 'light';
                                            document.documentElement.classList.remove('dark');
                                            this.buttonText = 'Dark Mode';
                                        } else {
                                            localStorage.theme = 'dark';
                                            document.documentElement.classList.add('dark');
                                            this.buttonText = 'Light Mode';
                                        }
                                    }
                                }">
        <span class="text-start" x-text="buttonText"></span>
    </button>

        {{ $slot }}

        @filamentScripts
        @vite('resources/js/app.js')
    </body>
</html>
