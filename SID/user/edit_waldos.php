<?php
// koneksi database
include 'koneksi.php';

// menangkap data yang di kirim dari form
$id_mhs = $_POST['id_mhs'];
$dosen_wali = $_POST['dosen_wali'];

// update data ke database
mysqli_query($koneksi, "update tbl_mahasiswa set dosen_wali='$dosen_wali' where id_mhs='$id_mhs'");
echo "<script>alert('Data Telah Diubah'); </script>";
header("location:dosen_wali.php");
