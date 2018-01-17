<?php get_header(); ?>

<h1><?php printf( esc_html__( 'Search results: “%s”', 'jast' ), get_search_query() ); ?></h1>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	<?php get_template_part( 'template-parts/entry', get_post_type() ); ?>
<?php endwhile; ?>
	<?php the_posts_pagination(); ?>
<?php else : ?>
	<?php echo wpautop( jast_nothing_found() ); ?>
<?php endif; ?>

<?php get_sidebar(); ?>

<?php get_footer();
