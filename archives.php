

<?php if(have_posts()) : while(have_posts()) : the_post(); ?>
<?php include ( TEMPLATEPATH . '/breadcrumbs.php'); ?>
<h1><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h1>


<?php 

/*
Template Name:Intro
 */

 get_header();

?>

<div  id="page-wrap" class="backgroundmsts">

    <article class="item01">
      <h1>Apostolado Católico,</h1>
      <h1>Mujer ¡si tú Supieras!</h1>      
    </article>


<section class="container">
  <a href="home.php">
    <div class="zerogrid">
		<article class="item02">
			<a href="home/">
				<img src="<?php echo  IMAGES; ?>/logo-msts.jpg" alt="">
			</a>

      <a class="entrar" href="home/">ENTRAR</a>
		</article>
    <!-- div class="item04">
      
    </div -->    
		<div class="borrar"></div>
    </div>		
    </a>
</section>

    <article class="item03">
      <h2>“Jesús le respondió:” Si conocieras el don de Dios y quién es el que te dice: Dame de beber, tú le habrías pedido a él, y él te habría dado agua viva. ” Jn 4,10 </h2>
        <div id="loquesuena">
          <p><audio preload="auto" controls autoplay src="<?php echo IMAGES; ?>/mujer-si-tu-supieras.mp3" id="demo"></audio></p>
          <div>
            <button class="reproducir" onclick="document.getElementById('demo').play()">&nbsp;</button>
            <button class="pausa" onclick="document.getElementById('demo').pause()">&nbsp;</button>
            <button class="aumento" onclick="document.getElementById('demo').volume+=0.1">&nbsp;</button>
            <button class="disminuido" onclick="document.getElementById('demo').volume-=0.1">&nbsp;</button>
          </div>

        </div>  

    </article>

<div style="clear: both; "></div>
</div>