<!-- This page give the detail of each post 
     when clicked from the index.php
-->

<?php
    while(have_posts()) {
        the_post(); ?>
        <h1>This page is not a post.</h1>
        <h2><?php the_title(); ?></h2>
        <?php the_content(); ?>

    <?php }
?>