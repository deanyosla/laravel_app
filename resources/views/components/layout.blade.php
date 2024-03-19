<!doctype html>

<head>
    <title>Laravel - Company Dashboard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="/icon.png" type="image/x-icon">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700&display=swap" rel="stylesheet">
    <style>
        html {
            scroll-behavior: smooth;
        }
    </style>

    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    @vite('resources/css/app.css')
    @vite('resources/js/app.js')

</head>

<body style="font-family: Open Sans, sans-serif">

    <div class="px-4">

        <section class="flex flex-col min-h-screen">

            <nav
                class="absolute top-0 left-0 right-0 flex items-center justify-between border-b border-gray-100 p-4 text-sm font-semibold text-indigo-500">

                <div>
                    <a href="/">
                        <img src="/icon.png" alt="JobStack Logo" class="w-10 h-10">
                    </a>
                </div>

                <div class="flex items-center gap-4">
                    <div class="py-2 px-4">

                        @auth

                            <x-dropdown>

                                <x-slot name="trigger">
                                    <button class="hover:text-indigo-600 hover:underline decoration-2 underline-offset-8  focus:text-indigo-600">Menu</button>
                                </x-slot>

                                <x-dropdown-item href="/employees" :active="request()->is('employees')">All Employees</x-dropdown-item>

                                <x-dropdown-item href="/companies" :active="request()->is('companies')">All Companies</x-dropdown-item>

                                @if (auth()->user()->is_admin)
                                    <x-dropdown-item href="/admin/employees/create" :active="request()->is('admin/employees/create')">
                                        Add Employee
                                    </x-dropdown-item>

                                    <x-dropdown-item href="/admin/companies/create" :active="request()->is('admin/companies/create')">
                                        Add Company
                                    </x-dropdown-item>

                                    <x-dropdown-item href="/admin/employees" :active="request()->is('admin/employees')">
                                        Edit Employees
                                    </x-dropdown-item>

                                    <x-dropdown-item href="/admin/companies" :active="request()->is('admin/companies')">
                                        Edit Companies
                                    </x-dropdown-item>
                                @endif

                            </x-dropdown>

                        @endauth

                    </div>

                    <a href="#newsletterForm" class="hidden md:block whitespace-nowrap py-2 px-4 hover:text-indigo-600 hover:underline decoration-2 underline-offset-8">
                        Newsletter
                    </a>

                    @auth
                        <form method="POST" action="/logout">

                            @csrf

                            <button type="submit" class="py-2 px-4 whitespace-nowrap hover:text-indigo-600 hover:underline decoration-2 underline-offset-8">Log Out</button>

                        </form>
                    @else
                        <a href="/register" class=" text-center p-2 hover:text-indigo-600 hover:underline decoration-2 underline-offset-8">Register</a>
                        <a href="/login" class=" text-center p-2 hover:text-indigo-600 hover:underline decoration-2 underline-offset-8">Login</a>
                    @endauth

                </div>

            </nav>

            <div class="flex-1 flex flex-col {{ !request()->is('/', 'register', 'login') ? 'pt-20' : '' }}">

                {{ $slot }}

            </div>

        </section>

        <x-footer />
    </div>

    @if (session()->has('success'))
        <x-flash-message success="success" :message="session('success')" />
    @elseif (session()->has('error'))
        <x-flash-message success="error" :message="session('error')" />
    @endif



    <script>
        const hasNewsletterError = @json(session()->has('errors') && session('errors')->has('newsletter-error'));

        document.addEventListener("DOMContentLoaded", function() {
            if (hasNewsletterError) {
                const formElement = document.getElementById('newsletterForm');
                if (formElement) {  // check if the element exists to prevent errors
                    formElement.scrollIntoView({
                        behavior: 'smooth'
                    });
                }
            }
        });
    </script>




</body>
