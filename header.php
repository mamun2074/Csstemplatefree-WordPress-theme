<!DOCTYPE HTML>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo(charset); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="shortcut icon" type="image/x-icon" href="<?php echo get_template_directory_uri(); ?>/images/favicon.ico" />
	

<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
	
	
	<nav>
		<div class="container">
			<div class="row">
				<div class="col-lg-2 col-mg-12 col-sm-12 col-xs-12">
					<div class="logo">
						<a href="<?php bloginfo('home'); ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/final-logo2.png" alt="" /></a>
					</div>
				</div>
				<div class="col-lg-10 col-mg-12 col-sm-12 col-xs-12">
					<div class="menu">
						
						<?php wp_nav_menu(array(
							'theme_location'		=>'main-menu',
							'container'				=>' ',
							'menu_class'			=>'list-unstyled list-inline pull-right',
						)); ?>
						<!--<ul class="list-unstyled list-inline pull-right">
							<li><a href="index.html">Home</a></li> 
							<li><a href="index.html">Free template</a></li>
							<li><a href="blog.html">Primium template</a></li>
							<li><a href="about.html">About us</a></li>
						</ul> -->

					</div>
				</div>
			</div>
		</div>
	</nav>