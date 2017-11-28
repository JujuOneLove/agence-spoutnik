<?php
  $urlImage = get_post_thumbnail_id();
  $urlImage = wp_get_attachment_image_src($urlImage,'large');
?>

<section class="page-header" style='background-image:url(<?= $urlImage[0] ?>);'>
  <div class="page-header__titre row">
    <h1 class='small-12 column'><?php the_field('bandeau_amorce'); ?></h1>
    <div class='small-12 column'><span><?php the_field('bandeau_accroche'); ?></span></div>
  </div>
</section>
