<?php
$equipe = get_field('equipe');
?>
<section class="conheca-equipe" id="page" style="background-color: #F7F9FE !important;">
  <div class="container-fluid">

    <div class="row">
      <div class="boxTitleAndDescription">
        <h2 class="title" style="font-size:18px;font-family:'Lato';"><?php the_field('titulo'); ?></h2>
        <p class="subtitle"><?php the_field('subtitulo'); ?></p>
        <p class="description" style="font-size:18px;font-family:'Lato';"><?php the_field('descricao'); ?></p>
      </div>
    </div>
    <hr />

    <div class="row listTeam">
      <?php foreach ($equipe as $item) : ?>
        <div class="boxTeam col-sm-12 col-md-6 col-lg-4">
          <figure>
            <img loading="lazy" src="<?php echo $item['foto']; ?>" alt="Equipe">
          </figure>

          <div class="boxTitleAndDescription">
            <h2 class="title" style="font-size:25px;font-family:'Lato';font-weight:bold;"><?php echo $item['nome']; ?></h2>
            <p style="font-size:21px;font-family:'Lato';font-weight:500;"><?php echo $item['posicao']; ?></p>
            <hr />
            <p class="description" style="font-size:17px;font-family:'Lato';"><?php echo $item['descricao']; ?></p>
          </div>
        </div>
      <?php endforeach; ?>
    </div>

  </div>
</section>