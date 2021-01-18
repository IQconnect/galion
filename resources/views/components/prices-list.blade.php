<h2 class="title is-black">
  {{ get_option_field('prices_title') }}
</h2>

<div class="prices-list">
  <div class="prices-list__item">
    <span class="title title--smedium is-secondary">
      {{ get_option_field('ptitle1') }}
    </span>
    <p class="text text--small prices-list__desc">
      {!! get_option_field('pdesc1') !!}
    </p>
  </div>
  <div class="prices-list__item">
    <span class="title title--smedium is-secondary">
      {{ get_option_field('ptitle2') }}
    </span>
    <p class="text text--small prices-list__desc">
      {!! get_option_field('pdesc2') !!}
    </p>
  </div>
  <div class="prices-list__item">
    <span class="title title--smedium is-secondary">
      {{ get_option_field('ptitle3') }}
    </span>
    <p class="text text--small prices-list__desc">
      {!! get_option_field('pdesc3') !!}
    </p>
  </div>
  <h2 class="titlt title--small">
    Zawartość pakietów:
  </h2>
  <ul>
  @foreach(get_option_field('prices_body') as $item)
    <li>
      {{ $item['title'] }}
    </li>
  @endforeach
  </ul>
</div>
