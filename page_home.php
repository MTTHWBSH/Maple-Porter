<?php
/*
Template Name: Home
*/
?>

<?php get_header(); ?>
			
<div class="content">

<section id="work">
<div id="work_container">
  <h1>WORK</h1>
  <hr />
  	<?php $paged = (get_query_var('page')) ? get_query_var('page') : 1;
      $args=array('category_name'=>'portfolio'#,'posts_per_page'=>4,'paged'=>$paged
      );
      query_posts($args); ?>
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>	
		
		<div class="box">
		<div class="thumbnail">
		
		<a href="<?php the_permalink(); ?>">
		<?php
			if ( has_post_thumbnail() ) {
			the_post_thumbnail();
			}	
		?>	
		</a>
		</div><!-- THUMBNAIL -->		
		
		<aside>
		
		<h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
		
		</aside><!-- ASIDE -->
		</div><!-- BOX -->

	<?php endwhile; ?>

  <!-- <a href="#" class="btn">load more</a> -->

	<?php else : ?>
		<h2>Sorry, there are no posts to display</h2>
	<?php endif; ?>  

</div><!-- WORK_CONTAINER -->
</section><!-- WORK -->

<section id="resume">
<div id="resume_container">
  
  <h1>RESUME <span>(</span><a href="<?php bloginfo('template_url'); ?>/assets/img/docs/resume.pdf" target="_blank"><span aria-hidden="true" class="icon-file"></span>PDF</a><span>)</span></h1>
  <hr />
  
  	<h2>EXPERIENCE</h2>
  	
  	<h3>Product Designer <span>at Trunk Club</span><span class="pull-right"> October 2013 - Present</span></h3>	
  	<ul>
      <li>Design and develop interfaces for both internal and client facing experiences</li>
      <li>Introduce multivariate testing to drive interface design</li>
      <li>Assist iOS engineers with interface designs and assets</li>
      <li>Ensure all product experiences create a cohesive ecosystem for users</li>
  	</ul>
  	<h3>Information Architect <span>at Razorfish</span><span class="pull-right"> June 2013 - October 2013</span></h3>
  	<ul>
  		<li>Employ user-centered design practices for a fortune 50 financial services company</li>
  		<li>Design rich, data heavy web-based application experiences</li>
  		<li>Perform research and analysis to influence data-driven design choices</li>
  		<li>Implement agile methodology for quick iteration and testing</li>
  	</ul>

  	<h3>Web Team Manager <span>at The State News</span><span class="pull-right"> September 2012 - May 2013</span></h3>
  	<h3>Web Developer<span class="pull-right">May 2012 - September 2012</span></h3>
  	<ul>
  		<li>Plan and design information architecture, wireframes, design documents</li>
  		<li>Develop websites/web-apps using HTML5, LESS, JavaScript, Twig</li>
  		<li>Manage projects for State News web development initiatives as well as several other universities</li>
  		<li>Oversee student web team</li>
  	</ul>
  	
  	<h3>User Experience Designer <span>at MSU College of Arts and Letters</span><span class="pull-right"> May 2012 - 
  	September 2012</span></h3>
  	<ul>
  		<li>Plan, design, and develop university web applications</li>
  		<li>Make analytics driven user interaction decisions on current web applications</li>
  		<li>Work closely with designers, developers, and content creators to produce a seamless user experience</li>
  	</ul>
  	
  	<h3>Lead UX Analyst <span>at RHS Marketing Communications</span><span class="pull-right"> May 2011 - 
  	May 2012</span></h3>
  	<ul>
  		<li>Develop, test, and report heuristic evaluations for user experience on websites for specific user bases</li>
  		<li>Measure and report on web analytics for user/brand specific websites</li>
  		<li>Generate and manage web content for user-based web applications</li>
  	</ul>
  	
  	<h2>EDUCATION</h2>
  	<h3>Bachelor of Arts in Digital &amp Technical Writing &bull; Design Specialization</h3>
  	<h3>Michigan State University &bull; 2013</h3>
  		<ul>
  			<li>Dean's List Fall 2010 - Spring 2013</li>
  			<li>Cognates in design and telecommunications</li>
  		</ul>
  	
  	<h2>TECHNICAL SKILLS</h2>
  		<ul>
  			<li>UI ( HTML5 | CSS3 | HAML | SASS | JavaScript | jQuery | CoffeeScript | PHP | SQL | Git )</li>
  			<li>UX ( User Testing | Wireframing | Prototyping | Information Architecture | Analytics )</li>
  			<li>Graphic Design ( Photoshop | Illustrator | InDesign | Photo/Video Capturing and Editing )</li>
  			<li>Expert knowledge of web standards and browser compatibility</li>
  			<li>Experience in Object-Oriented Design and MVC Architecture</li>
  			<li class="star">Willing and able to learn new concepts and technologies</li>
  		</ul>	  	
  	
  	
</div><!-- RESUME_CONTAINER -->
</section>

<section id="blog">
<div id="blog_container">
  <h1>BLOG</h1>
  <hr />
<?php
$args=array('category_name'=>'blog','posts_per_page'=>4);
query_posts($args);
if (have_posts()) : while (have_posts()) : the_post(); ?>
		
		<div class="box">
		<div class="thumbnail">
		
		<a href="<?php the_permalink(); ?>">
		<?php
			if ( has_post_thumbnail() ) {
			the_post_thumbnail();
			}	
		?>	
		</a>
		
		</div><!-- THUMBNAIL -->		
		
		<aside>
		
		<h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
		
		</aside><!-- ASIDE -->
		</div><!-- BOX -->
		

	<?php endwhile; ?>
	
	<a href="http://mtthwbsh.com/archive" class="btn">view all</a>

	<?php wp_reset_query(); ?>

	<?php else : ?>
		<h2>Sorry, there are no posts to display</h2>
	<?php endif; ?>
	
</div><!-- BLOG_CONTAINER -->	
</section><!-- BLOG -->

<section id="contact">
<div id="contact_container">
  <h1>CONTACT</h1>
  <hr />
  
  	<div class="contact">
		<form action="http://www.hostmonster.com/monstermail" enctype="multipart/form-data" method="POST">
			<input type="text" placeholder="name" name="Name" id="name">
			<input type="email" placeholder="email" name="mailfrom" id="email">
			<input type="text" placeholder="inquiry" name="inquiry" id="inquiry">
			<input type="hidden" name="sendtoemail" value="webmaster@mtthwbsh.com">
			<input class="btn" type="submit" value="submit">
		</form>
	</div><!-- CONTACT -->
</div><!-- CONTACT_CONTAINER -->
</section><!-- CONTACT -->

</div><!-- CONTENT -->

<?php get_footer(); ?>