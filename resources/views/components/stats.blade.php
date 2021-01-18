<section class="section">
  <div class="container stats">
    <h2>
      <span class="stats__years">
        {!! $data['title'] !!}
      </span>
      <span class="headline">
        {!! $data['subtitle'] !!}
      </span>
    </h2>
    <p class="text stats__desc">
      {!! $data['desc'] !!}
    </p>
    <div class="stats__items">
      @foreach($data['stats'] as $item)
        <div class="stats__item">
          <img src="{{ $item['icon']['url'] }}" alt="{{ $item['title'] }}" />
          <div class="stats__count">
            <span class="headline purecounter" data-purecounter-start="0" data-purecounter-end="{{ $item['amount'] }}" data-purecounter-duration="1">
              {{ $item['amount'] }}
            </span>
            <span class="title title--small">
              {{ $item['title'] }}
            </span>
          </div>
        </div>
      @endforeach
    </div>
  </div>
</section>