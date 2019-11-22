<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php wp_title('', true, 'right'); ?> <?php bloginfo('name'); ?></title>
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    <header class="navbar navbar-expand-lg navbar-dark bg-dark" id="main-header">
        <?php
        wp_nav_menu(array(
            'theme_location' => 'top-nav'
        ));
        ?>
    </header>