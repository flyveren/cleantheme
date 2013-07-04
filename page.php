<?php get_header(); ?>

	<div id="wrapper">
		<div class="container">
			
			<div class="sixteen coloumns">

				<?php if (have_posts()) : ?>  
				
				    <?php while (have_posts()) : the_post(); ?>  
				    	<h1><?php the_title(); ?></h1>
				    	<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>  
				        	<?php the_content('Read the rest of this entry »'); ?>  
				    	</div>
				    	
				    <?php endwhile; ?>  
				    <?php else : ?>  
				    //Something that happens when a post isn’t found.  
				<?php endif; ?>  
			</div>
		
		</div><!-- .container -->
	</div><!-- .wrapper -->

<?php get_footer(); ?>