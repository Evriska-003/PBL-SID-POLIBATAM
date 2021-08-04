<?php
include 'koneksi.php';
$nidn = $_POST['nidn'];
$nama = $_POST['nama'];
$input = mysqli_query($koneksi, "INSERT INTO dosen (nidn,nama) VALUES('$nidn','$nama')")
    or die(mysqli_error($koneksi));
if ($input) {
    echo "Data Berhasil Disimpan";
    header("location:data_dosen.php");    # code...
} else {
    echo "Gagal Disimpan";
    header("location:tambah_dosen.php");
}
