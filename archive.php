<?php get_header(); ?>

<div class="primary">

	<h1 class="page-title"><?php jast_archive_title(); ?></h1>

	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

			<header class="entry-header">
				<h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
				<div class="meta">
					<?php echo the_time('F j, Y') ?>
					<span class="sep">/</span>
					<a href="<?php comments_link(); ?>"><?php comments_number(); ?></a>
				</div>
			</header>

			<div class="entry-body">
				<?php the_excerpt(); ?>
			</div>

		</article>

	<?php endwhile; ?>

		<?php posts_nav_link(); ?>

	<?php else: ?>

		<p class="no-entries-found">No entries found.</p>

	<?php endif; ?>

</div>

<?php get_sidebar(); ?>

<?php get_footer(); ?>