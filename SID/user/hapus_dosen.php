<?php
include 'koneksi.php';
$nidn = $_GET['nidn'];
mysqli_query($koneksi, "DELETE FROM dosen WHERE nidn='$nidn'") or die(mysqli_error($koneksi));

header("location:data_dosen.php");
