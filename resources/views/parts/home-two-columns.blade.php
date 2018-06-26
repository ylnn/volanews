<div class="sub-two-column">
        <div class="row">
          {{-- Category --}}
          <div class="col-xs-12 col-md-8">
            @foreach ($contentsByCategories as $cbc)
            @php 
              if(count($cbc->contents) == 0 ){
                continue; 
              }
            @endphp
            <div class="row">
              <div class="col ">
                <div class="category-name">
                      {{$cbc->title}}
                </div>
              </div>
            </div>  
              @foreach ($cbc->contents as $content)
                <a href="{{route('content.detail', ['id' => $content->id, 'slug' => $content->slug])}}">
                  <div class="row mb-2">
                    <div class="col-5 col-sm-4 col-lg-3 ">
                        {{-- <img src="holder.js/150x100"> --}}
                        <img src="{{Voyager::image($content->thumbnail('cropped150', 'images'))}}" alt="{{$content->title}}">
                    </div>
                    <div class="col-6 col-sm-8 col-lg-9 d-flex flex-column justify-content-center">
                      <div class="row">
                        <div class="col cat-title">
                          {{$content->title}}
                        </div>
                      </div>
                      <div class="row">
                        <div class="col cat-date">
                          {{$content->created_at->format('Y/m/d')}}
                        </div>
                      </div>
                    </div>
                  </div>
                </a>
                @endforeach
              @endforeach

                {{-- SECTION 3 --}}
                @include('ads.adaptive', ['section' => 'section3']) 
                {{-- SECTION 3 --}}

            </div>              
          <div class="col-xs-12 col-md-4">
            <div class="row">
              <div class="col">
                <div class="category-name">
                  Most Reads
                </div>
               </div>  
            </div>  
              
            @foreach ($mostRead as $mr)
                
                <a href="{{route('content.detail', ['id' => $mr->id, 'slug' => $mr->slug])}}">
                  <div class="row mb-2">
                    <div class="col-2 col-md-3 col-lg-2">
                          <img src="{{Voyager::image($mr->thumbnail('cropped50', 'images'))}}" alt="{{$mr->title}}">
                    </div>
                    <div class="col d-flex flex-column justify-content-center">
                      <div class="row">
                        <div class="col cat-title">
                          {{$mr->title}}
                        </div>
                      </div>
                      <div class="row">
                        <div class="col cat-date">
                          {{$mr->created_at->format('Y/m/d')}}
                        </div>
                      </div>
                    </div>
                  </div>
                </a>
              @endforeach

              {{-- SECTION 4 --}}
              @include('ads.adaptive', ['section' => 'section4']) 
              {{-- SECTION 4 --}}
          </div>              
        </div>
      </div>