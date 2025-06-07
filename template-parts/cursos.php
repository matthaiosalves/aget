<section class="cursos position-relative" style="padding-top:70px;">
  <div class="container-fluid">
    <div class="row" style="position:absolute;top:-30px;">
      <div class="boxTag cardTop" style="background-color:#00913B;width:370px;height:55px;">
        <p class="tag">Nossos Cursos</p>
      </div>
    </div>

    <div class="row justify-content-center" style="margin-bottom:50px;">
      <?php
      $args = array(
        'post_type' => 'curso',
        'posts_per_page' => 3
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
              <img src="<?php echo get_template_directory_uri(); ?>/img/arrow.svg" alt="Icone de setinha" class="img-fluid" width="15" height="18" loading="lazy">
            </a>
          </div>
      <?php
        endwhile;
        wp_reset_postdata();
      else :
        echo '<p class="text-muted">Nenhum curso disponível no momento.</p>';
      endif;
      ?>
    </div>

    <div class="row boxBarrer" style="padding-bottom:70px;">
      <div class="lineBarrer"></div>
      <a href="/cursos/" class="btn btn-verMais">
        <img src="<?php echo get_template_directory_uri(); ?>/img/add-circle.svg" alt="Icone que simboliza ver mais" class="img-fluid" width="28" height="28" loading="lazy">
        Ver Mais
      </a>
      <div class="lineBarrer"></div>
    </div>

  </div>
</section>