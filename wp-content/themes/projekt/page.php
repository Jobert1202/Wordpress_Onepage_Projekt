<!DOCTYPE html>
<?php $theme_url = get_template_directory_uri(); ?>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo( 'charset' ); ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title><?php wp_title() ?></title>
        <link rel="stylesheet" href="<?= $theme_url ?>/style.css">
        <script src="<?= $theme_url ?>/script/script.js" defer></script>
        <?php wp_head(); ?>
    </head>


    <?php
        /**
         * The main template file
         */

        get_header(); // Načte header.php
        ?>

        <main>
            <?php the_content(); ?>
        </main>     
        <?php
        get_footer(); // Načte footer.php
        ?>
    </body>
</html>