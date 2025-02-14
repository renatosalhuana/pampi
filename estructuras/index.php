<?php
$active_menu = "estructuras";
$title = "ESTRUCTURAS";
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
            <h1 class="heading category_title">ESTRUCTURAS</h1>
            <figcaption class="category_description"> Tenemos una colección de estructuras únicas que
              elevarán tus celebraciones a otro nivel.
              Desde arcos de ensueño que enmarcarán el brindis perfecto, hasta backings impresionantes donde los
              invitados se fotografiarán con estilo.
              Nuestras creaciones añadirán un toque mágico a cualquier fiesta.
            </figcaption>

            <ul class="nospace clear">
            <?php
                        renderGalleryItem(
                            'scroll-ventanal',
                            [
                                '../images/ventanales-1.png',
                                '../images/ventanales-804.png'
                            ],
                            'Ventanal',
                            'Ventanal</br>Medidas: 2.05m x 1.10m',
                            true
                        );
                        renderGalleryItem(
                            'scroll-jardinera-grande',
                            [
                                '../images/jardinera-grande-backing.png',
                                '../images/jardinera-grande-31.webp',
                                '../images/jardinera-grande-36.webp'
                            ],
                            'Jardinera Grande',
                            'Jardinera Grande</br>Medidas: 2.40m x 2.15m '
                        );
                        renderGalleryItem(
                          'scroll-backing3',
                          [
                              '../images/backing-3-repisas.png',
                              '../images/backing-3-repisas-89.webp'
                          ],
                          'Backing 3',
                          'Backing 3</br>Medidas: 2m x 1m '
                        );
                        renderGalleryItem(
                          'scroll-triodecopas',
                          [
                              '../images/trio-de-copas-1.png',
                              '../images/trio-de-copas-30.webp',
                              '../images/trio-de-copas-40.webp'
                          ],
                          'Trio de Copas',
                          'Trío de Copas</br>Medidas: 2m x 2m '
                        );
                        renderGalleryItem(
                          'scroll-copasmetal1',
                          [
                              '../images/copas-oro-10.png',
                              '../images/copas-oro-75.webp',
                              '../images/copas-oro-76.webp',
                              '../images/copas-oro-60.webp'
                          ],
                          'Copas Oro',
                          'Copas Oro</br>Medidas: 2.10m x 1m x .40m ',
                          true
                        );
                        renderGalleryItem(
                          'scroll-copasaro',
                          [
                              '../images/aro-de-copas-1.png',
                              '../images/copas-aro-70.webp',
                              '../images/copas-aro-71.webp'
                          ],
                          'Copas Aro',
                          'Copas Aro</br>Medidas: 1.60m x 1.60m '
                        );
                        renderGalleryItem(
                          'scroll-wall-shots',
                          [
                              '../images/wall-shots.webp',
                              '../images/wall-de-shots-11.webp',
                              '../images/wall-de-shots-12.webp'
                          ],
                          'Wall de Shots',
                          'Wall de Shots</br>Capacidad de 80 a 100 shots '
                        );
                        renderGalleryItem(
                          'scroll-peg-wall',
                          [
                              '../images/peg-wall-1.png',
                              '../images/peg-wall-21.webp',
                              '../images/peg-wall-20.webp'
                          ],
                          'Peg Wall',
                          'Peg Wall</br>Medidas: 2.30m x 2.44m'
                        );
                        renderGalleryItem(
                          'scroll-torredecopas',
                          [
                              '../images/31 TORRE DE COPAS.png',
                              '../images/torre-de-copas-9.png'
                          ],
                          'Torre de Copas',
                          'Torre de Copas</br>Medidas: 2m x 1m',
                          true
                        );
                        renderGalleryItem(
                          'scroll-columpio',
                          [
                              '../images/columpio-1.png',
                              '../images/columpio-11.webp',
                              '../images/columpio-16.webp'
                          ],
                          'Columpio',
                          'Columpio</br>Medidas: 2.30m x 2.20m '
                        );
                        renderGalleryItem(
                          'scroll-backingarco',
                          [
                              '../images/backing-arco-1.png',
                              '../images/backing-arco-9.webp',
                              '../images/backing-arco-9.webp',
                              '../images/backing-arco-18.webp'
                          ],
                          'Backing Arco',
                          'Backing Arco</br>Medidas: 2.40m x 2.40m'
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

