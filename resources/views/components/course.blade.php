<section class="section">
  <div class="course__arrows">
    <a href="#" class="course__prev">
      <i class="fas fa-long-arrow-alt-left"></i>
    </a>
    <a href="#" class="course__next">
      <i class="fas fa-long-arrow-alt-right"></i>
    </a>
  </div>
  <div class="course__slider">
    @foreach($data['offers'] as $item)
      <div class="course">
        <div class="course__left">
          <div class="course__content">
            <h2 class="title">
              {{ $data['title'] }}
            </h2>
            <div class="subtitle course__subtitle">
              {{ $item['title'] }}
            </div>
            <p class="text course__desc">
              {{ $item['desc'] }}
            </p>
          </div>
          <div class="course__gallery">
            @foreach($item['gallery'] as $img)
              <div class="course__gallery-img">
                <img src="{{ $img['url'] }}" alt="{{ $item['title'] }}">
              </div>
            @endforeach
          </div>
        </div>
        <div class="course__right">
          <img class="course__image" src="{{ $item['image']['url'] }}" alt="{{ $item['title'] }}">
        </div>
      </div>
    @endforeach
  </div>
</section>