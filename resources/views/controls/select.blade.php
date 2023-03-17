<div class="grid grid-cols-3 gap-6">
    <div class="col-span-3">
        <label class="block text-sm font-medium leading-6 text-gray-900">{{ $field->label }}</label>
        <div class="mt-2">
            <select id="{{ $key }}" name="{{ $key }}" class="mt-2 block w-full rounded-md border-0 bg-white py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                @foreach ($field->options as $option)
                    <option value="{{ $option->value }}">{{ $option->text }}</option>
                @endforeach
            </select>
        </div>
    </div>
</div>
