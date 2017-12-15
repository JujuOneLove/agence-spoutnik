<?php
  $menu_name = 'main_nav';
  $locations = get_nav_menu_locations();
  $menu = wp_get_nav_menu_object("main_nav");
  $menuitems = wp_get_nav_menu_items( $menu->term_id, array( 'order' => 'DESC' ) );
?>

@if(!is_front_page())

<nav class="{{$menu_name}}">

<div class="title-bar responsive">
  <button class="menu-icon" type="button" id="toggle-nav"></button>
</div>

  <ul class="dropdown menu" data-dropdown-menu id="navMain">
    @php ($count = 0)
    @php ($submenu = false)
    @php ($i = 0)
      @foreach($menuitems as $item)
        @php ($link = $item->url)
        @php ($title = $item->title)
        @if ( !$item->menu_item_parent )
            @php ($parent_id = $item->ID)
    <li class="item item-text">
        <a href="{{$item->url}}" class="menu-title">
            {{$item->title}}
        </a>
        @endif
        @if($i == 1)
        <li class="item item-img">
            <a href="https://agence-ariane.fr" class="menu-img">
                <img src="{{ get_theme_file_uri() }}/dist/images/logo-ariane_white.svg" alt="logo de l'agence web ariane">
            </a>
        </li>

        @endif
        @if ( $parent_id == $item->menu_item_parent )
            @if(!$submenu)
              @php ($submenu = true)
        <ul class="menu">
            @endif

            <li class="item">
                <a href="<?= $link ?>" class="menu-title"><?= $title ?></a>
            </li>

              @if ($menuitems[ $count + 1 ]->menu_item_parent != $parent_id && $submenu)
        </ul>
              @php ($submenu = false)
            @endif
        @endif

      @if ($menuitems[ $count + 1 ]->menu_item_parent != $parent_id)
        @php ($i++)
    </li>
      @php ($submenu = false)
      @endif

    @php($count++)
    @endforeach

  </ul>
</nav>
@endif
