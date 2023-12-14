<!-- This page give the detail of each post 
     when clicked from the index.php
-->
<?php get_header();
    while(have_posts()) {
        the_post(); ?>
        
        <h2><?php the_title(); ?></h2>
        <?php the_content(); ?>

    <?php }
?>