<?php if ( post_password_required() ) return; ?>

<div id="comments">
	<?php if ( have_comments() ) : ?>
		<h2><?php comments_number(); ?></h2>

		<?php the_comments_navigation(); ?>

		<ol class="comment-list">
			<?php wp_list_comments( [
				'style'      => 'ol',
				'short_ping' => true,
			] ); ?>
		</ol>

		<?php the_comments_navigation(); ?>

		<?php if ( ! comments_open() ) : ?>
			<p><?php esc_html_e( 'Comments are closed.', 'jast' ); ?></p>
		<?php endif; ?>
	<?php endif; ?>

	<?php comment_form(); ?>
</div>
