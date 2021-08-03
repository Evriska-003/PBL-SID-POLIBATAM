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
    <h5>DAFTAR MATAKULIAH</h5>
    <p>

    </p>

    <div class="container-fluid">
      <div class="row">
        <h6>Jenjang: </h6>
        <div class="col">
          <form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="GET">
            <select name="jenjang" style="width:160px;">
              <?php
              include "koneksi.php";

              $query    = mysqli_query($koneksi, "select * from matkul GROUP BY jenjang ORDER BY jenjang");
              while ($data = mysqli_fetch_array($query)) {
              ?>
                <option value="<?= $data['jenjang']; ?>"><?php echo $data['jenjang']; ?></option>
              <?php
              }
              ?>
            </select>
            <input type="submit" value="Pilih">
            <a href="daftar_matkul.php">Refresh</a>
          </form>
        </div>
        <h6>Program: </h6>
        <div class="col">
          <form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="GET">
            <select name="prodi" style="width:160px;">
              <?php
              include "koneksi.php";

              $query    = mysqli_query($koneksi, "select * from matkul GROUP BY prodi ORDER BY prodi");
              while ($data = mysqli_fetch_array($query)) {
              ?>
                <option value="<?= $data['prodi']; ?>"><?php echo $data['prodi']; ?></option>
              <?php
              }
              ?>
            </select>
            <input type="submit" value="Pilih">
            <a href="daftar_matkul.php">Refresh</a>
          </form>
        </div>
        <h6>Tahun Kurikulum: </h6>
        <div class="col">

          <form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="GET">
            <select name="tahun" style="width:160px;">
              <?php
              include "koneksi.php";

              $query    = mysqli_query($koneksi, "select * from matkul GROUP BY tahun ORDER BY tahun");
              while ($data = mysqli_fetch_array($query)) {
              ?>
                <option value="<?= $data['tahun']; ?>"><?php echo $data['tahun']; ?></option>
              <?php
              }
              ?>
            </select>
            <input type="submit" value="Pilih">
            <a href="daftar_matkul.php">Refresh</a>
          </form>
        </div>
        <div class="container-fluid mt-3">
          <div class="btn-group btn-group-sm">
            <button type="button" class="btn btn-outline-secondary text-dark">Tambah MataKuliah</button>
            <button type="button" class="btn btn-outline-secondary text-dark">Hapus MataKuliah</button>
          </div>
        </div>
        <div class="container-fluid">
          <div class="table-responsive">
            <table class="table table-bordered">
              <thead class="thead-light">
                <tr>
                  <th></th>
                  <th>No</th>
                  <th>Kode</th>
                  <th>MataKuliah</th>
                  <th>MataKuliah(Inggris)</th>
                  <th>Sesi Teori</th>
                  <th>Sesi Praktikum</th>
                  <th>Sesi Total</th>
                  <th>SKS Teori</th>
                  <th>SKS Praktikum</th>
                  <th>SKS Total</th>
                  <th>Semester</th>
                  <th>Jenis</th>
                </tr>
              </thead>
              <tbody>
                <?php
                include 'koneksi.php';
                $no = 1;
                if ($_SESSION['jurusan']) {
                  $tampeg = mysqli_query($koneksi, "select * from matkul where role='" . $_SESSION['jurusan'] . "'");
                } elseif (isset($_GET['jenjang'])) {
                  $jenjang = trim($_GET['jenjang']);
                  $tampeg = mysqli_query($koneksi, "select * from matkul where jenjang='$jenjang' order by kode asc");
                } elseif (isset($_GET['prodi'])) {
                  $prodi = trim($_GET['prodi']);
                  $tampeg = mysqli_query($koneksi, "select * from matkul where prodi='$prodi' order by kode asc");
                } elseif (isset($_GET['tahun'])) {
                  $tahun = trim($_GET['tahun']);
                  $tampeg = mysqli_query($koneksi, "select * from matkul where tahun='$tahun' order by kode asc");
                } else {
                  $tampeg = mysqli_query($koneksi, "select * from matkul");
                }

                while ($pecah = mysqli_fetch_array($tampeg)) {
                ?>
                  <tr>
                    <td>
                      <a href="hapus_matkul.php?id_matkul=<?php echo $pecah['id_matkul']; ?>" class="btn btn-outline-secondary text-dark"><span class="fas fa-trash"></span></a>
                    </td>
                    <td><?php echo $no++; ?></td>
                    <td><?php echo $pecah['kode']; ?></td>
                    <td><?php echo $pecah['matkul']; ?></td>
                    <td><?php echo $pecah['matkul_ing']; ?></td>
                    <td>
                      <select name="sesi_teori">
                        <option value="1" <?php if ($pecah['sesi_teori'] == '1') echo 'selected' ?>>1</option>
                        <option value="2" <?php if ($pecah['sesi_teori'] == '2') echo 'selected' ?>>2</option>
                        <option value="3" <?php if ($pecah['sesi_teori'] == '3') echo 'selected' ?>>3</option>
                        <option value="4" <?php if ($pecah['sesi_teori'] == '4') echo 'selected' ?>>4</option>
                      </select>
                    </td>


                    <td>
                      <select name="sesi_prak">
                        <option value="1" <?php if ($pecah['sesi_prak'] == '1') echo 'selected' ?>>1</option>
                        <option value="2" <?php if ($pecah['sesi_prak'] == '2') echo 'selected' ?>>2</option>
                        <option value="3" <?php if ($pecah['sesi_prak'] == '3') echo 'selected' ?>>3</option>
                        <option value="4" <?php if ($pecah['sesi_prak'] == '4') echo 'selected' ?>>4</option>
                      </select>
                    </td>

                    <td>
                      <select name="sesi_total">
                        <option value="1" <?php if ($pecah['sesi_total'] == '1') echo 'selected' ?>>1</option>
                        <option value="2" <?php if ($pecah['sesi_total'] == '2') echo 'selected' ?>>2</option>
                        <option value="3" <?php if ($pecah['sesi_total'] == '3') echo 'selected' ?>>3</option>
                        <option value="4" <?php if ($pecah['sesi_total'] == '4') echo 'selected' ?>>4</option>
                        <option value="5" <?php if ($pecah['sesi_total'] == '5') echo 'selected' ?>>5</option>
                        <option value="6" <?php if ($pecah['sesi_total'] == '6') echo 'selected' ?>>6</option>
                        <option value="7" <?php if ($pecah['sesi_total'] == '7') echo 'selected' ?>>7</option>
                        <option value="8" <?php if ($pecah['sesi_total'] == '8') echo 'selected' ?>>8</option>
                      </select>
                    </td>

                    <td>
                      <select name="sks_teori">
                        <option value="1" <?php if ($pecah['sks_teori'] == '1') echo 'selected' ?>>1</option>
                        <option value="2" <?php if ($pecah['sks_teori'] == '2') echo 'selected' ?>>2</option>
                        <option value="3" <?php if ($pecah['sks_teori'] == '3') echo 'selected' ?>>3</option>
                        <option value="4" <?php if ($pecah['sks_teori'] == '4') echo 'selected' ?>>4</option>
                        <option value="5" <?php if ($pecah['sks_teori'] == '5') echo 'selected' ?>>5</option>
                        <option value="6" <?php if ($pecah['sks_teori'] == '6') echo 'selected' ?>>6</option>
                        <option value="7" <?php if ($pecah['sks_teori'] == '7') echo 'selected' ?>>7</option>
                        <option value="8" <?php if ($pecah['sks_teori'] == '8') echo 'selected' ?>>8</option>
                      </select>
                    </td>

                    <td>
                      <select name="sks_prak">
                        <option value="1" <?php if ($pecah['sks_prak'] == '1') echo 'selected' ?>>1</option>
                        <option value="2" <?php if ($pecah['sks_prak'] == '2') echo 'selected' ?>>2</option>
                        <option value="3" <?php if ($pecah['sks_prak'] == '3') echo 'selected' ?>>3</option>
                        <option value="4" <?php if ($pecah['sks_prak'] == '4') echo 'selected' ?>>4</option>
                        <option value="5" <?php if ($pecah['sks_prak'] == '5') echo 'selected' ?>>5</option>
                        <option value="6" <?php if ($pecah['sks_prak'] == '6') echo 'selected' ?>>6</option>
                        <option value="7" <?php if ($pecah['sks_prak'] == '7') echo 'selected' ?>>7</option>
                        <option value="8" <?php if ($pecah['sks_prak'] == '8') echo 'selected' ?>>8</option>
                      </select>
                    </td>

                    <td>
                      <select name="sks_total">
                        <option value="1" <?php if ($pecah['sks_total'] == '1') echo 'selected' ?>>1</option>
                        <option value="2" <?php if ($pecah['sks_total'] == '2') echo 'selected' ?>>2</option>
                        <option value="3" <?php if ($pecah['sks_total'] == '3') echo 'selected' ?>>3</option>
                        <option value="4" <?php if ($pecah['sks_total'] == '4') echo 'selected' ?>>4</option>
                        <option value="5" <?php if ($pecah['sks_total'] == '5') echo 'selected' ?>>5</option>
                        <option value="6" <?php if ($pecah['sks_total'] == '6') echo 'selected' ?>>6</option>
                        <option value="7" <?php if ($pecah['sks_total'] == '7') echo 'selected' ?>>7</option>
                        <option value="8" <?php if ($pecah['sks_total'] == '8') echo 'selected' ?>>8</option>
                      </select>

                    </td>

                    <td>
                      <select name="semester">
                        <option value="1" <?php if ($pecah['semester'] == '1') echo 'selected' ?>>1</option>
                        <option value="2" <?php if ($pecah['semester'] == '2') echo 'selected' ?>>2</option>
                        <option value="3" <?php if ($pecah['semester'] == '3') echo 'selected' ?>>3</option>
                        <option value="4" <?php if ($pecah['semester'] == '4') echo 'selected' ?>>4</option>
                        <option value="5" <?php if ($pecah['semester'] == '5') echo 'selected' ?>>5</option>
                        <option value="6" <?php if ($pecah['semester'] == '6') echo 'selected' ?>>6</option>
                        <option value="7" <?php if ($pecah['semester'] == '7') echo 'selected' ?>>7</option>
                        <option value="8" <?php if ($pecah['semester'] == '8') echo 'selected' ?>>8</option>
                      </select>

                    </td>

                    <td>

                      <select name="jenis">
                        <option selected> </option>
                        <option value="Matakuliah Teori - MKDU" <?php if ($pecah['jenis'] == 'Matakuliah Teori - MKDU') echo 'selected' ?>>Matakuliah Teori - MKDU</option>
                        <option value="Matakuliah Teori - Keahlian" <?php if ($pecah['jenis'] == 'Matakuliah Teori - Keahlian') echo 'selected' ?>>Matakuliah Teori - Keahlian</option>
                        <option value="Matakuliah Praktek - MKDU" <?php if ($pecah['jenis'] == 'Matakuliah Praktek - MKDU') echo 'selected' ?>>Matakuliah Praktek - MKDU</option>
                        <option value="Matakuliah Praktek - Keahlian" <?php if ($pecah['jenis'] == 'Matakuliah Praktek - Keahlian') echo 'selected' ?>>Matakuliah Praktek - Keahlian</option>
                      </select>
                      </form>
                    </td>
                  </tr>
                <?php } ?>
              </tbody>
            </table>
          </div>
        </div>

</body>