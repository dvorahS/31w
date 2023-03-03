<?php
/**
 * template-parts qui permet d'afficher 
 * un article provenant d'un conteneur de class blocflex
 * * pour un article de la catégorie cours
 */
$titre = get_the_title();
$sigle = substr($titre, 0, 7);
$titre_long = substr($titre, 7 , -5);
$duree = "90h";
?>
<article class>
    <h2><a href="<?php the_permalink(); ?>"> <?= get_the_title(); ?></a></h2>
    <h3><?= $titre_long ?></h3>
    <p><?= wp_trim_words(get_the_excerpt(), 15) ?></p>
    <p><?= $duree ?></p>
</article>
