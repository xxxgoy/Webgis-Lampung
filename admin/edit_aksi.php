<?php
// koneksi database
include '../koneksi.php';

// menangkap data yang di kirim dari form
$id = $_POST['id_daerah'];
$nama = $_POST['nama_daerah'];
$alamat = $_POST['alamat'];
$deskripsi = $_POST['deskripsi'];
$latitude = $_POST['latitude'];
$longitude = $_POST['longitude'];
$penyebab = $_POST['penyebab'];
$mitigasi = $_POST['mitigasi'];

// update data ke database
mysqli_query($koneksi,
"update wisata set nama_daerah='$nama',
alamat='$alamat', 
deskripsi='$deskripsi',
latitude='$latitude', 
longitude='$longitude', 
penyebab='$penyebab', 
mitigasi='$mitigasi' 
where id_daerah='$id'");

// mengalihkan halaman kembali ke index.php
header("location:tampil_data.php");
