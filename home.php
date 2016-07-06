<?php get_header(); ?>

<div class="container">
  <div>
    <h1>News</h1>

    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
  	<p><em><?php the_time('l, F jS, Y'); ?></em></p>
    <?php the_category(",")?>
    <?php echo get_cat_ID("未分类") ?>
  	<hr>
    
    
    <?php endwhile; else: ?>
      <p><?php _e('Sorry, there are no posts.'); ?></p>
    <?php endif; ?>

  </div>
  <div>

    <?php get_sidebar(); ?>   

  </div>
</div>


<?php get_footer(); ?>