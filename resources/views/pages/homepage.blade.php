@extends('layouts.front')

@section('content')
    @if(count($mainContents) > 0)
    @php 
        $first = $mainContents[0]->content;
    @endphp
    <div class="row">
        <div class="col-xs-12 col-md-12 col-lg-12 col-xl-6 mb-3">
            <div class="row">
                <div class="col-xs-12 col-md-6 mb-3">
                        <div class="card home-card-big" >
                        <img class="card-img-top" src="{{Voyager::image($first->thumbnail('cropped540', 'images'))}}" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">{{$first->title}}</h5>
                        </div>
                        </div>
                    </div>
            </div>
        </div>
        <div class="col-xs-12 col-md-12 col-lg-12 col-xl-6 mb-3">
            <div class="row">
            @foreach($mainContents as $mc)
                @if ($loop->first)
                    @php continue; @endphp
                @endif
                
                    <div class="col-xs-12 col-md-6 mb-3" style="">
                        <div class="card home-card" >
                        <img class="card-img-top" src="{{Voyager::image($mc->content->thumbnail('cropped270', 'images'))}}" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-sm-title">{{$mc->content->title}}</h5>
                        </div>
                        </div>
                    </div>
                    @endforeach
                </div>
        </div>
    </div>
    @endif
@endsection