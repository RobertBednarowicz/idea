@props(['status' => 'pending'])

@php
    $classes = 'inline-block mb-4 px-2 py-0.5 text-xs font-medium border rounded-full';

    if ($status === 'pending') {
        $classes .= ' bg-yellow-500/20 dark:bg-yellow-500/10 text-yellow-600 dark:text-yellow-500 border-yellow-500/20';
    } elseif ($status === 'in_progress') {
        $classes .= ' bg-blue-500/20 dark:bg-blue-500/10 text-blue-600 dark:text-blue-500 border-blue-500/20';
    } elseif ($status === 'completed') {
        $classes .= ' bg-green-500/20 dark:bg-green-500/10 text-green-600 dark:text-green-500 border-green-500/20';
    }
@endphp

<div class="{{ $classes }}">{{ $slot }}</div>