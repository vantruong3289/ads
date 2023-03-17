@extends('layout')
@section('head')
    <title>Deisgn</title>
@endsection
@section('content')
    @include('advertisers.header')
    <div class="bg-gray-100 py-10">
        <div class="max-w-7xl mx-auto">
            <div>
                @include("designs.{$design->code}.view")
            </div>
            <div class="hidden sm:block" aria-hidden="true">
                <div class="py-5">
                    <div class="border-t border-gray-200"></div>
                </div>
            </div>
            <div class="mt-10 sm:mt-0"></div>
            <div class="mt-5  md:mt-0">
                <form action="/advertisers/ads/{{ $ads->id }}/designs/{{ $design->id }}" method="POST" enctype="multipart/form-data">
                    @csrf @method('put')
                    <div class="shadow sm:overflow-hidden sm:rounded-md">
                        <div class="space-y-6 bg-white px-4 py-5 sm:p-6">
                            @foreach ($design->fields as $key => $field)
                                @include("controls.{$field->type}")
                            @endforeach
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
        <div class="mt-10 sm:mt-0"></div>
    </div>
@endsection
