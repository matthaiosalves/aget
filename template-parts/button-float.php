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
    }

    .whatsapp-float:hover {
      transform: scale(1.1);
    }

    .whatsapp-float svg {
      width: 42px;
      height: 42px;
    }
  </style>

  <a href="<?php echo esc_url($url_whatsapp); ?>" class="whatsapp-float" target="_blank" aria-label="Fale conosco no WhatsApp" rel="noopener">
    <!-- SVG do ícone do WhatsApp -->
    <svg xmlns="http://www.w3.org/2000/svg" width="164.961" height="164.961" viewBox="0 0 164.961 164.961">
      <g id="Grupo_3193" transform="translate(-1485 -687.672)">
        <g id="whatsapp_1_" transform="translate(1530 717.672)">
          <g transform="matrix(1, 0, 0, 1, -45, -30)">
            <path d="M37.48,0a37.48,37.48,0,1,0,37.48,37.48A37.485,37.485,0,0,0,37.48,0Z" transform="translate(45 30)" fill="#5bc456"/>
          </g>
        </g>
        <path d="M38.706,6.573A22.418,22.418,0,0,0,3.43,33.617L.25,45.231l11.882-3.117a22.389,22.389,0,0,0,10.711,2.728h.009A22.423,22.423,0,0,0,38.706,6.573ZM22.851,41.057h-.008a18.606,18.606,0,0,1-9.482-2.6l-.68-.4-7.051,1.85,1.882-6.874-.443-.7a18.629,18.629,0,1,1,15.781,8.73ZM33.07,27.1c-.56-.28-3.313-1.635-3.827-1.822s-.887-.28-1.26.28-1.447,1.822-1.773,2.2-.653.421-1.213.14a15.3,15.3,0,0,1-4.5-2.78,16.893,16.893,0,0,1-3.115-3.879c-.326-.561,0-.835.246-1.143a15.842,15.842,0,0,0,1.4-1.916,1.03,1.03,0,0,0-.047-.981c-.14-.28-1.26-3.037-1.726-4.158-.455-1.092-.916-.944-1.26-.961-.326-.016-.7-.02-1.073-.02a2.057,2.057,0,0,0-1.494.7,6.281,6.281,0,0,0-1.96,4.672c0,2.757,2.007,5.419,2.287,5.793s3.949,6.03,9.567,8.456a32.056,32.056,0,0,0,3.193,1.18,7.677,7.677,0,0,0,3.527.222c1.076-.161,3.313-1.355,3.78-2.663a4.679,4.679,0,0,0,.326-2.663C34,27.525,33.629,27.385,33.07,27.1Zm0,0" transform="translate(1544.885 732.037)" fill="#fff" fill-rule="evenodd"/>
      </g>
    </svg>
  </a>
<?php endif; ?>
