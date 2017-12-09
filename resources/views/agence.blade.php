{{--
  Template Name: agence
--}}

@extends('layouts.app')

@section('content')
@include('partials.page-header')

  <div class="row">
    <div id="agence_NosMetiersContent" class='small-12 column'>
        <div class="headlineBlack textAlign"> <?php the_field('agence_title');  ?> </div>
        <div class="paddingP textAlign"> <?php the_field('agence_soustitre'); ?> </div>


        <ul class="agence_square row">

          <?php
          // check if the repeater field has rows of data
          if( have_rows('agence_square') ):
            // loop through the rows of data
              while ( have_rows('agence_square') ) : the_row();
                  // display a sub field value
                  $img=get_sub_field('image_square');
                  $text=get_sub_field('square_texte');
                  $lien=get_sub_field('square_lien');
          ?>
            <li class='small-6 medium-4 large-4 column'> 
              <div class="imgContainer effect-bubba">
                <h2><a href='$lien'> <?php echo $text ?> </a></h2>
                <figcaption> 
                </figcaption>
                <!-- <img src="<?php// echo $img['url']; ?>" alt="backgroundImg" /> -->
                <div style="background-image: url(<?php echo $img['url']; ?>)" class="imgSquare"> </div>
              </div>
            </li>
          <?php
                endwhile;
            endif;
          ?>

      </ul>
    </div>
  </div>

  <div class="row expanded align-middle align-center" id="EquipeContent">

      <div class="small-12 medium-12 large-3 column fix_LeftBloc">
          <div class="agence_leftBlock">
              <div class="headlineBlack"> <?php the_field('agence_qui_sommes_nous'); ?> </div>
              <div id="MgBottom"> <?php the_field('agence_sous_titre'); ?> </div>
              <a href="<?php the_field('agence_button'); ?> " class="agence_button">Nous contacter </a>      
          </div>
      </div>

      <div class="small-12 medium-12 large-7 column show-for-large">
        <div class="row align-center">
          <?php
          // check if the repeater field has rows of data
          if( have_rows('agence_cercle_equipe') ):
            // loop through the rows of data
              while ( have_rows('agence_cercle_equipe') ) : the_row();
                  // display a sub field value
                  $cercle=get_sub_field('image_cercle');
                  $prezEquipeNom=get_sub_field('agence_nom');
                  $prezEquipetAG=get_sub_field('agence_tag');
          ?>


              <div class="small-12 medium-6 large-4 column paddingCercle">
                  <!-- <img src="<?php echo $cercle['url']; ?>" alt="EquipePhoto" class="cercle" /> -->
                  <div style="background-image: url(<?php echo $cercle['url']; ?>)" class="cercle">
                      <p id="prezEquipeNom"><span><?php echo $prezEquipeNom ?></span></p>
                      <p id="prezEquipetAG"><?php echo $prezEquipetAG ?></p>
                  </div>
              </div>  

          <?php
              endwhile;
          endif;
          ?>





          </div>

      </div>

  </div>

  <div id="statsContent">
    <div id="grey_Square" class="align-middle">
      <div class="row CenterGreyContent">
          <div class="spoutnikC small-12 medium-12 large-12 columns"> <?php the_field('titre_statistique') ?>  </div>

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

        <div class="agence_statItems small-12 medium-12 large-4 columns">
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