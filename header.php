<html>
<head>
<title>WelCome to JeVocxs</title>
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>\css/main.css">
<meta content="viewport" content="height=display-height , ">
<?php wp_head(); ?>
</head>
<body>
	<div class="header">
		<a href="<?php echo site_url();?>" class="logo">JeVocxs.music</a>
		<div class="rightmenu">
			<a href="#FB">Facebook</a>
			<a href="#IG">Insta</a>
			<a href="#TW">Twitter</a>
			<a href="#SP">Spotify</a>
		</div>
	</div>
    <marquee direction="left" style="font-family: Segoe, 'Segoe UI', 'DejaVu Sans', 'Trebuchet MS', Verdana, 'sans-serif';color:white;">
    ...Music Paradise......Music Paradise......Music Paradise......Music Paradise......Music Paradise......Music Paradise......Music Paradise......Music Paradise......Music Paradise......Music Paradise......Music Paradise......Music Paradise...
    </marquee>
    <div class="menu">
    <?php wp_nav_menu(array('theme_location'=>'my-custom-menu'));?>
        <!--<ul>
          <li><a href="index.php">Home</a></li>
          <li><a href="#Music">Music</a></li>
          <li><a href="#login">Login</a></li>
          <li><a href="#about">About</a></li>
        </ul>-->
    </div>