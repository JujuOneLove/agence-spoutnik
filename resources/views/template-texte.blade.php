{{--  
  Template Name: texte
--}}
@extends('layouts.app')



@section('content')
@include('partials.page-header')
  <section>
    <div class='row align-center'>
      <div class='small-12 medium-10 large-8'>

<br><br>
        <?php if (have_posts()) : ?>
          <?php while (have_posts()) : the_post(); ?>
            <?php the_content(); ?>
          <?php endwhile; ?>
        <?php endif; ?>

<br><br>
      </div>
    </div>
  </section>
@endsection
