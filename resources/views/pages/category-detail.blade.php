@extends('layouts.front')

@section('content')


<div class="category-detail">
<div class="row">
        <div class="col-md-12">
        <h3 class="category-detail-title">{{$category->title}}</h3>
        </div>

            
            @forelse($contents as $cc)
                <div class="col-xs-12 col-md-4 mb-3" style="">
                    <div class="card home-card" >
                        <a href="{{route('content.detail', ['id' => $cc->id, 'slug' => $cc->slug])}}">
                            <img class="card-img-top" src="{{Voyager::image($cc->thumbnail('cropped540', 'images'))}}" alt="Card image cap">
                            <div class="card-body">
                                <h6 class="card-sm-title">{{$cc->title}}</h6>
                            </div>
                        </a>
                    </div>
                </div>
            @empty
                <div class="col">
                    <p>Category empty.</p>
                </div>
            @endforelse

            <div class="row">
                <div class="col d-flex justify-content-center">
                    {{ $contents->links() }}
                </div>
            </div>
            
        </div>
    </div>
    
@endsection