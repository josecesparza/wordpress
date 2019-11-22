<?php get_header(); ?>

<div id="landing">
    <div class="container d-flex align-items-center justify-content-center h-100">
        <h1>Welcome to my shop!</h1>
    </div>
</div>

<div class="content">
    <div class="container">
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

                <?php the_content(); ?>

        <?php endwhile;
        else : endif; ?>
        <!-- Widget area -->
        <?php if (!function_exists('dynamic_sidebar') || !dynamic_sidebar('header-sidebar')) :

        endif; ?>
    </div>
</div>

<?php get_footer(); ?>