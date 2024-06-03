<?php
// koneksi database
include '../koneksi.php';

// menangkap data yang di kirim dari form
$nama = $_POST['nama_daerah'];
$alamat = $_POST['alamat'];
$deskripsi = $_POST['deskripsi'];
$latitude = $_POST['latitude'];
$longitude = $_POST['longitude'];
$penyebab = $_POST['penyebab'];
$mitigasi = $_POST['mitigasi'];

// menginput data ke database
mysqli_query($koneksi, "insert into wisata values('','$nama','$alamat','$deskripsi','$latitude','$longitude', '$penyebab', '$mitigasi')");

// mengalihkan halaman kembali ke index.php
header("location:tampil_data.php");
