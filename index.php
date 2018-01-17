<?php get_header(); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	<?php get_template_part( 'template-parts/entry', get_post_type() ); ?>
<?php endwhile; ?>
	<?php the_posts_pagination(); ?>
<?php else : ?>
	<?php echo wpautop( jast_nothing_found() ); ?>
<?php endif; ?>

<?php get_sidebar(); ?>

<?php get_footer();
