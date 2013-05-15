<?php while ( have_posts() ) : the_post(); ?>
	<article>
		<h2><?php the_title(); ?></h2>
		<? if(is_single()): ?>
			<time datetime="<?php the_time( 'Y-m-d' ); ?>" pubdate><?php the_date(); ?> <?php the_time(); ?></time>
		<? endif; ?>
		<?php the_content(); ?>
	</article>
<?php endwhile; ?>