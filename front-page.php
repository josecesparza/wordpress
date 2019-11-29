<?php get_header(); ?>

<div id="landing">
    <div class="container d-flex align-items-center justify-content-center h-100">
        <h1 id="landing-title">Welcome to eBast!</h1>
    </div>
</div>

<div class="content">
    <div class="container">
        <h1>Best Sellers</h1>
        <?php echo do_shortcode('[best_selling_products columns="3" limit="3"]'); ?>

        <h2>Join Us And Get 15% Off Your First Purchase</h2>
        <!-- Widget area -->
        <?php if (!function_exists('dynamic_sidebar') || !dynamic_sidebar('header-sidebar')) :

        endif; ?>
    </div>
</div>

<?php get_footer(); ?>