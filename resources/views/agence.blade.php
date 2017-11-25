{{--
  Template Name: agence
--}}

@extends('layouts.app')
@include('partials.page-header')

@section('content')
  <div class="agence_container">
    <div id="agence_NosMetiersContent">
        <h2 class="headlineBlack"> <?php the_field('agence_title');  ?> </h2>
        <div class="paddingP"> <?php the_field('agence_soustitre'); ?> </div>


<div class="agence_square">

        <?php
        // check if the repeater field has rows of data
        if( have_rows('agence_square') ):
          // loop through the rows of data
            while ( have_rows('agence_square') ) : the_row();
                // display a sub field value
                $img=get_sub_field('image_square');
                $text=get_sub_field('square_texte');
      ?>

        <div class="imgContainer effect-bubba">
          <img src="<?php echo $img['url']; ?>" alt="backgroundImg">
          <p> <?php echo $text ?> </p>
          <figcaption> 
          </figcaption>
        </div>

        <?php
              endwhile;
          endif;
        ?>
      </div>
    </div>
  </div>

  <div id="EquipeContent">
      <div class="agence_leftBlock">
        <h3 class="headlineBlack"> <?php the_field('agence_qui_sommes_nous'); ?> </h3>
        <div id="MgBottom"> <?php the_field('agence_sous_titre'); ?> </div>
        <a href="<?php the_field('agence_button'); ?> " class="agence_button">Nous contacter </a>
         
      </div>


<!-- afficher les cercles !!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!  -->
  </div>

  <div id="statsContent">
     <div id="grey_Square">
       <h2 class="spoutnikC"> <?php the_field('titre_statistique') ?>  </h2>
        <div class="row CenterGreyContent">

          <?php
          // check if the repeater field has rows of data
          if( have_rows('agence_statistiques_chiffre') ):
            // loop through the rows of data
              while ( have_rows('agence_statistiques_chiffre') ) : the_row();
                  // display a sub field value
                  $imgStats=get_sub_field('image_stats');
                  $chiffreStat=get_sub_field('chiffres_stats');
                  $textStats=get_sub_field('text_stats');
          ?>

        <div class="agence_statItems large-4 columns">
          <img src="<?php echo $imgStats['url']; ?>" alt="Icons">
           <div class="stat_All">
              <p class="NumberStats"> <?php echo $chiffreStat ?> </p>
              <p> <?php echo $textStats ?> </p>
           </div>
        </div>
        <?php
              endwhile;
          endif;
        ?>
       </div>
     </div>
  </div>


  <div id="avis">
    <h2 id="avis_center"> <?php the_field('dernier_avis') ?> </h2>
  </div>

  



@endsection