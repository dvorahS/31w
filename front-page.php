<?php
/**
    Modèle index.php représente le modèle par défaut du thème
*/
get_header() ?>
<main class="site__main" >
    <code>front-page.php</code>
    <!-- <h3>index.php</h3> -->
    <section class="blocflex">
        <?php 
        if (have_posts()):
            while (have_posts()) : the_post();
                //the_title('<h1>','</h1>');
                //the_permalink(); ?>
                <?php 
                $ma_categorie ="note-wp";
                if (in_category('galery')){$ma_categorie = "galerie";}
                get_template_part('template-parts/categorie', $ma_categorie);
                 ?>
                
            <?php endwhile; ?>
        <?php endif; ?>   
    </section>
</main> 
<?php get_footer(); ?>

