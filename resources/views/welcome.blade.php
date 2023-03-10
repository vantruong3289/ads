@extends('layout')
@section('head')
    <title>{{ env('APP_NAME') }}</title>
@endsection
@section('content')
    <div class="fixed inset-0">
        @include('designs.banner')
        <div class="absolute bottom-4 right-4 text-white grid grid-cols-1 gap-4 items-center">
            @auth
                <livewire:count-down :ads="$ads" />
            @else
                <a href="/consumers/sign-in">Sign In</a>
            @endauth
            @if ($next->nextPageUrl())
                <a href="{{ $next->nextPageUrl() }}" class="text-center">
                    <x-icons.arrow-right class="inline-block"></x-icons.arrow-right>
                </a>
            @endif
        </div>
    </div>
@endsection
