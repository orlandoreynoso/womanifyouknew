<?php 



if (in_category(10)) 
{ // Si el post pertenece a la categoría con id = 1
    include(TEMPLATEPATH . '/programas.php');
} 

elseif (in_category(3)) 
{ // Si el post pertenece a la categoría con id = 2
    include(TEMPLATEPATH . '/reflexiones.php'); 
} 

elseif (in_category(6)) 
{ // Si el post pertenece a la categoría con id = 2
    include(TEMPLATEPATH . '/citas.php');    
} 

elseif (in_category(7)) 
{ // Si el post pertenece a la categoría con id = 2
    include(TEMPLATEPATH . '/testimonios.php');    
} 

elseif (in_category(8)) 
{ // Si el post pertenece a la categoría con id = 2
    include(TEMPLATEPATH . '/anecdotas.php');        
} 

elseif (in_category(9)) 
{ // Si el post pertenece a la categoría con id = 2
    include(TEMPLATEPATH . '/oraciones.php');        
} 

elseif (in_category(11)) 
{ // Si el post pertenece a la categoría con id = 2
    include(TEMPLATEPATH . '/noticias.php');        
} 

else { // Sino, cargo otro single por defecto
    include(TEMPLATEPATH . '/home.php');
}

?>

<?php wp_link_pages(); ?>


<?php /*

<?php if(have_posts()) : while(have_posts()) : the_post(); ?>
<?php include ( TEMPLATEPATH . '/breadcrumbs.php'); ?>
<h1><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h1>

*/
?>

<?php // if(have_posts()) : ?><?php // while(have_posts()) : the_post(); ?>


<?php 

/*
	
<?php get_header(); ?>


<div id="main" class="group">

	<div id="blog" class="left-col">

		<?php if( have_posts() ): while ( have_posts() ): the_post();   ?>


		<div id="post">
			

	<h2><?php the_title( ); ?></h2>
	<div class="byline">Escrito por.. <?php the_author_posts_link(); ?>
		on <a href="<?php the_permalink(); ?>"><?php the_time('l F d, Y'); ?></a>	
		
	</div>

	<?php the_excerpt(); ?>
<?php endwhile; ?>
	
<?php endif; ?>

<div class="navi">
	<div class="right">
		<?php previous_posts_link('Anterior'); ?> / <?php next_posts_link('siguiente'); ?>
		
	</div>
	
</div>

<div id="comentarios">
<?php comments_template(); ?> 


</div>

		</div>

	</div>	
	
</div>
<?php get_footer(); ?>

*/



 ?>