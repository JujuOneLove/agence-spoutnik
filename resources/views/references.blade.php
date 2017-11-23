{{--
  Template Name: references
--}}

@extends('layouts.app')
@include('partials.page-header')



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
                    <div class="entry">
                        <h2 class="title"><?php the_title(); ?></h2>

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