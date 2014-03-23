<?php get_header(); ?>
<?php include('includes/random-banner.php'); ?>
<div class="pagewrap">
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		<?php the_content(); ?>
	<?php endwhile; endif; ?>
</div>
<?php get_footer(); ?>