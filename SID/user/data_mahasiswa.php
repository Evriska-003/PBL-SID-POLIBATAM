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
    <h5>DATA MAHASISWA</h5>
    <p>

    </p>
    <div class="container-fluid">
      <div class="row">
        <h6>NIM :</h6>
        <div class="col">
          <form class="form-inline" action="data_mahasiswa.php" method="GET">
            <input type="text" class="form-control form-control-sm" placeholder=" " name="cari">
            <input type="submit" value="cari">
            <a href="data_mahasiswa.php">Refresh</a>
          </form>
          <?php
          if (isset($_GET['cari'])) {
            $cari = $_GET['cari'];
          }
          ?>
        </div>
      </div>
    </div>

    <div class="container-fluid">
      <div class="row">
        <h6>Status :</h6>
        <div class="col">

          <form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="GET">
            <select name="status" style="width:160px;">
              <?php
              include "koneksi.php";

              $query    = mysqli_query($koneksi, "select * from tbl_mahasiswa GROUP BY status ORDER BY status");
              while ($data = mysqli_fetch_array($query)) {
              ?>
                <option value="<?= $data['status']; ?>"><?php echo $data['status']; ?></option>
              <?php
              }
              ?>
            </select>
            <input type="submit" value="Pilih">

          </form>
        </div>

        <h6>Jenjang: </h6>
        <div class="col">

          <form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="GET">
            <select name="jenjang" style="width:160px;">
              <?php
              include "koneksi.php";

              $query    = mysqli_query($koneksi, "select * from tbl_mahasiswa GROUP BY jenjang ORDER BY jenjang");
              while ($data = mysqli_fetch_array($query)) {
              ?>
                <option value="<?= $data['jenjang']; ?>"><?php echo $data['jenjang']; ?></option>
              <?php
              }
              ?>
            </select>
            <input type="submit" value="Pilih">

          </form>
        </div>

        <h6>Program: </h6>
        <div class="col">
          <form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="GET">
            <select name="prodi" style="width:160px;">
              <?php
              include "koneksi.php";

              $query    = mysqli_query($koneksi, "select * from tbl_mahasiswa GROUP BY prodi ORDER BY prodi");
              while ($data = mysqli_fetch_array($query)) {
              ?>
                <option value="<?= $data['prodi']; ?>"><?php echo $data['prodi']; ?></option>
              <?php
              }
              ?>
            </select>
            <input type="submit" value="Pilih">

          </form>
        </div>

        <h6>Kelas-Kelas Perkuliahan: </h6>
        <div class="col">
          <form action="/action_page.php">

            <select name="cars" class="default">
              <option selected> </option>
              <option value="Reguler Pagi">Reguler Pagi</option>
              <option value="Industri Malam">Industri Malam</option>
          </form>
        </div>
        </select>
        <select name="cars" class="default">
          <option selected> </option>
          <option value="A">A</option>
          <option value="B">B</option>
          <option value="C">C</option>
          <option value="D">D</option>
        </select>
        </form>
      </div>

      <div class="container-fluid">
        <div class="row">
          <h6>Angkatan: </h6>
          <div class="col">

            <form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="GET">
              <select name="angkatan" style="width:160px;">
                <?php
                include "koneksi.php";

                $query    = mysqli_query($koneksi, "select * from tbl_mahasiswa GROUP BY angkatan ORDER BY angkatan");
                while ($data = mysqli_fetch_array($query)) {
                ?>
                  <option value="<?= $data['angkatan']; ?>"><?php echo $data['angkatan']; ?></option>
                <?php
                }
                ?>
              </select>
              <input type="submit" value="Pilih">

            </form>
          </div>

          <div class="container-fluid mt-3">
            <div class="btn-group btn-group-sm">
              <button type="button" class="btn btn-outline-secondary text-dark"><a href="tambah_mahasiswa.php">Tambah Mahasiswa</a></button>
            </div>
          </div>
          <div class="container-fluid">
            <div class="table-responsive">
              <form action="hapus_mhs.php" method="POST">
                <table class="table table-bordered">
                  <thead class="thead-light">
                    <tr>
                      <th></th>
                      <th>No</th>
                      <th>NIM</th>
                      <th>Nama</th>
                      <th>Kelas</th>
                      <th>Jenjang</th>
                      <th>Prodi</th>
                      <th>Tingkat</th>
                      <th>paralel</th>
                      <th>Dosen Wali</th>
                      <th>Status</th>
                      <th>TglLahir</th>
                      <th>TempLahir</th>
                      <th>TglMasuk</th>
                      <th>Gender</th>
                      <th>Warga</th>
                      <th>Agama</th>
                      <th>GolDar</th>
                      <th>Alamat</th>
                      <th>NoTelp</th>
                      <th>Email</th>
                      <th>Anak Ke-</th>
                      <th>SMA/SMK</th>
                      <th>Beasiswa</th>
                      <th>Ayah</th>
                      <th>Kerja Ayah</th>
                      <th>Penghasilan Ayah</th>
                      <th>Ibu</th>
                      <th>Kerja Ibu</th>
                      <th>Penghasilan Ibu</th>
                      <th>Alamat Ortu</th>
                      <th>NoTelp Ortu</th>
                      <th>No Ijazah SMA/SMK</th>
                      <th>Password</th>
                      <th>TglLulus</th>
                      <th>Lulus SMA/SMK</th>
                      <th>Jalur Penerimaan</th>
                      <th>NIK KTP</th>
                      <th>Tahun Lahir Ayah</th>
                      <th>Tahun Lahir Ibu</th>
                      <th>Pendidikan Ayah</th>
                      <th>Pendidikan Ibu</th>
                      <th>NISN</th>
                      <th>NIK Ayah</th>
                      <th>NIK ibu</th>
                      <th>Jenis Daftar</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                    include 'koneksi.php';
                    $no = 1;
                    if (isset($_GET['cari'])) {
                      $cari = $_GET['cari'];
                      $data = mysqli_query($koneksi, "select * from tbl_mahasiswa where nim like '%" . $cari . "%'");
                    } elseif (isset($_GET['jenjang'])) {
                      $jenjang = trim($_GET['jenjang']);
                      $data = mysqli_query($koneksi, "select * from tbl_mahasiswa where jenjang='$jenjang' order by nim asc");
                    } elseif (isset($_GET['status'])) {
                      $status = trim($_GET['status']);
                      $data = mysqli_query($koneksi, "select * from tbl_mahasiswa where status='$status' order by nim asc");
                    } elseif (isset($_GET['prodi'])) {
                      $prodi = trim($_GET['prodi']);
                      $data = mysqli_query($koneksi, "select * from tbl_mahasiswa where prodi='$prodi' order by nim asc");
                    } elseif (isset($_GET['angkatan'])) {
                      $angkatan = trim($_GET['angkatan']);
                      $data = mysqli_query($koneksi, "select * from tbl_mahasiswa where angkatan='$angkatan' order by nim asc");
                    } else {
                      $data = mysqli_query($koneksi, "select * from tbl_mahasiswa");
                    }
                    while ($pecah = mysqli_fetch_array($data)) {
                    ?>
                      <tr>
                        <td>
                          <a href="hapus_mhs.php?id_mhs=<?php echo $pecah['id_mhs']; ?>" class="btn btn-outline-secondary text-dark"><span class="fas fa-trash"></span></a>
                          <a href="edit_mhs.php?id_mhs=<?php echo $pecah['id_mhs']; ?>" class="btn btn-outline-secondary text-dark"><span class="fas fa-edit"></span></a>
                        </td>
                        <td><?php echo $no++;  ?></td>
                        <td><?php echo $pecah['nim']; ?></td>
                        <td><?php echo $pecah['nama']; ?></td>
                        <td><?php echo $pecah['kelas']; ?></td>
                        <td><?php echo $pecah['jenjang']; ?></td>
                        <td><?php echo $pecah['prodi']; ?></td>
                        <td><?php echo $pecah['tingkat']; ?></td>
                        <td><?php echo $pecah['paralel']; ?></td>
                        <td><?php echo $pecah['dosen_wali']; ?></td>
                        <td><?php echo $pecah['status']; ?></td>
                        <td><?php echo $pecah['tgllahir']; ?></td>
                        <td><?php echo $pecah['tmptlahir']; ?></td>
                        <td><?php echo $pecah['tglmasuk']; ?></td>
                        <td><?php echo $pecah['gender']; ?></td>
                        <td><?php echo $pecah['warga']; ?></td>
                        <td><?php echo $pecah['agama']; ?></td>
                        <td><?php echo $pecah['goldar']; ?></td>
                        <td><?php echo $pecah['alamat']; ?></td>
                        <td><?php echo $pecah['notelp']; ?></td>
                        <td><?php echo $pecah['email']; ?></td>
                        <td><?php echo $pecah['anak_ke']; ?></td>
                        <td><?php echo $pecah['sma/smk']; ?></td>
                        <td><?php echo $pecah['beasiswa']; ?></td>
                        <td><?php echo $pecah['ayah']; ?></td>
                        <td><?php echo $pecah['kerja_ayah']; ?></td>
                        <td><?php echo $pecah['hasil_ayah']; ?></td>
                        <td><?php echo $pecah['ibu']; ?></td>
                        <td><?php echo $pecah['kerja_ibu']; ?></td>
                        <td><?php echo $pecah['hasil_ibu']; ?></td>
                        <td><?php echo $pecah['alamat_ortu']; ?></td>
                        <td><?php echo $pecah['notelp_ortu']; ?></td>
                        <td><?php echo $pecah['no_ijazah']; ?></td>
                        <td><?php echo $pecah['password']; ?></td>
                        <td><?php echo $pecah['tgllulus']; ?></td>
                        <td><?php echo $pecah['lulus_sma']; ?></td>
                        <td><?php echo $pecah['jalur_penerimaan']; ?></td>
                        <td><?php echo $pecah['nik']; ?></td>
                        <td><?php echo $pecah['tahunlhr_ayah']; ?></td>
                        <td><?php echo $pecah['tahunlhr_ibu']; ?></td>
                        <td><?php echo $pecah['pend_ayah']; ?></td>
                        <td><?php echo $pecah['pend_ibu']; ?></td>
                        <td><?php echo $pecah['nisn']; ?></td>
                        <td><?php echo $pecah['nik_ayah']; ?></td>
                        <td><?php echo $pecah['nik_ibu']; ?></td>
                        <td><?php echo $pecah['jenis_daftar']; ?></td>
                      </tr>
                    <?php } ?>
                  </tbody>
                </table>
            </div>
          </div>

</body>