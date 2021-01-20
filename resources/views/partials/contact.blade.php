<section class="contact">
  <div class="contact__content">
    <h2 class="title">
      Kontakt
    </h2>
    <div class="subtitle contact__subtitle">
      {!! get_option_field("desc") !!}
    </div>
    <div class="contact__row">
      <div class="text contact__data">
        {!! get_option_field("address") !!}
      </div>
      <div class="text contact__data">
        <a href="mailto:{{ get_option_field("email") }}" class="link">
          {{ get_option_field("email") }}
        </a>
        <br>
        <a href="tel:{{ str_replace(' ','', get_option_field('phone')) }}">
          {{ get_option_field("phone") }}
        </a>
        <br>
        <a href="tel:{{ str_replace(' ','', get_option_field('phone2')) }}">
          {{ get_option_field("phone2") }}
        </a>
      </div>
    </div>
  </div>
  <div class="contact__map">
    {!! do_shortcode('[google_map_easy id="1"]') !!}
  </div>
</section>
<section class="newsletter">
  <img class="newsletter__bg" src="{{ get_option_field("newsletter_bg")['url'] }}" alt="{{ get_option_field("newsletter_title") }}">
  <div class="newsletter__content">
    <h2 class="newsletter__title">
      {{ get_option_field("newsletter_title") }}
    </h2>
    <p class="text newsletter__text">
      {!! get_option_field("newsletter_desc") !!}
    </p>
    <form class="newsletter__form">
      <input class="newsletter__input" type="text" placeholder="Adres email">
      <button class="newsletter__button">
        <i class="fas fa-share"></i>
      </button>
    </form>
  </div>
</section>