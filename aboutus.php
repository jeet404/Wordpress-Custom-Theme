/*
	Template Name:About US
*/
<?php get_header();?>
	<section id="about">
        <div class="about-section">
          <h1>About Us Page</h1>
          <p>We are collage Students and We are intrested in produce some music and remix existing music. </p>
        </div>

        <h1 style="text-align:center; font-family: 'Gill Sans', 'Gill Sans MT', 'Myriad Pro', 'DejaVu Sans Condensed', Helvetica, Arial, 'sans-serif';color:white;">Our Team</h1>
        
        <div class="row1">
            <div class="col">
            	<div class="timg">
                <img src="<?php echo get_template_directory_uri(); ?>\Images/60111.jpg" alt="test">
                </div>
                <div class="container1">
                	<h2>The Chainsmokers</h2>
                    <p>CEO & Founder</p>
                </div>
            </div>
            <div class="col">
            	<div class="timg">
                <img src="<?php echo get_template_directory_uri(); ?>\Images/60111.jpg" alt="test">
                </div>
                <div class="container2">
                    <h2>Devid Geutta</h2>
                    <p>CEO & Founder</p>
                </div>
            </div>
            <div class="col">
            	<div class="timg">
                <img src="<?php echo get_template_directory_uri(); ?>\Images/60111.jpg" alt="test">
                </div>
                <div class="container2">
                    <h2>Martin Garrix</h2>
                    <p>CEO & Founder</p>
                </div>
            </div>
        </div>
    </section>
<?php get_footer();?>