{{--
  Template Name: references
--}}

@extends('layouts.app')
@include('partials.page-header')





@section('content')
<section class>  
  <div class="reference_container">
    <div class="filter_works row"> 
        <a href="#" class="small-12 large-3 columns">Print</a>
        
        <a href="#" class="small-12 large-3 columns">Web</a>
      
        <a href="#" class="small-12 large-3  columns">Réferencement</a>
    </div>
    <div class="references_works row">
    <?php    
        $query = new WP_Query( array( 'post_type' => 'references') );
 
            if ( $query->have_posts() ) : ?>
                <?php while ( $query->have_posts() ) : $query->the_post(); ?>	
                <?php
                    $entryimg = get_post_thumbnail_id(); 
                    $entryimg = wp_get_attachment_image_src($entryimg,'large'); 
                ?>
                    <div class="entry large-3 medium-6 small-12 columns" style='background-image:url(<?= $entryimg[0] ?>); background-position:center; background-size:cover;'>
                            <div class="container_symbol info_entry">   
                                <div class= "symbol">+</div> 
                            </div>  

                            <div class="container_title info_entry">
                                <h2 class="title"><?php the_title(); ?> ></h2>
                            </div>   
                    </div>
                <?php endwhile; wp_reset_postdata(); ?>
                <!-- show pagination here -->
            <?php else : ?>
                <!-- show 404 error here -->
            <?php endif; ?>
       
    </div>
  </div>
</section>
@endsection