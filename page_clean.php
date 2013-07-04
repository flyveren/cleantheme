<?php /* Template Name: Clean responsive template */ ?>
test git commit
<?php get_header(); ?>

	<div id="wrapper">
		
			<!--p>I am clean-page.php</p-->
	
			<?php if( get_field('clean_responsive_field') ): ?>
				<?php while( has_sub_field('clean_responsive_field') ): ?>
						
						<div style="background-color:<?php the_sub_field('theme_color'); ?>;">
							<div class="container">	
								
								<?php if( get_sub_field('page_area') ): ?>	
									<?php while( has_sub_field('page_area') ): ?>
										<?php if(get_row_layout() == "flex_column"): // layout: wysiwyg blocks ?>
	 
											<div class="<?php the_sub_field("column_type"); ?> <?php the_sub_field("clear_float"); ?>">
												<?php the_sub_field("flex_column_content"); ?>
											</div>

									<?php elseif(get_row_layout() == "flex_column_image"): // layout: Image ?>

										<div class="<?php the_sub_field("column_type"); ?>">
											<img class="scale-with-grid" src="<?php the_sub_field("flex_column_image"); ?>" alt="" />
										</div>
																		
									<?php elseif(get_row_layout() == "flex_column_video"): // layout: Youtube video ?>
										
											<div class="<?php the_sub_field("column_type"); ?>">
												<div class="video-container">
													<?php the_sub_field("flex_column_video"); ?>																							
												</div>
											</div>
													
									<?php elseif(get_row_layout() == "flex_column_slider"): // layout: Slider ?>
	
											<div class="<?php the_sub_field("column_type"); ?>">
									
												<div class="flexslider">
												
												
													<?php if( get_sub_field('flex_column_slider') ): ?>
													
														<ul class="slides">
			
														<?php while( has_sub_field('flex_column_slider') ): ?>
													
															<li><img src="<?php the_sub_field("image"); ?>" alt="" /></li>
													
														<?php endwhile; ?>
														
														</ul>
															
													<?php endif; ?>				
										
												</div>
									
												<script>
													$(window).load(function() {
													  $('.flexslider').flexslider({
													    animation: "slide",
													    slideshow: <?php the_sub_field("autoplay"); ?>, 
													    controlNav: true,               //Boolean: Create navigation for paging control of each clide? Note: Leave true for manualControls usage
														directionNav: true,             //Boolean: Create navigation for previous/next navigation? (true/false)
														prevText: "Previous",           //String: Set the text for the "previous" directionNav item
														nextText: "Next"
													  });
													});
												</script>
												
											</div><!-- end page area -->
															
									<?php endif; ?>										
																				
							
									<?php endwhile; ?>		
								<?php endif; ?>
					
								<div class="clear"></div>	
						
							</div><!-- .container -->
						</div><!-- bg color tag -->
									
			<?php endwhile; ?>
		<?php endif; ?>
										
	</div><!-- .wrapper -->

<?php get_footer(); ?>