@extends('layout')
@section('head')
    <title>Deisgn</title>
@endsection
@section('content')
    @include('advertisers.header')
    <div class="bg-gray-100 py-10">
        <div class="max-w-7xl mx-auto">
            <div class="grid md:grid-cols-2 gap-6">
                <div>
                    @include("designs.{$design->code}.view")
                </div>
                <div class="mt-5 md:mt-0">
                    <form action="/advertisers/ads/{{ $ads->id }}/designs/{{ $design->id }}" method="POST" enctype="multipart/form-data">
                        @csrf @method('put')
                        <div class="shadow sm:rounded-md">
                            @foreach ($ads->data as $key => $data)
                                <div class="relative">
                                    <div class="space-y-6 bg-white px-4 py-5 sm:p-6">
                                        @foreach ($design->fields as $name => $field)
                                            @if (is_array($field))
                                            @else
                                                @include("controls.{$field->type}")
                                            @endif
                                        @endforeach
                                    </div>
                                    @if (!$loop->first)
                                        <div class="text-right absolute right-0 top-0">
                                            <a href="" class="text-indigo-500 inline-block p-1 bg-gray-100">
                                                <x-icons.mark />
                                            </a>
                                        </div>
                                    @endif
                                </div>
                                <hr>
                            @endforeach
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
