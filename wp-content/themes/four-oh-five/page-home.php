<!-- THE CONTENT FOR MY PORTFOLIO HOME PAGE WILL GO HERE. ONLY THE DIVS WILL BE IN HTML. ALL THE CONTENT WILL BE INPUTED INTO THE WORDPRESS DASHBOARD UNDER "PAGES", AND THEN "HOME." ADD ADVANCED CUSTOM FORMS WHOSE TEMPLATE IS SAVED TO HOME TO VIEW AND USE THEM ON THE HOME PAGE.  -->
<?php

/*
 * Template Name: Home
 */
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Four_Oh_Five
 * @since 1.0
 * @version 1.0
 */

get_header(); ?>

<?php
	while ( have_posts() ) : the_post(); ?>
	<!-- if there is a post, show the post -->

<div class="container-fluid py-4 ml-0 mr-0">
	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

				<div class = "container">

					<div class= "row">
						<div class= "col-sm-6">
							<img src="<?php the_post_thumbnail_url( 'full' ); ?>" alt="">
							<!-- using the built in wordpress php function to display the flowers -->
						</div>
						<div class= "col-12 col-sm-6">
							<?php the_title( '<h1 class="display-4">', '</h1>' ); ?>
							<!-- in the Home dashboard edit page, this is the "Title" -->
							<?php if(the_field('home_subtitle')): ?>
								<!-- if the custom field named "home_subtitle" is filled out on the dashboard edit home page, then...... -->
								<h1 class="display-4"><?php the_field('home_subtitle'); ?></h1>
								<!-- then.... show what is typed in that field in a h2 tag right here. -->
							<?php endif; ?>
							<!-- reuse the above if endif statements for all advanced custom forms used on the home page -->
							<?php
							the_content();
							fourohfive_edit_link( get_the_ID() ); ?>
						</div>
					</div>

					<div class="row mt-5">
						<div class="col-sm-6">
						<h1>About Me</h1>
							<?php if(the_field('about_me')): ?>
								<!-- if the custom field named "home_subtitle" is filled out on the dashboard edit home page, then...... -->
								<h1 class="display-4"><?php the_field('about_me'); ?></h1>
								<!-- then.... show what is typed in that field in a h2 tag right here. -->
							<?php endif; ?>
							<!-- reuse the above if endif statements for all advanced custom forms used on the home page -->
							<?php
							fourohfive_edit_link( get_the_ID() ); ?>
						</div>
						<div class="col-sm-6">
							<?php if(the_field('about_me_photo')): ?>
								<!-- if the custom field named "home_subtitle" is filled out on the dashboard edit home page, then...... -->
								<img src="<?php the_field('about_me_photo'); ?>"></img>
								<!-- then.... show what is typed in that field in a h2 tag right here. -->
							<?php endif; ?>
							<!-- reuse the above if endif statements for all advanced custom forms used on the home page -->
							<?php
							fourohfive_edit_link( get_the_ID() ); ?>
						</div>
					</div>


				</div>


	</article>
</div>

	<?php endwhile;
?>

<?php get_footer();

