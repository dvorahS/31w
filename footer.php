<?php
/**
* Template footer.php
*/
?>
<footer class="site__footer">

<section class="footer_widget" >
    <div><?php dynamic_sidebar ('pied-page-1'); ?></div>
    <div><?php dynamic_sidebar ('pied-page-2'); ?></div>
    <div><?php dynamic_sidebar ('pied-page-3'); ?></div>
</section>

<section class="footer_lien" >
    <div><?php wp_nav_menu(array('menu'=>'lien-externe-1')); ?></div>
    <div><?php wp_nav_menu(array('menu'=>'lien-externe-2')); ?></div>
    <div><?php ?></div>
</section>



</footer>
<?php wp_footer(); ?>
</body>
</html>