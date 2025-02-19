<?php
$active_menu = "mesas-sillas-altas";
$title = "SILLAS ALTAS";
include_once '../template/header.php';
include_once '../template/functions.php';
?>
  <div class="wrapper row3">
    <main class="hoc container clear">
      <!-- main body -->
      <!-- ################################################################################################ -->
      <div class="content">
        <!-- ################################################################################################ -->
        <div id="gallery">
          <figure>
            <h1 class="heading category_title">SILLAS ALTAS</h1>
            <figcaption class="category_description"> Añade un toque creativo y moderno a tu próximo
              evento con nuestras mesas y sillas altas de diseño.
              Ya sea para un cumpleaños, boda o reunión informal, nuestras piezas vanguardistas y elegantes crearán un
              ambiente chic que tus invitados no olvidarán.
            </figcaption>
            <ul class="nospace clear">
            <?php
                        renderGalleryItem(
                            'scroll-sillas-contemporaneas',
                            [
                                '../images/sillas-mesa-contemporanea-35.webp',
                                '../images/sillas-mesa-contemporanea-3.webp',
                                '../images/sillas-mesa-contemporanea-14.webp',
                                '../images/sillas-mesa-contemporanea-15.webp'
                            ],
                            'Sillas Contemporaneas',
                            'Sillas Contemporáneas</br> 4 pers.',
                            true
                        );
                        renderGalleryItem(
                            'scroll-sillas-metal2',
                            [
                                '../images/mesas-sillas-metalicas-58.webp',
                                '../images/mesas-sillas-metalicas-79.webp',
                                '../images/mesas-sillas-metalicas-78.webp'
                            ],
                            'Sillas Metálicas',
                            'Sillas Metálicas</br> 4 pers.'
                        );
                        renderGalleryItem(
                          'scroll-sillas-industrial',
                          [
                              '../images/sillas-mesa-industrial-93.png',
                              '../images/mesa-industrial-6.webp',
                              '../images/mesa-sillas-industrial-87.webp'
                          ],
                          'Mesa y Sillas industrial',
                          'Sillas Industriales</br> 4 pers.'
                        );
                        renderGalleryItem(
                          'scroll-sillas-boho',
                          [
                              '../images/mesa-sillas-boho-chic-64.png',
                              '../images/sillas-mesa-boho-chic-61.png',
                              '../images/mesa-sillas-boho-chic-123.webp'
                          ],
                          'Mesa y Sillas industrial',
                          'Sillas Boho Chic</br> 4 pers.'
                        );
                        ?>
            </ul>
          </figure>
        </div>
      </div>
      <!-- ################################################################################################ -->
      <!-- / main body -->
      <div class="clear"></div>
    </main>
  </div>
  <?php include_once  '../template/footer.php';?>