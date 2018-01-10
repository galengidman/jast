<article <?php post_class( 'entry' ); ?>>
	<header class="entry-header">
		<?php the_title( '<h1 class="entry-title"><a href="' . esc_url( get_permalink() ) . '">', '</a></h1>' ); ?>

		<p class="entry-meta">
			<time datetime="<?php echo esc_attr( get_the_date( 'c' ) ); ?>"><?php echo get_the_date(); ?></time>
			<span class="sep"></span>
			<?php the_author_posts_link(); ?>
			<span class="sep"></span>
			<a href="<?php echo esc_url( get_comments_link() ); ?>"><?php comments_number(); ?></a>
		</p>
	</header>

	<div class="entry-content">
		<?php the_content(); ?>
		<?php wp_link_pages(); ?>
	</div>

	<footer class="entry-footer">
		<p class="entry-meta">
			<?php the_category( ', ' ); ?>
			<?php the_tags(); ?>
		</p>
	</footer>
</article>
