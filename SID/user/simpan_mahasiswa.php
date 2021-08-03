
<?php
include 'koneksi.php';
$nim = $_POST['nim'];
$nama = $_POST['nama'];
$jenjang = $_POST['jenjang'];
$prodi = $_POST['prodi'];
$tingkat = $_POST['tingkat'];
$paralel = $_POST['paralel'];
$dosen_wali = $_POST['dosen_wali'];
$status = $_POST['status'];
$tglmasuk = $_POST['tglmasuk'];
$jenis_daftar = $_POST['jenis_daftar'];
$input = mysqli_query($koneksi, "INSERT INTO tbl_mahasiswa (nim,nama,jenjang,prodi,tingkat,paralel,dosen_wali,status,tglmasuk,jenis_daftar)
                                VALUES('$nim','$nama','$jenjang','$prodi','$tingkat','$paralel','$dosen_wali','$status','$tglmasuk','$jenis_daftar')")
    or die(mysqli_error($koneksi));
if ($input) {
    echo "Data Berhasil Disimpan";
    header("location:data_mahasiswa.php");    # code...
} else {
    echo "Gagal Disimpan";
    header("location:tambah_mahasiswa.php");
}
