<?php

/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package AGET
 */

get_header();
?>
<?php get_template_part('template-parts/banner'); ?>


<section class="sobreNos" style="margin-top:70px;margin-bottom:70px;">
  <div class="container-fluid">
    <div class="row">
      <h3 class="title">Sobre nós</h3>
      <h2 class="subtitle"><?php the_field('titulo'); ?></h2>

      <div class="boxContent" style="margin-bottom:20px;">
        <?php the_field('conteudo'); ?>
      </div>
    </div>

    <div class="row boxBarrer">
      <div class="lineBarrer"></div>
      <a href="<?php the_field('ver_mais'); ?>" class="btn btn-verMais">
        <img src="<?php echo get_template_directory_uri(); ?>/img/add-circle.svg" alt="Icone que simboliza ver mais" class="img-fluid" width="28" height="28" loading="lazy">
        Ver Mais
      </a>
      <div class="lineBarrer"></div>
    </div>

    <!-- <div class="row justify-content-center align-items-center" style="margin-top:20px;">
      <a href="/" class="btn btn-zap">
        Entrar no grupo
        <img src="<?php echo get_template_directory_uri(); ?>/img/whatsapp.svg" alt="Icone que simboliza ver mais" class="img-fluid" width="45" height="45" loading="lazy">
      </a>
    </div> -->

  </div>
</section>

<?php get_template_part('template-parts/cursos'); ?>
<?php get_template_part('template-parts/agenda'); ?>
<?php get_template_part('template-parts/youtube'); ?>
<?php get_template_part('template-parts/contato'); ?>
<?php get_template_part('template-parts/button-float'); ?>


<?php
get_footer();
