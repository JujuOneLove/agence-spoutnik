{{--
  Template Name: references
--}}

@extends('layouts.app')
@include('partials.page-header')

<?php
  $entry_img = get_post_thumbnail_id(); 
  $entry_img = wp_get_attachment_image_src($entry_img,'large'); 
?>



@section('content')
<section class>  
  <div class="reference_container">
    <div class="filter_works"> 
        <a href="#">Print</a>
        <p>/</p>
        <a href="#">Web</a>
        <p>/</p>
        <a href="#">Réferencement</a>
    </div>
    <div class="references_works">
    <?php    
        $query = new WP_Query( array( 'post_type' => 'references') );
 
            if ( $query->have_posts() ) : ?>
                <?php while ( $query->have_posts() ) : $query->the_post(); ?>	
                    <div class="entry" style='background-image:url(<?= $entry_img[0] ?>);'>
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