<?php 

/*
Template Name: refresh01
 */

 get_header();


?>
<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

                    <?php if ( is_front_page() ) { ?>
                        <h2><?php the_title(); ?></h2>
                    <?php } else { ?>    
                        <h1><?php the_title(); ?></h1>
                    <?php } ?>                

                        <?php the_content(); ?>
                        <?php wp_link_pages( array( 'before' => '' . __( 'Pages:', 'twentyten' ), 'after' => '' ) ); ?>
                        <?php edit_post_link( __( 'Edit', 'twentyten' ), '', '' ); ?>

                <?php // comments_template( '', true ); ?>

<?php endwhile; ?>
<?php wp_reset_query(); ?>

<hr class="hr_sep" />
<!-- Inicio de POSTS -->
<h3 class="subtitulo">Entradas recientes</h3>
<?php 
      $paged = (get_query_var('page')) ? get_query_var('page') : 1;
      $args=array(
         'showposts'=>5,
         'paged'=>$paged,
         'cat'=>-4
         );
      query_posts($args);
    if ( have_posts() ) : while ( have_posts() ) : the_post();
?>


                
    <div class="post">
    <h3><a href="<?php the_permalink(); ?>" title="<?php printf( esc_attr__( 'Enlace permanente a %s', 'twentyten' ), the_title_attribute( 'echo=0' ) ); ?>" rel="bookmark"><?php the_title(); ?></a></h3>
            
            
            <?php
            if($post->post_excerpt) :
                the_excerpt();
            else :
                the_content("Continuar leyendo");
            endif
            ?>




            <div class="meta">
        <?php//  twentyten_posted_on(); ?>
            
                <?php //if ( count( get_the_category() ) ) : ?>
                    <?php // printf( __( 'en %2$s', 'twentyten' ), 'entry-utility-prep entry-utility-prep-cat-links', get_the_category_list( ', ' ) ); ?>
                <?php  // endif; ?>

                <?php // if (comments_open()) :
              //  comments_popup_link( __( 'Dejar un comentario', 'twentyten' ), __( '1 comentario', 'twentyten' ), __( '% comentarios', 'twentyten' ) );
               // endif; ?>

                <?php edit_post_link( __( '(Editar)', 'twentyten' ), '', '' ); ?>
             </div><!-- endof .meta -->

        <?php comments_template( '', true ); ?>
    </div><!-- endof .post -->
                

    <?php endwhile; ?>

    <div class="navigation">
      <div class="nav-alignleft"><?php next_posts_link('Entradas antiguas') ?></div>
      <div class="nav-alignright"><?php previous_posts_link('Entradas recientes') ?></div>
    </div>

    <?php endif; ?>
<!-- Fin de POSTS -->
<?php   get_footer();  ?>