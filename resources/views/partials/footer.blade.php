<footer class="footer">
  <div class="footer__content">
    <a href="#" class="footer__logo">
      <img src="{{ get_option_field('logo2')['url'] }}" alt="{{ get_option_field('logo2')['alt'] }}">
    </a>
    <hr class="footer__hr" />
    <div class="footer__row">
      <div class="text footer__copyright">
        {{ get_option_field("copyright") }}
      </div>
      <ul class="footer__nav">
        @foreach(get_option_field("footernav") as $item)
          <li>
            <a href="{{ $item['link']['url'] }}">
              {{ $item['link']['title'] }}
            </a>
          </li>
        @endforeach
      </ul>
    </div>
  </div>
</footer>
