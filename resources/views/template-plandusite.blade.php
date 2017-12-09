{{--  
  Template Name: plan du site
--}}
@extends('layouts.app')



@section('content')
@include('partials.page-header')
  <section>
    <div class='row align-center'>
      <div class='small-12 medium-10 large-8'>
      <br><br>
        <?php echo do_shortcode('[simple-sitemap]');?>
      <br><br>
      </div>
    </div>
  </section>
@endsection
