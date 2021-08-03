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
    <h5>DAFTAR JADWAL MATAKULIAH</h5>
    <p>

    </p>
    <div class="container-fluid">
      <div class="row">
        <h6>Tahun Ajaran: </h6>
        <div class="col">

          <form action="/action_page.php">
            <select name="cars" class="default">
              <option selected>Tahun Ajaran</option>
              <option value="2017">2017</option>
              <option value="2018">2018</option>
              <option value="2019">2019</option>
              <option value="2020">2020</option>
              <option value="2021">2021</option>

            </select>
          </form>
        </div>
        <h6>Program: </h6>
        <div class="col">
          <form action="/action_page.php">

            <select name="cars" class="default">
              <option selected>Program</option>
              <option value="Teknik Informatika">Teknik Informatika</option>
              <option value="Geomatika">Geomatika</option>
              <option value="Akuntansi">Akuntansi</option>

              <option value="Teknik Elektronika">Teknik Elektronika</option>
              <option value="Teknik Instrumentasi">Teknik Instrumentasi</option>
              <option value="Teknik Manufaktur Elektronika">Teknik Manufaktur Elektronika</option>
              <option value="Teknik Mesin">Teknik Mesin</option>
              <option value="Teknik Perencanaan dan Konstruksi Kapal">Teknik Perencanaan dan Konstruksi Kapal</option>
              <option value="Teknik Perawatan Pesawat Udara">Teknik Perawatan Pesawat Udara</option>
            </select>
          </form>
        </div>

        <h6>Kelas Perkuliahan: </h6>
        <div class="col">

          <form action="/action_page.php">
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
            <h6>Semester: </h6>
            <div class="col">

              <form action="/action_page.php">
                <select name="cars" class="default">
                  <option selected>Semester</option>
                  <option value="Ganjil">Ganjil</option>
                  <option value="Genap">Genap</option>




                </select>
              </form>
            </div>
            <h6>Jenjang: </h6>
            <div class="col">
              <form action="/action_page.php">

                <select name="cars" class="default">
                  <option selected>Jenjang</option>
                  <option value="D3">D3</option>
                  <option value="D4">D4</option>

                </select>
              </form>
            </div>
            <h6>Kelas: </h6>
            <div class="col">

              <form action="/action_page.php">
                <select name="cars" class="default">
                  <option selected>Kelas</option>
                  <option value="pagi">pagi</option>
                  <option value="malam">malam</option>
                  <option value="industri">industri</option>

                </select>
              </form>
            </div>
          </div>


          <div class="container-fluid">
            <p>

            </p>
            <div class="btn-group btn-group-sm">
              <button type="button" class="btn btn-outline-secondary text-dark">Tambah Jadwal MataKuliah</button>
              <button type="button" class="btn btn-outline-secondary text-dark">Hapus Jadwal MataKuliah</button>
            </div>
          </div>
          <div class="container-fluid">
            <div class="table-responsive">
              <table class="table table-bordered">
                <thead class="thead-light">
                  <tr>
                    <th>No</th>
                    <th>Kode MK</th>
                    <th>Mata Kuliah</th>
                    <th>Semester Kurikulum</th>
                    <th>Th Kurikulum</th>
                    <th>Ambil/Max[peserta]</th>
                    <th>Kul Gabungan</th>
                    <th>Dosen</th>
                    <th>PLP laboran</th>
                    <th>Hari</th>
                    <th>Jam Awal</th>
                    <th>Jam Akhir</th>
                    <th>Ruang</th>
                    <th>Dosen 2</th>
                    <th>Hari 2</th>
                    <th>Jam 2 Awal</th>
                    <th>Jam 2 Akhir</th>
                    <th>Ruang 2</th>
                    <th>Sesi Teori</th>
                    <th>Sesi Pratikum</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                  include 'koneksi.php';
                  $no = 1;
                  $tampeg = mysqli_query($koneksi, "select * from jadwal_matkul");
                  while ($pecah = mysqli_fetch_array($tampeg)) {
                  ?>
                    <tr>
                      <td><?php echo $no++; ?></td>
                      <td><?php echo $pecah['kode_matkul']; ?></td>
                      <td><?php echo $pecah['matkul']; ?></td>
                      <td><?php echo $pecah['semester']; ?></td>
                      <td><?php echo $pecah['tahun_kurikulum']; ?></td>
                      <td><?php echo $pecah['ambil']; ?> / <select name="max" class="default">
                          <option value="1" <?php if ($pecah['max'] == '1') echo 'selected' ?>>1</option>
                          <option value="2" <?php if ($pecah['max'] == '2') echo 'selected' ?>>2</option>
                          <option value="3" <?php if ($pecah['max'] == '3') echo 'selected' ?>>3</option>
                          <option value="4" <?php if ($pecah['max'] == '4') echo 'selected' ?>>4</option>
                          <option value="5" <?php if ($pecah['max'] == '5') echo 'selected' ?>>5</option>
                          <option value="6" <?php if ($pecah['max'] == '6') echo 'selected' ?>>6</option>
                          <option value="7" <?php if ($pecah['max'] == '7') echo 'selected' ?>>7</option>
                          <option value="8" <?php if ($pecah['max'] == '8') echo 'selected' ?>>8</option>
                        </select></td>
                      <td>
                        <?php echo $pecah['kul_gab']; ?>
                      </td>


                      <td>
                        <form method='POST' action=''>
                          <select name="dosen">
                            <option selected><?php echo $pecah['dosen']; ?> </option>
                            <option value="Dodi Prima Resda, S.Pd., M.Kom" <?php if ($pecah['dosen'] == "Dodi Prima Resda, S.Pd., M.Kom") {
                                                                              echo "selected";
                                                                            } ?>>Dodi Prima Resda, S.Pd., M.Kom</option>
                            <option value="Swono Sibagariang, S.Kom., M.Kom" <?php if ($pecah['dosen'] == "Swono Sibagariang, S.Kom., M.Kom") {
                                                                                echo "selected";
                                                                              } ?>>Swono Sibagariang, S.Kom., M.Kom</option>
                            <option value="Metta Santiputri, S.T., M.Sc., Ph.D" <?php if ($pecah['dosen'] == "Metta Santiputri, S.T., M.Sc., Ph.D") {
                                                                                  echo "selected";
                                                                                } ?>>Metta Santiputri, S.T., M.Sc., Ph.D</option>
                            <option value="Maidel Fani, S.Pd., M.Kom" <?php if ($pecah['dosen'] == "Maidel Fani, S.Pd., M.Kom") {
                                                                        echo "selected";
                                                                      } ?>>Maidel Fani, S.Pd., M.Kom</option>
                          </select>
                        </form>
                      </td>

                      <td>
                        <form method='POST' action=''>
                          <select name="laboran">
                            <option selected><?php echo $pecah['laboran']; ?> </option>
                            <option value="	Festy Winda Sari, S.Tr" <?php if ($pecah['laboran'] == "	Festy Winda Sari, S.Tr") {
                                                                        echo "selected";
                                                                      } ?>> Festy Winda Sari, S.Tr</option>
                            <option value="Banu Failasuf, S.Tr" <?php if ($pecah['laboran'] == "Banu Failasuf, S.Tr") {
                                                                  echo "selected";
                                                                } ?>>Banu Failasuf, S.Tr</option>
                            <option value="Riki, S.Tr" <?php if ($pecah['laboran'] == "Riki, S.Tr") {
                                                          echo "selected";
                                                        } ?>>Riki, S.Tr</option>
                            <option value="Cahya Miranto, S.ST" <?php if ($pecah['laboran'] == "Cahya Miranto, S.ST") {
                                                                  echo "selected";
                                                                } ?>>Cahya Miranto, S.ST</option>
                          </select>
                        </form>
                      </td>

                      <td>
                        <select name="hari">
                          <option value="senin" <?php if ($pecah['hari'] == 'senin') echo 'selected' ?>>senin</option>
                          <option value="selasa" <?php if ($pecah['hari'] == 'selasa') echo 'selected' ?>>selasa</option>
                          <option value="rabu" <?php if ($pecah['hari'] == 'rabu') echo 'selected' ?>>rabu</option>
                          <option value="kamis" <?php if ($pecah['hari'] == 'kamis') echo 'selected' ?>>kamis</option>
                          <option value="jumat" <?php if ($pecah['hari'] == 'jumat') echo 'selected' ?>>jumat</option>
                          <option value="sabtu" <?php if ($pecah['hari'] == 'sabtu') echo 'selected' ?>>sabtu</option>

                        </select>
                      </td>

                      <td>
                        <select name="jam_awal" class="default">
                          <option value="6" <?php if ($pecah['jam_awal'] == '6') echo 'selected' ?>>6</option>
                          <option value="7" <?php if ($pecah['jam_awal'] == '7') echo 'selected' ?>>7</option>
                          <option value="8" <?php if ($pecah['jam_awal'] == '8') echo 'selected' ?>>8</option>
                          <option value="9" <?php if ($pecah['jam_awal'] == '9') echo 'selected' ?>>9</option>
                          <option value="10" <?php if ($pecah['jam_awal'] == '10') echo 'selected' ?>>10</option>
                          <option value="11" <?php if ($pecah['jam_awal'] == '11') echo 'selected' ?>>11</option>
                          <option value="12" <?php if ($pecah['jam_awal'] == '12') echo 'selected' ?>>12</option>
                          <option value="13" <?php if ($pecah['jam_awal'] == '13') echo 'selected' ?>>13</option>
                          <option value="14" <?php if ($pecah['jam_awal'] == '14') echo 'selected' ?>>14</option>
                          <option value="15" <?php if ($pecah['jam_awal'] == '15') echo 'selected' ?>>15</option>
                          <option value="16" <?php if ($pecah['jam_awal'] == '16') echo 'selected' ?>>16</option>
                          <option value="17" <?php if ($pecah['jam_awal'] == '17') echo 'selected' ?>>17</option>
                          <option value="18" <?php if ($pecah['jam_awal'] == '18') echo 'selected' ?>>18</option>
                          <option value="19" <?php if ($pecah['jam_awal'] == '19') echo 'selected' ?>>19</option>
                          <option value="20" <?php if ($pecah['jam_awal'] == '20') echo 'selected' ?>>20</option>
                          <option value="21" <?php if ($pecah['jam_awal'] == '21') echo 'selected' ?>>21</option>
                        </select>
                      </td>

                      <td>
                        <select name="jam" class="default">
                          <option value="6" <?php if ($pecah['jam'] == '6') echo 'selected' ?>>6</option>
                          <option value="7" <?php if ($pecah['jam'] == '7') echo 'selected' ?>>7</option>
                          <option value="8" <?php if ($pecah['jam'] == '8') echo 'selected' ?>>8</option>
                          <option value="9" <?php if ($pecah['jam'] == '9') echo 'selected' ?>>9</option>
                          <option value="10" <?php if ($pecah['jam'] == '10') echo 'selected' ?>>10</option>
                          <option value="11" <?php if ($pecah['jam'] == '11') echo 'selected' ?>>11</option>
                          <option value="12" <?php if ($pecah['jam'] == '12') echo 'selected' ?>>12</option>
                          <option value="13" <?php if ($pecah['jam'] == '13') echo 'selected' ?>>13</option>
                          <option value="14" <?php if ($pecah['jam'] == '14') echo 'selected' ?>>14</option>
                          <option value="15" <?php if ($pecah['jam'] == '15') echo 'selected' ?>>15</option>
                          <option value="16" <?php if ($pecah['jam'] == '16') echo 'selected' ?>>16</option>
                          <option value="17" <?php if ($pecah['jam'] == '17') echo 'selected' ?>>17</option>
                          <option value="18" <?php if ($pecah['jam'] == '18') echo 'selected' ?>>18</option>
                          <option value="19" <?php if ($pecah['jam'] == '19') echo 'selected' ?>>19</option>
                          <option value="20" <?php if ($pecah['jam'] == '20') echo 'selected' ?>>20</option>
                          <option value="21" <?php if ($pecah['jam'] == '21') echo 'selected' ?>>21</option>
                        </select>
                      </td>

                      <td>
                        <?php echo $pecah['ruangan']; ?>
                      </td>
                      <td><select name="dosen_dua">
                          <option selected><?php echo $pecah['dosen_dua']; ?> </option>
                          <option value="Dodi Prima Resda, S.Pd., M.Kom" <?php if ($pecah['dosen_dua'] == "Dodi Prima Resda, S.Pd., M.Kom") {
                                                                            echo "selected";
                                                                          } ?>>Dodi Prima Resda, S.Pd., M.Kom</option>
                          <option value="Swono Sibagariang, S.Kom., M.Kom" <?php if ($pecah['dosen_dua'] == "Swono Sibagariang, S.Kom., M.Kom") {
                                                                              echo "selected";
                                                                            } ?>>Swono Sibagariang, S.Kom., M.Kom</option>
                          <option value="Metta Santiputri, S.T., M.Sc., Ph.D" <?php if ($pecah['dosen_dua'] == "Metta Santiputri, S.T., M.Sc., Ph.D") {
                                                                                echo "selected";
                                                                              } ?>>Metta Santiputri, S.T., M.Sc., Ph.D</option>
                          <option value="Maidel Fani, S.Pd., M.Kom" <?php if ($pecah['dosen_dua'] == "Maidel Fani, S.Pd., M.Kom") {
                                                                      echo "selected";
                                                                    } ?>>Maidel Fani, S.Pd., M.Kom</option>
                        </select></td>
                      <td>
                        <select name="haridua">
                          <option value="senin" <?php if ($pecah['haridua'] == 'senin') echo 'selected' ?>>senin</option>
                          <option value="selasa" <?php if ($pecah['haridua'] == 'selasa') echo 'selected' ?>>selasa</option>
                          <option value="rabu" <?php if ($pecah['haridua'] == 'rabu') echo 'selected' ?>>rabu</option>
                          <option value="kamis" <?php if ($pecah['haridua'] == 'kamis') echo 'selected' ?>>kamis</option>
                          <option value="jumat" <?php if ($pecah['haridua'] == 'jumat') echo 'selected' ?>>jumat</option>
                          <option value="sabtu" <?php if ($pecah['haridua'] == 'sabtu') echo 'selected' ?>>sabtu</option>

                        </select>
                      </td>


                      <td>
                        <select name="jamdua_awal" class="default">
                          <option value="6" <?php if ($pecah['jamdua_awal'] == '6') echo 'selected' ?>>6</option>
                          <option value="7" <?php if ($pecah['jamdua_awal'] == '7') echo 'selected' ?>>7</option>
                          <option value="8" <?php if ($pecah['jamdua_awal'] == '8') echo 'selected' ?>>8</option>
                          <option value="9" <?php if ($pecah['jamdua_awal'] == '9') echo 'selected' ?>>9</option>
                          <option value="10" <?php if ($pecah['jamdua_awal'] == '10') echo 'selected' ?>>10</option>
                          <option value="11" <?php if ($pecah['jamdua_awal'] == '11') echo 'selected' ?>>11</option>
                          <option value="12" <?php if ($pecah['jamdua_awal'] == '12') echo 'selected' ?>>12</option>
                          <option value="13" <?php if ($pecah['jamdua_awal'] == '13') echo 'selected' ?>>13</option>
                          <option value="14" <?php if ($pecah['jamdua_awal'] == '14') echo 'selected' ?>>14</option>
                          <option value="15" <?php if ($pecah['jamdua_awal'] == '15') echo 'selected' ?>>15</option>
                          <option value="16" <?php if ($pecah['jamdua_awal'] == '16') echo 'selected' ?>>16</option>
                          <option value="17" <?php if ($pecah['jamdua_awal'] == '17') echo 'selected' ?>>17</option>
                          <option value="18" <?php if ($pecah['jamdua_awal'] == '18') echo 'selected' ?>>18</option>
                          <option value="19" <?php if ($pecah['jamdua_awal'] == '19') echo 'selected' ?>>19</option>
                          <option value="20" <?php if ($pecah['jamdua_awal'] == '20') echo 'selected' ?>>20</option>
                          <option value="21" <?php if ($pecah['jamdua_awal'] == '21') echo 'selected' ?>>21</option>
                        </select>
                      </td>

                      <td>
                        <select name="jamdua_akhir" class="default">
                          <option value="6" <?php if ($pecah['jamdua_akhir'] == '6') echo 'selected' ?>>6</option>
                          <option value="7" <?php if ($pecah['jamdua_akhir'] == '7') echo 'selected' ?>>7</option>
                          <option value="8" <?php if ($pecah['jamdua_akhir'] == '8') echo 'selected' ?>>8</option>
                          <option value="9" <?php if ($pecah['jamdua_akhir'] == '9') echo 'selected' ?>>9</option>
                          <option value="10" <?php if ($pecah['jamdua_akhir'] == '10') echo 'selected' ?>>10</option>
                          <option value="11" <?php if ($pecah['jamdua_akhir'] == '11') echo 'selected' ?>>11</option>
                          <option value="12" <?php if ($pecah['jamdua_akhir'] == '12') echo 'selected' ?>>12</option>
                          <option value="13" <?php if ($pecah['jamdua_akhir'] == '13') echo 'selected' ?>>13</option>
                          <option value="14" <?php if ($pecah['jamdua_akhir'] == '14') echo 'selected' ?>>14</option>
                          <option value="15" <?php if ($pecah['jamdua_akhir'] == '15') echo 'selected' ?>>15</option>
                          <option value="16" <?php if ($pecah['jamdua_akhir'] == '16') echo 'selected' ?>>16</option>
                          <option value="17" <?php if ($pecah['jamdua_akhir'] == '17') echo 'selected' ?>>17</option>
                          <option value="18" <?php if ($pecah['jamdua_akhir'] == '18') echo 'selected' ?>>18</option>
                          <option value="19" <?php if ($pecah['jamdua_akhir'] == '19') echo 'selected' ?>>19</option>
                          <option value="20" <?php if ($pecah['jamdua_akhir'] == '20') echo 'selected' ?>>20</option>
                          <option value="21" <?php if ($pecah['jamdua_akhir'] == '21') echo 'selected' ?>>21</option>
                        </select>
                      </td>

                      <td>
                        <?php echo $pecah['ruangdua']; ?>
                      </td>
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
                    </tr>
                </tbody>
              </table>
            </div>
          </div>
        <?php }
        ?>
</body>