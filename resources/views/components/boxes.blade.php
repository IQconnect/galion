<section class="section section--center">
  <div class="container">
    <span class="prefix prefix--center">
      {{ $data['prefix'] }}
    </span>
    <h2 class="title">
      {!! $data['title'] !!}
    </h2>
    <p class="text section__desc">
      {!! $data['desc'] !!}
    </p>
    <span class="subtitle is-secondary">
      {!! $data['title2'] !!}
    </span>
    <div class="boxes">
      @foreach($data['boxes'] as $item)
        <a href="{{ $item['link']['url'] }}" class="boxes__item">
          <h3 class="text text--medium">
           {!! $item['title'] !!}
          </h3>
        </a>
      @endforeach
    </div>
  </div>
</section>