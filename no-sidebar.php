<?php /* Template Name: No Sidebar */ ?>

<?php get_header(); ?>

<div id="primary">

	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

			<header>
				<h1 title="<?php the_title_attribute(); ?>"><?php the_title(); ?></h1>
				<div class="meta"><?php jast_published_on(); ?></div>
			</header>

			<div class="entry-body">
				<?php jast_entry_body(); ?>
			</div>

		</article>

		<?php comments_template(); ?>

	<?php endwhile; else: ?>

		<p class="no-entries-found">No entries found.</p>

	<?php endif; ?>

</div>

<?php get_footer(); ?>