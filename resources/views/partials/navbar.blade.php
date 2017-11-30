<?php
  $menu_name = 'main_nav';
  $locations = get_nav_menu_locations();
  $menu = wp_get_nav_menu_object("main_nav");
  $menuitems = wp_get_nav_menu_items( $menu->term_id, array( 'order' => 'DESC' ) );
?>

@if(!is_front_page())
<nav class="{{$menu_name}}">
  <ul class="dropdown menu" data-dropdown-menu>
    @php ($count = 0)
    @php ($submenu = false)
      @foreach($menuitems as $item)
        @php ($link = $item->url)
        @php ($title = $item->title)
        @if ( !$item->menu_item_parent )
            @php ($parent_id = $item->ID)
    <li class="item">
        <a href="{{$item->url}}" class="menu-title">
            {{$item->title}}
        </a>
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
    </li>                           
      @php ($submenu = false)
      @endif

  @php($count++) 
  @endforeach

  </ul>
</nav>
@endif
