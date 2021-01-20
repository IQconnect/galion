{{-- <section>
	<div class="container">
		<div class="text content">
				@while(have_posts()) @php the_post() @endphp
						@php the_content() @endphp
				@endwhile
		</div>
	</div>
</section> --}}

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
