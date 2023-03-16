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
                    @include("designs.{$design->code}.template")
                @endforeach
            </div>
        </div>
    </div>
@endsection
