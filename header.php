<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php wp_title('', true, 'right'); ?> <?php bloginfo('name'); ?></title>
    <?php wp_head(); ?>
</head>
<style>
    #menu-firstm {
        display: flex;
        padding-left: 0;
        margin-bottom: 0;
        list-style: none;
        margin-right: auto !important;
        box-sizing: border-box;
    }

    #menu-firstm a {
        color: rgba(255, 255, 255, .5);
        display: block;
        padding: .5rem 1rem;
        text-decoration: none;
        background-color: transparent;
    }

    @media (min-width: 992px) {
        #menu-firstm {
            -ms-flex-direction: row;
            flex-direction: row;
        }
    }
</style>

<body <?php body_class(); ?>>
    <header class="navbar navbar-expand-lg navbar-dark bg-dark" id="main-header">
        <?php
        wp_nav_menu(array(
            'theme_location' => 'top-nav'
        ));
        ?>
    </header>