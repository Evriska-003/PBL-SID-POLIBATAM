<?php include('akses.php'); ?>

<head>
  <title>SID POLIBATAM</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="stylecs.css">
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
          <a class="dropdown-item" href="#">Data Mahasiswa</a>
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
            <a class="dropdown-item" href="#">Logout</a>
          </div>
        </li>
      </ul>
    </div>
  </nav>
  <div class="container-fluid">
    <h5>Formulir Persetujuan Rencana Studi(FRS)</h5>
    <p>

    </p>
    <?php
    include 'koneksi.php';
    $no = 1;
    $tampeg = mysqli_query($koneksi, "select * from tbl_mahasiswa where id_mhs='$_GET[id_mhs]'");
    while ($pecah = mysqli_fetch_array($tampeg)) {
    ?>
      <div class="container-fluid">
        <div class="row">
          <h6>NIM - Nama: </h6>
          <div class="col">
            <tr>
              <td> <?php echo $pecah['nim']; ?>-<?php echo $pecah['nama']; ?></td>
            </tr>

          </div>
        </div>
      </div>

      <div class="container-fluid">
        <div class="row">
          <h6>Tahun Ajaran/Semester: </h6>
          <div class="col">
            <tr>
              <td> <?php echo $pecah['angkatan']; ?>/</td>
            </tr>
          </div>
        </div>
      </div>

      <div class="container-fluid">
        <div class="row">
          <h6>Dosen Wali: </h6>
          <div class="col">
            <tr>
              <td> <?php echo $pecah['dosen_wali']; ?></td>
            </tr>
          </div>
        </div>
      </div>

      <div class="container-fluid">
        <div class="row">
          <h6>Batas/Sisa: </h6>
          <div class="col">
          </div>
        </div>
      </div>

      <div class="container-fluid">
        <div class="row">
          <h6>IPK/IPS : </h6>
          <div class="col">
          </div>
        </div>
      </div>


      <div class="container-fluid mt-3">
        <div class="btn-group btn-group-sm">
          <button type="button" class="btn btn-outline-secondary text-dark">Kembali</button>
          <button type="button" class="btn btn-outline-secondary text-dark">Simpan</button>
          <a href="cetak_kurikulum.php">
            <h6>[Lihat Kurikulum dan Nilai]</h6>
          </a>
        </div>
      </div>
      <div class="container-fluid">
        <div class="table-responsive">
          <table class="table table-bordered">
            <thead class="thead-light">
              <tr>
                <th></th>
                <th>No</th>
                <th>Kode MK</th>
                <th>Mata Kuliah</th>
                <th>Sem</th>
                <th>Dosen</th>
                <th>SKS</th>
                <th>Disetujui</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td><a class="fas fa-user" href="#"></a> </td>
                <td>1</td>
                <td>MKU002IF</td>
                <td>BAHASA INGGRIS I</td>
                <td>4</td>
                <td>CONDRA ANTONI,SS,M.A</td>
                <td>3</td>
                <td>
                  <form action="/action_page.php">
                    <div class="custom-control custom-checkbox mb-3">
                      <input type="checkbox" class="custom-control-input" id="1" name="1">
                      <label class="custom-control-label" for="1"></label>
                    </div>
                </td>

            </tbody>
          </table>
        </div>
      </div>
    <?php
    }
    ?>
</body>