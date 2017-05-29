<?php 


	function cmb2_download(){

		$down=new_cmb2_box(array(

			'id'			=>'d_link',
			'title'			=>'Download',
			'object_types'	=>array('post','primium_temp'),
			));
		$down->add_field(array(
			'name'			=>'Download link',
			'id'			=>'dd_link',
			'desc'			=>'You may add your download link here',
			'type'			=>'text',

			));
		$down->add_field(array(
			'name'			=>'Privew link',
			'id'			=>'pl_link',
			'desc'			=>'You may add your privew link here',
			'type'			=>'text',

			));
		

	}
	add_action('cmb2_init','cmb2_download');




 ?>