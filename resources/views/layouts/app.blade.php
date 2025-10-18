<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>
    <!-- Load Flowbite CSS -->
    <link href="https://cdn.jsdelivr.net/npm/flowbite@2.4.1/dist/flowbite.min.css" rel="stylesheet" />
    <!-- App Styles -->
    <link rel="stylesheet" href="{{ asset('assets/build/assets/app-Bj43h_rG.js') }}">
    <link rel="stylesheet" href="{{ asset('assets/build/assets/app-ubm-h0tB.css') }}">
    <!-- FontAwesome and Quill CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.0/css/all.min.css" rel="stylesheet" />
    <link href="https://cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">
    <!-- Load Flowbite JS in the head to ensure it's available immediately yes-->
    <script src="https://cdn.jsdelivr.net/npm/flowbite@2.4.1/dist/flowbite.min.js"></script>

    <style>
        .btn-loading {
            position: relative !important;
            cursor: wait !important;
            pointer-events: none !important;
        }

        .btn-loading .btn-text {
            visibility: hidden !important;
        }

        .btn-loading::after {
            content: '';
            position: absolute;
            top: 50%;
            left: 50%;
            width: 20px;
            height: 20px;
            border: 3px solid #fff;
            border-top: 3px solid #061077;
            border-radius: 50%;
            transform: translate(-50%, -50%);
            animation: spin 1s linear infinite;
            z-index: 10;
        }

        @keyframes spin {
            0% {
                transform: translate(-50%, -50%) rotate(0deg);
            }

            100% {
                transform: translate(-50%, -50%) rotate(360deg);
            }
        }

        .floating-chat-btn {
            transition: transform 0.3s ease;
        }

        .floating-chat-btn:hover {
            transform: scale(1.1);
        }

        @media (max-width: 576px) {
            .modal-dialog-bottom-right {
                width: calc(100% - 40px);
                max-width: 300px;
            }
        }

        .nav-link:focus:not(:focus-visible) {
            outline: none;
        }

        .nav-link:focus-visible {
            outline: 2px solid blue;
        }
    </style>


    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const forms = document.querySelectorAll('form');

            forms.forEach(form => {
                form.addEventListener('submit', function(e) {
                    const submitButton = this.querySelector('button[type="submit"]');

                    if (submitButton) {
                        if (submitButton.classList.contains('btn-loading')) {
                            e.preventDefault();
                            return;
                        }
                        if (!submitButton.querySelector('.btn-text')) {
                            const buttonText = submitButton.innerHTML;
                            submitButton.innerHTML = `<span class="btn-text">${buttonText}</span>`;
                        }
                        submitButton.classList.add('btn-loading');
                        submitButton.disabled = true;
                    }
                });
            });
            window.addEventListener('pageshow', function(event) {
                const buttons = document.querySelectorAll('.btn-loading');
                buttons.forEach(button => {
                    button.classList.remove('btn-loading');
                    button.disabled = false;
                    const btnText = button.querySelector('.btn-text');
                    if (btnText) {
                        button.innerHTML = btnText.textContent;
                    }
                });
            });
        });
    </script>
    <!-- Styles -->
    @livewireStyles
</head>

<body class="font-sans antialiased">
    <x-banner />

    <div class="min-h-screen bg-gray-100">
        {{-- @livewire('navigation-menu') --}}
        @include('layouts.partial.toopbar')
        @include('layouts.partial.aside')

        <!-- Page Content -->
        <main>
            <div class="p-4 sm:ml-64">
                <div class="mt-14 rounded-lg border-gray-200 border-dashed dark:border-gray-700">
                    <!-- Page Heading -->
                    @if (isset($header))
                        <header class="bg-white shadow">
                            <div class="px-4 py-6 mx-auto max-w-7xl sm:px-6 lg:px-8">
                                {{ $header }}
                            </div>
                        </header>
                    @endif
                    {{ $slot }}
                </div>
            </div>

        </main>
    </div>

    @stack('modals')

    @livewireScripts
</body>

</html>
