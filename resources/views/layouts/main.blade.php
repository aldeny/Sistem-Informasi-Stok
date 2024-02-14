<!doctype html>
<html lang="en" class="dark">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="SiStock merupakan sistem informasi stok yang berbasis web dengan framework Laravel">
    <meta name="author" content="Aldeny - Poor.grammer.code@gmail.com">
    <meta name="generator" content="Hugo 0.58.2">

    <title>SiStock @yield('title')</title>

    @vite(['resources/css/app.css','resources/js/app.js'])

    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">

    <script>
        if (localStorage.getItem('color-theme') === 'dark' || (!('color-theme' in localStorage) && window.matchMedia(
                '(prefers-color-scheme: dark)').matches)) {
            document.documentElement.classList.add('dark');
        } else {
            document.documentElement.classList.remove('dark')
        }

    </script>
</head>

<body class="bg-gray-50 dark:bg-gray-800">
    @include('components.navbar')

    <div class="flex pt-16 overflow-hidden bg-gray-50 dark:bg-gray-900">z
        @include('components.sidebar')

        <div class="fixed inset-0 z-10 hidden bg-gray-900/50 dark:bg-gray-900/90" id="sidebarBackdrop"></div>

        <div id="main-content" class="relative w-full h-full overflow-y-auto bg-gray-50 lg:ml-64 dark:bg-gray-900">
            <main>
                <div class="px-4 pt-6">
                    @yield('main-content')
                </div>
            </main>

            {{-- footer --}}
            @include('components.footer')
            {{-- end footer --}}

        </div>

    </div>

    <script async defer src="https://buttons.github.io/buttons.js"></script>
    <script src="https://flowbite-admin-dashboard.vercel.app//app.bundle.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.2/datepicker.min.js"></script>
</body>

</html>
