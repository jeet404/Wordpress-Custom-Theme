<?php get_header();
the_post();?>
<div class="navbar">
<?php get_sidebar(); ?>
</div>
<div class="cont">
<?php the_content();?>
</div>

<?php get_footer();?>