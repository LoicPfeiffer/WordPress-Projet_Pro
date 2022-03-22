<?php

get_header();

// Affichage de la page d'accueil sans la boucle
if (have_posts()) :
    the_post();
?>
    <article>
        <?php // Notez que le titre est dans un lien clickable 
        ?>
        <h2><a href="<?= get_permalink(); ?>"><?php the_title(); ?></a></h2>
        <div><?php the_time(get_option('date_format')); ?></div>
        <?php
        if (has_post_thumbnail()) :
        ?>
            <a href="<?php the_permalink(); ?>" alt="<?php the_title_attribute(); ?>"> <?php the_post_thumbnail('medium'); ?>
            </a>
        <?php
        endif;
        ?>
        <div><?php the_content(); ?></div>
    </article>
<?php
endif;

get_footer();
