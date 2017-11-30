{{--
  Template Name: references
--}}

@extends('layouts.app')





@section('content')
@include('partials.page-header')

<section class>  
  <div class="reference_container">
        <div class="filter_works row expanded">
        <form action="" method="POST">
            <select name="tag" id="selectTag">
                <input type="checkbox" name= "Print" <?php if($_POST['tag']=='print'){echo 'selected ';} ?>value="tag">
                    <label for="Print">Print</label>
                <input type="checkbox" name="Web" <?php if($_POST['tag']=='web'){echo 'selected ';} ?>value="tag">
                    <label for="Web">Web</label>
                <input type="checkbox" name="Referencement"<?php if($_POST['tag']=='referencement'){echo 'selected ';} ?>value="tag"><label for="Referencement">Referencement</label>
            </select> 
            <input type="submit">
        </form>
            
        <?php $i = 0; if ( $the_query->have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post();
        $src = get_the_post_thumbnail_url('', 'large');
        $x ='';

        $terms = get_field('references_filtre');
        foreach ( $terms as $term ) {$x .= ' tag-'.$term;}
        //$x = the_terms( 0, 'realisation' );

        $o = '<div class="grid-item page-projets__this tag'.$x.'" id="projet'.$i.'" style="background-image:url('.$src.');height:'.get_field('taille').'px;"><h2><a href="'.get_the_permalink().'">'.get_the_title().'</a></h2><div>'.get_the_excerpt().'</div></div>';
        if(isset($_POST['tag'])){
        if(stristr($x, $_POST['tag']) === FALSE){} else{
        echo $o;
        }
        } else{
        echo $o;
        }
        ?>
        </div>
      

    </div>







<?php $i++; endwhile; endif; ?>
         
        <a href="#" class="small-12 large-3 columns">Print</a>
        
        <a href="#" class="small-12 large-3 columns">Web</a>
      
        <a href="#" class="small-12 large-3  columns">Réferencement</a>
        
    </div>
    <div class="references_works row expanded">
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
                                <div class="symbol">+</div> 
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