<div class="fixed right-4 top-10 z-[1022] w-96">
    @if (\Session::has('alert-updated'))
        @php $alert = \Session::get('alert-updated') @endphp
        <div class="flex items-stretch rounded-xl border bg-gray-100">
            <div class="p-3 grid place-items-center">
                <x-icons.check />
            </div>
            <div class="flex-1 p-3">
                <div class="font-medium text-lg">{{ $alert->title }}</div>
                <div class="mt-1 text-gray-500">{{ $alert->body }}</div>
            </div>
            <div class="border-l p-3 grid place-items-center">
                <x-icons.mark class="text-gray-500" />
            </div>
        </div>
    @endif
</div>
