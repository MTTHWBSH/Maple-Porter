<?php get_header(); ?>
			
<?php if (have_posts()) : ?>
  <div class="single content">	
	<?php while (have_posts()) : the_post(); ?>

		<h2><?php the_title(); ?></h2>
		<h4><?php the_excerpt(); ?></h4>
		
		<hr />
		<?php the_content(); ?>

	<?php endwhile; ?>
  </div>	
<?php else : ?>

	<h2>If you see this, there are no posts in the blog.</h2>

<?php endif; ?>

<?php get_footer(); ?>