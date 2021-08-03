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
    <h5>Ubah Dosen Wali</h5>
    <p>

    </p>
    <div class="container-fluid">
      <div class="row">
        <h6>Status: </h6>
        <div class="col">

          <form action="/action_page.php">
            <select name="cars" class="default">
              <option selected> </option>
              <option value="aktif">Aktif</option>
              <option value="tidak">Tidak Aktif</option>
            </select>
          </form>
        </div>
        <h6>Program: </h6>
        <div class="col">
          <form action="/action_page.php">

            <select name="cars" class="default">
              <option selected> </option>
              <option value="informatika">Teknik Informatika</option>
              <option value="Geomatika">Geomatika</option>
              <option value="mulmed">Multimedia dan Jaringan</option>
              <option value="animasi">Animasi</option>
              <option value="rks">Rekayasa Keamanan Siber</option>
            </select>
          </form>
        </div>

        <h6>Jenjang: </h6>
        <div class="col">

          <form action="/action_page.php">
            <select name="cars" class="default">
              <option selected> </option>
              <option value="d3">D3</option>
              <option value="d4">D4</option>
            </select>
          </form>
        </div>
        <div class="container-fluid">
          <div class="row">
            <h6>Kelas- Kelas Perkuliahan: </h6>
            <div class="col">

              <form action="/action_page.php">
                <select name="cars" class="default">
                  <option selected> </option>
                  <option value="pagi">PAGI</option>
                  <option value="malam">MALAM</option>
                </select>

                <form action="/action_page.php">
                  <select name="cars" class="default">
                    <option selected> </option>
                    <option value="a">A</option>
                    <option value="b">B</option>
                    <option value="c">C</option>
                    <option value="d">D</option>
                  </select>
                </form>
              </form>
            </div>

            <div class="container-fluid">
              <div class="row">
                <h6>Angkatan: </h6>
                <div class="col">

                  <form action="/action_page.php">
                    <select name="cars" class="default">
                      <option selected> </option>
                      <option value="2017">2017</option>
                      <option value="2018">2018</option>
                      <option value="2019">2019</option>
                      <option value="2020">2020</option>
                      <option value="2021">2021</option>
                    </select>
                  </form>
                </div>
              </div>

              <div class="container-fluid mt-3">
                <div class="btn-group btn-group-sm">
                  <form action="edit_waldos.php" method="POST">
                    <button type="button" class="btn btn-outline-secondary text-dark">Reset</button>
                  </form>
                </div>
              </div>
              <div class="container-fluid">
                <div class="table-responsive">
                  <form method="POST">
                    <table class="table table-bordered">
                      <thead class="thead-light">
                        <tr>
                          <th>No</th>
                          <th>NIM</th>
                          <th>Nama</th>
                          <th>Dosen Wali</th>
                          <th>Status simpan</th>
                          <th></th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php
                        include 'koneksi.php';
                        $no = 1;
                        $ambil = mysqli_query($koneksi, "select * from tbl_mahasiswa");
                        while ($pecah = mysqli_fetch_array($ambil)) {
                        ?>
                          <tr>
                            <td><?php echo $no++;  ?></td>
                            <td><?php echo $pecah['nim']; ?></td>
                            <td><a href="frs.php?id_mhs=<?php echo $pecah['id_mhs']; ?>"><?php echo $pecah['nama']; ?></a></td>
                            <td>
                              <form method='POST' action=''>
                                <select name="block">
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
                                </select>
                              </form>
                            </td>
                            <td><?php echo $pecah['status']; ?></td>

                            <td><a href="edit_waldos.php?id_mhs=<?php echo $pecah['id_mhs']; ?>" class="btn btn-outline-secondary text-dark">SUBMIT</a></td>

                          </tr>
                        <?php } ?>
                      </tbody>
                    </table>
                </div>

              </div>

</body>