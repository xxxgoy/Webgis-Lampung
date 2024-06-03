<?php include "header.php"; ?>

<section class="about-banner relative">
  <div class="overlay overlay-bg"></div>
  <div class="container">
    <div class="row fullscreen align-items-center justify-content-center">
      <div class="about-content col-lg-12">
        <h1 class="text-white">
          PETA INTERAKTIF
        </h1>
        <p class="text-white link-nav">Website ini menyediakan peta interaktif yang menampilkan berbagai <br>
          data spasial terkait banjir dan dampak lingkungannya
        </p>

        <a href="#peta_lampung" class="primary-btn text-uppercase link-nav">Lihat Detail</a>
      </div>
    </div>
  </div>
</section>

<main id="main">

  <section class="price-area section-gap">

    <section id="peta_lampung" class="about-info-area section-gap">
      <div class="container">

        <div class="title text-center">
          <h1>Peta Provinsi Lampung</h1>
          <br>
        </div>

        <div id="map" style="width: 100%;height: 450px;" class="row align-items-center"></div>

      </div>
      <?php include "data_daerah.php"; ?>
    </section>

  </section>

</main>

<?php include "footer.php"; ?>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/leaflet@1.7.1/dist/leaflet.css" />
<script src="https://cdn.jsdelivr.net/npm/leaflet@1.7.1/dist/leaflet.js"></script>

<script>
  
  function initMap() {
    var lampung = [-5.402796, 105.258789];
    
    var map = L.map('map').setView(lampung, 10);

    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
      attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
    }).addTo(map);
  }

  document.addEventListener('DOMContentLoaded', function () {
    initMap();
  });
</script>
