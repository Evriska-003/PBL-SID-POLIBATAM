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
                    <a class="dropdown-item" href="data_dosen.php">Data Dosen</a>
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
        <h3>EDIT DATA DOSEN</h3>
        <hr>
        <?php
        include 'koneksi.php';
        $ambil = mysqli_query($koneksi, "select * from dosen where nidn='$_GET[nidn]' ");
        $pecah = mysqli_fetch_assoc($ambil);


        ?>
        <form enctype="multipart/form-data" method="post">
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label>NIDN</label>
                    <input type="text" name="nidn" class="form-control" id="nidn" value="<?php echo $pecah['nidn']; ?>">
                </div>
                <div class="form-group col-md-6">
                    <label>NAMA</label>
                    <input type="text" name="nama" class="form-control" id="nama" value="<?php echo $pecah['nama']; ?>">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label>EMAIL</label>
                    <input type="text" name="email" class="form-control" id="email" value="<?php echo $pecah['email']; ?>">
                </div>
                <div class="form-group col-md-6">
                    <label>NO TELP</label>
                    <input type="text" name="notelp" class="form-control" id="notelp" value="<?php echo $pecah['notelp']; ?>">
                </div>
            </div>


            <button name="submit" type="submit" class="btn btn-primary" style="background-color: grey">SIMPAN</button>
        </form>
        <?php
        if (isset($_POST['submit'])) {
            mysqli_query($koneksi, "update dosen set nidn='$_POST[nidn]',
			nama='$_POST[nama]',email='$_POST[email]',
			notelp='$_POST[notelp]' where nidn='$_GET[nidn]' ");

            echo "<script>alert('Data Telah Diubah'); </script>";
            echo "<script>location='data_dosen.php'; </script>";
        } else {
        }

        ?>
    </div>
    </div>
</body>