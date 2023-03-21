@extends('layout')
@section('head')
    <title>{{ env('APP_NAME') }}</title>
@endsection
@section('body-class', $design->theme?->bodyClass)
@section('content')
    <div class="min-h-screen md:grid place-content-center">
        @include("designs.{$ads->design->code}.view")
    </div>
    <div class="fixed bottom-4 right-4 grid grid-cols-1 gap-4 justify-items-center text-black">
        @if ($next->nextPageUrl())
            <a href="{{ $next->nextPageUrl() }}" class="text-center">
                <x-icons.arrow-right class="inline-block"></x-icons.arrow-right>
            </a>
        @endif
        @auth
            <livewire:count-down :ads="$ads" />
            <a href="/consumers/home">
                <img class="h-7 w-7 rounded-full" src="{{ auth('consumer')->user()->getFirstMediaUrl('avatar') }}" alt="">
            </a>
        @else
            <a href="/consumers/sign-in">Sign In</a>
        @endauth
    </div>
@endsection
