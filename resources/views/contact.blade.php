{{--
  Template Name: contact
--}}

@extends('layouts.app')
@section('content')
@include('partials.page-header')
<section class="contact_container">
  <div class="row">
    <div class="small-12 medium-6 large-6 columns">
      <div class="explication">
        <?php the_field('contact-texte'); ?>
      </div>
      <div class="info">
      <?php
        // check if the repeater field has rows of data
        if( have_rows('contact-coordonnees') ):
           // loop through the rows of data
            while ( have_rows('contact-coordonnees') ) : the_row();
                // display a sub field value
                $img=get_sub_field('contact-icon');
                $info=get_sub_field('contact-info');
      ?>
        <img src="<?php echo $img['url']; ?>" alt="Information">
        <p><?php echo $info; ?></p>
      <?php
            endwhile;
        endif;
      ?>
      </div>
    </div>
    <div class="small-12 medium-6 large-6 columns">
      <div class="formulaire">
        <?php
          echo do_shortcode('[contact-form-7 id="86" title="Formulaire de Contact"]');
        ?>
      </div>
    </div>
  </div>
  <div class="map">
    <iframe width="100%" height="500px" frameborder="0" style="border:0" src="https://www.google.com/maps/embed/v1/place?key=AIzaSyBgp8Uwj0-NaCTuC6R1_gKcp5uHlPcyIYs&q=Arras+France" allowfullscreen></iframe>
  </div>

</section>
@endsection
