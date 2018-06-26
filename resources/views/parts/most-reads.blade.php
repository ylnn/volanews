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
          