<?php get_header(); ?>
<div class="post-container">
  <div class="flex-row justify-between">
    <div class="post-content">

      <div class="post-title  ph1">

        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <div class="post-title"><h1><?php the_title(); ?></h1></div>
        <?php endwhile; else : ?>
          <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
        <?php endif; ?>

      </div>

      <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

        <div class="">
            <?php the_field('post_content') ?>
        </div>

        <div class="">
          <?php the_content(); ?>
        </div>

        <!-- comments -->
        <?php  if ( comments_open() || get_comments_number() ) :comments_template(); endif;?>
        <?php endwhile; else : ?>
        	<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
        <?php endif; ?>

    </div><!-- .post-content -->


    <div class="page-widget post-widget">
        <?php if ( ! dynamic_sidebar( 'page-widget' ) ); ?>
    </div>

  </div><!-- .flex-row -->
</div><!-- .container -->
<?php get_footer(); ?>
