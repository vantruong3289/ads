@php $data = $ads->data @endphp
<div class="bg-white px-4 py-10 sm:px-10 max-w-2xl mx-auto sm:rounded-md border">
    <div class="">
        <div class="relative">
            <div class="mt-3 flex items-center">
                <p class="text-[2.5rem] leading-none text-slate-900">
                    {{ $data['symbol'] }}
                    <span class="font-bold">{{ $data['money'] }}</span>
                </p>
            </div>
            <p class="mt-6 text-sm leading-6 text-slate-600">
                {{ $data['content'] }}
            </p>
            <ul class="mt-10 space-y-8 border-t border-slate-900/10 pt-10 text-sm leading-6 text-slate-700">
                @foreach ($data['items'] as $item)
                    <li class="flex">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 32 32" class="h-8 w-8 flex-none">
                            <path fill="#fff" d="M0 0h32v32H0z"></path>
                            <path fill="#E0F2FE" d="M23 22l7-4v7l-7 4v-7zM9 22l7-4v7l-7 4v-7zM16 11l7-4v7l-7 4v-7zM2 18l7 4v7l-7-4v-7zM9 7l7 4v7l-7-4V7zM16 18l7 4v7l-7-4v-7z"></path>
                            <path fill="#0EA5E9" d="M16 3l.372-.651a.75.75 0 00-.744 0L16 3zm7 4h.75a.75.75 0 00-.378-.651L23 7zM9 7l-.372-.651A.75.75 0 008.25 7H9zM2 18l-.372-.651A.75.75 0 001.25 18H2zm28 0h.75a.75.75 0 00-.378-.651L30 18zm0 7l.372.651A.75.75 0 0030.75 25H30zm-7 4l-.372.651a.75.75 0 00.744 0L23 29zM9 29l-.372.651a.75.75 0 00.744 0L9 29zm-7-4h-.75c0 .27.144.518.378.651L2 25zM15.628 3.651l7 4 .744-1.302-7-4-.744 1.302zm7 2.698l-7 4 .744 1.302 7-4-.744-1.302zm-6.256 4l-7-4-.744 1.302 7 4 .744-1.302zm-7-2.698l7-4-.744-1.302-7 4 .744 1.302zm-.744 7l7 4 .744-1.302-7-4-.744 1.302zm7 2.698l-7 4 .744 1.302 7-4-.744-1.302zm-6.256 4l-7-4-.744 1.302 7 4 .744-1.302zm-7-2.698l7-4-.744-1.302-7 4 .744 1.302zm20.256-4l7 4 .744-1.302-7-4-.744 1.302zm7 2.698l-7 4 .744 1.302 7-4-.744-1.302zm-6.256 4l-7-4-.744 1.302 7 4 .744-1.302zm-7-2.698l7-4-.744-1.302-7 4 .744 1.302zm13.256 5.698l-7 4 .744 1.302 7-4-.744-1.302zm-6.256 4l-7-4-.744 1.302 7 4 .744-1.302zM30.75 25v-7h-1.5v7h1.5zm-15.122-.651l-7 4 .744 1.302 7-4-.744-1.302zm-6.256 4l-7-4-.744 1.302 7 4 .744-1.302zM2.75 25v-7h-1.5v7h1.5zm14 0v-7h-1.5v7h1.5zM8.25 7v7h1.5V7h-1.5zm14 0v7h1.5V7h-1.5zm-7 4v7h1.5v-7h-1.5zm-7 11v7h1.5v-7h-1.5zm14 0v7h1.5v-7h-1.5z"></path>
                        </svg>
                        <p class="ml-5">
                            <strong class="font-semibold text-slate-900">{{ $item['title'] }}</strong> — {{ $item['detail'] }}
                        </p>
                    </li>
                @endforeach
            </ul>
        </div>
    </div>
</div>
