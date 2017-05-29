<?php get_header(); ?>


	<div class="single">
		<div class="container">
			<div class="row">
				<div class="col-lg-9 col-md-9 ">
					<div class="level">
						
						<?php while(have_posts()):the_post(); ?>
							<div class="img">
								<a href="<?php echo get_post_meta(get_the_id(),'dd_link',true); ?>"><?php the_post_thumbnail(); ?></a>
							</div>
							<div class="mid-content">
								<h2>Theme Description</h2>
								<p>Name  : <?php the_title(); ?> theme</p>

								<p>Language : Html-5 , Css-3,Bootsrap jQuery</p>
								<p>Responsive :Full responsive</p>
								<p>Color:Red,Dack</p>

								<p>Tags :<a href="#"><?php $tagsss=get_tags();

								if($tagsss){
									foreach($tagsss as $taaa){
										echo $taaa->name;
									}
								}	

								 ?> </a></p>
								<p>Catagory :<a href="#"><?php $category=get_the_category(); echo  $category[0] ->cat_name;?></a></p>

								<p>Published : <?php the_time('d/M/Y'); ?></p>
								<p>Published by:<?php the_author(); ?></p>								
							</div>		
						</div>
						<div class="link">
							<a target="_blank" href="<?php echo get_post_meta(get_the_id(),'dd_link',true); ?>">Download</a>
							<a target="_blank" href="<?php echo get_post_meta(get_the_id(),'pl_link',true); ?>">Preview</a>							
						</div>

					<?php endwhile; ?>


				</div>							
				<div class="col-lg-3 col-md-3">
					<?php get_sidebar(); ?>
				</div>

			</div>
		</div>
	</div>

<?php get_footer(); ?>
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	