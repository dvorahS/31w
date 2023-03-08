


<aside class="site__aside"> <!-- va s'executer ds chacune des page de notre wp, car c'est dans le header -->
        
    <h3>Menu secondaire</h3>
        <?php 
        $category = get_queried_object(); /* recup l'URL pour en faire un objet */
        if(isset($category))
        {
            $lemenu = $category->slug;
        }
        else /* permet d'avoir une valeur par defaut pour le menu */
        {
            $lemenu = "note-wp";
        }
        /* permet d'afficher le menu des notes de cours */
        wp_nav_menu(array
        (
            "menu" => $lemenu,
            "container" => "nav"
        )) ?>
</aside>