<x-layout>
    <div class="container">
        <div class="mb-20">
            <h1 class="mb-2 font-bold text-4xl">Ideas</h1>
            <p class="text-text-muted dark:text-text-muted-dark">Capture your ideas and thoughts in one place.</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            @foreach ($ideas as $idea)
                <a href="/" class="px-6 py-8 bg-white dark:bg-gray-800 rounded-lg ring ring-gray-900/5 hover:dark:ring-gray-700 shadow hover:shadow-lg transition-shadow duration-300">
                    <h3 class="mb-1 font-medium text-text dark:text-text-dark tracking-tight ">{{ $idea->title }}</h3>

                    <x-idea.status-label status="{{ $idea->status }}">
                        {{ $idea->status->label() }}
                    </x-idea.status-label>
                    
                    <p class="mb-2 text-sm text-text-muted dark:text-text-muted-dark">
                        {{ $idea->description }}
                    </p>

                    <div class="text-xs text-text-muted dark:text-text-muted-dark">{{ $idea->created_at->diffForHumans() }}</div>
                </a>
            @endforeach
        </div>
    </div>
</x-layout>