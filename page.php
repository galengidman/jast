<?php get_header(); ?>

<div id="primary">

	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

			<header class="entry-header">
				<h1 title="<?php the_title_attribute(); ?>"><?php the_title(); ?></h1>
				<div class="published-on"><?php jast_published_on(); ?></div>
			</header>

			<div class="entry-body">
				<?php jast_entry_body( 'content' ); ?>
			</div>

			<footer class="entry-footer">
				<?php jast_post_meta(); ?>
			</footer>

		</article>

	<?php endwhile; else: ?>

		<p class="no-entries-found">No entries found.</p>

	<?php endif; ?>

</div>

<?php get_sidebar(); ?>

<?php get_footer(); ?>