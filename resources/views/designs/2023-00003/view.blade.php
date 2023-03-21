@php $data = $ads->data @endphp
<div class="flex items-center justify-center">
    <div class="rounded shadow-lg py-4 px-5 bg-white dark:bg-gray-800">
        <div class="flex items-start justify-between">
            <div class="flex items-center mb-4 lg:mb-0 mr-10">
                <div class="w-14 h-14 bg-cover rounded-md mr-3">
                    <img tabindex="0" src="{{ $data['avatar'] }}" alt="person" class="focus:outline-none rounded-full h-full w-full overflow-hidden shadow" />
                </div>
                <div>
                    <a tabindex="0" class="focus:outline-none  text-lg font-bold leading-4 text-gray-800 dark:text-gray-100">{{ $data['name'] }}</a>
                    <p tabindex="0" class="focus:outline-none leading-3 text-gray-500 dark:text-gray-400 pt-2">{{ $data['job'] }}</p>
                </div>
            </div>
        </div>
        <p tabindex="0" class="focus:outline-none pt-4 leading-7 text-gray-600 dark:text-gray-100">{{ $data['content'] }}</p>
        <div class="flex items-end justify-end mt-5">
            <a href="{{ $data['link'] }}" class="focus:opacity-90 focus:ring-offset-2 focus:ring-2 focus:ring-indigo-700 font-medium leading-3 text-white py-3 px-4 rounded bg-indigo-700 focus:outline-none hover:opacity-90">Send a message</a>
        </div>
    </div>
</div>
