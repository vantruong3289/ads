@extends('layout')
@section('head')
    <title>{{ env('APP_NAME') }}</title>
@endsection
@section('content')
    <div class="fixed inset-0 grid place-content-center">
        @include("designs.{$ads->design->code}.view")
    </div>
    <div class="fixed bottom-4 right-4 grid grid-cols-1 gap-4 items-center text-black">
        @if ($next->nextPageUrl())
            <a href="{{ $next->nextPageUrl() }}" class="text-center">
                <x-icons.arrow-right class="inline-block"></x-icons.arrow-right>
            </a>
        @endif
        @auth
            <livewire:count-down :ads="$ads" />
        @else
            <a href="/consumers/sign-in">Sign In</a>
        @endauth
    </div>
@endsection
