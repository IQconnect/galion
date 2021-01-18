<section class="section">
  <div class="container">
    <div class="page-contact">
      <h2 class="title mb-0 text--center page-contact__header">
        {{ the_title() }}
      </h2>
      <div class="text text--center section__desc page-contact__desc">
        {!! the_content() !!}
      </div>
      <div class="page-contact__row">
        <div class="page-contact__data">
          <h2 class="title title--medium">
            Dane kontaktowe
          </h2>
          <div class="text page-contact__info">
            <span>
              Telefon:
            </span>
            <a class="link" href="tel:{{ str_replace(' ','', get_option_field('phone')) }}">
              {{ get_option_field("phone") }}
            </a>
            <br>
            <span>
              e-mail:
            </span>
            <a class="link" href="mailto:{{ get_option_field("email") }}">
              {{ get_option_field("email") }}
            </a>
            <div class="page-contact__social">
              <a class="link page-contact__facebook" href="{{ get_option_field("facebook") }}">
                <i class="fab fa-facebook-square"></i>
                facebook
              </a>
              <br>
              <a class="link page-contact__linkedin" href="{{ get_option_field("linkedin") }}">
                <i class="fab fa-linkedin"></i>
                linkedin
              </a>
            </div>
          </div>
        </div>
        <div class="page-contact__form">
          <h2 class="title title--medium">
            Formularz kontaktowy
          </h2>
          <div class="contact__form">
            @include("components.form")
          </div>
        </div>
      </div>
    </div>
  </div>
</section>