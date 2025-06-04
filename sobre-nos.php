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
      <h3 class="title">Sobre nós</h3>
      <h2 class="subtitle">História da AGET</h2>

      <div class="boxContent" style="margin-bottom:20px;">
        A ACADEMIA GOIANA DE ESTUDOS TRIBUTÁRIOS – AGET consiste em uma instituição de direito privado sem fins lucrativos, cujo objetivo principal é a propagação de conhecimento a todos àqueles operadores do Direito Tributário, quais sejam advogados tributaristas, procuradores, julgadores de tribunais administrativos tributários, juízes, contadores, etc. Fundada em janeiro de 2024 pelo seu presidente Frederico Medeiros, o objetivo inicial de do instituto girou no fornecimento de cursos de baixo custo e com curta duração. Posteriormente , com o passar dos meses, surgiu-se a necessidade de criação de uma diretoria com membros que já possuem uma trajetória acadêmica considerável, a nível de currículo ou realização e participação de eventos acadêmicos cuja finalidade objetivou a propagação de conhecimento. Assim, foram convocados os Professores Ana Sebba, conhecida no meio acadêmico pelo seu destaque notável em cursos superiores (Especializações, Mestrado) e Hélio Mauro, que possui um vasto histórico de participações em grupos de estudos e até mesmo em comissões de estudos tributários e de processo civil, vinculadas a Ordem dos Advogados do Brasil.
      </div>
    </div>

    <div class="row boxBarrer">
      <div class="lineBarrer"></div>
      <a href="/" class="btn btn-verMais">
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
<?php get_template_part('template-parts/equipe'); ?>
<?php get_template_part('template-parts/agenda'); ?>
<?php get_template_part('template-parts/contato'); ?>
<?php
get_footer();
