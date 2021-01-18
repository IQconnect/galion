<article>
  <a href="{{ get_permalink() }}" class="blog__item">
    <div class="blog__image">
        {{-- <img src="https://placeimg.com/640/480/nature" alt="cover"> --}}
        {!! get_the_post_thumbnail('', 'full', array('alt'=> 'blog')) !!}
        <div class="blog__cover">
        <div>
            <i class="fas fa-eye blog__icon"></i>
            <span class="text text--medium is-light">
            Czytaj więcej
            </span>
        </div>
        </div>
    </div>
    <div class="blog__content">
        <span class="text blog__tags">
          @if(get_the_tags())
            @foreach(get_the_tags() as $tag)
              #{{ $tag->name }}
            @endforeach
          @endif
        </span>
        <h3 class="title title--medium blog__title">
          {{ the_title() }}
        </h3>
        <p class="text text--small">
          {{ esc_html(get_the_excerpt()) }}
        </p>
    </div>
  </a>
</article>