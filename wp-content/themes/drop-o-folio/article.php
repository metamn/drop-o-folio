<?php

// Displays a post, whenever is single or achive
// -------------------------------------------------
//


?>

<article <?php post_class($article_view); ?>>
	<header>		
		<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute() ?>" rel="bookmark">
			<h1><?php the_title(); ?></h1>
		</a>		
	</header>
	<div class="entry">	    
		<?php the_content(); ?>
	</div>
</article>