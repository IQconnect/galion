<section>
  <div class="services">
    <div class="services__content">
      <div>
        <span class="prefix">
          {{ $data['prefix'] }}
        </span>
        <h2 class="title">
          {!! $data['title'] !!}
        </h2>
        <p class="text services__desc">
          {!! $data['desc'] !!}
        </p>
        <a class="button" href="{{ $data['link']['url'] }}">
          {{ $data['link']['title'] }}
        </a>
      </div>
    </div>
    @foreach($data['services'] as $item)
      <div class="services__item">
        <img class="services__image" src="{{ $item['image']['url'] }}" alt="{{  $item['title']  }}">
        <div class="services__cover">
          <h3 class="title title--medium">
            {!! $item['title'] !!}
          </h3>
        </div>
        <div class="services__hover">
          <h3 class="title title--medium pb">
            {!! $item['title'] !!}
          </h3>
          <a class="button button--text-color" href="{{ $item['link']['url'] }}">
            Czytaj więcej
          </a>
        </div>
      </div>
    @endforeach
  </div>
</section>