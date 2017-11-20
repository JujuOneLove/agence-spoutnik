{{--  
  Template Name: Home
--}}
@extends('layouts.app')



<?php
$urlImage = get_post_thumbnail_id(); 
$urlImage = wp_get_attachment_image_src($urlImage,'large'); 
?>


<section class="backgroundhome" style='background-image:url(<?= $urlImage[0] ?>);'>
 @section('content')
    <div class="container_texte"> 
      <div class="texte_accueil">
        <p><?php echo get_field('accueil_amorce'); ?></p> 
        <h1>
            <span><?php echo get_field('accueil_accroche'); ?></span>
        </h1>
        <p><?php echo get_field('accueil_texte'); ?></p>
      </div>
    </div>
</section>
@endsection
