<?php
  $urlImage = get_post_thumbnail_id();
  $urlImage = wp_get_attachment_image_src($urlImage,'large');
?>


<div class="page-header" style = 'background-image:url(<?= $urlImage[0] ?>);'>
  <h1>{!! App::title() !!}</h1>
</div>
