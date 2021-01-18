@include("components.hotoffer")
<section>
  <a href="{{ $data['link']['url'] }}" class="video" data-fancybox="video" target="_blank">
    <img class="video__bg" src="{{ $data['image']['url'] }}" alt="{{ $data['video']['title'] }}" />
    <div class="video__content">
      <div class="text video__desc">
        {{ $data['desc'] }}
      </div>
      <img class="video__play" src="@asset("images/play.png")" alt="play" />
    </div>
  </a>
</section>
@include("components.course")
@include("components.offer")
@include("components.contact")