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

          $url_desktop = is_array($banner['banner_desktop']['url'] ?? null) ? ($banner['banner_desktop']['url']['url'] ?? '') : ($banner['banner_desktop']['url'] ?? '');
          $url_mobile  = is_array($banner['banner_mobile']['url'] ?? null) ? ($banner['banner_mobile']['url']['url'] ?? '') : ($banner['banner_mobile']['url'] ?? '');


          if (!$desktop_img && !$mobile_img) continue;
        ?>
          <div class="swiper-slide">
            <div
              class="banner-slide d-none d-md-block"
              style="background-image: url('<?php echo esc_url($desktop_img); ?>');min-height:600px;background-repeat:no-repeat;background-size:cover;">
              <div class="banner-content container-fluid">
                <?php if ($url_desktop) : ?>
                  <a href="<?php echo $url_desktop; ?>" class="btn btnVerMais">
                    Saiba mais
                    <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="17px" fill="#FFFFFF">
                      <path d="m321-80-71-71 329-329-329-329 71-71 400 400L321-80Z" />
                    </svg>
                  </a>
                <?php endif; ?>
              </div>
            </div>

            <div
              class="banner-slide d-block d-md-none"
              style="background-image: url('<?php echo esc_url($mobile_img); ?>');min-height:600px;background-repeat:no-repeat;background-size:cover;">
              <div class="banner-content container-fluid">
                <?php if ($url_mobile) : ?>
                  <a href="<?php echo $url_mobile; ?>" class="btn btnVerMais">
                    Saiba mais
                    <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="17px" fill="#FFFFFF">
                      <path d="m321-80-71-71 329-329-329-329 71-71 400 400L321-80Z" />
                    </svg>
                  </a>
                <?php endif; ?>
              </div>
            </div>
          </div>
        <?php endforeach; ?>
      </div>

      <div class="swiper-button-next"></div>
      <div class="swiper-button-prev"></div>
      <div class="swiper-pagination"></div>
    </div>
  </section>

<?php endif; ?>