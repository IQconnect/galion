@if(get_field('hero')['show_hero'])
  @include("partials.hero")
@endif
<section class="section section--content">
  <div class="container">
    <div class="text content-page">
      <h1 class="title title--center">
        {{ the_title() }}
      </h1>
      <div class="content-page__main">
        {{ the_content() }}
      </div>
    </div>
  </div>
</section>
