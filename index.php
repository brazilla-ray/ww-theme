<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package ww-theme
 */

get_header();
?>

<main id="primary" class="site-main">

<?php 
// if the post type is builtin, show the content.
// otherwise, modify the query to get a custom post type (but which one?)
if ( have_posts() ) : 
	while ( have_posts() ) : the_post(); 
	endwhile;
else :
	_e( 'Sorry, no posts matched your criteria.', 'textdomain' );
endif; 
?>
<pre>
	<?php
	$args = array(
       'public'   => true,
       '_builtin' => false,
    );

    $output = 'names'; // names or objects, note names is the default
    $operator = 'and'; // 'and' or 'or'

    $post_types = get_post_types( $args, $output, $operator ); 

    foreach ( $post_types  as $post_type ) {

       echo '<p>' . $post_type . '</p>';
    }

    ?>
</pre>
</main><!-- #main -->

<?php
get_footer();
