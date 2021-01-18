<section class="section">
  <div class="container">
    <i class="fas fa-play container__icon1"></i>
    <i class="fas fa-plus container__icon2"></i>
    <i class="fas fa-dot-circle container__icon3"></i>
    <h2 class="title">
      {!! $data['title'] !!}
    </h2>
    <span class="subtitle">
      {{ $data['subtitle'] }}
    </span>
    <span class="sign">
      {{ $data['sign'] }}
    </span>
    <div class="top">
      @foreach($data['boxes'] as $item)
        <a href="{{ $item['link']['url'] }}" class="top__box">
          <img src="{{ $item['image']['url'] }}" alt="{{ $item['title'] }}" class="top__image"/>
          <div class="top__bar">
            <h3 class="title title--small is-regular">
              <i class="fas fa-angle-double-right"></i>
              {{ $item['title'] }}
            </h3>
          </div>
        </a>
      @endforeach
    </div>
  </div>
</section>