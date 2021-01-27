<section class="section">
  <div class="container">
    <div class="text-img">
      @foreach ($data['textimg'] as $item)
        <div class="text-img__item">
          <div class="text-img__content">
            @if($item['title'])
              <h2 class="title text-img__title">
                {{ $item['title'] }}
              </h2>
            @endif
            @if($item['subtitle'])
              <span class="subtitle text-img__subtitle">
                {{ $item['subtitle'] }}
              </span>
            @endif
            @if($item['desc'])
              <p class="text text-img__text">
                {!! $item['desc'] !!}
              </p>
            @endif
            <div>
              @if($item['link'])
                <a class="button text-img__button" href="{{ $item['link']['url'] }}">
                  {{ $item['link']['title'] }}
                </a>
              @endif
              @if($item['files'])
                @foreach($item['files'] as $file)
                  <a class="button button--dark text-img__button text-img__button--file" href="{{ $file['file']['url'] }}">
                    {{ $file['name'] }}
                  </a>
                @endforeach
              @endif
            </div>
          </div>
          <div class="text-img__image">
            <img src="{{ $item['image']['url'] }}" alt="{{ $item['title'] }}">
          </div>
        </div>
      @endforeach
    </div>
  </div>
</section>