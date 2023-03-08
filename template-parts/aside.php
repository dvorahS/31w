


<aside class="site__aside"> <!-- va s'executer ds chacune des page de notre wp, car c'est dans le header -->
        
    <h3>Menu secondaire</h3>

        <?php 

        $lemenu = "note-wp";
        if(in_category("cours"))
        {
            $lemenu = "cours";
        }
        /* permet d'afficher le menu des notes de cours */
        wp_nav_menu(array
        (
            "menu" => $lemenu,
            "container" => "nav"
        )) ?>
</aside>