@extends('layout.layout')

@section('main') 
    <div class="row g-4">        
        @foreach($news as $n)
            <div class="col-12 col-md-6 col-lg-4">
                <div class="card h-100">
                    <div class="card-body">
                        <h3 class="card-title">{{ $n['title'] }}</h3>
                        <div class="card-text">
                            {{ $n['excerpt'] }}
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection