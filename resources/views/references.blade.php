{{--
  Template Name: references
--}}

@extends('layouts.app')

@section('content')
@include('partials.page-header')

<section>  
  <div class="reference_container">
    <div class="filter_works row expanded">

        <h2 class="small-12 large-3 columns">Print</h2>
        <h2 class="small-12 large-3 columns">Web</h2>   
        <h2 class="small-12 large-3  columns">Réferencement</h2>

    
<form action="" method="POST" class='formtag'>
    <select name="tag" id="selectTag">
    <option <?php if($_POST['tag']=='all'){echo 'selected ';} ?>value="tag">All</option>
    <option <?php if($_POST['tag']=='print'){echo 'selected ';} ?>value="experience-pro">print</option>
    <option <?php if($_POST['tag']=='web'){echo 'selected ';} ?>value="webs">web</option>
    <option <?php if($_POST['tag']=='referencement'){echo 'selected ';} ?>value="affiches">referencement</option>
    </select> 
</form>
    </div>
    
    
    <div class="references_works row expanded">
    <?php    
        $query = new WP_Query( array( 'post_type' => 'references') );
    ?>        

       
 
    <?php 
        if ( $query->have_posts() ) : ?>
                <?php while ( $query->have_posts() ) : $query->the_post(); ?>	
                <?php
                    $entryimg = get_post_thumbnail_id(); 
                    $entryimg = wp_get_attachment_image_src($entryimg,'large'); 
                    $x = " ";
                    $terms = get_field('filtre');
                    foreach ( $terms as $term ){$x .= ' tag-'.$term;}
                ?>
        
                    <div class="entry large-3 medium-6 small-12 columns <?= $x ?>" style='background-image:url(<?= $entryimg[0] ?>); background-position:center; background-size:cover;'>
                            <div class="container_symbol info_entry">   
                                <div class="symbol">+</div> 
                            </div>  

                            <div class="container_title info_entry">
                                <h2 class="title"><?php the_title(); ?></h2>
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