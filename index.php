<?php get_header(); ?>
    <div class="slideshow-container">
        <div class="slider">
          <img class="mySlides" src="<?php echo get_template_directory_uri();?>/Images/wp2673287-music-studio-wallpapers-hd.jpg">
          <img class="mySlides" src="<?php echo get_template_directory_uri();?>/Images/wp2842343-hd-wallpapers-of-musical-instruments.jpg">
          <img class="mySlides" src="<?php echo get_template_directory_uri();?>/Images/wp3409427-music-studio-wallpapers-hd (1).jpg">
        </div>
    </div>
<div class="big">
    	<?php get_sidebar();?>
	<div class="small">
    	<?php while ( have_posts() ) : the_post(); ?>
        	<div class="pgsec">
                  <article class="<?php post_class(); ?>" id="post-<?php the_ID(); ?>">
                    <h2 class="entry-title"><?php the_title(); ?></h2>
                    <?php if ( !is_page() ):?>
                      <section class="entry-meta">
                      <p>Posted on <?php the_date();?> by <?php the_author();?></p>
                      </section>
                    <?php endif; ?>
                    <section class="entry-content">
                      <?php the_content(); ?>
                    </section>
                    <section class="entry-meta"><?php if (count(get_the_category())): ?>
                      <span class="category-links">
                        Posted under: <?php echo get_the_category_list( ', ' ); ?>
                      </span>
                    <?php endif; ?></section>
                  </article>
             </div>
                <?php endwhile; ?>
   	<!--<div class="postsec">
      	<?php 
	  		if(have_posts())
			{
				while(have_posts())
				{
					the_post();
					echo "<h3><?php the_title(); ?></h3>";
					the_content();
				}
			}
		?>
    </div>-->
    </div>
</div>
<?php get_footer(); ?>
<script>
var myIndex = 0;
carousel();

function carousel() {
  var i;
  var x = document.getElementsByClassName("mySlides");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  myIndex++;
  if (myIndex > x.length) {myIndex = 1}    
  x[myIndex-1].style.display = "inline-block";  
  setTimeout(carousel, 2000); // Change image every 2 seconds
}
</script>

