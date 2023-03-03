@extends('layout')
@section('head')
    <title>{{ $brand->name }}</title>
@endsection
@section('content')
    @include('header')
    <div class="fixed inset-0 z-0">
        <img src="{{ $brand->getFirstMediaUrl('cover') }}" class="object-cover w-full h-full">
    </div>
    <div class="relative z-1 max-w-7xl mx-auto bg-white pb-8">
        <!-- profile -->
        <div class="relative">
            <div class="overflow-hidden">
                <img src="{{ $brand->getFirstMediaUrl('banner') }}" class="object-cover w-full" alt="">
            </div>
            <div class="px-5 py-5 space-x-3 text-right flex justify-end">
                <a href="http://twitter.com/share?text={{ $brand->about }}&url={{ url()->current() }}" target="_blank" class="">
                    <img src="https://cdn.iconscout.com/icon/free/png-24/twitter-241-721979.png" alt="twitter">
                </a>
                <a href="https://www.facebook.com/sharer/sharer.php?u={{ url()->current() }}" target="_blank" class="">
                    <img src="https://cdn.iconscout.com/icon/free/png-24/facebook-logo-2019-1597680-1350125.png" alt="facebook">
                </a>
                <a href="" class="px-5 py-2 font-semibold text-indigo-500 border border-gray-200 rounded-3xl sr-only">Chat</a>
            </div>
            <div class="absolute bottom-0 w-28 h-28 left-5">
                <img src="{{ $brand->getFirstMediaUrl('logo') }}" class="bg-cover rounded-full">
            </div>
        </div>
        <div class="p-5 space-y-2">
            <h1 class="text-2xl font-semibold">{{ $brand->name }}</h1>
            <div class="space-y-2 text-gray-500">
                <p>{{ $brand->about }}</p>
                <ul class="space-y-3">
                    <li>
                        <a href="tel:{{ $brand->phone }}" class="flex space-x-2">
                            <x-icons.phone></x-icons.phone>
                            <span>{{ $brand->phone }}</span>
                        </a>
                    </li>
                    <li>
                        <a href="mailto:{{ $brand->email }}" class="flex space-x-2">
                            <x-icons.email></x-icons.email>
                            <span>{{ $brand->email }}</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ $brand->website }}" target="_blank" class="flex space-x-2">
                            <x-icons.home></x-icons.home>
                            <span>{{ $brand->map }}</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ $brand->website }}" target="_blank" class="flex space-x-2">
                            <x-icons.globe></x-icons.globe>
                            <span>{{ $brand->website }}</span>
                        </a>
                    </li>
                    <li>
                        <a href="" class="flex space-x-2">
                            <x-icons.calendar></x-icons.calendar>
                            <span>7AM - 21PM (T2-T6)</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <section class="px-2 md:px-4 pb-4">
            <div class="grid gap-2 md:gap-4 grid-cols-1 md:grid-cols-2">
                @foreach ($brand->adss as $ads)
                    @include('ads.designs.banner')
                @endforeach
            </div>
        </section>
    </div>
@endsection
