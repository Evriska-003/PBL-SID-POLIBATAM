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
    <div class="container-fluid">
        <h5>DATA DOSEN</h5>
        <p>

        </p>
        <div class="container-fluid">
            <div class="row">
                <h6>NIDN :</h6>
                <div class="col">
                    <form class="form-inline" action="data_dosen.php" method="GET">
                        <input type="text" class="form-control form-control-sm" placeholder=" " name="cari">
                        <input type="submit" value="cari">
                        <a href="data_dosen.php">Refresh</a>
                    </form>
                    <?php
                    if (isset($_GET['cari'])) {
                        $cari = $_GET['cari'];
                    }
                    ?>
                </div>
            </div>
        </div>


        <div class="container-fluid mt-3">
            <div class="btn-group btn-group-sm">
                <form action="" method="POST">
                    <button type="button" class="btn btn-outline-secondary text-dark">Reset</button>
                </form>
            </div>
        </div>
        <div class="container-fluid">
            <div class="table-responsive">
                <form action="edit_waldos.php" method="POST">
                    <table class="table table-bordered">
                        <thead class="thead-light">
                            <tr>
                                <th>No</th>
                                <th>NIDN</th>
                                <th>Nama</th>
                                <th>EMAIL</th>
                                <th>NO TELP</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            include 'koneksi.php';
                            $no = 1;
                            if (isset($_GET['cari'])) {
                                $cari = $_GET['cari'];
                                $tampeg = mysqli_query($koneksi, "select * from dosen where nidn like '%" . $cari . "%'");
                            } elseif ($_SESSION['inisial']) {
                                $tampeg = mysqli_query($koneksi, "select * from dosen where role='" . $_SESSION['inisial'] . "'");
                            } else {
                                $tampeg = mysqli_query($koneksi, "select * from dosen ");
                            }
                            while ($pecah = mysqli_fetch_array($tampeg)) {
                            ?>
                                <tr>
                                    <td><?php echo $no++;  ?></td>
                                    <td><?php echo $pecah['nidn']; ?></td>
                                    <td><?php echo $pecah['nama']; ?></td>
                                    <td><?php echo $pecah['email']; ?></td>
                                    <td><?php echo $pecah['notelp']; ?></td>
                                    <td><a href="edit_dosen.php?nidn=<?php echo $pecah['nidn']; ?>" class="btn btn-outline-secondary text-dark"><span class="fas fa-edit"></span></a>
                                    </td>

                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
            </div>

        </div>

</body>