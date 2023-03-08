@extends('layout')
@section('head')
    <title>Home</title>
@endsection
@section('content')
    @include('advertisers.header')
    <div class="bg-gray-100 py-10">
        <div class="max-w-7xl mx-auto">
            <div class="md:grid md:grid-cols-3 md:gap-6">
                <div class="md:col-span-1">
                    <div class="px-4 sm:px-0">
                        <h3 class="text-base font-semibold leading-6 text-gray-900">Ads</h3>
                        <p class="mt-1 text-sm text-gray-600">This information will be displayed publicly so be careful what you share.</p>
                    </div>
                </div>
                <div class="mt-5 md:col-span-2 md:mt-0">
                    <div class="overflow-hidden bg-white shadow sm:rounded-lg">
                        <div class="px-4 py-5 sm:px-6">
                            <h3 class="text-base font-semibold leading-6 text-gray-900">Applicant Information</h3>
                            <p class="mt-1 max-w-2xl text-sm text-gray-500">Personal details and application.</p>
                        </div>
                        <div class="border-t border-gray-200">
                            @foreach ($adss as $ads)
                                <div class="bg-white px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                                    <div class="text-sm font-medium text-gray-500">
                                        {{ $ads->title }}
                                    </div>
                                    <div class="mt-1 text-sm text-gray-500 sm:mt-0">
                                        {{ $ads->content }}
                                    </div>
                                    <div class="mt-1 text-sm text-blue-500 sm:mt-0">
                                        <a href="/adss/{{ $ads->id }}/edit">Edit</a>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
