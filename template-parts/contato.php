<section class="contato" id="contato">
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-6">
        <span style="color:#C2C2C2;font-size:12px;font-family:'Open Sans';font-weight:600;">INFORMAÇÕES</span>
        <h3 style="color:#FFFFFF;font-size:36px;font-family:'Work Sans';font-weight:700;margin-top:13px;margin-bottom:60px;">Contato</h3>
        <p style="color:#FFFFFF;font-size:18px;font-family:'Open Sans';margin-bottom:20px;font-weight:700;">Goiânia</p>
        <p style="color:#C2C2C2;font-size:16px;font-family:'Open Sans';margin-bottom:50px;"><?php the_field('endereco', 'option'); ?></p>
        <p style="color:#C2C2C2;font-size:16px;font-family:'Open Sans';"><?php the_field('contato', 'option'); ?></p>
        <p style="color:#C2C2C2;font-size:16px;font-family:'Open Sans';margin-bottom:50px;"><?php the_field('sac', 'option'); ?></p>
        <p style="color:#C2C2C2;font-size:16px;font-family:'Open Sans';"><?php the_field('e-mail', 'option'); ?></p>
      </div>
      <div class="col-lg-6">
        <span style="color:#C2C2C2;font-size:12px;font-family:'Open Sans';font-weight:600;">E-MAIL</span>
        <h3 style="color:#FFFFFF;font-size:36px;font-family:'Work Sans';font-weight:700;margin-top:13px;">Cadastre seu e-mail</h3>
        <p style="color:#FFFFFF;font-size:20px;font-family:'Work Sans';margin-bottom:45px;">Fique por dentro de notícias do mundo do Direito Tribútario e receba nossas dicas.</p>

        <form class="" action="/">
          <div style="margin-bottom:30px;" class="mobileInput">
            <input type="text" class="form-control rounded-pill" placeholder="Nome" required>
          </div>

          <div class="row g-2 mobileInput" style="margin-bottom:30px;">
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