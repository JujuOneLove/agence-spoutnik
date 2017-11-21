<nav class="primary-nav">

  <div class="primary-nav__logo">
    <a href="{{ get_theme_file_uri() }}/dist/images/logo.svg">
      LOGO
    </a>
  </div>

<?php
  $args = array(
    'menu'            => 'main-menu',
    'container'       => false,
    'container_class' => false,
    'container_id'    => false,
    'menu_class'      => 'primary-nav__list',//animsition-link
    'menu_id'         => 'js--primary-nav',
    'depth'           => 3
  );
  wp_nav_menu($args);
?>
</nav>
