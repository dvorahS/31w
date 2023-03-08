<?php
// Enfiler la feuille de style
function ajouter_styles() 
{
    wp_enqueue_style('31w-style-principal',                             // id de la feuille de style
                get_template_directory_uri() . '/style.css',            // adresse url de la feuille de style
                array(),                                                // les dépendances avec les autres feuilles de style
                filemtime(get_template_directory() . '/style.css'));    // la de la dernière feuille de style
}
add_action( 'wp_enqueue_scripts', 'ajouter_styles' );

/* --------------------------------------------------- Add_theme_support */
add_theme_support( 'html5', 
                    array(  'search-form',
                            'gallery', 
                            'caption' 
                    ) );

add_theme_support( 'title-tag' );

add_theme_support( 'custom-logo', 
                    array(
                        'height' => 150,
                        'width'  => 150,
                    ) );

/* ------------------------------------------------- Enregistrement des menus */

    function enregistrement_des_menus(){
        register_nav_menus( array(
            'menu_entete' => 'Menu entête' ,
            'menu_footer'  => 'Menu pied de page',
        ) );
    }
    add_action( 'after_setup_theme', 'enregistrement_des_menus', 0 );

    /**
 * Modifie la requete principale de Wordpress avant qu'elle soit exécuté
 * le hook « pre_get_posts » se manifeste juste avant d'exécuter la requête principal
 * Dépendant de la condition initiale on peut filtrer un type particulier de requête
 * Dans ce cas çi nous filtrons la requête de la page d'accueil
 * @param WP_query  $query la requête principal de WP
 */


function cidweb_modifie_requete_principal( $query ) 
{
    if ( $query->is_home()      //si pafe d'accueil
    && $query->is_main_query()  //si requête principale
    && ! is_admin() ) 
    {     //si pas dans l'admin
      $query->set( 'category_name', 'note-wp' ); // on filtre par catégorie << note-wp >>
      $query->set( 'orderby', 'title' );                // on trie par titre
      $query->set( 'order', 'ASC' );                    // dans l'ordre croissant
    }
}

/**
 * PERMET DE MODIFIER LES TITRES DU MENU COURS
 * @param $title : titre du choix menu
 * @param $item : choix global
 * @param $args : objet qui represente la structure du menu
 */
     add_action( 'pre_get_posts', 'cidweb_modifie_requete_principal' );  

     function perso_menu_item_title($title, $item, $args) 
     {
        // Remplacer 'nom_de_votre_menu' par l'identifiant de votre menu
        if($args->menu == 'cours') 
        {
        // Modifier la longueur du titre en fonction de vos besoins
        $title = wp_trim_words($title, 3, ' ... '); /* va chercher les 3 premiers mots */
        }
        return $title;
    }
    /* ecouteur de hook */
    add_filter('nav_menu_item_title', 'perso_menu_item_title', 10, 3);


?>
                   