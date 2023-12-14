<!-- This is an amazing custom theme created by cruz following 
the course "become-a-wordpress-developer" -->

<?php get_header();
    function myFirstFunction() {
        echo 2 + 2;    
    }

    function greet($name) {
        echo "<p> Hi my name is $name </p>";
    }

    // greet('Krispin');

    $names = array('Pippin', 'Jessika', 'Harold');

    $count = 0;
    /*
    while($count < count($names)) {
        echo "<li>Hi my name is $names[$count]</li>";
        $count++;
    } */
?>

<!-- some info from wordpress functions 
<h1><?php bloginfo('name'); ?></h1>
<h2><?php bloginfo('description'); ?></h2>
-->

<?php 
    while(have_posts()) {
        the_post(); ?>
        <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
        <?php the_content(); ?>
        <hr>
    <?php }
    get_footer();
?>