@extends('layouts.app')
@section('content')

<div class="page-garment-create">
    <h2>New Garment</h2>
    <div class="hr mb-50"></div>
    <form class="primary-form w-500" action="/garments" method="POST">
        @csrf

        <div class="form-group mb-20">
            <label class="w-200 pr-50 align-right" for="color">Name</label>
            <input class="w-300" type="text" name="name">
        </div>

        <div class="form-group mb-20">
            <label class="w-200 pr-50 align-right" for="color">Color</label>
            <input class="w-300" type="text" name="color">
        </div>
        
        <button class="ml-200 btn btn-primary" type="submit">Create Garment</button>

    </form>
</div>

@endsection