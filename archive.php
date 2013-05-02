<?php
/**
 * The template for displaying Archive pages.
 *
 * Used to display archive-type pages if nothing more specific matches a query.
 * For example, puts together date-based pages if no date.php file exists.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
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

<?php if ( is_day() ) : ?>
<h2><? _e('Archive') ?>: <?php echo  get_the_date( 'D M Y' ); ?></h2>							
<?php elseif ( is_month() ) : ?>
<h2><? _e('Archive') ?>: <?php echo  get_the_date( 'M Y' ); ?></h2>	
<?php elseif ( is_year() ) : ?>
<h2><? _e('Archive') ?>: <?php echo  get_the_date( 'Y' ); ?></h2>								
<?php else : ?>
<h2><? _e('Archive') ?></h2>	
<?php endif; ?>
<?php get_template_part('parts/loop'); ?>

<?php else: ?>

<h2><? _e('No posts to display') ?></h2>

<?php endif; ?>

<?php get_template_part('parts/footer'); ?>