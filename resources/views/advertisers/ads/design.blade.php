@extends('layout')
@section('head')
    <title>Deisgn</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jsoneditor/9.10.0/jsoneditor.css" integrity="sha512-/JghmMAi5bleEgj1BT7h7Jm2+o4I4AbJYRVaY3eGGfdyTzV+yW3n0IedWH4ysbws5zpNK1beCqVJh0MSZxvNaA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
@endsection
@section('content')
    @include('advertisers.header')
    <div class="bg-gray-100 py-10">
        <div class="max-w-7xl mx-auto">
            <div class="grid md:grid-cols-2 gap-6">
                <div>
                    @include("designs.{$design->code}.view")
                </div>
                <div class="mt-5 md:mt-0">
                    <form action="/advertisers/ads/{{ $ads->id }}/designs/{{ $design->id }}" method="POST" enctype="multipart/form-data">
                        @csrf @method('put')
                        <div class="shadow sm:rounded-md">
                            <div>
                                <div id="jsoneditor"></div>
                            </div>
                            <textarea id="data" name="data" cols="30" rows="10" class="hidden"></textarea>
                            <hr>
                            <div class="bg-gray-50 px-4 py-3 text-right sm:px-6">
                                <button type="submit" class="inline-flex justify-center rounded-md bg-indigo-600 py-2 px-3 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-500">Save</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
@push('scripts')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jsoneditor/9.10.0/jsoneditor.min.js" integrity="sha512-ruQAvFENqNvZOgUR7kldDYoQQLXs/CTx/ZJJhDpGKB5iqrhdq92S+P6sYsl6HCE+xTIFDhDo2FiZ3PJGKPWjWg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script>
        // create the editor
        const container = document.getElementById('jsoneditor')
        const data = document.getElementById('data')
        const options = {
            onChangeText: function(text) {
                data.innerText = text;
            }
        }
        const editor = new JSONEditor(container, options)
        // set json
        editor.set(@json($ads->data))
        data.innerText = JSON.stringify(editor.get())
        // get json
    </script>
@endpush
