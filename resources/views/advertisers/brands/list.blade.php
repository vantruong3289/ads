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
                    <div class="px-4 lg:px-0">
                        <h3 class="text-base font-semibold leading-6 text-gray-900">New</h3>
                        <p class="mt-1 text-sm text-gray-600">This information will be displayed publicly so be careful what you share.</p>
                    </div>
                </div>
                <div class="mt-5 md:col-span-2 md:mt-0">
                    <fieldset {{ $hasNoAds ? 'disabled' : '' }}>
                        <form action="/advertisers/brands" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="shadow sm:overflow-hidden sm:rounded-md">
                                <div class="space-y-6 bg-white px-4 py-5 sm:p-6">
                                    <div class="grid grid-cols-3 gap-6">
                                        <div class="col-span-3 sm:col-span-2">
                                            <label class="block text-sm font-medium leading-6 text-gray-900">Name</label>
                                            <div class="mt-2">
                                                <input type="text" name="name" class="block w-full rounded border-0 py-1.5 text-gray-900 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" placeholder="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="bg-gray-50 px-4 py-3 text-right sm:px-6">
                                    <button type="submit" class="inline-flex justify-center rounded-md bg-indigo-600 py-2 px-3 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-500">Save</button>
                                </div>
                            </div>
                        </form>
                    </fieldset>
                </div>
            </div>
            <div class="hidden sm:block" aria-hidden="true">
                <div class="py-5">
                    <div class="border-t border-gray-200"></div>
                </div>
            </div>
            <div class="mt-10 sm:mt-0"></div>
            <div class="md:grid md:grid-cols-3 md:gap-6">
                <div class="md:col-span-1">
                    <div class="px-4 lg:px-0">
                        <h3 class="text-base font-semibold leading-6 text-gray-900">All</h3>
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
                            <div class="bg-white dark:bg-gray-900 p-4">
                                <div class="overflow-x-auto">
                                    <table class="w-full whitespace-nowrap">
                                        @foreach ($brands as $brand)
                                            <tr class="text-sm leading-none text-gray-600 dark:text-gray-200">
                                                <td class="py-5 px-2">
                                                    <div class="flex items-center">
                                                        <div class="w-10 h-10 bg-red-700 rounded-sm flex items-center justify-center">
                                                            <p class="text-xs font-bold leading-3 text-white">
                                                                <img src="{{ $brand->getFirstMediaUrl('logo') }}" alt="">
                                                            </p>
                                                        </div>
                                                        <div class="pl-2">
                                                            <p class="font-medium leading-none text-gray-800 dark:text-white ">
                                                                <a href="/brands/{{ $brand->id }}" class="text-blue-500">{{ $brand->name }}</a>
                                                            </p>
                                                            <p class="text-sm leading-3 text-gray-600 dark:text-gray-200 mt-2">{{ $brand->address }}</p>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="px-2">
                                                    <div class="text-sm text-gray-500">
                                                        <p>{{ $brand->email }}</p>
                                                        <p>{{ $brand->phone }}</p>
                                                    </div>
                                                </td>
                                                <td class="px-2">
                                                    <div class="text-sm text-blue-500 text-right space-x-2">
                                                        <a href="/advertisers/brands/{{ $brand->id }}/edit">Edit</a>
                                                    </div>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
