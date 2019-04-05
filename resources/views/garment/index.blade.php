@extends('layouts.app')

@section('content')

<header>
    <h2>Garments</h2>
</header>

<div class="page-garments">

    <div class="garments-container">
        @foreach ($garments as $garment)
            <div class="garment-item">
                <div class="garment-head">
                    <p><a href="{{ url('/garments/' . $garment->id . '/edit') }}"><strong>{{ $garment->name }}</strong></a></p>
                    <form action="{{ url('/garments/' . $garment->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button class="btn-link" type="submit"><i class="fas fa-times"></i></button>
                    </form>
                </div>
                <div class="garment-body">
                    Type: {{ $garment->type }}
                </div>
                
            </div>
        @endforeach
        </div>
</div>
@endsection