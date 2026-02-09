<header class="sticky top-0 h-20 bg-white dark:bg-background-dark shadow dark:shadow-white/10 z-10">
    <div class="container flex justify-between items-center h-full">
        <a class="font-bold text-xl" href="/">Logo</a>
    
        <nav class="flex items-center space-x-6">
            @auth
                <div>Hello, {{ auth()->user()->name }}</div>
                    
                <form class="flex items-center" action="{{ route('logout') }}" method="POST">
                    @csrf
                    @method('DELETE')

                    <button type="submit">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6 hover:text-background-dark/60 hover:dark:text-background/80 transition-colors duration-300">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 9V5.25A2.25 2.25 0 0 1 10.5 3h6a2.25 2.25 0 0 1 2.25 2.25v13.5A2.25 2.25 0 0 1 16.5 21h-6a2.25 2.25 0 0 1-2.25-2.25V15m-3 0-3-3m0 0 3-3m-3 3H15" />
                        </svg>
                    </button>
                </form>
            @else
                <div class="flex items-center space-x-4">
                    <a class="hover:text-background-dark/60 hover:dark:text-background/80 transition-colors duration-300" href="{{ route('login') }}">Sign in</a>
                    <a class="btn" href="{{ route('register.create') }}">Register</a>
                </div>
            @endauth
            
            <button @click="$store.theme.toggle()">
                <svg x-show="$store.theme.on" x-cloak xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6 stroke-yellow-400 cursor-pointer">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 3v2.25m6.364.386-1.591 1.591M21 12h-2.25m-.386 6.364-1.591-1.591M12 18.75V21m-4.773-4.227-1.591 1.591M5.25 12H3m4.227-4.773L5.636 5.636M15.75 12a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0Z" />
                </svg>

                <svg x-show="!$store.theme.on" x-cloak xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6 stroke-background-dark cursor-pointer">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M21.752 15.002A9.72 9.72 0 0 1 18 15.75c-5.385 0-9.75-4.365-9.75-9.75 0-1.33.266-2.597.748-3.752A9.753 9.753 0 0 0 3 11.25C3 16.635 7.365 21 12.75 21a9.753 9.753 0 0 0 9.002-5.998Z" />
                </svg>
            </button>
        </nav>
    </div>
</header>