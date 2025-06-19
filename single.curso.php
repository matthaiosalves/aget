<?php
get_header();
?>
<?php get_template_part('template-parts/banner'); ?>

<section class="sobreNos">
  <div class="container-fluid">
    <div class="row">
      <!-- <h3 class="title">Sobre nós</h3> -->
      <h2 class="subtitle"><?php the_title(); ?></h2>

      <div class="boxContent">
        <?php the_content(); ?>
      </div>
    </div>

  </div>
</section>

<?php get_template_part('template-parts/contato'); ?>

<?php
get_footer();
