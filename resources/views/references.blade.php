{{--
  Template Name: references
--}}

@extends('layouts.app')

@section('content')
@include('partials.page-header')

<section>  
  <div class="reference_container">
    <div class="filter_works row expanded align-center">

        <h2 class="small-12 large-3 columns <?php if(!isset($_GET['real'])){echo 'active';} ?>"><a href='<?= get_permalink()?>'>Toutes nos références</a></h2>
        <h2 class="small-12 large-3 columns <?php if($_GET['real']=='print'){echo 'active';} ?>"><a href='<?= get_permalink()?>?real=print'>Identité Graphique</a></h2>
        <h2 class="small-12 large-3 columns <?php if($_GET['real']=='web'){echo 'active';} ?>"><a href='<?= get_permalink()?>?real=web'>Réalisation Web</a></h2>   
        <h2 class="small-12 large-3 columns <?php if($_GET['real']=='referencement'){echo 'active';} ?>"><a href='<?= get_permalink()?>?real=referencement'>Réferencement</a></h2>

    
    </div>
    
    
    <?php    
        $query = new WP_Query( array( 'post_type' => 'references') );
    ?>        

    <div>      
    <ul class='references_works row expanded'>
   
        
        <?php 
        if ( $query->have_posts() ) : ?>
        <?php while ( $query->have_posts() ) : $query->the_post(); ?>	
        <?php
            $entryimg = get_post_thumbnail_id(); 
            $entryimg = wp_get_attachment_image_src($entryimg,'medium'); 
            $x = " ";
            $terms = get_field('filtre');
            foreach ( $terms as $term ){$x .= ' tag-'.$term;}


            $o = '<li class="entry large-3 medium-6 small-12 columns '.$x.'" style="background-image:url('.$entryimg[0].'); background-position:center; background-size:cover;">
            <div class="container_symbol info_entry"><div class="symbol">+</div> </div>
            
            <div class="container_title info_entry"><h3 class="title"><a href="'.get_permalink().'">'.get_the_title().'</a></h3></div></li>';

            if(isset($_GET['real'])){
                if(stristr($x, $_GET['real']) === FALSE){} else{
                    echo $o;
                }
            } else{
                echo $o;
            } ?>


            
        <?php endwhile; wp_reset_postdata(); ?>
    <?php endif; ?>
    </ul>
       

  </div>
</section>
@endsection