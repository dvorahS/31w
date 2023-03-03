<?php
/**
 * template-parts qui permet d'afficher 
 * un article provenant d'un conteneur de class blocflex
 * pour un article de la catégorie note-wp
 */
$titre = get_the_title();
if (substr($titre, 0, 1) == "0") {
    $titre = substr($titre, 1);
}
?>
<article class>
    <h2><a href="<?php the_permalink(); ?>"> <?=$titre ?></a></h2>

    <p><?= wp_trim_words(get_the_excerpt(), 15) ?></p>
  
</article>