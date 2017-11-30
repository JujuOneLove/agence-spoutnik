<?php
  $menu_name = 'main_nav';
  $locations = get_nav_menu_locations();
  $menu = wp_get_nav_menu_object("main_nav");
  //$menu = wp_get_nav_menu_object( $locations[ $menu_name ] );
  $menuitems = wp_get_nav_menu_items( $menu->term_id, array( 'order' => 'DESC' ) );
?>

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
      <?php endif; ?>

          <?php if ( $parent_id == $item->menu_item_parent ): ?>

              <?php if ( !$submenu ): $submenu = true; ?>
              <ul class="menu">
              <?php endif; ?>

                  <li class="item">
                      <a href="<?php echo $link; ?>" class="menu-title"><?php echo $title; ?></a>
                  </li>

              <?php if ( $menuitems[ $count + 1 ]->menu_item_parent != $parent_id && $submenu ): ?>
              </ul>
              <?php $submenu = false; endif; ?>

          <?php endif; ?>

      <?php if ( $menuitems[ $count + 1 ]->menu_item_parent != $parent_id ): ?>
      </li>                           
      <?php $submenu = false; endif; ?>

  @php($count++) 
  @endforeach

  </ul>
</nav>