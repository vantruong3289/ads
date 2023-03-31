@extends('layout')
@section('head')
    <title>Asset</title>
@endsection
@section('content')
    @include('consumers.header')
    <div class="bg-gray-100 py-10">
        <div class="max-w-7xl mx-auto">
            <div class="md:grid md:grid-cols-3 md:gap-6">
                <div class="md:col-span-1">
                    <div class="px-4 lg:px-0">
                        <h3 class="text-base font-semibold leading-6 text-gray-900">Currency</h3>
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
                            <div class="w-full px-4 sm:px-6 py-5 dark:bg-gray-800 bg-white space-y-5">
                                @foreach ($assets as $asset)
                                    <div class="flex items-center justify-between">
                                        <div class="flex items-center">
                                            <div class="w-12 h-12 flex items-center justify-center bg-purple-200">
                                                <img src="{{ $asset->brand->getFirstMediaUrl('logo') }}" class="" />
                                            </div>
                                            <a href="" class="focus:outline-none focus:underline focus:text-gray-400 text-gray-600 dark:text-gray-100 hover:text-gray-500">
                                                <p class="font-medium pl-3">{{ $asset->brand->name }}</p>
                                                <address class="text-sm pl-3">{{ $asset->brand->address }}</address>
                                            </a>
                                        </div>
                                        <p class="text-sm font-medium text-indigo-700">{{ $asset->money }} {{ $asset->currency }}</p>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
