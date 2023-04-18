<?php
/**
    Modèle index.php représente le modèle par défaut du thème
*/
get_header() ?>
<main class="site__main">

    <section class="erreur_exam">
        <div class="entete_404">
            <h1>Erreur 404</h1>
            <h3>Page introuvable, vous pouvez tenter une recherche.</h3>
        </div>

        <div class="recherche_erreur">
            <form class="recherche" role="search" method="get"  action="<?php echo esc_url( home_url( '/' ) ); ?>">
            <label>
                <input class="recherche__input" type="search" class="search-field" placeholder="Search..." value="<?php echo get_search_query(); ?>" name="s" />
            </label>
            <button class="recherche__bouton" type="submit" class="search-submit">
                <span class="recherche__icone">&#x1F50D;</span>
            </button>
            </form>
        </div>

        <aside class="site__aside">
            <h3>Nos choix de cours</h3>
            <?php 
            $lemenu = "cours";
            if (in_category('cours')) 
            {$lemenu = "cours";}
            wp_nav_menu(array(
                "menu" => $lemenu,
                "container" => "nav"
            )); ?>
        </aside>

        <aside class="site__aside">
            <h3>Les notes de cours</h3>
            <?php 
            $lemenu = "note-wp";
            if (in_category('cours')) 
            {$lemenu = "cours";}
            wp_nav_menu(array(
                "menu" => $lemenu,
                "container" => "nav"
            )); ?>
        </aside>

    </section>

</main> 
<?php get_footer(); ?>

