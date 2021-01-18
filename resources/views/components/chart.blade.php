<section class="section">
  <div class="container">
    <div class="chart">
      <div class="chart__image">
        <img src="@asset("images/photo2.jpg")" alt="zdjęcie" />
      </div>
      <div class="chart__content">
        <div class="chart__desc">
          <span class="prefix">
            {{ $data['prefix'] }}
          </span>
          <h2 class="headline">
            {!! $data['title'] !!}
          </h2>
        </div>
        <div class="chart__panel">
          @foreach($data['chart'] as $item)
            <div class="chart__item">
              <div class="chart__info">
                <h3 class="title title--small">
                  {{ $item['title'] }}
                </h3>
                <span class="title title--small">
                  {{ $item['precent'] }}
                </span>
              </div>
              <div class="chart__bar">
                <div class="chart__bar-color wow chart__bar-animation" style="width: {{ $item['precent'] }}">
                </div>
              </div>
            </div>
          @endforeach
        </div>
      </div>
    </div>
  </div>
</section>