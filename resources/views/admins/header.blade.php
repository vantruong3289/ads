<nav class="bg-white sticky-top border-b">
    <div class="mx-auto max-w-7xl px-2 lg:px-0">
        <div class="flex items-center justify-between">
            <div class="space-x-5 flex items-center">
                <a href="/" class="font-semibold">Ads</a>
                <a href="/admins/bills" class="px-2 py-4">Bill</a>
            </div>
            @auth('admin')
                <div class="flex items-center space-x-3">
                    <a href="/admins/home">
                        <div class="flex space-x-3 items-center">
                            <span>{{ auth('admin')->user()->name }}</span>
                            <img class="h-8 w-8 rounded-full" src="{{ auth('admin')->user()->getFirstMediaUrl('avatar') }}" alt="">
                        </div>
                    </a>
                    <form action="/admins/sign-out" method="post">
                        @csrf
                        <button type="submit" class="border-l pl-3">
                            Sign out
                        </button>
                    </form>
                </div>
            @else
                <div class="flex items-center space-x-3">
                    <a href="/admins/sign-in">
                        Sign In
                    </a>
                </div>
            @endauth
        </div>
    </div>
</nav>
