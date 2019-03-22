@extends('layouts.app')

@section('content')

<header>
    <h2>Garments</h2>
</header>

<div class="page-garments">

    <div class="garments-container">
        @foreach ($Garments as $Garment)
            <div class="garment-item">
                <div class="garment-head">
                    <p><a href="{{ url('/garments/' . $Garment->GarmentID . '/edit') }}"><strong>{{ $Garment->Name }}</strong></a></p>
                    <form action="{{ url('/garments/' . $Garment->GarmentID) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button class="btn-link" type="submit"><i class="fas fa-times"></i></button>
                    </form>
                </div>
                <div class="garment-body">
                    Color: {{ $Garment->Color }}
                </div>
                
            </div>
        @endforeach
        </div>
</div>
@endsection