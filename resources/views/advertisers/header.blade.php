<nav class="bg-white sticky-top border-b">
    <div class="mx-auto max-w-7xl px-2 lg:px-0">
        <div class="flex items-center">
            <a href="/" class="font-semibold px-4 text-xl italic">Ads</a>
            <div class="space-x-5 items-center hidden sm:flex">
                <a href="/advertisers/brands" class="px-2 py-4 {{ request()->is('advertisers/brands*') ? 'border-b-2 border-indigo-500' : '' }}">Brand</a>
                <a href="/advertisers/ads" class="px-2 py-4 {{ request()->is('advertisers/ads*') ? 'border-b-2 border-indigo-500' : '' }}">Ads</a>
                <a href="/advertisers/bills" class="px-2 py-4 {{ request()->is('advertisers/bills*') ? 'border-b-2 border-indigo-500' : '' }}">Bill</a>
            </div>
            <div class="flex-1 flex justify-end">
                @auth('advertiser')
                    <div class="flex items-center space-x-3">
                        <a href="/advertisers/home" class="py-2">
                            <div class="flex space-x-3 items-center">
                                <span>{{ auth('advertiser')->user()->name }}</span>
                                <img class="h-8 w-8 rounded-full" src="{{ auth('advertiser')->user()->getFirstMediaUrl('avatar') }}" alt="">
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
                        <a href="/advertisers/sign-in py-4">
                            Sign In
                        </a>
                        <a href="/advertisers/sign-up py-4" class="border-l pl-3">
                            Sign up
                        </a>
                    </div>
                @endauth
            </div>
        </div>
    </div>
</nav>
