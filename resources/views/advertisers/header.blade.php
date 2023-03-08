<nav class="bg-white sticky-top border-b">
    <div class="mx-auto max-w-7xl px-2 lg:px-0">
        <div class="flex items-center justify-between">
            <div class="space-x-5 flex items-center">
                <a href="/" class="font-semibold">Ads</a>
                <a href="/advertisers/brands" class="px-2 py-4 text-blue-600">Brand</a>
                <a href="/advertisers/bills" class="px-2 py-4">Bill</a>
            </div>
            @auth
                <div class="flex items-center space-x-3">
                    <a href="/advertisers/home">
                        <div class="flex space-x-3 items-center">
                            <span>{{ auth('advertiser')->user()->name }}</span>
                            <img class="h-8 w-8 rounded-full" src="{{ auth()->user()->getFirstMediaUrl('avatar') }}" alt="">
                        </div>
                    </a>
                    <form action="/advertisers/sign-out" method="post">
                        @csrf
                        <button type="submit" class="border-l pl-3">
                            Sign out
                        </button>
                    </form>
                </div>
            @else
                <div class="flex items-center space-x-3">
                    <a href="/advertisers/sign-in">
                        Sign In
                    </a>
                    <a href="/advertisers/sign-up" class="border-l pl-3">
                        Sign up
                    </a>
                </div>
            @endauth
        </div>
    </div>
</nav>
