<?php
/*
Template Name: Agendas
*/
get_header();
?>

<?php get_template_part('template-parts/banner'); ?>

<section class="agendas" id="page" style="margin-top:70px;margin-bottom:70px;">
  <div class="container-fluid">
    <div class="row">
      <h3 class="title">Agenda</h3>
      <h2 class="subtitle">Fique por dentro de nossos eventos</h2>
      <p class="description">Não perca nenhuma novidade da Academia Goiana de Estudos Tributários (AGET).</p>
    </div>

    <div class="row justify-content-center align-items-center" style="margin-top:50px;">
      <?php
      $args = array(
        'post_type' => 'agenda',
        'posts_per_page' => -1
      );
      $query = new WP_Query($args);

      if ($query->have_posts()) :
        while ($query->have_posts()) : $query->the_post();
          $url = get_field('url');
          $imagem = get_the_post_thumbnail_url(get_the_ID(), 'full');
          $titulo = get_the_title();
      ?>
          <a href="<?php echo esc_url($url); ?>" class="boxImage text-decoration-none" target="_blank" rel="noopener">
            <img src="<?php echo esc_url($imagem); ?>" alt="<?php echo esc_attr($titulo); ?>" class="img-fluid" width="370" height="461" loading="lazy">
          </a>
      <?php
        endwhile;
        wp_reset_postdata();
      else :
        echo '<p class="text-center text-muted">Nenhum evento encontrado.</p>';
      endif;
      ?>
    </div>
  </div>
</section>

<?php get_template_part('template-parts/contato'); ?>
<?php get_footer(); ?>