<?php
session_start();

if (!isset($_SESSION['users'])) {
    echo '<script language="javascript">alert("Anda harus Login!"); document.location="user/..";</script>';
    header("location: /SID/login.php");
}
