<?php get_header(); ?>

<div class="container">
  <div class="flex-row justify-between">
    <div class="page-content">
      <div class="flex-row justify-between">
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

                  <div class="hero-cont <?php
                        $title_color = get_field('title_color');
                        $title_hover = get_field('title_color_on_hover');
                        echo $title_color . " ".  $title_hover ;
                  ?>">

                  <?php the_post_thumbnail('hero-size') ?>

                  <a href="<?php echo get_permalink(); ?>">
                    <div class="the-title <?php
                    $bkg_color = get_field('bkg_color');
                    echo $bkg_color;

                    ?>">
                      <?php the_title(); ?>
                    </div>
                  </a>

                  </div>

          <?php endwhile; else : ?>
            <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
          <?php endif; ?>
        </div>
    </div>

    <div class="pagination-mobile pagination">
        <?php get_template_part('template-parts/pagination') ?>
    </div>

    <div class="page-widget">
        <?php if ( ! dynamic_sidebar( 'page-widget' ) ); ?>
    </div>

    <div class="pagination-desktop pagination">
        <?php get_template_part('template-parts/pagination') ?>
    </div>

  </div><!-- .flex-row -->
</div><!-- .container -->

<?php get_footer(); ?>
