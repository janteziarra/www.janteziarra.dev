<?php 
// Loads the header.php template.
get_header();
?>

<?php
// Dispay Loop Meta at top
get_template_part( 'template-parts/loop-meta' ); // Loads the template-parts/loop-meta.php template to display Title Area with Meta Info (of the loop)

// Template modification Hook
do_action( 'hoot_template_before_content_grid', 'single.php' );
?>

<div class="grid">

	<?php
	// Template modification Hook
	do_action( 'hoot_template_before_main', 'single.php' );
	?>

	<main <?php hoot_attr( 'content' ); ?>>

		<?php
		// Template modification Hook
		do_action( 'hoot_template_main_start', 'single.php' );

		// Checks if any posts were found.
		if ( have_posts() ) :
		?>

			<div id="content-wrap" class="content-area yellow">

				<?php
				// Begins the loop through found posts, and load the post data.
				while ( have_posts() ) : the_post();

					// Loads the template-parts/content-{$post_type}.php template.
					hoot_get_content_template();

				// End found posts loop.
				endwhile;
				?>

			</div><!-- #content-wrap -->

			<?php
			// Loads the template-parts/loop-nav.php template.
			if ( hoot_get_mod( 'post_prev_next_links' ) )
				get_template_part( 'template-parts/loop-nav' );

			// Template modification Hook
			do_action( 'hoot_template_after_content_wrap', 'single.php' );

			// Loads the comments.php template
			if ( !is_attachment() ) {
				comments_template( '', true );
			};

		// If no posts were found.
		else :

			// Loads the template-parts/error.php template.
			get_template_part( 'template-parts/error' );

		// End check for posts.
		endif;

		// Template modification Hook
		do_action( 'hoot_template_main_end', 'single.php' );
		?>

	</main><!-- #content -->

	<?php
	// Template modification Hook
	do_action( 'hoot_template_after_main', 'single.php' );
	?>

	<?php hoot_get_sidebar( 'primary' ); // Loads the template-parts/sidebar-primary.php template. ?>

</div><!-- .grid -->

<?php get_footer(); // Loads the footer.php template. ?>