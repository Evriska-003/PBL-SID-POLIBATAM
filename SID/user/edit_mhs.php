<?php include('akses.php'); ?>

<head>
    <title>SID POLIBATAM</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="stylecss.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</head>

<body>
    <navbar>
        <div class="navbar nav navbar-fixed-top navbar-inverse">

            <h0 class="header_title">Politeknik Negeri Batam</h0>
            <h5 class="header_body">Sistem Informasi Akademik online</h5>
            <img width="100px" height="100px" alt="" class="header_icon" src="logo.png">

        </div>
    </navbar>
    <nav class="navbar navbar-expand-sm">
        <!-- Links -->
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="dash.php"><span class="fas fa-home"></span>HOME</a>
            </li>

            <!-- Dropdown -->
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown"><span class="fas fa-graduation-cap"></span>
                    AKADEMIK
                </a>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="data_mahasiswa.php">Data Mahasiswa</a>
                    <a class="dropdown-item" href="daftarjadwal_matakuliah.php">Jadwal Kuliah</a>
                    <a class="dropdown-item" href="daftar_matkul.php">Daftar Mata Kuliah</a>
                    <a class="dropdown-item" href="dosen_wali.php">Dosen Wali</a>
                </div>
            </li>
        </ul>
        <div class="collapse navbar-collapse justify-content-end" id="navbarNavDropdown">
            <ul class="navbar-nav">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown"><span class="fas fa-user"></span> USERS</a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="#">Profil</a>
                        <a class="dropdown-item" href="logout.php">Logout</a>
                    </div>
                </li>
            </ul>
        </div>
    </nav>
    <div class="col-md-10 p-5 pt-2 text-dark">
        <div class="col-lg-12">
            <div class="row">
                <div class="col-lg-6">
                    <h2>Ubah Data</h2>
                    <?php
                    include 'koneksi.php';
                    $ambil = mysqli_query($koneksi, "select * from tbl_mahasiswa where id_mhs='$_GET[id_mhs]' ");
                    $pecah = mysqli_fetch_assoc($ambil);


                    ?>

                    <form method="post" enctype="multipart/form-data">
                        <table>
                            <tr>
                                <td>NIM</td>
                                <td><input type="text" name="nim" class="form-control" id="nim" value="<?php echo $pecah['nim']; ?>"></td>
                            </tr>
                            <tr>
                                <td>NAMA</td>
                                <td><input type="text" name="nama" class="form-control" id="nama" value="<?php echo $pecah['nama']; ?>"></td>

                            <tr>
                                <td>JENJANG</td>
                                <td><select name="jenjang">
                                        <option value="D3" <?php if ($pecah['jenjang'] == 'D3') echo 'selected' ?>>D3</option>
                                        <option value="D4" <?php if ($pecah['jenjang'] == 'D4') echo 'selected' ?>>D4</option>
                                    </select></td>
                            </tr>
                            <tr>
                                <td>PRODI</td>
                                <td><select name="prodi">
                                        <option value="Teknik Informatika" <?php if ($pecah['prodi'] == 'Teknik Informatika') echo 'selected' ?>>Teknik Informatika</option>
                                        <option value="Multimedia" <?php if ($pecah['prodi'] == 'Multimedia') echo 'selected' ?>>Multimedia</option>
                                    </select></td>
                            </tr>

                            <tr>
                                <td>TINGKAT</td>
                                <td><select name="tingkat">
                                        <option value="Reguler Pagi" <?php if ($pecah['tingkat'] == 'Reguler Pagi') echo 'selected' ?>>Reguler Pagi</option>
                                        <option value="Malam" <?php if ($pecah['tingkat'] == 'Malam') echo 'selected' ?>>Malam</option>
                                    </select></td>
                            </tr>
                            <tr>
                                <td>PARALEL</td>
                                <td><select name="paralel">
                                        <option value="A" <?php if ($pecah['paralel'] == 'A') echo 'selected' ?>>A</option>
                                        <option value="B" <?php if ($pecah['paralel'] == 'B') echo 'selected' ?>>B</option>
                                        <option value="C" <?php if ($pecah['paralel'] == 'C') echo 'selected' ?>>C</option>
                                        <option value="D" <?php if ($pecah['paralel'] == 'D') echo 'selected' ?>>D</option>
                                    </select></td>
                            </tr>
                            <tr>
                                <td>DOSEN WALI</td>
                                <td><select name="dosen_wali">
                                        <option selected><?php echo $pecah['dosen_wali']; ?> </option>
                                        <option value="Dodi Prima Resda, S.Pd., M.Kom" <?php if ($pecah['dosen_wali'] == "Dodi Prima Resda, S.Pd., M.Kom") {
                                                                                            echo "selected";
                                                                                        } ?>>Dodi Prima Resda, S.Pd., M.Kom</option>
                                        <option value="Swono Sibagariang, S.Kom., M.Kom" <?php if ($pecah['dosen_wali'] == "Swono Sibagariang, S.Kom., M.Kom") {
                                                                                                echo "selected";
                                                                                            } ?>>Swono Sibagariang, S.Kom., M.Kom</option>
                                        <option value="Agung Riyadi, S.Si., M.Kom" <?php if ($pecah['dosen_wali'] == "Agung Riyadi, S.Si., M.Kom") {
                                                                                        echo "selected";
                                                                                    } ?>>Agung Riyadi, S.Si., M.Kom</option>
                                        <option value="Maidel Fani, S.Pd., M.Kom" <?php if ($pecah['dosen_wali'] == "Maidel Fani, S.Pd., M.Kom") {
                                                                                        echo "selected";
                                                                                    } ?>>Maidel Fani, S.Pd., M.Kom</option>
                                    </select></td>
                            </tr>
                            <tr>
                                <td>STATUS</td>
                                <td><select name="status">
                                        <option value="Aktif" <?php if ($pecah['status'] == 'Aktif') echo 'selected' ?>>Aktif</option>
                                        <option value="Tidak Aktif" <?php if ($pecah['status'] == 'Tidak Aktif') echo 'selected' ?>>Tidak Aktif</option>
                                    </select></td>
                            <tr>
                                <td>TANGGAL MASUK</td>
                                <td><input type="date" name="tglmasuk" class="form-control" id="tglmasuk" value="<?php echo $pecah['tglmasuk']; ?>"></td>
                            </tr>
                            <tr>
                                <td>JENIS DAFTAR</td>
                                <td><select name="jenis_daftar">
                                        <option value="Peserta Didik Baru" <?php if ($pecah['jenis_daftar'] == 'Peserta Didik Baru') echo 'selected' ?>>Peserta Didik Baru</option>
                                        <option value="UMPB" <?php if ($pecah['jenis_daftar'] == 'UMPB') echo 'selected' ?>>UMPB</option>
                                    </select></td>
                            </tr>
                            <tr>
                                <td>
                                    <button name="submit" type="submit" class="btn btn-primary" style="background-color: grey">SIMPAN</button>
                                </td>
                            </tr>

                        </table>
                    </form>
                    <?php
                    if (isset($_POST['submit'])) {
                        mysqli_query($koneksi, "update tbl_mahasiswa set nim='$_POST[nim]',
			nama='$_POST[nama]',jenjang='$_POST[jenjang]',
			prodi='$_POST[prodi]',tingkat='$_POST[tingkat]',paralel='$_POST[paralel]',dosen_wali='$_POST[dosen_wali]',
            status='$_POST[status]',tglmasuk='$_POST[tglmasuk]',jenis_daftar='$_POST[jenis_daftar]'
			where id_mhs='$_GET[id_mhs]' ");

                        echo "<script>alert('Data Telah Diubah'); </script>";
                        echo "<script>location='data_mahasiswa.php'; </script>";
                    } else {

                        echo "Data gagal diubah";
                    }

                    ?>
                </div>


                </form>