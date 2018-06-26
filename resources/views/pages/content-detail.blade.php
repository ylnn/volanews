@extends('layouts.front')

@section('content')

    <div class="row">
            <div class="col-md-12">
                <h2 class="category-detail-title">{{$content->title}}</h2>
            </div>

            <div class="col-md-12">
                <div class="row">
                    <div class="col d-flex justify-content-center">
                        @if($content->images !== "")
                        <img class="img-responsive" src="{{asset('storage/'.$content->images)}}" alt="">
                        @endif
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <div class="content-detail">
                            <p>{{$content->title}}</p>
                            {!! $content->body !!}
                        </div>
                    </div>
                </div>
            </div>

        </div>
        
@endsection