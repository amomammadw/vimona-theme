<!DOCTYPE html>
<html <?php language_attributes() ?>>

<head>
    <meta charset="<?php bloginfo( 'charset' ) ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo( 'title' ) ?></title>
    <link rel="stylesheet" href="<?php bloginfo( 'stylesheet_url' ) ?>">
    <?php wp_head() ?>
</head>

<body>
    <header class="layout">
        <div class="container">
            <h1><a class="text-white" href="<?php get_home_url(); ?>"><?php bloginfo( 'name' ) ?></a></h1>
            <h4><?php bloginfo( 'description' ) ?></h4>
        </div>

        <nav class="main-nav">
            <div class="container">
                <?php  
            $args = array(
                'theme_location'=>'primary'
            );
            ?>
                <?php wp_nav_menu( $args ) ?>
            </div>
        </nav>
    </header>