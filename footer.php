<div class="flex1"></div>



<footer class="container pt2 pb3">


<div class="rosier-footer-cont">
  <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
    <div class="rosier-footer">
      Rosier
    </div>
  </a>
</div>


  <div class="footer-social-icons">
    <a href="https://www.instagram.com/rosier.co/" target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i></a>
    <!-- <a href="#"><i class="fa fa-facebook-square" aria-hidden="true"></i></a> -->
    <a href="https://twitter.com/RosierCo" target="_blank"><i class="fa fa-twitter-square" aria-hidden="true"></i></a>
  </div>



<div class="footer-menu-cont">
  <?php
      $defaults = array (
          ///ask if you want wp to create a container
                  'container' => false,
          ///telling wp this is where the menu is
                  'theme_location' => 'footer-menu',
          ///ul  custom class (if you have a ul? see below...)
                  // 'menu_class' => 'custom-name',
          //removes the ul wrapper
                  'items_wrap' => '%3$s'
      );

      wp_nav_menu( $defaults);
  ?>

</div>



</footer>

<?php wp_footer(); ?>
</body>
</html>
