<section class="contact-bar">
  <div class="container contact-bar__row">
    <h2 class="headline contact-bar__title">
      {!! get_option_field('cbtitle') !!}
    </h2>
    <div class="contact-bar__buttons">
      <a href="{{ get_option_field('cbutton')['url'] }}" class="button button--light" target="_blank">
        {{ get_option_field('cbutton')['title'] }}
      </a>
      <a href="{{ get_option_field("facebook") }}" target="_blank">
        <i class="fab fa-facebook-f contact-bar__icon"></i>
      </a>
      <a href="{{ get_option_field("linkedin") }}" target="_blank">
        <i class="fab fa-linkedin-in contact-bar__icon"></i>
      </a>
    </div>
  </div>
</section>