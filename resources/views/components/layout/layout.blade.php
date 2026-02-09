<!DOCTYPE html>
{{-- <html x-data :class="{ 'dark': $store.theme.on }" lang="en"> --}}
<html x-data :class="{ 'dark': $store.theme.on }" lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Idea</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="flex flex-col min-h-dvh text-text dark:text-text-dark bg-background dark:bg-background-dark">
    <x-layout.nav />

    <main class="flex-1 py-10 overflow-y-auto">
        {{ $slot }}
    </main>
</body>
</html>