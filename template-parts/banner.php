<?php
$banners = get_field('banners', 'option');

if (!empty($banners) && is_array($banners)) :
?>
  <section class="banner">
    <div class="swiper bannerSwiper">
      <div class="swiper-wrapper">
        <?php foreach ($banners as $banner) :
          $desktop_img = $banner['banner_desktop']['imagem'] ?? '';
          $mobile_img  = $banner['banner_mobile']['imagem'] ?? '';

          if (!$desktop_img && !$mobile_img) continue;
        ?>
          <a class="swiper-slide" href="#">
            <?php if ($desktop_img) : ?>
              <img src="<?php echo esc_url($desktop_img); ?>" class="img-fluid w-100 d-none d-md-block" alt="Banner Desktop">
            <?php endif; ?>

            <?php if ($mobile_img) : ?>
              <img src="<?php echo esc_url($mobile_img); ?>" class="img-fluid w-100 d-block d-md-none" alt="Banner Mobile">
            <?php endif; ?>
          </a>
        <?php endforeach; ?>
      </div>

      <div class="swiper-button-next"></div>
      <div class="swiper-button-prev"></div>
      <div class="swiper-pagination"></div>
    </div>
  </section>
<?php endif; ?>