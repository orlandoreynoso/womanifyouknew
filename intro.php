<?php 

/*
Template Name:Intro
 */

 get_header();

 ?>



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

    <article class="slogan">
      <h2 class="slogan-intro">“Jesús le respondió:” Si conocieras el don de Dios y quién es el que te dice: Dame de beber, tú le habrías pedido a él, y él te habría dado agua viva. ” Jn 4,10 </h2>
        <div id="loquesuena">
          <p><audio preload="auto" controls autoplay  src="<?php echo IMAGES; ?>/mujer-si-tu-supieras.mp3" id="demo"></audio></p>
          <div>
            <button class="reproducir" onclick="document.getElementById('demo').play()">&nbsp;</button>
            <button class="pausa" onclick="document.getElementById('demo').pause()">&nbsp;</button>
            <button class="aumento" onclick="document.getElementById('demo').volume+=0.1">&nbsp;</button>
            <button class="disminuido" onclick="document.getElementById('demo').volume-=0.1">&nbsp;</button>
          </div>

        </div>  

    </article>



<?php 

/*
if (!is_page(11)) {
    get_footer();
}

else{
  
}

*/
 ?>
