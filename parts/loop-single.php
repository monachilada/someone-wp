<?php while ( have_posts() ) : the_post(); ?>
	<article>
		<h3><?php the_title(); ?></h3>
		<time datetime="<?php the_time( 'Y-m-d' ); ?>" pubdate><?php the_date(); ?> <?php the_time(); ?></time>
		<?php the_content(); ?>
	</article>
<?php endwhile; ?>