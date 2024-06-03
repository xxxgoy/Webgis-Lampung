<?php include "header.php"; ?>
<?php
$id = $_GET['id_daerah'];
include_once "ambildata_id.php";
$obj = json_decode($data);
$id_daerah = "";
$nama_daerah = "";
$alamat = "";
$deskripsi = "";
$lat = "";
$long = "";
$penyebab = "";
$mitigasi = "";
foreach ($obj->results as $item) {
  $id_daerah .= $item->id_daerah;
  $nama_daerah .= $item->nama_daerah;
  $alamat .= $item->alamat;
  $deskripsi .= $item->deskripsi;
  $lat .= $item->latitude;
  $long .= $item->longitude;
  $penyebab .= $item->penyebab;
  $mitigasi .= $item->mitigasi;
}

$title = "Detail dan Lokasi : " . $nama_daerah;

?>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/leaflet@1.7.1/dist/leaflet.css" />
<script src="https://cdn.jsdelivr.net/npm/leaflet@1.7.1/dist/leaflet.js"></script>

<section class="about-banner relative">
  <div class="overlay overlay-bg"></div>
  <div class="container">
    <div class="row d-flex align-items-center justify-content-center">
      <div class="about-content col-lg-12">
        <h1 class="text-white">
          Detail Informasi Geografis
        </h1>
      </div>
    </div>
  </div>
</section>

<section class="about-info-area section-gap">
  <div class="container" style="padding-top: 120px;">
    <div class="row">
      <div class="col-md-7" data-aos="fade-up" data-aos-delay="200">
        <div class="panel panel-info panel-dashboard">
          <div class="panel-heading centered">
            <h2 class="panel-title"><strong>Informasi Daerah</strong></h4>
          </div>
          <div class="panel-body">
            <table class="table">
              <tr>
                <!-- <th>Item</th> -->
                <th>Detail</th>
              </tr>
              <tr>
                <td>Nama Daerah</td>
                <td>
                  <h5><?php echo $nama_daerah ?></h5>
                </td>
              </tr>
              <tr>
                <td>Alamat</td>
                <td>
                  <h5><?php echo $alamat ?></h5>
                </td>
              </tr>
              <tr>
                <td>Deskripsi</td>
                <td>
                  <h5><?php echo $deskripsi ?></h5>
                </td>
              </tr>
              <tr>
                <td>Penyebab</td>
                <td>
                  <h5><?php echo $penyebab ?></h5>
                </td>
              </tr>
              <tr>
                <td>Mitigasi</td>
                <td>
                  <h5><?php echo $mitigasi ?></h5>
                </td>
              </tr>
            </table>
          </div>
        </div>
      </div>
      <div class="col-md-5" data-aos="zoom-in">
        <div class="panel panel-info panel-dashboard">
          <div class="panel-heading centered">
            <h2 class="panel-title"><strong>Lokasi</strong></h4>
          </div>
          <div class="panel-body">
            <div id="map-canvas" style="width:100%;height:380px;"></div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<?php include "footer.php"; ?>

<script>
  var map = L.map('map-canvas').setView([<?php echo $lat ?>, <?php echo $long ?>], 14);

  L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
    attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
  }).addTo(map);

  var marker = L.marker([<?php echo $lat ?>, <?php echo $long ?>]).addTo(map);

  marker.bindPopup('<h1><?php echo $nama_daerah ?></h1><p><?php echo $alamat ?></p>').openPopup();
</script>
