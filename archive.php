<?php get_header(); ?>

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

<?php get_footer(); ?>