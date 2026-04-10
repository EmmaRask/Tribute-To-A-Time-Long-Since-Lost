<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= get_stylesheet_directory_uri(); ?>/style.css">
    <title><?php bloginfo('name'); ?></title>
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<header class="site-header">
    <div class="site-header__inner">

        <div class="header-left">
            <a class="site-title" href="<?php echo home_url('/'); ?>">
                <?php bloginfo('name'); ?>
            </a>
        </div>

        <div class="header-center">
            <?php if ( is_single() ) : ?>
                <span class="current-title"><?php the_title(); ?></span>
            <?php endif; ?>
        </div>

        <div class="header-right">
            <a class="about-link" href="<?php echo home_url('/about-me'); ?>">
                About Me
            </a>
        </div>

    </div>
</header>
