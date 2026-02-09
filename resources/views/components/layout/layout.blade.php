<!DOCTYPE html>
<html x-data :class="{ 'dark': $store.theme.on }" lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Idea</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <script>
        if (localStorage.getItem('darkMode') !== 'false') {
            document.documentElement.classList.add('dark');
        }
    </script>
</head>
<body class="flex flex-col min-h-dvh text-text dark:text-text-dark bg-background dark:bg-background-dark">
    <x-layout.nav />

    <main class="flex-1 flex py-10 overflow-y-auto">
        {{ $slot }}
    </main>

    @session('success')
        <div
            class="fixed bottom-6 right-6 px-4 py-2 text-white bg-green-500 rounded-md"
            x-data="{ show: true }"
            x-init="setTimeout(() => show = false, 3000)"    
            x-show="show"
            x-transition.opacity.duration.300ms"
        >
            {{ session('success') }}
        </div>
    @endsession
</body>
</html>