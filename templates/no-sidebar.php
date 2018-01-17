<?php
/**
 * Template Name: No Sidebar
 */

get_header();

?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	<?php get_template_part( 'template-parts/singular', get_post_type() ); ?>
<?php endwhile; ?>
	<?php the_posts_pagination(); ?>
<?php else : ?>
	<?php echo wpautop( jast_nothing_found() ); ?>
<?php endif; ?>

<?php if ( comments_open() || get_comments_number() ) : ?>
	<?php comments_template(); ?>
<?php endif; ?>

<?php get_footer();
