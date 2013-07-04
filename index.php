<?php get_header(); ?>

	<div id="wrapper">

		<?php if (have_posts()) : ?>  
		
		    <?php while (have_posts()) : the_post(); ?>  
		    
		    	<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>  
		        	<h1><a href="<?php the_permalink() ?>"><?php the_title() ?></a></h1>
		        	<?php the_content('Read the rest of this entry »'); ?>  
		    	</div>
		    	
		    <?php endwhile; ?>  
		    <?php else : ?>  
		    //Something that happens when a post isn’t found.  
		<?php endif; ?>  
		
	</div>

<?php get_footer(); ?>