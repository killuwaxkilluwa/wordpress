<?php get_header(); ?>


<div class="row">
  <div class="span8">
<div>我是page</div>

	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		<h1><?php the_title(); ?></h1>
	  	<?php the_content(); ?>
        <?php the_author(); ?>
         <img src="<?php echo $imgurl = catch_that_image() ?>" alt="" />
                   <div class="attr"> <?php echo $attachment_id = catch_that_attachment_id($imgurl)?>
                    <div class="attachmentmeta"><?php echo wp_get_attachment_metadata( $attachment_id);?></div>
	<?php endwhile; else: ?>
		<p><?php _e('Sorry, this page does not exist.'); ?></p>
	<?php endif; ?>

  </div>
  <div class="span4">
	<?php get_sidebar(); ?>	
  </div>
</div>


<?php get_footer(); ?>