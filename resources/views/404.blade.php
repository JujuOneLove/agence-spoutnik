{{--
  Template Name: 404
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
            <p><?= get_field('accueil_amorce'); ?></p>
            <h1>
                <span><?= get_field('accueil_accroche'); ?></span>
            </h1>
            <p><?= get_field('accueil_texte'); ?></p>
          </div>
        </div>

        <h2>
            <a href="<?php the_field('accueil_bouton'); ?>" class="explore_button"><?php the_field('accueil_button_texte');?></a>
        </h2>

      </div>
  </section>
@endsection
