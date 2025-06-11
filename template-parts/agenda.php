<section class="agenda" style="padding-top:60px;padding-bottom:80px;">
  <div class="container-fluid">
    <div class="row">
      <div class="boxTag cardTop" style="background-color:#00913B;width:217px;height:55px;">
        <p class="tag">Agenda</p>
      </div>

      <h2 class="title">Fique por dentro de todos nossos eventos e<br> não perca nenhuma novidade</h2>
    </div>

    <div class="row justify-content-center">
      <?php
      $args = array(
        'post_type' => 'agenda',
        'posts_per_page' => 3
      );
      $query = new WP_Query($args);

      if ($query->have_posts()) :
        while ($query->have_posts()) : $query->the_post();
          $titulo = get_the_title();
          $imagem = get_the_post_thumbnail_url(get_the_ID(), 'full');
          $url = get_field('url');
      ?>
          <a class="boxAgenda text-decoration-none" href="<?php echo esc_url($url); ?>" target="_blank">
            <div class="boxData cardTop mb-0 p-0">
              <p class="data mb-0">
                <?php echo get_the_date('d/m/y'); ?>
              </p>
            </div>
            <div class="d-flex align-items-end" style="max-width:100%;width:370px;height:310px;background: linear-gradient(0deg, #0F431D 0%, #0F431D 49%, #196A2F00 100%), url('<?php echo esc_url($imagem); ?>'); background-size: cover; background-position: center; background-repeat: no-repeat;">
              <div class="box" style="padding-left:20px;padding-right:20px;padding-bottom:30px;">
                <span class="d-block" style="background-color:#22E69B;width:70px;height:10px;margin-bottom:5px;"></span>
                <p style="color:#fff;font-size:18px;margin:0;font-family:'Open Sans';line-height:23px; display: -webkit-box;-webkit-line-clamp: 2;-webkit-box-orient: vertical;overflow: hidden;text-overflow: ellipsis;">
                  <?php echo esc_html($titulo); ?>
                </p>
              </div>
            </div>
          </a>
      <?php
        endwhile;
        wp_reset_postdata();
      else :
        echo '<p class="text-center text-muted">Nenhum evento encontrado.</p>';
      endif;
      ?>

      <div class="row boxBarrer" style="margin-top:50px;">
        <div class="lineBarrer"></div>
        <a href="/agendas/" class="btn btn-azul">
          Ver Todas
          <img src="<?php echo get_template_directory_uri(); ?>/img/arrow.svg" alt="Icone de setinha" class="img-fluid" width="15" height="18" loading="lazy">
        </a>
        <div class="lineBarrer"></div>
      </div>
    </div>
  </div>
</section>