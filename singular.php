<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Hamworks
 */

get_header(); ?>
<?php get_template_part( 'template-parts/breadcrumb' ); ?>

<main id="primary">
	<?php
	while ( have_posts() ) :
		the_post();

		get_template_part( 'template-parts/content', get_post_type() );
	endwhile;
	?>

</main>
<?php
get_footer();
