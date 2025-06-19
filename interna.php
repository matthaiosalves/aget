<?php
/*
Template Name: Interna
*/
get_header();
?>
<?php get_template_part('template-parts/banner'); ?>

<section class="sobreNos" style="margin-top:70px;margin-bottom:70px;">
  <div class="container-fluid">
    <div class="row">
      <h3 class="title"><?php echo esc_html(get_the_title()); ?></h3>

      <h2 class="subtitle"><?php the_field('subtitulo'); ?></h2>

      <div class="boxContent">
        <?php the_content(); ?>
      </div>
    </div>

    <?php
    $url = get_field('botao_whatszapp');
    if (!empty($url)) : ?>
      <div class="row justify-content-center align-items-center mt-4 mb-5">
        <a href="<?php echo esc_url($url); ?>" class="btn btn-zap" target="_blank">
          Entrar no grupo
          <img src="<?php echo get_template_directory_uri(); ?>/img/whatsapp.svg" alt="Ícone do WhatsApp" class="img-fluid imgZap" width="45" height="45" loading="lazy">
        </a>
      </div>
    <?php endif; ?>

    <?php
    $imagem_destaque = get_field('imagem_destaque');
    if (!empty($imagem_destaque)) : ?>
      <img src="<?php echo esc_url($imagem_destaque); ?>" alt="" class="img-fluid" width="1170" height="356" loading="lazy">
    <?php endif; ?>

  </div>
</section>

<?php get_template_part('template-parts/agenda'); ?>
<?php get_template_part('template-parts/contato'); ?>

<?php
get_footer();