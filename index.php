<?php
/**
 * The main template file
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file 
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

<h2><? _e('Latest Posts') ?></h2>
<?php get_template_part('parts/loop'); ?>

<?php else: ?>

<h2><? _e('No posts to display') ?></h2>

<?php endif; ?>

<?php get_template_part('parts/footer'); ?>