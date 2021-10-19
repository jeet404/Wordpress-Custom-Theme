<?php get_header();the_post();?>

<div class='container p-3'>
    <div class='row'>
        <div class='col-md-12'>
            <h1 class='text-center'><?php  the_title(); ?></h1>
            <div class='text-center'> <?php the_post_thumbnail(); ?></div>
            <p> <?php echo get_the_content(); ?></p>
            <p class=' '>Publish Date : <?php echo get_the_date(); ?></p>
            <p class=' text-right'>Author : <?php the_author(); ?></p>
            <P class='c'>Category : <?php  the_category(); ?> </p>
        </div>
        <h3> Users Comments</h3>
        <div class='col-md-8'>
            <?php comments_template(); ?>
        </div>
    </div>
</div>


<?php get_footer();?>
