@php
    $isProfile = \Request::route()->getName() == 'profile';
@endphp
<div class="relative w-full h-full">
    <img alt="{{ $ads->title }}" class="block object-cover w-full h-full {{ $isProfile ? 'rounded-lg' : '' }}" src="{{ $ads->getFirstMediaUrl('photo') }}">
    <div class="absolute top-2 left-1 w-full text-white">
        <div class="flex space-x-3">
            <img src="{{ $ads->brand->getFirstMediaUrl('logo') }}" alt="{{ $ads->brand->name }}" class="rounded-full w-20 h-20">
            <div class="space-y-2">
                <h5 class="text-base font-semibold">{{ $ads->brand->name }}</h5>
                <p class="text-sm md:max-w-xl">{{ $ads->content }}</p>
            </div>
        </div>
    </div>
</div>
