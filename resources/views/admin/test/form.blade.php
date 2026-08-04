@extends('admin.layouts.main')
@section('title','Form Element')
@section('content')
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">Form Element</h3>
        </div>
        <form action="{{route('admin.test.form.post')}}" method="post">
            @csrf
            <div class="card-body">
                <x-inputs.text label="Input Text" name="text"></x-inputs.text>
                <x-inputs.email label="Input Email" name="email"></x-inputs.email>
                <x-inputs.number label="Input Number" name="number"></x-inputs.number>
                <x-inputs.text-area label="Input Text Area" name="text-area"></x-inputs.text-area>
                <x-inputs.select-simple label="Input Select Simple" name="select-simple">
                    <option value="1">Option 1</option>
                    <option value="2">Option 2</option>
                    <option value="3">Option 3</option>
                    <option value="4">Option 4</option>
                    <option value="5">Option 5</option>
                </x-inputs.select-simple>
                <x-inputs.select label="Input Select 2" name="select-2">
                    <option value="1">Option 1</option>
                    <option value="2">Option 2</option>
                    <option value="3">Option 3</option>
                    <option value="4">Option 4</option>
                    <option value="5">Option 5</option>
                </x-inputs.select>
                <x-inputs.select label="Input Select Multiple" name="select-multiple" multiple>
                    <option value="1" selected>Option 1</option>
                    <option value="2">Option 2</option>
                    <option value="3" selected>Option 3</option>
                    <option value="4">Option 4</option>
                    <option value="5">Option 5</option>
                </x-inputs.select>
                <x-inputs.date label="Input Date" name="date"></x-inputs.date>
                <x-inputs.time label="Input Time" name="time"></x-inputs.time>

                <x-inputs.editor label="Input Editor" name="editor"></x-inputs.editor>
                <x-inputs.image-link label="Input Image Link" name="Image"></x-inputs.image-link>
            </div>
            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
    </div>
@endsection
