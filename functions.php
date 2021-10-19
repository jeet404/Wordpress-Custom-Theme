<?php

		register_nav_menus(
			array(
				'my-custom-menu'=>'primary'
			));
?>
<?php 
		if(function_exists('register_sidebar'))
		{
			register_sidebar(
			array(
				'name'=>'Main Sidebar',
				'id'=>'sidebar',
				'description'=>'you can add you widgets to the main sidebar',
			));
		}
	
?>