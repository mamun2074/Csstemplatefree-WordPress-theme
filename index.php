<?php get_header(); ?>
	
	<div class="blog">
		<div class="container">
			<div class="row">
			   

				<?php  
				 while(have_posts()):the_post(); ?>

				    <div class="col-lg-3 col-mg-4 col-sm-4 col-xs-6">
						<div class="tem">
							<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
							<h6><?php the_title(); ?></h6>
						</div>
					</div>



				<?php endwhile; ?>
	
				

			</div>
		</div>
	</div>

	<div class="pagination">
		<div class="container">

			<div class="row">

				<div class="pull-right">

			<?php 

				the_posts_pagination(array(
						'screen_reader_text' =>' ',
						'prev_text'			 =>'<span class="glyphicon glyphicon-chevron-left"></span>',
						'next_text'			 =>'<span class="glyphicon glyphicon-chevron-right"></span>',
						'mid_size'				=>5,

					));

					 ?>
				</div>
			</div>
					
		</div>
	</div>
		
<?php get_footer(); ?>