<?php
/**
 * Template Name: Insurance
 */

get_header(); ?>
<?php include(get_template_directory().'/includes/random-banner.php'); ?>

<div id="insur" class="pagewrap"> 
	<?php get_sidebar(); ?>
	<div class="continsur">
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
			<?php the_content(); ?>
		<?php endwhile; endif; ?>
	</div>
	<div style="clear:both"></div>
</div>
<?php get_footer(); ?>