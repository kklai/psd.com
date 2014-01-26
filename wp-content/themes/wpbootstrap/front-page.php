<?php get_header(); ?>
	
	<div class="flexslider">
	  <ul class="slides">
	    <li>
	      <img src="http://localhost:8888/wp-content/uploads/2013/07/banner_1.jpg" />
	    </li>
	    <li>
	      <img src="http://localhost:8888/wp-content/uploads/2013/07/banner_1.jpg" />
	    </li>
	    <li>
	      <img src="http://localhost:8888/wp-content/uploads/2013/07/banner_1.jpg" />
	    </li>
	    <li>
	      <img src="http://localhost:8888/wp-content/uploads/2013/07/banner_1.jpg" />
	    </li>
	  </ul>
	</div>

	<div class="span12">

	  <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	  	<div class="span4">
		  	<img src="<?php echo get_the_post_thumbnail($page->ID, 'thumbnail'); ?>">
		  	<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
		  	<p><em><?php the_time('l, F jS, Y'); ?></em></p>
		  </div>
	  <?php endwhile; else: ?>
	    <p><?php _e('Sorry, there are no posts.'); ?></p>
	  <?php endif; ?>

  </div>

<?php get_footer(); ?>