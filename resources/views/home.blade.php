@extends('layout.layout')

@section('main')
    <div class="row">
        <div class="col-md-12">
            News!
        </div>
    </div> 
    <div class="row">
        @foreach($news as $k=>$new)
            <!-- <div class="col-sm-4"> -->
            <div class="col-12 col-md-6 col-lg-4 mb-3">
                <div class="card ">
                    <div class="card-body">
                        {{ $k }}
                        <h5 class="card-title">{{$new['title']}}</h5>
                        <p class="card-text">{{$new['excerpt']}}</p>  
                    </div>
                </div>
            </div>
        @endforeach
    </div>   
@endsection