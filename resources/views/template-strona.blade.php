{{--
  Template Name: Strona
--}}

@extends('layouts.app')

  @section('content')

  <section class="section">
    <div class="container">
      <div class="text content-page">
        {!! do_shortcode('[flexy_breadcrumb]') !!}
        <h1 class="title">
          {{ the_title() }}
        </h1>
        <div class="content-page__main">
          {{ the_content() }}
        </div>
      </div>
    </div>
  </section>

@endsection