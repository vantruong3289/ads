@extends('layout')
@section('head')
    <title>{{ env('APP_NAME') }}</title>
@endsection
@section('content')
    <div class="overflow-hidden py-10 sm:py-32">
        <div class="mx-auto max-w-7xl px-4">
            <p class="mt-2 text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">Ads Daily</p>
            <div class="mt-10 mx-auto grid max-w-2xl grid-cols-1 gap-y-16 gap-x-8 sm:gap-y-20 lg:mx-0 lg:max-w-none lg:grid-cols-2">
                <div class="">
                    <div class="lg:max-w-lg">
                        <p class="pb-8">Got a question about us? Are you interested in partnering with us? Have some suggestions or just want to say Hi? Just contact us. We are here to asset you.</p>
                        <div class="flex pb-4 items-center">
                            <div aria-label="phone icon" role="img">
                                <x-icons.phone />
                            </div>
                            <p class="pl-4 text-base">+1 (308) 321 321</p>
                        </div>
                        <div class="flex items-center">
                            <div aria-label="email icon" role="img">
                                <x-icons.email />
                            </div>
                            <p class="pl-4">Info@alphas.com</p>
                        </div>
                        <address class="pt-10">
                            545, Street 11, Block FDean Boulevard, Ohio
                        </address>
                    </div>
                </div>
                <div>
                    <div class="lg:max-w-lg">
                        <dl class="max-w-xl space-y-8 text-base leading-7 lg:max-w-none">
                            <div class="relative border rounded-md p-5">
                                <dt class="inline font-semibold text-gray-900">
                                    Consumer
                                </dt>
                                <dd class="inline">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Maiores impedit perferendis suscipit eaque, iste dolor cupiditate blanditiis ratione.
                                </dd>
                                <p class="mt-1 text-indigo-600">
                                    <a href="/consumers/sign-in" class="flex items-center">
                                        <x-icons.arrow-right /> Sign in
                                    </a>
                                </p>
                            </div>

                            <div class="relative border rounded-md p-5">
                                <dt class="inline font-semibold text-gray-900">
                                    Advertiser
                                </dt>
                                <dd class="inline">Anim aute id magna aliqua ad ad non deserunt sunt. Qui irure qui lorem cupidatat commodo.
                                </dd>
                                <p class="mt-1 text-indigo-600">
                                    <a href="/advertisers/sign-in" class="flex items-center">
                                        <x-icons.arrow-right />
                                        Sign in
                                    </a>
                                </p>
                            </div>
                        </dl>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
