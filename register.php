<?php /* Template Name: Register */ ?>

<?php get_header(); ?>

<div class="reg-bg">
	<div class="container">
		<div class="page-heading-wrapper">
			<h1><?php the_field('page_title');?></h1>
			<h2><?php the_field('subheading');?></h2>
			<h3><?php the_field('subheading_secondary');?></h3>
		</div>
	</div>
</div>

<div class="container">
	<div class="reg-wrapper">
		<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
        <?php the_content(); ?>
        <?php endwhile; ?>
	</div>
</div>

<?php get_footer(); ?>