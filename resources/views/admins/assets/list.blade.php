@extends('layout')
@section('head')
    <title>Home</title>
@endsection
@section('content')
    @include('admins.header')
    <div class="bg-gray-100 py-10">
        <div class="max-w-7xl mx-auto">
            <div class="md:grid md:grid-cols-3 md:gap-6">
                <div class="md:col-span-1">
                    <div class="px-4 lg:px-0">
                        <h3 class="text-base font-semibold leading-6 text-gray-900">Asset</h3>
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
                            @foreach ($assets as $asset)
                                <div class="bg-white px-4 py-5 flex space-x-2 sm:gap-4 sm:px-6">
                                    <div class="text-sm font-medium text-gray-500">{{ ++$loop->index }}</div>
                                    <div class="mt-1 text-sm text-gray-900 sm:mt-0 flex-1">{{ $asset->brand->name }}</div>
                                    <div class="mt-1 text-sm text-gray-900 sm:mt-0 flex-1">{{ $asset->money }} {{ $asset->currency }}</div>
                                    <div class="mt-1 text-sm text-gray-900 sm:mt-0">{{ $asset->view }}</div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
