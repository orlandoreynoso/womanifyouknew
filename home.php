<?php 

/*
Template Name: Home
 */

 get_header();


?>

<article class="item01">    
    <h1>Apostolado Católico</h1>      
    <h1>Mujer ¡si tú Supieras!</h1>                      
    <h2>“Jesús le respondió:” Si conocieras el don de Dios y quién es el que te dice: Dame de beber, tú le habrías pedido a él, y él te habría dado agua viva. ” Jn 4,10</h2>
</article>  

<header>  

          <!-- nav id="menu" -->    
   

         <!-- nav id="nav" class=" " -->
         <nav>
              <?php  showMenu(); // wp_page_menu('register_nav_menus'); ?> 
         </nav>

</header>




<section id="content">  <!--- BEGING THE PRINCIPAL SECTION OF ALL CONTENT -->

  <div class="wrap-content zerogrid">

       <!-- INICIA DIV DE LOGO Y YOUTUBE  -->
      <div style="clear: both"></div>    
      <div id="block01">
      <div class="col-logo">
        <div class="wrap-col contenido-logo">
          <div class="detalle-logo">
                <a class="linkopacity"  href="conocenos/">
                  <img src="<?php echo IMAGES; ?>/logo-msts.jpg" alt="">
                  <h1>Mujer ¡si tú Supieras!</h1>
                </a>
          </div>          
        </div>
      </div>

      <div class="col-youtube">
        <div class="wrap-col espiritualidad">
          <div class="contenido-espiritualidad">
              <iframe width="420" height="315" src="https://www.youtube.com/embed/geXxFkLfCrQ" frameborder="0" allowfullscreen></iframe>    
          </div>                      
        </div>
      </div>
    <div style="clear: both"></div>
    </div>
        <!-- FINALIZA DIV DE LOGO Y YOUTUBE -->

    <!--  INICIA DIV DE ICONOS -->

    <article class="iconos">
      <?php menu_mujer(); ?>        
    </article>
    <!-- FINALIZA DIV DE ICONOS -->





<section id="block02">
      <div style="clear: both"></div>
    <div class="col-2-3">
     <div class="mapeo">
          <!-- Breadcrumb -->
          <?php the_breadcrumb(); ?>
          <!-- Fin Breadcrumb -->
     </div> 

      <!-- div class="titulo-cartelera"><h2>Actualidad</h2></div -->
    
    <div class="contenido-cartelera">
      
        <div id="compartir">    
        <p>Compartir  &raquo; </p>          
        <!-- AddThis Button BEGIN -->
        <div class="addthis_toolbox addthis_default_style ">
        <a class="addthis_button_preferred_1"></a>
        <a class="addthis_button_preferred_2"></a>
        <a class="addthis_button_preferred_3"></a>
        <a class="addthis_button_preferred_4"></a>
        <a class="addthis_button_compact"></a>
        <a class="addthis_counter addthis_bubble_style"></a>
        </div>
        <script type="text/javascript">var addthis_config = {"data_track_clickback":true};</script>
        <script type="text/javascript" src="http://s7.addthis.com/js/250/addthis_widget.js#pubid=ra-4def925768ffe7cc"></script>
        <!-- AddThis Button END -->
        </div> 

        <div class="clearing"></div>

          <?php
          // Start the loop.
          while ( have_posts() ) : the_post();

            // Include the page content template.
            get_template_part( 'content', 'page' );

            // If comments are open or we have at least one comment, load up the comment template.
            if ( comments_open() || get_comments_number() ) :
              comments_template();
            endif;

          // End the loop.
          endwhile;
          ?>

         <?php  the_content(); ?> 

        <div class="clearing"></div>
         <div class="division-home"><p>&nbsp;</p></div>        

        <div class="contenido-cartelera-retiro">
                <div class="titulo-cartelera"><h2>Próximo retiro</h2></div>
                <?php  if (is_page(7)) {   dynamic_sidebar('previo-retiro');   }    ?>                  
        </div>

        <div class="contenido-cartelera-retiro">
                <div class="titulo-cartelera"><h2>Próximo desayuno</h2></div>
                <?php  if (is_page(7)) {   dynamic_sidebar('previo-desayuno');   }   ?>                
        </div>

        <div class="clearing"></div>

    </div>


    </div>

     <div class="col-1-5">
              <div class="titulo-cartelera"><h2>Últimas actualizaciones</h2></div>
              <div class="lateral">
                <?php  if (is_page(7)) {   dynamic_sidebar('ultimas-actualizaciones');   }       ?>
              </div>  
      </div>     


      <div style="clear: both"></div>
</section>  <!-- ENDED THE PRINCIPAL SECTION OF THE CONTENT  -->
  

<?php 

   if (is_page(7)) {
     get_footer();
   }

?>