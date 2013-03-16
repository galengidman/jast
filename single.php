<?php get_header(); ?>

<div class="primary">

	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

			<header class="entry-header">
				<h1><?php the_title(); ?></h1>
				<div class="meta">
					<?php echo the_time('F j, Y') ?>
					<span class="sep">/</span>
					<a href="<?php comments_link(); ?>"><?php comments_number(); ?></a>
				</div>
			</header>

			<div class="entry-body">
				<?php the_content(); ?>
			</div>

		</article>

		<?php comments_template(); ?>

	<?php endwhile; else: ?>

		<p class="no-entries-found">No entries found.</p>

	<?php endif; ?>

</div>

<?php get_sidebar(); ?>

<?php get_footer(); ?>