{{--
  Template Name: site-vitrine
--}}

@extends('layouts.app')

@section('content')
@include('partials.page-header')

<div class="row align-center">
  <div class='small-12 column'>
    <h2><?php the_field('titre_site_vitrine'); ?> </h2>
    <p><?php the_field('sous_titre_site_vitrine'); ?></p>
  </div>
</div>

@endsection