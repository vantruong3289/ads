@extends('layout')
@section('head')
    <title>Deisgn</title>
@endsection
@section('content')
    @include('admins.header')
    <div class="bg-gray-100 py-10">
        <div class="max-w-7xl mx-auto">
            @include("designs.{$design->code}.template")
            <div class="hidden sm:block" aria-hidden="true">
                <div class="py-5">
                    <div class="border-t border-gray-200"></div>
                </div>
            </div>
            <div class="mt-10 sm:mt-0"></div>
            <div class="md:grid md:grid-cols-3 md:gap-6">
                <div class="md:col-span-1">
                    <div class="px-4 lg:px-0">
                        <h3 class="text-base font-semibold leading-6 text-gray-900">Status</h3>
                        <p class="mt-1 text-sm text-gray-600">This information will be displayed publicly so be careful what you share.</p>
                    </div>
                </div>
                <div class="mt-5 md:col-span-2 md:mt-0">
                    <form action="/admins/designs/{{ $design->id }}" method="POST" enctype="multipart/form-data">
                        @csrf @method('put')
                        <div class="shadow sm:overflow-hidden sm:rounded-md">
                            <div class="space-y-6 bg-white px-4 py-5 sm:p-6">
                                <div class="grid grid-cols-3 gap-6">
                                    <div class="col-span-3 sm:col-span-2">
                                        <label class="block text-sm font-medium leading-6 text-gray-900">Active</label>
                                        <div class="mt-2 space-x-4 flex">
                                            <div class="flex items-center">
                                                <input id="ACTIVE" value="ACTIVE" name="active" type="radio" {{ $design->active == 'ACTIVE' ? 'checked' : '' }} class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600">
                                                <label for="ACTIVE" class="ml-3 block text-sm font-medium leading-6 text-gray-900">ACTIVE</label>
                                            </div>
                                            <div class="flex items-center">
                                                <input id="UNACTIVE" value="UNACTIVE" name="active" type="radio" {{ $design->active == 'UNACTIVE' ? 'checked' : '' }} class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600">
                                                <label for="UNACTIVE" class="ml-3 block text-sm font-medium leading-6 text-gray-900">UNACTIVE</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="space-y-6 bg-white px-4 py-5 sm:p-6">
                                <div class="grid grid-cols-3 gap-6">
                                    <div class="col-span-3 sm:col-span-2">
                                        <label class="block text-sm font-medium leading-6 text-gray-900">Tag</label>
                                        <div class="mt-2">
                                            <input type="text" value="{{ $design->tags?->pluck('name')->join(', ') }}" name="tags" class="block w-full rounded border-0 py-1.5 text-gray-900 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" placeholder="">
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
    </div>
@endsection
