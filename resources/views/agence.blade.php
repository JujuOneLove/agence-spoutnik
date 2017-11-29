{{--
  Template Name: agence
--}}

@extends('layouts.app')

@section('content')
@include('partials.page-header')
  <div class="agence_container row">
    <div id="agence_NosMetiersContent small-12 column">
        <h2 class="headlineBlack textAlign small-12 column"> <?php the_field('agence_title');  ?> </h2>
        <div class="paddingP textAlign small-12 column"> <?php the_field('agence_soustitre'); ?> </div>


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
              <a href='<?=$lien?>' class="imgContainer effect-bubba">
                <img src="<?php echo $img['url']; ?>" alt="backgroundImg">
                <p> <?php echo $text ?> </p>
                <figcaption> 
                </figcaption>
              </a>
            </li>
          <?php
                endwhile;
            endif;
          ?>

      </ul>
    </div>
  </div>

  <div class="row expanded align-middle align-center" id="EquipeContent">

      <div class="small-12 medium-12 large-3 column">
          <div class="agence_leftBlock">
              <h3 class="headlineBlack"> <?php the_field('agence_qui_sommes_nous'); ?> </h3>
              <div id="MgBottom"> <?php the_field('agence_sous_titre'); ?> </div>
              <a href="<?php the_field('agence_button'); ?> " class="agence_button">Nous contacter </a>      
          </div>
      </div>

      <div class="small-12 medium-12 large-7 column">
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


              <div class="small-6 medium-6 large-4 column paddingCercle">
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