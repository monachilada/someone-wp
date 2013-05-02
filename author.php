<?php
/**
 * The template for displaying Author Archive pages
 *
 * Please see /external/starkers-utilities.php for info on Starkers_Utilities::get_template_parts()
 *
 * @package 	WordPress
 * @subpackage 	Starkers
 * @since 		Starkers 4.0
 */
?>
<?php get_template_part('parts/header'); ?>

<?php if ( have_posts() ): the_post(); ?>

<h2>Author Archives: <?php echo get_the_author(); rewind_posts(); ?></h2>
<?php  get_template_part('parts/loop'); ?>

<?php else: ?>

<h2>No posts to display for <?php echo get_the_author() ; ?></h2>

<?php endif; ?>

<?php get_template_part('parts/footer'); ?>