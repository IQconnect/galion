<section class="section section--content">
  <div class="container">
    <article class="text content-page" @php post_class() @endphp>
      <h1 class="title">
        {{ get_the_title() }}
      </h1>
      <div class="content-page__main">
        {!! the_content() !!}
      </div>
    </article>
    {!! do_shortcode('[wpdiscuz_comments]') !!}
  </div>
</section>