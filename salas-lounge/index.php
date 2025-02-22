<?php
$active_menu = "salas-lounge";
$title = "SALAS LOUNGE";
$metadescription = "Alquiler de salas lounge para eventos en Lima. Deja a tus invitados boquiabiertos con nuestra colección de salas lounge de diseño vanguardista.";
$og_image_url = "https://pampimobiliario.com/images/salas-lounge-puff-evento.webp";
$og_url = "https://pampimobiliario.com/salas-lounge/";

include_once '../template/header.php';
include_once '../template/functions.php';
?>
  <div class="wrapper row3">
    <main class="hoc container clear">
      <!-- main body -->
      <!-- ################################################################################################ -->
      <div class="content">
        <!-- ################################################################################################ -->
        <div id="gallery" >
          <figure>
            <h1 class="heading category_title">SALAS LOUNGE</h1>
            <figcaption class="heading category_description">Deja a tus invitados boquiabiertos con nuestra
              colección de salas lounge de diseño vanguardista que hará brillar el estilo de tu evento.
              Cada pieza expresa una personalidad única que transformará tu evento en una experiencia inolvidable bajo
              el cielo.
            </figcaption>
            
            <ul class="nospace clear">

            <?php 
            renderGalleryItem(
              'scroll-lounge-metalico',
              [
                  '../images/salas-lounge-puff-01.png',
                  '../images/salas-lounge-puff-evento.webp'
              ],
              'Salas Lounge Modular Metalico',
              'Lounge Modular Metálico </br> 6 pers.',
              true
            );
            renderGalleryItem(
              'scroll-lounge-japandi',
              [
                  '../images/lounge-japandi-01.png',
                  '../images/lounge-japandi-64.webp',
                  '../images/lounge-japandi-4.webp'
              ],
              'Lounge Japandi',
              'Lounge Japandi</br> 8 pers.'
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