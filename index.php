<?php get_template_part('parts/header'); ?>

<?php if ( have_posts() ): ?>

<h2><? _e('Latest Posts') ?></h2>
<?php get_template_part('parts/loop'); ?>

<?php else: ?>

<h2><? _e('No posts to display') ?></h2>

<?php endif; ?>

<?php get_template_part('parts/footer'); ?>