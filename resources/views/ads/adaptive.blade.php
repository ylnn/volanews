@isset($adSections[$section])
@php
    $ad = $adSections[$section]
@endphp

@if($ad->image_or_js == 1)
<div class="row mb-4">
    <div class="col d-flex justify-content-center">
        <img class="img-fluid" src="{{asset('storage/'.$ad->image)}}" alt="">
    </div>
</div>
@else
    {!! $ad->js !!}
@endif
@endif