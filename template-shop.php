<?php
/*
    Template Name: Shop Page
*/ ?>


<?php get_header(); ?>
<div class="container">
<?php the_title('<h1>', '</h1>'); ?>
<?php 

    if ( have_posts() ) { 
        while ( have_posts() ) : the_post();
    ?>
        <?php the_content(); ?>
    <?php
        endwhile;
    } 
    ?>
</div>


<?php get_footer(); ?>
