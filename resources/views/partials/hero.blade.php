@php
  $data = get_field('hero');
@endphp
<section class="hero @if($data['title']) hero--dark @endif @if($data['small']) hero--small @endif">
  <div class="container">
    @if($data['reservation'])
      <div class="hero__content bg-hotel-reservation">
      </div>
    @endif
    @if($data['title'])
      <div class="hero__content">
        <h2 class="hero__title">
          {{ $data['title'] }}
        </h2>
      </div>
    @endif
  </div>
  @if($data['type'] == 'video')
    <video class="hero__bg" playsinline="" autoplay="" muted="" loop="" poster="">
      <source src="{{ $data['bg']['url'] }}" type="video/mp4">
    </video>
  @else
    <img class="hero__bg" src="{{ $data['bg']['url'] }}" alt="{{ $data['bg']['alt'] }}">
  @endif
</section>