<?php get_header(); ?>

<section id="results" class="content">

<?php if (have_posts()) : ?>
	
	<h1>Search Results for: <span class="search-query-header"><?php echo(get_search_query());?></span></h1>
			
		<?php while (have_posts()) : the_post(); ?>		
		
			<article class="search-result" id="post-<?php the_ID(); ?>">
					
					<h2 id="post-<?php the_ID(); ?>"><a href="<?php the_permalink() ?>" 	
					rel="bookmark" title="Permanent Link to <?php the_title(); ?>"><?php the_title(); ?></a></h2>
					
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
				
				<h1>Sorry, there are no results for: "<span class="search-query-header"><?php echo(get_search_query());?></span>"</h1>
				
				<h3>Please refine your search or <a href="<?php echo home_url(); ?>">return home</a></h3>
							
			<?php endif; ?>
			
			<?php wp_reset_postdata(); ?>

</section>		
			
<?php get_footer(); ?>			