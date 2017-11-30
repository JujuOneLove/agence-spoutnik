{{--
  Template Name: rejoignez-nous
--}}

@extends('layouts.app')
@section('content')
@include('partials.page-header')
<section class="rejoignez">
  <div class="rejoigneznous_container">
        <h2 class="title"> <?php the_field(recrutement_titre);  ?> </h2>
        <p> <?php the_field(recrutement_intro); ?> </p>
  </div>

  <?php
    echo do_shortcode('[contact-form-7 id="63" title="formulaire recrutement"]');
  ?>
</section>
@endsection
