@extends('layouts.app')

@section('content')

<div class="page-garments">
    <h1>Garments</h1>

    <div class="garments-container">
        @foreach ($Garments as $Garment)
            <div class="garment-item">
                <div class="garment-head">
                    <p><strong>{{ $Garment->Name }}</strong></p>
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