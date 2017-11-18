<?php
  $menu_name = 'main-menu';
  $locations = get_nav_menu_locations();
  $menu = wp_get_nav_menu_object( $locations[ $menu_name ] );
  $menuitems = wp_get_nav_menu_items( $menu->term_id, array( 'order' => 'DESC' ) );
  var_dump($locations)
?>

<nav class="{{ $menu_name }}">
    <ul class="menu">
        @foreach ($menuitems as $nav)
            <li class="link"> <a href="{{ $nav->url }}">{{ $nav->title }}</a></li>
        @endforeach
    </ul>
</nav>