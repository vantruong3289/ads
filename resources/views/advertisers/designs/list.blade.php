@extends('layout')
@section('head')
    <title>Design</title>
@endsection
@section('content')
    @include('advertisers.header')
    <div class="bg-gray-100 py-10">
        <div class="max-w-7xl mx-auto">
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
