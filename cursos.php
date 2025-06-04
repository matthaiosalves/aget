<?php
/*
Template Name: Cursos
*/
get_header();
?>
<?php get_template_part('template-parts/banner'); ?>

<section class="cursos position-relative" style="padding-top:70px;">
  <div class="container-fluid">
    <div class="row" style="position:absolute;top:-30px;">
      <div class="boxTag cardTop" style="background-color:#00913B;width:370px;height:55px;">
        <p class="tag">Nossos Cursos</p>
      </div>
    </div>

    <div class="row justify-content-center" style="margin-bottom:50px;">
      <div class="boxCurso">
        <img src="https://placehold.co/600x400" alt="Imagem do curso" class="img-fluid imagemCurso" width="371" height="360" loading="lazy">

        <a href="/" class="btn btn-inscrever btn-azul">
          Inscreva-se
          <img src="<?php echo get_template_directory_uri(); ?>/img/arrow.svg" alt="Icone de setinha" class="img-fluid" width="15" height="18" loading="lazy">
        </a>
      </div>
      <div class="boxCurso">
        <img src="https://placehold.co/600x400" alt="Imagem do curso" class="img-fluid imagemCurso" width="371" height="360" loading="lazy">

        <a href="/" class="btn btn-inscrever btn-azul">
          Inscreva-se
          <img src="<?php echo get_template_directory_uri(); ?>/img/arrow.svg" alt="Icone de setinha" class="img-fluid" width="15" height="18" loading="lazy">
        </a>
      </div>
      <div class="boxCurso">
        <img src="https://placehold.co/600x400" alt="Imagem do curso" class="img-fluid imagemCurso" width="371" height="360" loading="lazy">

        <a href="/" class="btn btn-inscrever btn-azul">
          Inscreva-se
          <img src="<?php echo get_template_directory_uri(); ?>/img/arrow.svg" alt="Icone de setinha" class="img-fluid" width="15" height="18" loading="lazy">
        </a>
      </div>
    </div>

    <div class="row boxBarrer" style="padding-bottom:70px;">
      <div class="lineBarrer"></div>
      <a href="/" class="btn btn-verMais">
        <img src="<?php echo get_template_directory_uri(); ?>/img/add-circle.svg" alt="Icone que simboliza ver mais" class="img-fluid" width="28" height="28" loading="lazy">
        Ver Mais
      </a>
      <div class="lineBarrer"></div>
    </div>

  </div>
</section>

<?php get_template_part('template-parts/agenda'); ?>
<?php get_template_part('template-parts/contato'); ?>

<?php
get_footer();
