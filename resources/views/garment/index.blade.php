@extends('layouts.app')

@section('content')

    <h1>Garments</h1>

    <ul>
        @foreach ($Garments as $Garment)
            <li>
                <a href="">{{ $Garment->Name }}</a>
            </li>
        @endforeach
    </ul>

@endsection