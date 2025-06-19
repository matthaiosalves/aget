<?php
/*
Template Name: Sobre Nós
*/
get_header();
?>
<?php get_template_part('template-parts/banner'); ?>
<section class="sobreNos" style="margin-top:70px;margin-bottom:70px;">
  <div class="container-fluid">
    <div class="row">
      <h3 class="title"><?php the_title(); ?></h3>
      <h2 class="subtitle"><?php the_field('subtitulo_sobre'); ?></h2>

      <div class="boxContent" style="margin-bottom:20px;">
        <?php the_content(); ?>
      </div>
    </div>

  </div>
</section>
<?php get_template_part('template-parts/equipe'); ?>
<?php get_template_part('template-parts/agenda'); ?>
<?php get_template_part('template-parts/contato'); ?>
<?php
get_footer();
