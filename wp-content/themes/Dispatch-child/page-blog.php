<?php
$args = array( 'posts_per_page' => 10, 'order'=> 'ASC', 'orderby' => 'title' );
$postslist = get_posts( $args );
foreach ( $postslist as $post ) :
  setup_postdata( $post ); ?> 
	<div>
		<?php the_date(); ?>
		<br />
		<?php the_title(); ?>   
		<?php the_excerpt(); ?>
	</div>
<?php
endforeach; 
wp_reset_postdata();
?>

<?php get_footer(); // Loads the footer.php template. ?>