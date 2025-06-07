<?php
/*
Template Name: Cursos
*/
get_header();
?>
<?php get_template_part('template-parts/banner'); ?>

<section class="cursos position-relative" id="page" style="padding-top:70px;margin-top:70px;background-color:transparent;">
  <div class="container-fluid">
    <div class="row">
      <h3 class="title">CURSOS</h3>
      <h2 class="subtitle">Impulsione Sua Carreira</h2>
      <p class="description">Aqui você encontra os Melhores Cursos de Direito Tributário!</p>
    </div>

    <div class="row justify-content-center" style="margin-bottom:50px;margin-top:50px;">
      <?php
      $args = array(
        'post_type' => 'curso',
        'posts_per_page' => -1
      );
      $query = new WP_Query($args);
      if ($query->have_posts()) :
        while ($query->have_posts()) : $query->the_post();
          $imagem = get_the_post_thumbnail_url(get_the_ID(), 'full');
          $url = get_field('url');
      ?>
          <div class="boxCurso">
            <img src="<?php echo esc_url($imagem); ?>" alt="<?php echo esc_attr(get_the_title()); ?>" class="img-fluid imagemCurso" width="371" height="360" loading="lazy">

            <a href="<?php echo esc_url($url); ?>" class="btn btn-inscrever btn-azul" target="_blank" rel="noopener">
              Inscreva-se
              <img src="<?php echo get_template_directory_uri(); ?>/img/arrow.svg" alt="Ícone de setinha" class="img-fluid" width="15" height="18" loading="lazy">
            </a>
          </div>
      <?php
        endwhile;
        wp_reset_postdata();
      else :
        echo '<p class="text-muted text-center">Nenhum curso disponível no momento.</p>';
      endif;
      ?>
    </div>

  </div>
</section>


<?php get_template_part('template-parts/agenda'); ?>
<?php get_template_part('template-parts/contato'); ?>

<?php
get_footer();
