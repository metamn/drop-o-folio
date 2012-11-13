<?php get_header(); ?>


<section id="content"> 	
  <?php
  	if (have_posts()) {
    	
    	// The Loop
    	$count = 1;
    	while ( have_posts() ) : the_post();		    
      	include 'article.php';                
	  		$count++; 
	  	endwhile; 
	  } else { 
	  	
	  	// Not found ?>
	  	<article class="not-found">
				<header>
					<h1>Not Found</h1>
				</header>
				<div class="entry">
					<p>No posts found.</p>					
				</div>
			</article>
	  <?php } 
	?>
</section>


<?php get_footer(); ?>