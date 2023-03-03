<nav class="bg-white sticky-top">
    <div class="mx-auto max-w-7xl px-2 lg:px-0">
        <div class="flex h-12 lg:h-14 items-center justify-between">
            <a href="/" class="font-semibold">Ads</a>
            <a href="">
                <div class="flex space-x-3 items-center">
                    @auth
                        <span>{{ auth()->user()->name }}</span>
                        <img class="h-8 w-8 rounded-full" src="{{ auth()->user()->getFirstMediaUrl('avatar') }}" alt="">
                    @else
                    @endauth
                </div>
            </a>
        </div>
    </div>
</nav>
