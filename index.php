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

    <div class="row justify-content-center align-items-center" style="margin-top:20px;">
      <a href="/" class="btn btn-zap">
        Entrar no grupo
        <img src="<?php echo get_template_directory_uri(); ?>/img/whatsapp.svg" alt="Icone que simboliza ver mais" class="img-fluid" width="45" height="45" loading="lazy">
      </a>
    </div>
  </div>
</section>

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

<section class="agenda" style="padding-top:60px;padding-bottom:80px;">
  <div class="container-fluid">
    <div class="row">
      <div class="boxTag cardTop" style="background-color:#00913B;width:217px;height:55px;">
        <p class="tag">Agenda</p>
      </div>

      <h2 class="title">Fique por dentro de todos nossos eventos e<br> não perca nenhuma novidade</h2>
    </div>

    <div class="row">
      <div class="boxAgenda">
        <div class="boxData cardTop mb-0 p-0">
          <p class="data mb-0">
            28/05/25
          </p>
        </div>
        <div class="d-flex align-items-end" style="width:370px;height:310px;background: linear-gradient(0deg, #0F431D 0%, #0F431D 49%, #196A2F00 100%), url('https://placehold.co/600x400'); background-size: cover; background-position: center; background-repeat: no-repeat;">
          <div class="box" style="padding-left:20px;padding-right:20px;padding-bottom:30px;">
            <span class="d-block" style="background-color:#22E69B;width:70px;height:10px;margin-bottom:5px;"></span>
            <p style="color:#fff;font-size:18px;margin:0;font-family:'Open Sans';line-height:23px;">2º Encontro do Núcleo de Estudos do Direito Tributário do Agronegócio.</p>
          </div>
        </div>

      </div>


      <div class="row boxBarrer">
        <div class="lineBarrer"></div>
        <a href="/" class="btn btn-azul">
          Ver Todas
          <img src="<?php echo get_template_directory_uri(); ?>/img/arrow.svg" alt="Icone de setinha" class="img-fluid" width="15" height="18" loading="lazy">
        </a>
        <div class="lineBarrer"></div>
      </div>

    </div>
</section>

<section class="youtube">
  <div class="container-fluid">
    <div class="row">
      <div class="col-sm-12 col-md-12 col-lg-5">
        <h2 class="title">Visite também nosso canal no YouTube</h2>
        <p class="description">Inscreva-se no canal do YouTube da AGET e potencialize sua carreira com o conhecimento dos maiores especialistas em Direito Tributário!</p>
      </div>
      <div class="col-sm-12 col-md-12 col-lg-6 ">
        <iframe height="300"
          style="border-radius: 20px;"
          src="https://www.youtube.com/embed/dQw4w9WgXcQ"
          title="YouTube video player"
          frameborder="0"
          allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
          allowfullscreen>
        </iframe>
      </div>
    </div>
  </div>
</section>

<section class="contato">
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-6">
        <span style="color:#C2C2C2;font-size:12px;font-family:'Open Sans';font-weight:600;">INFORMAÇÕES</span>
        <h3 style="color:#FFFFFF;font-size:36px;font-family:'Work Sans';font-weight:700;margin-top:13px;margin-bottom:60px;">Contato</h3>
        <p style="color:#FFFFFF;font-size:18px;font-family:'Open Sans';margin-bottom:20px;font-weight:700;">Goiânia</p>
        <p style="color:#C2C2C2;font-size:16px;font-family:'Open Sans';margin-bottom:50px;">1Rua 72, 223 Jardim Goias- Goiânia - GO</p>
        <p style="color:#C2C2C2;font-size:16px;font-family:'Open Sans';">(62) 98622-0494</p>
        <p style="color:#C2C2C2;font-size:16px;font-family:'Open Sans';margin-bottom:50px;">SAC: 0800 903 7070</p>
        <p style="color:#C2C2C2;font-size:16px;font-family:'Open Sans';">agetgo@gmail.com</p>
      </div>
      <div class="col-lg-6">
        <span style="color:#C2C2C2;font-size:12px;font-family:'Open Sans';font-weight:600;">E-MAIL</span>
        <h3 style="color:#FFFFFF;font-size:36px;font-family:'Work Sans';font-weight:700;margin-top:13px;">Cadastre seu e-mail</h3>
        <p style="color:#FFFFFF;font-size:20px;font-family:'Work Sans';margin-bottom:45px;">Fique por dentro de notícias do mundo do Direito Tribútario e receba nossas dicas.</p>

        <form class="" action="/">
          <div style="margin-bottom:30px;">
            <input type="text" class="form-control rounded-pill" placeholder="Nome" required>
          </div>

          <div class="row g-2" style="margin-bottom:30px;">
            <div class="col-md-6">
              <input type="email" class="form-control rounded-pill" placeholder="Email" required>
            </div>
            <div class="col-md-6">
              <input type="tel" class="form-control rounded-pill" placeholder="Telefone">
            </div>
          </div>

          <div style="margin-bottom:30px;">
            <textarea class="form-control" rows="4" placeholder="Your message" required></textarea>
          </div>

          <button class="btn btn-form" type="submit" style="border-radius:25px;box-shadow: 0.42px 2px 27px #CCCCDF66;background-color:#FFFFFF;width:190px;height:50px;color:#272289;font-weight:bold;font-family:'Work Sans';font-size:14px;border:none;" class="d-flex align-items-center justify-content-center">
            ENVIAR <img src="<?php echo get_template_directory_uri(); ?>/img/arrow-contato.svg" alt="" width="18" height="18" loading="lazy" class="position-relative">
          </button>
        </form>
      </div>
    </div>
  </div>
</section>


<?php
get_footer();
