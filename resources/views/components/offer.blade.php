<section class="offer" style="background: url({{ $data['bg']['url'] }}) fixed">
  <div class="offer__items">
    <div class="offer__slider">
      @foreach($data['offers'] as $item)
        <div class="offer__slider-cell">
          <a href="{{ $item['link']['url'] }}" class="offer__item">
            <div class="offer__item-bg">
              <img src="{{ $item['image']['url'] }}" alt="{{ $item['title'] }}" />
              <span class="title offer__item-number">
                0{{ $loop->index + 1 }}
              </span>
            </div>
            <div class="offer__item-bar">
              {{ $item['title'] }}
            </div>
          </a>
        </div>
      @endforeach
    </div>
  </div>
  <div class="offer__content">
    <h2 class="title">
      {{ $data['title'] }}
    </h2>
    <div class="subtitle offer__subtitle">
      {{ $data['subtitle'] }}
      <div class="offer__arrows">
        <a href="#" class="offer__prev">
          <i class="fas fa-long-arrow-alt-left"></i>
        </a>
        <a href="#" class="offer__next">
          <i class="fas fa-long-arrow-alt-right"></i>
        </a>
      </div>
    </div>
    <p class="text offer__desc">
      {{ $data['desc'] }}
    </p>
    <div class="offer__arrows--mobile">
      <a href="#" class="offer__prev">
        <i class="fas fa-long-arrow-alt-left"></i>
      </a>
      <a href="#" class="offer__next">
        <i class="fas fa-long-arrow-alt-right"></i>
      </a>
    </div>
  </div>
</section>