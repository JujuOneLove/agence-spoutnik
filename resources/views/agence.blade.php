{{--
  Template Name: agence
--}}

@extends('layouts.app')

@section('content')
  <div class="agence_container">
    <div id="agence_NosMetiersContent">
        <h2> <?php the_field(agence_title);  ?> </h2>
        <p> <?php the_field(agence_soustitre); ?> </p>

        <?php
        // check if the repeater field has rows of data
        if( have_rows('agence_square') ):
          // loop through the rows of data
            while ( have_rows('agence_square') ) : the_row();
                // display a sub field value
                $img=get_sub_field('image_square');
                $text=get_sub_field('square_texte');
      ?>

      <div class="agence_square">
        <img src="<?php echo $img['url']; ?>" alt="backgroundImg">
        <p> <?php echo $text ?> </p>
      </div>

      <?php
            endwhile;
        endif;
      ?>
    </div>
  </div>

  <div id="EquipeContent">
      <div class="agence_leftBlock">
        <h3> <?php the_field(agence_qui_sommes_nous); ?> </h3>
        <p> <?php the_field(agence_sous_titre); ?> </p>
      </div>


<!-- afficher les cercles !!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!  -->
  </div>

  <div id="statsContent">
      <h2> <?php the_field(titre_statistique) ?>  </h2>

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

    <div class="agence_statItems">
      <img src="<?php echo $imgStats['url']; ?>" alt="Icons">
      <p> <?php echo $chiffreStat ?> </p>
      <p> <?php echo $textStats ?> </p>
    </div>

    <?php
          endwhile;
      endif;
    ?>
  </div>


  <div id="avis">
      <h2> <?php the_field(titre_avis) ?>  </h2>
  </div>

  



@endsection