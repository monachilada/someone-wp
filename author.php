<?php get_template_part('parts/header'); ?>

<?php if ( have_posts() ): the_post(); ?>

<h2><? _e('Author Archives') ?>: <?php echo get_the_author(); rewind_posts(); ?></h2>
<?php  get_template_part('parts/loop'); ?>

<?php else: ?>

<h2><? _e('No posts to display for') ?> <?php echo get_the_author() ; ?></h2>

<?php endif; ?>

<?php get_template_part('parts/footer'); ?>