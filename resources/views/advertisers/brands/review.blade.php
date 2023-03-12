<!-- component -->
<div class="p-5">
    <div class="flex">
        @for ($i = 1; $i <= $review->vibe; $i++)
            <x-icons.star></x-icons.star>
        @endfor
    </div>
    <p class="mt-3 text-gray-600 text-md">{{ $review->message }}</p>
    <div class="mt-2 text-sm font-semibold">{{ $review->customer->name }}</div>
</div>
