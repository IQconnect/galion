@extends('layouts.app')

@section('content')
<section class="section">
  <div class="container">
    {!! do_shortcode('[flexy_breadcrumb]') !!}
    @if (!have_posts())
    <div class="alert alert-warning">
        {{ __('Sorry, no results were found.', 'sage') }}
    </div>
    {!! get_search_form(false) !!}
    @endif
    <h2 class="title">
      {{ single_cat_title() }}
    </h2>
    <div class="blog blog--all">
      @while (have_posts()) @php the_post() @endphp
        @include('blog.posts')
      @endwhile
    </div>
  </div>
</section>
@endsection
