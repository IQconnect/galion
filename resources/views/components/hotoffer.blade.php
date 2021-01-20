<section class="section">
  <div class="container hotoffer">
    <div class="hotoffer__info">
      <div class="hotoffer__info-content">
        <h2 class="title title--center">
          {{ $data['title'] }}
        </h2>
        <p class="text hotoffer__info-desc">
          {{ $data['desc'] }}
        </p>
        <a class="button" href="{{ $data['link']['url'] }}">
          {{ $data['link']['title'] }}
        </a>
      </div>
      <div class="hotoffer__info-image">
        <img src="{{ $data['image']['url'] }}" alt="{{ $data['title'] }}">
      </div>
    </div>
    <div class="hotoffer__items">
      <a href="#" class="hotoffer__prev">
        <i class="fas fa-long-arrow-alt-left"></i>
      </a>
      <a href="#" class="hotoffer__next">
        <i class="fas fa-long-arrow-alt-right"></i>
      </a>
      <div class="hotoffer__slider">
        @foreach($data['offers'] as $item)
          <div class="hotoffer__slider-cell">
            <a href="#" class="hotoffer__item">
              <div class="hotoffer__item-cover">
                <h3 class="hotoffer__item-title">
                  {{ $item['title'] }}
                </h3>
                <div class="button hotoffer__item-button">
                  Czytaj więcej
                </div>
              </div>
              <img class="hotoffer__item-bg" src="{{ $item['image']['url'] }}" alt="{{ $item['title'] }}" />
            </a>
          </div>
        @endforeach
      </div>
    </div>
  </div>
</section>