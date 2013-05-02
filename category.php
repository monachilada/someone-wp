<?php
/**
 * The template for displaying Category Archive pages
 *
 * Please see /external/starkers-utilities.php for info on Starkers_Utilities::get_template_parts()
 *
 * @package 	WordPress
 * @subpackage 	Starkers
 * @since 		Starkers 4.0
 */
?>
<?php get_template_part('parts/header'); ?>

<?php if ( have_posts() ): ?>

<h2>Category Archive: <?php echo single_cat_title( '', false ); ?></h2>
<?php  get_template_part('parts/loop'); ?>

<?php else: ?>

<h2>No posts to display in <?php echo single_cat_title( '', false ); ?></h2>

<?php endif; ?>

<?php get_template_part('parts/footer'); ?>