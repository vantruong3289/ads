<nav class="bg-white sticky-top border-b">
    <div class="mx-auto max-w-7xl px-2 lg:px-0">
        <div class="flex h-12 lg:h-14 items-center justify-between">
            <a href="/" class="font-semibold">Ads</a>
            @auth
                <div class="flex items-center space-x-3">
                    <a href="/consumers/home">
                        <div class="flex space-x-3 items-center">
                            <span>{{ auth()->user()->name }}</span>
                            <img class="h-8 w-8 rounded-full" src="{{ auth()->user()->getFirstMediaUrl('avatar') }}" alt="">
                        </div>
                    </a>
                    <form action="/consumers/signout" method="post">
                        @csrf
                        <button type="submit" class="border-l pl-3">
                            Sign out
                        </button>
                    </form>
                </div>
            @else
                <div class="flex items-center space-x-3">
                    <a href="/consumers/signin">
                        Sign In
                    </a>
                    <a href="/consumers/signup" class="border-l pl-3">
                        Sign up
                    </a>
                </div>
            @endauth
        </div>
    </div>
</nav>
