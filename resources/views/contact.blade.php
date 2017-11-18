{{--
  Template Name: contact
--}}

@extends('layouts.app')

<section class="block">
<div class="container">
  <p><?php echo get_field('accueil_amorce'); ?></p>
  <h1>
    <?php echo get_field('accueil_accroche'); ?>
  </h1>
  <p><?php echo get_field('accueil_texte'); ?></p>
</div>
</section>
