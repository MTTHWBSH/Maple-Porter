<?php
/*
Template Name: Archive
*/
?>

<?php get_header(); ?>

<section id="results" class="content">

  <?php
    $args = array('category_name'=>'blog');
    $blog_posts = new WP_Query($args);

    if($blog_posts->have_posts()) : 
      while($blog_posts->have_posts()) : 
        $blog_posts->the_post();
  ?>
		
  <article class="search-result">
  	<h2><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>"><?php the_title(); ?></a></h2>
  	<h4>Posted <?php the_time('F jS, Y') ?></h4>
  		<a href="<?php the_permalink(); ?>" class="thumbnail">
  			<?php
  				if ( has_post_thumbnail() ) {
  					the_post_thumbnail();
  					}	
  					?>	
  		</a>
  	<p><?php $content = get_the_content();
  		$content = strip_tags($content);
  		echo substr($content, 0, 350);
  		?>...<a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>">more</a></p>	
  	<hr>					
  </article>

  <?php endwhile; ?>

  <?php else: ?>
  	
  	<h1>Sorry, there are no results to display </h1>
  	
  				
  <?php endif; ?>

  <?php wp_reset_postdata(); ?>

</section>		
			
<?php get_footer(); ?>			