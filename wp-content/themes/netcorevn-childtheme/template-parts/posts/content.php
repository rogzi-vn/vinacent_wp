<?php
/**
 * Posts content.
 *
 * @package          Flatsome\Templates
 * @flatsome-version 3.16.0
 */

?>
<div class="entry-content">
	<?php if ( flatsome_option('blog_show_excerpt') || is_search())  { ?>
	<div class="entry-summary">
		<?php the_excerpt(); ?>
		<div class="text-<?php echo get_theme_mod( 'blog_posts_title_align', 'center' );?>">
			<a class="more-link button primary is-smaller" href="<?php echo get_the_permalink(); ?>"><?php _e('Đọc thêm', 'flatsome'); ?></a>
		</div>
	</div>
	<?php } else { ?>
	<?php the_content( __( 'Đọc thêm', 'flatsome' ) ); ?>
	<?php
		wp_link_pages();
	?>
<?php }; ?>

</div>
