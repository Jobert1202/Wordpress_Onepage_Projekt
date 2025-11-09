<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<header>
    <div class="wrapper">
        <div class="wrapper-logo">
            <?php 
            // Logo se získá z aktivní stránky, kde je přiřazeno ACF pole (bez 'option')
            $logo_field = get_field('logo_image'); 
            
            $logo_url = is_array($logo_field) && isset($logo_field['url']) ? $logo_field['url'] : $logo_field;

            if ($logo_url): ?>
                <a href="#Home">
                    <img src="<?php echo esc_url($logo_url); ?>" alt="Logo">
                </a>
            <?php endif; ?>
        </div>
        <div class="wrapper-hamburger">
            <span></span>
            <span></span>
            <span></span>
        </div>
    </div>
    <nav>
        <a href="#Home">Home</a>
        <a href="#Section_1">Open world</a>
        <a href="#Section_2">Monster hunter</a>
        <a href="#Section_3">Story</a>
    </nav>
</header>