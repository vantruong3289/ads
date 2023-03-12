<div class="md:grid md:grid-cols-3 md:gap-6">
    <div class="md:col-span-1">
        <div class="px-4 lg:px-0">
            <h3 class="text-base font-semibold leading-6 text-gray-900">Active</h3>
            <p class="mt-1 text-sm text-gray-600">This information will be displayed publicly so be careful what you share.</p>
        </div>
    </div>
    <div class="mt-5 md:col-span-2 md:mt-0">
        <form action="/adss/{{ $ads->id }}" method="POST" enctype="multipart/form-data">
            @csrf @method('put')
            <div class="shadow sm:overflow-hidden sm:rounded-md">
                <div class="space-y-6 bg-white px-4 py-5 sm:p-6">
                    <div class="grid grid-cols-3 gap-6">
                        <div class="col-span-3 sm:col-span-2">
                            <label class="block text-sm font-medium leading-6 text-gray-900">Title</label>
                            <div class="mt-2">
                                <input type="text" value="{{ $ads->title }}" name="title" class="block w-full rounded border-0 py-1.5 text-gray-900 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" placeholder="">
                            </div>
                        </div>
                    </div>

                    <div class="grid grid-cols-3 gap-6">
                        <div class="col-span-3 sm:col-span-2">
                            <label class="block text-sm font-medium leading-6 text-gray-900">Active</label>
                            <div class="mt-2 space-x-4 flex">
                                <div class="flex items-center">
                                    <input id="on" value="1" name="active" type="radio" {{ $ads->active ? 'checked' : '' }} class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600">
                                    <label for="on" class="ml-3 block text-sm font-medium leading-6 text-gray-900">On</label>
                                </div>
                                <div class="flex items-center">
                                    <input id="off" value="0" name="active" type="radio" {{ !$ads->active ? 'checked' : '' }} class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600">
                                    <label for="off" class="ml-3 block text-sm font-medium leading-6 text-gray-900">Off</label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="grid grid-cols-3 gap-6">
                        <div class="col-span-3 sm:col-span-2">
                            <label for="brand_id" class="block text-sm font-medium leading-6 text-gray-900">Brand</label>
                            <div class="mt-2">
                                <select id="brand_id" name="brand_id" class="mt-2 block w-full rounded-md border-0 bg-white py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                    @foreach ($brands as $brand)
                                        <option {{ $brand->id == $ads->brand_id ? 'selected' : '' }} value="{{ $brand->id }}">{{ $brand->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>
                    <div>
                        <label for="content" class="block text-sm font-medium leading-6 text-gray-900">Content</label>
                        <div class="mt-2">
                            <textarea id="content" name="content" rows="3" class="mt-1 block w-full rounded-md border-0 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:py-1.5 sm:text-sm sm:leading-6">{{ $ads->content }}</textarea>
                        </div>
                    </div>
                </div>
                <div class="bg-gray-50 px-4 py-3 text-right sm:px-6">
                    <button type="submit" class="inline-flex justify-center rounded-md bg-indigo-600 py-2 px-3 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-500">Save</button>
                </div>
            </div>
        </form>
    </div>
</div>
