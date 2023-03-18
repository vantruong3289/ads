@section('body-class', 'bg-gray-100')
<div class="bg-white max-w-2xl mx-auto shadow sm:rounded-md">
    <div class="">
        <ul class="divide-y">
            @foreach ($ads->data as $job)
                <li class="relative py-8 px-2 sm:px-10">
                    <div class="flex items-center justify-between">
                        <h3 class="text-sm font-semibold text-slate-500">{{ $job['name'] }}</h3>
                    </div>
                    <p class="flex items-center">
                        <span class="text-2xl text-slate-900">
                            {{ $job['symbol'] }}
                            <span class="font-bold">{{ $job['range'] }}</span>
                        </span>
                    </p>
                    <p class="mt-3 text-sm leading-6 text-slate-600">{{ $job['detail'] }}</p>
                </li>
            @endforeach
        </ul>
    </div>
</div>
