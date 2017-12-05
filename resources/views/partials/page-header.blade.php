<?php
  $urlImage = get_post_thumbnail_id();
  $urlImage = wp_get_attachment_image_src($urlImage,'large');

  if(!$urlImage){
    $urlImage[0] = get_stylesheet_directory_uri().'/assets/images/bg-default.jpg';
    $h1Text = "H1 par défault";
    $accrocheText = "Accroche par défault";
  }
?>

<section class="page-header row expanded small-collapse" style='background-image:url(<?= $urlImage[0] ?>);'>
  <div class="page-header__titre small-12 column">
    <div class='row'>
      <h1 class='small-12 column'><?= get_field('bandeau_amorce'); ?></h1>
      <div class='small-12 column'><span><?= get_field('bandeau_accroche'); ?></span></div>
    </div>
  </div>
</section>
