<section class="section">
  <div class="container">
    <span class="prefix">
      {{ $data['prefix'] }}
    </span>
    <h2 class="headline">
      {!! $data['title'] !!}
    </h2>
    <div class="blog">
      @foreach(blog() as $post)
        <a href="{{ get_permalink($post->ID) }}" class="blog__item">
          <div class="blog__image">
            {!! get_the_post_thumbnail($post->ID, 'full', array('alt'=> $post->post_title)) !!}
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
                @foreach(get_the_tags($post->ID) as $tag)
                  #{{ $tag->name }}
                @endforeach
              @endif
            </span>
            <h3 class="title title--medium blog__title">
              {{ $post->post_title }}
            </h3>
            <p class="text text--small">
              {{ $post->post_excerpt }}
            </p>
          </div>
        </a>
      @endforeach
    </div>
  </div>
</section>