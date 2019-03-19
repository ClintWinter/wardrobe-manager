@extends('layouts.app')
@section('content')

<div class="page-garment-edit">
    <h2>Modify Garment: {{ $Garment->Name }}</h2>
    <div class="hr mb-50"></div>
    <form action="/garments/{{ $Garment->GarmentID }}" method="POST" class="primary-form w-500">
        @method('PATCH')
        @csrf
        <div class="form-group mb-20">
            <label class="w-200 pr-50 align-right" for="color">Name</label>
            <input class="w-300" type="text" name="name" value="{{ $Garment->Name }}">
        </div>

        <div class="form-group mb-20">
            <label class="w-200 pr-50 align-right" for="color">Color</label>
            <input class="w-300" type="text" name="color" value="{{ $Garment->Color }}">
        </div>
        
        <button class="btn btn-primary ml-200" type="submit">Save Garment</button>

    </form>
</div>

@endsection