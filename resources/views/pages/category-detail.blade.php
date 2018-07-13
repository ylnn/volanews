@extends('layouts.front')

@section('content')


<div class="category-detail">
<div class="row">
        <div class="col-md-12">
        <h3 class="category-detail-title">{{$category->title}}</h3>
        </div>
            <div class="col-12">
            @forelse($contents as $cc)
                <!-- <div class="col-xs-12 col-md-4 mb-3" style="">
                    <div class="" >
                        <a href="{{route('content.detail', ['id' => $cc->id, 'slug' => $cc->slug])}}">
                            @isset($cc->images[0])
                                <img class="" src="{{Voyager::image($cc->thumbnail('cropped540', 'images'))}}" alt="{{$cc->title}}">
                            @else
                                <img class="card-img-top" src="holder.js/540x434" alt="">
                            @endif
                            <div class="">
                                <h6 class="">{{$cc->title}}</h6>
                            </div>
                        </a>
                    </div>
                </div> -->
                <a href="{{route('content.detail', ['id' => $cc->id, 'slug' => $cc->slug])}}">
                  <div class="row mb-2">
                    <div class="col-5 col-sm-4 col-lg-2">
                        {{-- <img src="holder.js/150x100"> --}}
                        <img src="{{Voyager::image($cc->thumbnail('cropped150', 'images'))}}" alt="{{$cc->title}}">
                    </div>
                    <div class="col-6 col-sm-8 col-lg-9 d-flex flex-column justify-content-center">
                      <div class="row">
                        <div class="col cat-title">
                          {{$cc->title}}
                        </div>
                      </div>
                      <div class="row">
                        <div class="col cat-date">
                          {{$cc->created_at->format('Y/m/d')}}
                        </div>
                      </div>
                    </div>
                  </div>
                </a>
            @empty
                <div class="col">
                    <p>Category empty.</p>
                </div>
            @endforelse

            </div>

            <div class="row mt-4">
                <div class="col d-flex justify-content-center">
                    {{ $contents->links() }}
                </div>
            </div>
            
        </div>
    </div>
    
@endsection