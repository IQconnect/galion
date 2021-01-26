@php
  $data = get_field('sidebox');
@endphp
<aside class="sidebox__main">
  <div class="sidebox__box">
    <h2 class="sidebox__title">
      {{ $data['title'] }}
    </h2>
   {!! $data['content'] !!}
    @if($data['email'])
      <a href="#" class="button sidebox__button">
        Rezerwacja E-mail
      </a>
    @endif
    @if($data['phone'])
      <a href="#" class="button sidebox__button">
        Zadzwoń
      </a>
    @endif
  </div>
</aside>