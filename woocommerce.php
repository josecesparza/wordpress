<?php get_header(); ?>

<div class="wrapper">

    <!-- Sidebar -->
    <nav id="sidebar">
        <div class="sidebar-left mt-5 pt-3">
            <?php if (!function_exists('dynamic_sidebar') || !dynamic_sidebar('searcher')) :
            endif; ?>
            <?php if (!function_exists('dynamic_sidebar') || !dynamic_sidebar('sidebar')) :
            endif; ?>
        </div>
    </nav>
    <!-- Widget area -->
    <div class="container mt-5 pt-3" id="product-area">
        <?php woocommerce_content(); ?>
    </div>
</div>

<?php get_footer(); ?>