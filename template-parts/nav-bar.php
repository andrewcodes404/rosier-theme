<div class="desktop-nav-cont">
  <div class="rosier-cont">
    <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
      <div class="rosier">
        Rosier
      </div>
    </a>
  </div>

  <div class="strapline">food education and inspiration</div>

  <div class="menu-bars" id="menu-btn-open">
    <i class="fa fa-bars" aria-hidden="true"></i>
  </div>


  <div class="desktop-cont">
    <?php
            $defaults = array (
        ///ask if you want a div around the ul
                'container' => false,
        ///telling wp this is where the menu is
                'theme_location' => 'desktop',
        ///create your own class name for the menu
                // 'menu_class' => 'banana',
        //removes the ul wrapper
                'items_wrap' => '%3$s'
            );
    /// here's the function to call it
        wp_nav_menu( $defaults);
    ?>

    <div class="desktop-social-icons">
      <a href="https://www.instagram.com/rosier.co/" target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i></a>
      <a href="https://twitter.com/RosierCo" target="_blank"><i class="fa fa-twitter-square" aria-hidden="true"></i></a>
    </div>

  </div>
</div>

<div class="times" id="menu-btn-close">
  <i class="fa fa-times" aria-hidden="true"></i>
</div>

<!-- //**drop-down menu**//**drop-down menu**//**drop-down menu**//**drop-down menu**//  -->

<div class="drop-down-cont">
  <?php
          $defaults = array (
      ///ask if you want a div around the ul
              // 'container' => false,
      ///telling wp this is where the menu is
              'theme_location' => 'nav-dropdown',
      ///create your own class name for the menu
              // 'menu_class' => 'banana',
      //removes the ul wrapper
              'items_wrap' => '%3$s'
          );
  /// here's the function to call it
      wp_nav_menu( $defaults);
  ?>

  <div class="push-down"></div>

  <div class="drop-social-icons">
    <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
    <a href="#"><i class="fa fa-facebook-square" aria-hidden="true"></i></a>
    <a href="#"><i class="fa fa-twitter-square" aria-hidden="true"></i></a>
  </div>

</div><!-- .drop-down-cont -->
