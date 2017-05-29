<?php

 get_header(); 

 ?>
	
	<div class="blog">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 col-md-12">
					
					<?php while(have_posts()): the_post();?>

						<?php the_content(); ?>

					<?php endwhile; ?>
				</div>	
			</div>
		</div>
	</div>
		
<?php get_footer(); ?>