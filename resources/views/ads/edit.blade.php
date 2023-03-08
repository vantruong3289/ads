@extends('layout')
@section('head')
    <title>Advertiser edit ads</title>
@endsection
@section('content')
    @include('advertisers.header')
    <div class="bg-gray-100 py-10">
        <div class="max-w-7xl mx-auto">
            <div class="md:grid md:grid-cols-3 md:gap-6">
                <div class="md:col-span-1">
                    <div class="px-4 sm:px-0">
                        <h3 class="text-base font-semibold leading-6 text-gray-900">Asd</h3>
                        <p class="mt-1 text-sm text-gray-600">This information will be displayed publicly so be careful what you share.</p>
                    </div>
                </div>
                <div class="mt-5 md:col-span-2 md:mt-0">
                    <form action="/adss/{{ $ads->id }}" method="POST" enctype="multipart/form-data">
                        @csrf @method('put')
                        <div class="shadow sm:overflow-hidden sm:rounded-md">
                            <div class="space-y-6 bg-white px-4 py-5 sm:p-6">
                                <div class="grid grid-cols-3 gap-6">
                                    <div class="col-span-3 sm:col-span-2">
                                        <label class="block text-sm font-medium leading-6 text-gray-900">Title</label>
                                        <div class="mt-2">
                                            <input type="text" value="{{ $ads->title }}" name="name" class="block w-full rounded border-0 py-1.5 text-gray-900 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" placeholder="">
                                        </div>
                                    </div>
                                </div>

                                <div class="grid grid-cols-3 gap-6">
                                    <div class="col-span-3 sm:col-span-2">
                                        <label class="block text-sm font-medium leading-6 text-gray-900">Active</label>
                                        <div class="mt-2 space-x-4 flex">
                                            <div class="flex items-center">
                                                <input id="on" value="1" name="active" type="radio" {{ $ads->active ? 'checked' : '' }} class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600">
                                                <label for="on" class="ml-3 block text-sm font-medium leading-6 text-gray-900">On</label>
                                            </div>
                                            <div class="flex items-center">
                                                <input id="off" value="0" name="active" type="radio" {{ !$ads->active ? 'checked' : '' }} class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600">
                                                <label for="off" class="ml-3 block text-sm font-medium leading-6 text-gray-900">Off</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="grid grid-cols-3 gap-6">
                                    <div class="col-span-3 sm:col-span-2">
                                        <label class="block text-sm font-medium leading-6 text-gray-900">Design</label>
                                        <div class="mt-2">
                                            <select id="design" name="design" class="mt-2 block w-full rounded-md border-0 bg-white py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                                <option>United States</option>
                                                <option>Canada</option>
                                                <option>Mexico</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <label for="content" class="block text-sm font-medium leading-6 text-gray-900">Content</label>
                                    <div class="mt-2">
                                        <textarea id="content" name="content" rows="3" class="mt-1 block w-full rounded-md border-0 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:py-1.5 sm:text-sm sm:leading-6">{{ $ads->content }}</textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="bg-gray-50 px-4 py-3 text-right sm:px-6">
                                <button type="submit" class="inline-flex justify-center rounded-md bg-indigo-600 py-2 px-3 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-500">Save</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="hidden sm:block" aria-hidden="true">
                <div class="py-5">
                    <div class="border-t border-gray-200"></div>
                </div>
            </div>
            <div class="mt-10 sm:mt-0">
                <div class="md:grid md:grid-cols-3 md:gap-6">
                    <div class="md:col-span-1">
                        <div class="px-4 sm:px-0">
                            <h3 class="text-base font-semibold leading-6 text-gray-900">Gift</h3>
                            <p class="mt-1 text-sm text-gray-600">This information will be displayed publicly so be careful what you share.</p>
                        </div>
                    </div>
                    <div class="mt-5 md:col-span-2 md:mt-0">
                        <form action="/adss/{{ $ads->id }}" method="POST" enctype="multipart/form-data">
                            @csrf @method('put')
                            <div class="shadow sm:overflow-hidden sm:rounded-md">
                                <div class="space-y-6 bg-white px-4 py-5 sm:p-6">

                                    <div class="grid grid-cols-3 gap-6">
                                        <div class="col-span-3 sm:col-span-2">
                                            <label class="block text-sm font-medium leading-6 text-gray-900">Money</label>
                                            <div class="mt-2">
                                                <input type="number" value="{{ $ads->money }}" name="money" class="block w-full rounded border-0 py-1.5 text-gray-900 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" placeholder="">
                                            </div>
                                        </div>
                                        <div class="col-span-3 sm:col-span-1">
                                            <label class="block text-sm font-medium leading-6 text-gray-900">Currency</label>
                                            <div class="mt-2">
                                                <select id="currency" name="currency" class="mt-2 block w-full rounded-md border-0 bg-white py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                                    <option {{ $ads->currency == 'VND' ? 'selected' : '' }}>VND</option>
                                                    <option {{ $ads->currency == 'USD' ? 'selected' : '' }}>USD</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="grid grid-cols-3 gap-6">
                                        <div class="col-span-3 sm:col-span-2">
                                            <label class="block text-sm font-medium leading-6 text-gray-900">Voucher</label>
                                            <div class="mt-2">
                                                <input type="number" value="{{ $ads->voucher }}" name="voucher" class="block w-full rounded border-0 py-1.5 text-gray-900 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" placeholder="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="grid grid-cols-3 gap-6">
                                        <div class="col-span-3 sm:col-span-2">
                                            <label class="block text-sm font-medium leading-6 text-gray-900">Seconds</label>
                                            <div class="mt-2">
                                                <input type="number" value="{{ $ads->seconds }}" name="seconds" class="block w-full rounded border-0 py-1.5 text-gray-900 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" placeholder="">
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <div class="bg-gray-50 px-4 py-3 text-right sm:px-6">
                                    <button type="submit" class="inline-flex justify-center rounded-md bg-indigo-600 py-2 px-3 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-500">Save</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="hidden sm:block" aria-hidden="true">
                <div class="py-5">
                    <div class="border-t border-gray-200"></div>
                </div>
            </div>
            <div class="mt-10 sm:mt-0">
                <div class="md:grid md:grid-cols-3 md:gap-6">
                    <div class="md:col-span-1">
                        <div class="px-4 sm:px-0">
                            <h3 class="text-base font-semibold leading-6 text-gray-900">Image</h3>
                            <p class="mt-1 text-sm text-gray-600">This information will be displayed publicly so be careful what you share.</p>
                        </div>
                    </div>
                    <div class="mt-5 md:col-span-2 md:mt-0">
                        <form action="/adss/{{ $ads->id }}" method="POST" enctype="multipart/form-data">
                            @csrf @method('put')
                            <div class="shadow sm:overflow-hidden sm:rounded-md">
                                <div class="space-y-6 bg-white px-4 py-5 sm:p-6">
                                    <div>
                                        <label class="block text-sm font-medium leading-6 text-gray-900">Mobile</label>
                                        <div class="mt-2 flex items-center">
                                            <span class="inline-block overflow-hidden bg-gray-100">
                                                <img class="" src="{{ $ads->getFirstMediaUrl('ads-mobile') }}" alt="">
                                            </span>
                                            <label for="ads-mobile" class="ml-5 rounded-md border border-gray-300 bg-white py-1.5 px-2.5 text-sm font-semibold text-gray-900 shadow-sm hover:bg-gray-50"">
                                                <span>Change</span>
                                                <input id="ads-mobile" name="ads-mobile" type="file" class="sr-only">
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="space-y-6 bg-white px-4 py-5 sm:p-6">
                                    <div>
                                        <label class="block text-sm font-medium leading-6 text-gray-900">Desktop</label>
                                        <div class="mt-2 flex items-center">
                                            <span class="inline-block overflow-hidden bg-gray-100">
                                                <img class="" src="{{ $ads->getFirstMediaUrl('ads-desktop') }}" alt="">
                                            </span>
                                            <label for="ads-desktop" class="ml-5 rounded-md border border-gray-300 bg-white py-1.5 px-2.5 text-sm font-semibold text-gray-900 shadow-sm hover:bg-gray-50"">
                                                <span>Change</span>
                                                <input id="ads-desktop" name="ads-desktop" type="file" class="sr-only">
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="bg-gray-50 px-4 py-3 text-right sm:px-6">
                                    <button type="submit" class="inline-flex justify-center rounded-md bg-indigo-600 py-2 px-3 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-500">Save</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
