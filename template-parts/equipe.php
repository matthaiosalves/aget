<?php
$equipe = get_field('equipe');
?>
<section class="conheca-equipe" id="conheca-equipe">
  <div class="container-fluid">

    <div class="row">
      <div class="boxTitleAndDescription">
        <h2 class="title"><?php the_field('titulo'); ?></h2>
        <p class="description"><?php the_field('subtitulo'); ?></p>
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
            <h2 class="title"><?php echo $item['nome']; ?></h2>
            <p><?php echo $item['posicao']; ?></p>
            <hr />
            <p class="description"><?php echo $item['descricao']; ?></p>
          </div>
        </div>
      <?php endforeach; ?>
    </div>

  </div>
</section>