<?php
	/*Template Name:left sidebar

	*/
 get_header(); 

 ?>
	
	<div class="blog">
		<div class="container">
			<div class="row">
				
				<div class="col-lg-9 col-md-9">
					
					<?php while(have_posts()):the_post(); ?>
						<?php the_content(); ?>
					<?php endwhile; ?>
				</div>	
				<div class="col-lg-3 col-md-3">
					
					<?php get_sidebar(); ?>


				</div>	

			</div>
		</div>
	</div>
		
<?php get_footer(); ?>