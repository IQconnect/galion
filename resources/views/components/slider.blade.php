<section class="section section--center">
  <div class="container">
    <span class="prefix prefix--center">
      {{ $data['prefix'] }}
    </span>
    <h2 class="title">
      {!! $data['title'] !!}
      <i class="slider__icon fas fa-quote-left"></i>
    </h2>
    <div class="main-carousel">
      @foreach($data['slider'] as $item)
        <div class="slider carousel-cell">
          <div class="container">
            <div class="slider__content">
              <div class="text text--small slider__quotation">
                {!! $item['opinion'] !!}
              </div>
              <div class="slider__author">
                <span class="title title--smedium is-secondary pb">
                  {{ $item['author'] }}
                </span>
                <span class="text text--small is-bold">
                  {{ $item['desc'] }}
                </span>
              </div>
            </div>
          </div>
        </div>
      @endforeach
    </div>
  </div>
</section>