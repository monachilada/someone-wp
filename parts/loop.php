<?php while ( have_posts() ) : the_post(); ?>
	<article>
		<h3><a href="<?php esc_url( the_permalink() ); ?>" title="<? _e('Permalink to') ?><?php the_title(); ?>" rel="bookmark"><?php the_title(); ?></a></h3>
		<time datetime="<?php the_time( 'Y-m-d' ); ?>" pubdate><?php the_date(); ?> <?php the_time(); ?></time>
		<div class="content">
			<?php the_content(); ?>
		</div>
	</article>
<?php endwhile; ?>