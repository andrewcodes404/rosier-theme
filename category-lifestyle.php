<?php get_header(); ?>

<div class="container">
  <div class="flex-row justify-between">
    <div class="page-content">
      <div class="flex-row justify-between">

        <?php $args = array('category_name' => 'lifestyle');
              $query = new WP_Query( $args );
              if( $query->have_posts() ) : while( $query->have_posts() ) : $query->the_post(); ?>

          <div class="hero-cont <?php
                $title_color = get_field('title_color');
                $title_hover = get_field('title_color_on_hover');
                echo $title_color . " ".  $title_hover ;?>">

                <?php the_post_thumbnail('hero-size') ?>

                <a href="<?php echo get_permalink(); ?>">
                  <div class="the-title <?php $bkg_color = get_field('bkg_color'); echo $bkg_color;?>">
                    <?php the_title(); ?>
                  </div>
                </a>
          </div>
        <!-- ///end the loop -->
        <?php endwhile; endif; ?>

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
