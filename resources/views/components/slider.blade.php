<div id="carouselExample" class="carousel slide">

<div class="carousel-inner">

@foreach($sliders as $slider)

<div class="carousel-item {{ $loop->first ? 'active' : '' }}">

<img src="{{ asset($slider->imagen) }}" class="d-block w-100">

<div class="carousel-caption">

<h1>{{ $slider->titulo }}</h1>

</div>

</div>

@endforeach

</div>

</div>