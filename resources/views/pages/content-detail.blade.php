@extends('layouts.front')

@section('content')

    <div class="row">
            <div class="col-md-12">
                <h2 class="category-detail-title">{{$content->title}}</h2>
            </div>

            <div class="col-md-12">
                {{$content->body}}
            </div>

        </div>
        
@endsection