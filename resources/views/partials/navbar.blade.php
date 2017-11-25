<?php
  $menu_name = 'main_nav';
  $locations = get_nav_menu_locations();
  $menu = wp_get_nav_menu_object("main_nav");
  //$menu = wp_get_nav_menu_object( $locations[ $menu_name ] );
  $menuitems = wp_get_nav_menu_items( $menu->term_id, array( 'order' => 'DESC' ) );
?>
  <nav class="{{$menu_name}}">
    {{--  <div class="primary-nav__logo">
      <a href="{{ get_theme_file_uri() }}/dist/images/logo.svg">
        LOGO
      </a>
    </div>  --}}
    <ul>
      @foreach( $menuitems as $item )

      <li class="item">
        <a href="{{$item->url}}" class="title">
          {{$item->title}}
        </a>
      </li>

      @endforeach
    </ul>
  </nav>
