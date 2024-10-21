<?php get_header(); ?>

<main id="site-content">
    <?php
    if ( have_posts() ) :
        while ( have_posts() ) : the_post();
            // Виведення заголовку посту
            the_title('<h1>', '</h1>');
            
            // Виведення мета-інформації
            echo '<div>' . get_the_date() . ' by ' . get_the_author() . '</div>';
            
            // Виведення контенту
            the_content();
            
            // Виведення блоку коментарів
            if ( comments_open() || get_comments_number() ) {
                comments_template();
            }
        endwhile;
    endif;
    ?>
</main>

<?php get_footer(); ?>