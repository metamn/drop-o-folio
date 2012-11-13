<?php

// Displays a post, whenever is single or achive
// -------------------------------------------------
//


?>

<article <?php post_class($article_view); ?>>
	<header>
		<h1>
			<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute() ?>" rel="bookmark">
				<?php the_title(); ?>
			</a>
		</h1>
	</header>
	<div class="entry">	    
		<?php the_content(); ?>
	</div>
</article>