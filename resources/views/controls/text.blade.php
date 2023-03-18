<div class="grid grid-cols-3 gap-6">
    <div class="col-span-3 sm:col-span-2">
        <label class="block text-sm font-medium leading-6 text-gray-900">{{ $field->label }}</label>
        <div class="mt-2">
            <input name="data[{{ $key }}][{{ $name }}]" value="{{ $data->{$name} }}" placeholder="{{ $field->placeholder }}" type="text" class="block w-full rounded border-0 py-1.5 text-gray-900 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" placeholder="">
        </div>
    </div>
</div>
