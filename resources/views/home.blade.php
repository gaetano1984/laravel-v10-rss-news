@extends('layout.layout')

@section('main')
    <div class="row">
        <div class="col-md-12">
            News!
        </div>
    </div> 
    <div class="row">
        @foreach($news as $k=>$new)
            <div class="col-md-4">  
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">{{$new['title']}}</h5>
                        <p class="card-text">{{$new['excerpt']}}</p>  
                    </div>
                </div>
            </div>            
            @if($k%3==2)
                </div>
                <div class="row">
                    &nbsp;
                </div>
                <div class="row">
            @endif
        @endforeach
    </div>   
@endsection