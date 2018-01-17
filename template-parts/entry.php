<article <?php post_class( 'entry' ); ?>>
	<header class="entry-header">
		<?php the_title( '<h1 class="entry-title"><a href="' . esc_url( get_permalink() ) . '">', '</a></h1>' ); ?>
		<p class="entry-meta"><?php jast_entry_meta(); ?></p>
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
