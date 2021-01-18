<section class="section">
  <div class="container">
    <div class="answers">
      <div>
        <span class="prefix">
          {{ $data['prefix'] }}
        </span>
        <h2 class="headline answers__title">
          {!! $data['title'] !!}
        </h2>
      </div>
      <div class="answers__list">
        @foreach($data['questions'] as $item)
          <a href="{{ $item['link']['url'] }}" class="answers__item">
            <div class="answers__circle">
              ?
            </div>
            <h3 class="title title--small">
              {{ $item['question'] }}
            </h3>
          </a>
        @endforeach
      </div>
    </div>
  </div>
</section>