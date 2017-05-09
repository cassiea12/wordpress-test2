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
<script src="https://use.fontawesome.com/c51cd9b84c.js"></script>
<?php
	while ( have_posts() ) : the_post(); ?>
	<!-- if there is a post, show the post -->

<div class="container-fluid pl-3 pr-3">
	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
					<!-- Hero Section -->
					<div class= "row pt-3 pb-3 bg-myblack">
						<div class= "col-sm-7">
							<img src="<?php the_post_thumbnail_url( 'full' ); ?>" alt="">
						</div>
						<div class= "col-sm-5 pt-4">
<!-- Hero Title -->
							<?php the_title( '<h1 class="display-4 text-mywhite">', '</h1>' ); ?>
							<?php if(get_field('home_subtitle')): ?>
<!-- Hero Subtitle -->
								<h2 class="display-6 text-myred"><?php the_field('home_subtitle'); ?></h2>
							<?php endif; ?>
							<?php if(get_field('linkedin')): ?>
<!-- linkedIn Button -->
							<br />
								<a href = "<?php the_field('linkedin'); ?>" target="_blank"><button type = "button" class="btn btn-primary"><i class="fa fa-linkedin-square" aria-hidden="true"></i>  linkedIn</button></a>
								<?php endif; ?>
						</div>
					</div>
					<div class="row pt-5 pb-5 pl-5 pr-5" id="aboutme">
						<div class="col-sm-12">
							<h2 class="text-myred">About Me</h2>
						</div>
						<div class="col-sm-8 pl-5 pr-5 pt-5">
								<?php if(get_field('about_me')): ?>
<!-- About Me Text -->
									<p class="h5 lineheight"><?php the_field('about_me'); ?></p>
								<?php endif; ?>
						</div>
						<div class="col-sm-4">
								<?php if(get_field('about_me_photo')): ?>
<!-- About Me Photo -->
									<img style="width:70%; border-radius: 50%;" src="<?php the_field('about_me_photo'); ?>" alt="">
								<?php endif; ?>
						</div>
					</div>
					<div class="row pt-5 pb-5 pl-5 pr-5 bg-mygrey" id="myskills">
						<div class="col-sm-12">
							<h2>My Skills</h2>
						</div>
						<div class="col-sm-6 pl-5 pr-5 pt-5">
<!-- skills bars go here -->
							<?php
							// check if the repeater field has rows of data
							if( have_rows('the_skill') ):
							 	// loop through the rows of data
							    while ( have_rows('the_skill') ) : the_row();
							        // display a sub field value
							        $skill_title = get_sub_field('skill_title');
							        $skill_percent = get_sub_field('skill_percent');
							        echo '<div class="progress mt-3">';
										  echo '<div class="progress-bar bg-myred" role="progressbar" style="width: '.$skill_percent.'%" aria-valuenow="'.$skill_percent.'" aria-valuemin="0" aria-valuemax="100">'.$skill_title.'</div>';
										echo '</div>';
							    endwhile;
							else :
							    // no rows found
							endif;
							?>
						</div>
						<div class="col-sm-6 pl-5 pr-5 pt-5">
							<?php if(get_field('skills_description')): ?>
<!-- Skills Text -->
									<p class="h5 lineheight"><?php the_field('skills_description'); ?></p>
								<?php endif; ?>
								<?php if(get_field('resume')): ?>
									<br />
<!-- Resume Button -->
									<a class="btn btn-primary" href="<?php the_field('resume'); ?>"><i class="fa fa-download" aria-hidden="true"></i> View Resume</a>
								<?php endif; ?>
						</div>
					</div>
					<div class="row pt-5 pb-5 pl-5 pr-5" id="myportfolio">
					<div class="col-sm-12">
						<h2 class="text-center text-myred">Portfolio</h2>
					</div>
						<div class="col-sm-12 pt-5">
<!-- Portfolio Gallery-->
								<?php
								$images = get_field('portfolio');
								if( $images ): ?>
								    <ul class="list-unstyled">
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
					<div class="row pt-5 pb-5 pl-5 pr-5" id="contactme">
						<div class="col-sm-12 pl-5 pr-5 pt-5">
							<h2 class="text-center">Contact Me</h2>
<!-- Contact Me Form -->
							<div class="row">
								<div class="col-sm-12 pt-5">
									<?php the_content();?>
								</div>
							</div>
						</div>
					</div>
	</article>
</div>

	<?php endwhile;?>
<?php get_footer();

