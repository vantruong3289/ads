<nav class="bg-white sticky-top border-b">
    <div class="mx-auto max-w-7xl px-2 lg:px-0">
        <div class="flex items-center">
            <a href="/" class="font-semibold px-4 text-xl italic">Ads</a>
            <div class="space-x-5 items-center hidden sm:flex">
                <a href="/consumers/assets" class="px-2 py-4 border-b-2 border-indigo-500">Asset</a>
            </div>
            <div class="flex-1 flex justify-end">
                @auth('consumer')
                    <div class="flex items-center space-x-3">
                        <a href="/consumers/home" class="py-2">
                            <div class="flex space-x-3 items-center">
                                <span>{{ auth('consumer')->user()->name }}</span>
                                <img class="h-8 w-8 rounded-full" src="{{ auth('consumer')->user()->getFirstMediaUrl('avatar') }}" alt="">
                            </div>
                        </a>
                        <form action="/consumers/sign-out" method="post">
                            @csrf
                            <button type="submit" class="border-l pl-3">
                                Sign out
                            </button>
                        </form>
                    </div>
                @else
                    <div class="flex items-center space-x-3">
                        <a href="/consumers/sign-in">
                            Sign In
                        </a>
                        <a href="/consumers/sign-up" class="border-l pl-3">
                            Sign up
                        </a>
                    </div>
                @endauth
            </div>
        </div>
    </div>
</nav>
