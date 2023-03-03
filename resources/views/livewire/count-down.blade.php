<div x-cloak x-data="{ countdown: {{ $ads->seconds }} }" x-init="window.setInterval(() => { if (countdown > 0) countdown = countdown - 1; }, 1000)" wire:poll.{{ $ads->seconds }}s="watch">
    <button x-show="countdown" class="border border-white rounded-full w-7 h-7 text-sm cursor-default" x-text="countdown">{{ $ads->seconds }}</button>
    <a x-show="countdown == 0" href="/brands/{{ $ads->brand_id }}">
        <x-icons.gift />
    </a>
</div>
