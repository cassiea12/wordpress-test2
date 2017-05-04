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

<div class="container-fluid py-4 ml-3 mr-3">
	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

					<div class= "row">
						<div class= "col-sm-6">
							<img src="<?php the_post_thumbnail_url( 'full' ); ?>" alt="">
							<!-- using the built in wordpress php function to display the flowers -->
						</div>
						<div class= "col-12 col-sm-6">
							<?php the_title( '<h1 class="display-4">', '</h1>' ); ?>
							<!-- in the Home dashboard edit page, this is the "Title" -->
							<?php if(get_field('home_subtitle')): ?>
								<!-- if the custom field named "home_subtitle" is filled out on the dashboard edit home page, then...... -->
								<h2 class="display-6"><?php the_field('home_subtitle'); ?></h2>
								<!-- then.... show what is typed in that field in a h2 tag right here. -->
							<?php endif; ?>
							<!-- reuse the above if endif statements for all advanced custom forms used on the home page -->
							<?php if(get_field('linkedin')): ?>
								<a href = "<?php the_field('linkedin'); ?>" target="_blank"><button>linkedIn</button></a>
								<?php endif; ?>
											<?php fourohfive_edit_link( get_the_ID() ); ?>
						</div>
					</div>
					<div class="row mt-5">
						<div class="col-sm-8 pl-5 pr-5">
							<h2 class="display-6">About Me</h2>
								<?php if(get_field('about_me')): ?>
									<p><?php the_field('about_me'); ?></p>
								<?php endif; ?>
						</div>
						<div class="col-sm-4">
								<?php if(get_field('about_me_photo')): ?>
									<img src="<?php the_field('about_me_photo'); ?>" alt="">
								<?php endif; ?>
						</div>
					</div>
					<div class="row mt-5">
						<div class="col-sm-6 pl-5 pr-5">
							<h2 class="display-6">My Skills</h2>
							<!-- skills bars go here -->
						</div>
						<div class="col-sm-6 pl-5 pr-5">
							<?php if(get_field('skills_description')): ?>
									<p><?php the_field('skills_description'); ?></p>
								<?php endif; ?>
								<?php if(get_field('resume')): ?>
									<button><a href = "<?php the_field('resume'); ?>"></a>View Resume</button>
								<?php endif; ?>
						</div>
					</div>
					<div class="row mt-5">
						<div class="col-sm-12">
						<h2 class="text-center">Portfolio</h2>
							<?php

							$images = get_field('portfolio');

							if( $images ): ?>
							    <ul>
							        <?php foreach( $images as $image ): ?>
							            <li class="float-left">
							                <a href="<?php echo $image['url']; ?>">
							                     <img src="<?php echo $image['sizes']['thumbnail']; ?>" alt="<?php echo $image['alt']; ?>" />
							                </a>
							                <p><?php echo $image['caption']; ?></p>
							            </li>
							        <?php endforeach; ?>
							    </ul>
							<?php endif; ?>
						</div>
					</div>
					<div class="row mt-5">
						<div class="col-sm-12">
							<h2 class="text-center">Contact Me</h2>
						</div>
					</div>

	</article>
</div>

	<?php endwhile;?>

<?php get_footer();

