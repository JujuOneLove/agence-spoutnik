{{--  
  Template Name: Home
--}}
@extends('layouts.app')

<?php
  $urlImage = get_post_thumbnail_id(); 
  $urlImage = wp_get_attachment_image_src($urlImage,'large'); 
?>


@section('content')
  <section class="backgroundhome" style='background-image:url(<?= $urlImage[0] ?>);'>
      <div class="container_page">
        <div class="container_texte"> 
          <div class="texte_accueil">
            <p><?php echo get_field('accueil_amorce'); ?></p> 
            <h1>
                <span><?php echo get_field('accueil_accroche'); ?></span>
            </h1>
            <h2><?php echo get_field('accueil_texte'); ?></h2>
          </div>
        </div>
        <a href="<?php the_field('agence_button'); ?>" class="explore_button">Explorer</a>
      </div>
  </section>
@endsection
