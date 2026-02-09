<x-layout>
    <div class="container flex-1 flex justify-center items-center">
        
        <div class="flex flex-col justify-center items-center w-full md:w-8/12 lg:w-6/12 xl:w-4/12 h-full">
            <h1 class="mb-2 text-3xl">Log in</h1>
            <p class="mb-10 text-text-muted dark:text-text-muted-dark text-center">Glad to see you back!</p>


            <form class="w-full flex flex-col space-y-6" action="{{ route('login.store') }}" method="POST">
                @csrf

                <div class="space-y-1">
                    <label class="block" for="email">Email</label>
                    <input
                        class="w-full px-3 py-3 border border-background-dark/20 dark:border-background/20 outline-none focus:ring-2 ring-accent rounded-md"
                        type="email"
                        name="email"
                        id="email"
                        placeholder="Enter your email"
                    >
                </div>

                <div class="space-y-1">
                    <label class="block" for="password">Password</label>
                    <input
                        class="w-full px-3 py-3 border border-background-dark/20 dark:border-background/20 outline-none focus:ring-2 ring-accent rounded-md"
                        type="password"
                        name="password"
                        id="password"
                        placeholder="Enter password"
                    >
                </div>
                
                <button type="submit" class="btn">Sign in</button>
            </form>
        </div>
    </div>
</x-layout>