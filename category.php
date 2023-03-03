<?php
/**
    Modèle category.php représente permet d'afficher une archive par categorie d'article
*/
get_header() ?>
<main class="site__main">
   <section class="blocflex">
      <?php
      $category = get_queried_object();
      $args = array(
         'category_name' => $category->slug,
         'orderby' => 'title',
         'order' => 'ASC'
      );
      $query = new WP_Query( $args ); /* WP_Query permet de regenerer une nouvelle requete */
      if ( $query->have_posts() ) :
         while ( $query->have_posts() ) : $query->the_post(); ?>
            <?php get_template_part("template-parts/categorie", $category->slug); ?> <!--on va chercher le template -->
            <?php //get_template_part('template-parts/categorie', $category->slug); ?>
         <?php endwhile; ?>
      <?php endif;
      wp_reset_postdata();?>
   </section>
</main>
<?php get_footer(); ?>

