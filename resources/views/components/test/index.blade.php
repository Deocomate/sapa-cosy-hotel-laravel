@extends("admin.layouts.main")
@section('title','Form Components')
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="mb-0">Form Components</h3>
                </div>
                <div class="card-body">
                    <x-inputs.text label="Input Text" name="text"></x-inputs.text>
                    <x-inputs.number label="Input Number" name="number"></x-inputs.number>
                    <x-inputs.email label="Input Email" name="email"></x-inputs.email>
                    <x-inputs.text-area label="Input TextArea" name="textarea"></x-inputs.text-area>
                    <x-inputs.select label="Input Select" name="select">
                        <option value="">Option A</option>
                        <option value="">Option B</option>
                        <option value="">Option C</option>
                        <option value="">Option D</option>
                        <option value="">Option E</option>
                    </x-inputs.select>
                    <x-inputs.date label="Input Date" name="date"></x-inputs.date>
                    <x-inputs.time label="Input Time" name="time"></x-inputs.time>
                    <x-inputs.image-link label="Input Image Link" name="image-link"></x-inputs.image-link>
                    <x-inputs.editor label="Input Editor" name="editor"></x-inputs.editor>
                </div>
            </div>
        </div>
    </div>
@endsection
