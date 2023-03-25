@extends('layout')
@section('head')
    <title>Design</title>
@endsection
@section('content')
    @include('advertisers.header')
    <div class="bg-gray-100 py-10">
        <div class="max-w-7xl mx-auto">
            <div class="p-4">
                <form action="/advertisers/ads/{{ $ads->id }}/designs" method="get">
                    <div class="shadow sm:overflow-hidden sm:rounded-md">
                        <div class="space-y-6 bg-white px-4 py-5 sm:p-6">
                            <div class="grid grid-cols-3 gap-6">
                                <div class="col-span-3 sm:col-span-3">
                                    <label class="block text-sm font-medium leading-6 text-gray-900">Tag</label>
                                    <div class="mt-2">
                                        <input type="text" value="{{ request()->tags }}" name="tags" class="block w-full rounded border-0 py-1.5 text-gray-900 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" placeholder="">
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
            <div class="grid grid-cols-1 gap-4 md:grid-cols-2">
                @foreach ($designs as $design)
                    <div class="p-4">
                        @include("designs.{$design->code}.template")
                        <div class="mt-3 flex justify-end">
                            <div class="flex space-x-5">
                                @if ($ads->design_id != $design->id)
                                    <form action="/advertisers/ads/{{ $ads->id }}/designs/{{ $design->id }}/choice" method="post">
                                        @csrf @method('put')
                                        <button type="submit" class="flex text-indigo-500 space-x-2 uppercase">
                                            Use it
                                        </button>
                                    </form>
                                @endif
                                <span class="flex space-x-2 text-gray-500">
                                    <x-icons.eye />
                                    <span>{{ $design->ads_count }}</span>
                                </span>
                                <div class="text-gray-500">{{ $design->code }}</div>

                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
