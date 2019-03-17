@extends('layouts.app')
@section('content')

<h1>Create Garment</h1>

<form action="/garments" method="POST">
    @csrf

    <div class="form-group">
        <label for="color">Name</label>
        <input type="text" name="name">
    </div>

    <div class="form-group">
        <label for="color">Color</label>
        <input type="text" name="color">
    </div>
    
    <button type="submit">Create Garment</button>

</form>

@endsection