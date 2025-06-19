<?php
$url_whatsapp = get_field('url_whatsapp');

if (!empty($url_whatsapp)) :
?>
  <style>
    .whatsapp-float {
      position: fixed;
      bottom: 20px;
      right: 20px;
      z-index: 9999;
      background-color: #25D366;
      width: 70px;
      height: 70px;
      border-radius: 50%;
      box-shadow: 0 4px 12px rgba(0, 0, 0, 0.3);
      display: flex;
      justify-content: center;
      align-items: center;
      transition: transform 0.3s ease;
      object-fit:cover;
    }

    .whatsapp-float img {
      width: 45px;
      height: 45px;
    }
  </style>

  <a href="<?php echo esc_url($url_whatsapp); ?>" class="whatsapp-float" target="_blank" aria-label="Fale conosco no WhatsApp" rel="noopener">
    <img src="<?php echo get_template_directory_uri(); ?>/img/whatsapp-2.svg" alt="" class="img-fluid" height="45" width="45" loading="lazy">
  </a>
<?php endif; ?>
