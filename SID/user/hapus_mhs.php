<?php
include 'koneksi.php';
$id_mhs = $_GET['id_mhs'];
mysqli_query($koneksi, "DELETE FROM tbl_mahasiswa WHERE id_mhs='$id_mhs'") or die(mysqli_error($koneksi));

header("location:data_mahasiswa.php");
