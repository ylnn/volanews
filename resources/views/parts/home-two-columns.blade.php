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
                <div class="row mb-2">
                  <div class="col-5 col-sm-4 col-lg-3 ">
                      {{-- <img src="holder.js/150x100"> --}}
                      <img src="{{Voyager::image($content->thumbnail('cropped150', 'images'))}}" alt="">
                  </div>
                  <div class="col-6 col-sm-8 col-lg-9 d-flex flex-column justify-content-center">
                    <div class="row">
                      <div class="col cat-title">
                        {{$content->title}}
                      </div>
                    </div>
                    <div class="row">
                      <div class="col cat-date">
                        {{$content->created_at->format('d/m/Y')}}
                      </div>
                    </div>
                  </div>
                </div>
                @endforeach
              @endforeach
            </div>              
          <div class="col-xs-12 col-md-4">
            <div class="row">
              <div class="col">
                <div class="category-name">
                  Most Reads
                </div>
               </div>  
            </div>  
              
              <div class="row">
                <div class="col-2 col-md-3 col-lg-2">
                    <img src="holder.js/50x50">
                </div>
                <div class="col d-flex flex-column justify-content-center">
                  <div class="row">
                    <div class="col cat-title">
                      Title
                    </div>
                  </div>
                  <div class="row">
                    <div class="col cat-date">
                      Date
                    </div>
                  </div>
                </div>
            </div>
          </div>              
        </div>
      </div>