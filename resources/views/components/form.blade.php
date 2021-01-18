<form id="myform" class="form @if($contact) mb-0 mt-0 @endif" action="https://businessconsultancy.pl/mail.php">
  <div class="form__row">
    <div class="form__field">
      <input placeholder="Imię i nazwisko" name="name" id="name" class="form__input" type="text">
    </div>
    <div class="form__field">
      <input placeholder="Telefon" name="phone" id="phone" class="form__input" type="text">
    </div>
  </div>
  <div class="form__row">
    <div class="form__field">
      <input placeholder="Email" name="mail" id="mail" class="form__input" type="text">
    </div>
    <div class="form__field">
      <input placeholder="Temat" name="subject" id="subject" class="form__input" type="text">
    </div>
  </div>
  <div class="form__field">
    <textarea placeholder="Wiadomość" name="message" class="form__input form__textarea" rows="6"></textarea>
  </div>
  <label class="form__field form__field--checkbox">
    <span class="text form__checkbox-desc">
      {!! get_option_field('check') !!}
    </span>
    <input class="form__checkbox" type="checkbox" checked="checked">
    <span class="form__check"></span>
  </label>
  <div class="form__button">
    <button type="submit" class="button button--submit">
      Wyślij
    </button>
  </div>
</form>
