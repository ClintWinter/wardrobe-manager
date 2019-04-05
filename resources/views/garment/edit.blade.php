@extends('layouts.app')
@section('content')

<header>
    <h2>Modify Garment: {{ $garment->name }}</h2>
</header>
<div class="page-garment-edit">
    <form action="/garments/{{ $garment->id }}" method="POST" class="primary-form w-500">
        @method('PATCH')
        @csrf
        <div class="form-group mb-20">
            <label class="w-200 pr-50 align-right" for="color">Name</label>
            <input class="w-300" type="text" name="name" value="{{ $garment->name }}">
        </div>

        <div class="form-group mb-20">
            <label class="w-200 pr-50 align-right" for="color">type</label>
            <input class="w-300" type="text" name="color" value="{{ $garment->type }}">
        </div>
        
        <button class="btn btn-primary ml-200" type="submit">Save Garment</button>

    </form>
</div>

@endsection