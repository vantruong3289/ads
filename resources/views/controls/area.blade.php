<div>
    <label class="block text-sm font-medium leading-6 text-gray-900">{{ $field->label }}</label>
    <div class="mt-2">
        <textarea name="data[{{ $key }}][{{ $name }}]" rows="3" class="mt-1 block w-full rounded-md border-0 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:py-1.5 sm:text-sm sm:leading-6" placeholder="{{ $field->placeholder }}">{{ $data[$name] }}</textarea>
    </div>
</div>
