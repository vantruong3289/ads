<div class="md:grid md:grid-cols-3 md:gap-6">
    <div class="md:col-span-1">
        <div class="px-4 lg:px-0">
            <h3 class="text-base font-semibold leading-6 text-gray-900">Design</h3>
            <p class="mt-1 text-sm text-gray-600">This information will be displayed publicly so be careful what you share.</p>
        </div>
    </div>
    <div class="mt-5 md:col-span-2 md:mt-0">
        <form action="/advertisers/ads/{{ $ads->id }}" method="POST" enctype="multipart/form-data">
            @csrf @method('put')
            <div class="shadow sm:overflow-hidden sm:rounded-md">
                <div class="bg-white px-4 py-5 sm:p-6 text-indigo-500 space-x-5 flex items-center">
                    @if ($ads->design)
                        <a href="/advertisers/ads/{{ $ads->id }}/designs/{{ $ads->design_id }}/form">{{ $ads->design->code }}</a>
                    @endif
                    <a href="/advertisers/ads/{{ $ads->id }}/designs" class="text-indigo-500">
                        Browser
                    </a>
                </div>
                <div class="bg-gray-50 px-4 py-3 text-right sm:px-6">
                    <button type="submit" class="inline-flex justify-center rounded-md bg-indigo-600 py-2 px-3 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-500">Save</button>
                </div>
            </div>
        </form>
    </div>
</div>
