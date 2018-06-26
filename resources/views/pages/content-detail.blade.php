@extends('layouts.front')

@section('content')

    <div class="row">
            
            <div class="col-md-8">
                <h2 class="category-detail-title">{{$content->title}}</h2>
                <div class="content-date d-flex justify-content-end">
                    @if($content->created_at <> $content->updated_at)
                    Updated: {{$content->updated_at->format(setting('site.datetime_format'))}} | 
                    @endif
                    {{$content->created_at->format(setting('site.datetime_format')) }}
                </div>
                <div class="row">
                    <div class="col d-flex justify-content-center">
                        @if($content->images !== "")
                        <img class="img-responsive" src="{{asset('storage/'.$content->images)}}" alt="">
                        @endif
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        @isset($content->summary)
                            <div class="content-summary">
                                {!! $content->summary !!}
                            </div>
                        @endif
                        <div class="content-detail">
                            {!! $content->body !!}
                        </div>
                    </div>
                </div>
                {{-- Other Contents --}}
                @include('parts.sub-categories')
            </div>


            <div class="col-md-4">
                @include('parts.most-reads')
            </div>

        </div>

    {{-- @include('parts.home-two-columns') --}}
        
@endsection