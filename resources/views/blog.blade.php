{{--
  Template Name: blog
--}}

@extends('layouts.app')

@section('content')
@include('partials.page-header')
<section class="block">
  <div class="container">
    <?php the_title();?>
  </div>
</section>
@endsection