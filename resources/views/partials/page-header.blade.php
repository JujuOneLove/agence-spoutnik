<?php
  $urlImage = get_post_thumbnail_id();
  $urlImage = wp_get_attachment_image_src($urlImage,'large');
?>
<div class="page-header" style='background-image:url(<?= $urlImage[0] ?>);'>
  <div class="titlePage">
    <h3 id="amorce"><?php the_field('bandeau_amorce'); ?></h3>
    <h3><span><?php the_field('bandeau_accroche'); ?></span></h3>
  </div>
</div>
