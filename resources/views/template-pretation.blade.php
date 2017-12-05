{{--
  Template Name: template-prestation
--}}

@extends('layouts.app')

@section('content')
@include('partials.page-header')

<section class='contenu-prestation'>
  <?php $i=0;if( have_rows('repeater_single_prestation') ): while ( have_rows('repeater_single_prestation') ) : the_row();?>
  <?php $img = get_sub_field('picto');?>

    <div class="row aling-middle <?php if($i%2!=0){ echo 'reverse';} ?>">

      <div class='small-12 medium-5 large-4 contenu-prestation__image flex-container align-middle align-center'>
        <img class='style-svg' src="<?=$img['url']?>"/>
      </div>

      <div class='small-12 medium-7 large-8 contenu-prestation__texte'>
        <?php if(get_sub_field('titre_h2')){?><h2><?= get_sub_field('titre_h2');?></h2><?php }?><?= get_sub_field('texte');?>
      </div>

    </div>
  <?php $i++; endwhile; endif;?>
</section>

@endsection