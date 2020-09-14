<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package ww-theme
 */

?>

<section class="main-section">
	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<div class="article-content">
			<?php
			the_content()
			?>
		</div><!-- .article-content -->
	</article><!-- #post-<?php the_ID(); ?> -->
</section>
