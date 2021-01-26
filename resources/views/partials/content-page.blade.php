@php
    $hero = get_field('hero')['show_hero'];
    $sidebox = get_field('sidebox')['show_sidebox']
@endphp
@if($hero)
  @include("partials.hero")
@endif
<section class="section section--content">
  <div class="container sidebox">
    <div class="text content-page @if($sidebox) sidebox__content @endif">
      @if(!get_field('hero')['title'])
        <h1 class="title title--center">
          {{ the_title() }}
        </h1>
      @endif
      <div>
        {{ the_content() }}
      </div>
    </div>
    @if($sidebox)
      @include("partials.sidebox")
    @endif
  </div>
</section>
