<section class="section team">
  <div class="team__content">
    <div class="container">
      <span class="prefix">
        {{ $data['prefix'] }}
      </span>
      <h2 class="headline">
        {!! $data['title'] !!}
      </h2>
      <div class="text team__text">
        {!! $data['text'] !!}
        <a class="link link--arrows" href="{{ $data['link']['url'] }}">
          {{ $data['link']['title'] }}
        </a>
      </div>
    </div>
  </div>
</section>