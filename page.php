 

<?php if(have_posts()) : while(have_posts()) : the_post(); ?>
<?php include ( TEMPLATEPATH . '/breadcrumbs.php'); ?>
<h1><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h1>



<?php // if(have_posts()) : ?><?php // while(have_posts()) : the_post(); ?>

<?php 
/*

<?php get_header(); ?>


<div id="main" class="group">

	<div id="blog" class="left-col">

		<?php if( have_posts() ): while ( have_posts() ): the_post();   ?>


		<div id="post">
			
	<?php the_content('leamos masss'); ?>

<?php endwhile; ?>
	
<?php endif; ?>

		</div>

	</div>	
	
</div>

<?php get_footer(); ?>
*/

?>