<?php get_header(); ?>

    <main>
        <?php 
        // Tento kód ověří, zda WordPress zná kontext stránky a zda funguje The Loop.
        if ( have_posts() ) : while ( have_posts() ) : the_post(); 
            the_title('<h1>', '</h1>'); 
            the_content();
        endwhile; endif; 
        ?>
    </main>
    
<?php get_footer(); ?>