<?php
session_start();

include 'koneksi.php';

$username = $_POST['username'];
$password = $_POST['password'];

$data = mysqli_query($koneksi, "select * from users where username='$username' and password='$password'");
if (mysqli_num_rows($data) > 0) {
    $row = mysqli_fetch_array($data);
    $_SESSION['users'] = $row['role'];

    $_SESSION['inisial'] = $row['inisial'];
    header("location: akun/dash.php");
} else {
    header("location: login.php");
}
