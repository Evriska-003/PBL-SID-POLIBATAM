<?php include('akses.php'); ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <title>SIM POLIBATAM</title>
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
          <a class="dropdown-item" href="datapribadi.php">edit/ubah data</a>
          <a class="dropdown-item" href="frs.php">frs/krs</a>
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
    <p align="center">Lihat/Ubah Data Pribadi</p>
    <div class="col-lg-12">
      <div class="row">
        <div class="col-lg-6">
          <h6><strong>Data Pribadi </strong></h6>
          <?php
          include 'koneksi.php';
          $no = 1;
          if ($_SESSION['inisial']) {
            $tampeg = mysqli_query($koneksi, "select * from tbl_mahasiswa where role='" . $_SESSION['inisial'] . "'");
          } else {
            $tampeg = mysqli_query($koneksi, "select * from tbl_mahasiswa where id_mhs='$_GET[id_mhs]'");
          }
          while ($pecah = mysqli_fetch_array($tampeg)) {
          ?>
            <form method="POST" enctype="multipart/form-data">
              <table>
                <tr>
                  <td>1.</td>
                  <td>No pendaftaran</td>
                  <td>&nbsp;:&nbsp;</td>
                  <td></td>
                </tr>
                <tr>
                  <td>2.</td>
                  <td>Jalur Penerimaan</td>
                  <td>&nbsp;:&nbsp;</td>
                  <td><?php echo $pecah['jalur_penerimaan']; ?></td>
                </tr>
                <tr>
                  <td>3.</td>
                  <td>NIM</td>
                  <td>&nbsp;:&nbsp;</td>
                  <td><?php echo $pecah['nim']; ?></td>
                </tr>
                <tr>
                  <td>4.</td>
                  <td>Nama Lengkap</td>
                  <td>&nbsp;:&nbsp;</td>
                  <td><?php echo $pecah['nama']; ?></td>
                </tr>
                <tr>
                  <td>5.</td>
                  <td>NIK / No KTP*</td>
                  <td>&nbsp;:&nbsp;</td>
                  <td><?php echo $pecah['nik']; ?></td>
                </tr>
                <tr>
                  <td>6.</td>
                  <td>kelas</td>
                  <td>&nbsp;:&nbsp;</td>
                  <td><?php echo $pecah['tingkat']; ?> - <?php echo $pecah['paralel']; ?></td>
                </tr>
                <tr>
                  <td>7.</td>
                  <td>Kode Kelas</td>
                  <td>&nbsp;:&nbsp;</td>
                  <td>SA1</td>
                </tr>
                <tr>
                  <td>8.</td>
                  <td>Dosen Wali</td>
                  <td>&nbsp;:&nbsp;</td>
                  <td><?php echo $pecah['dosen_wali']; ?></td>
                </tr>
                <tr>
                  <td>9.</td>
                  <td>Status</td>
                  <td>&nbsp;:&nbsp;</td>
                  <td><?php echo $pecah['status']; ?></td>
                </tr>
                <tr>
                  <td>10.</td>
                  <td>TTL*</td>
                  <td>&nbsp;:&nbsp;</td>
                  <td><?php echo $pecah['tmptlahir']; ?></td>
                </tr>
                <tr>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td><?php echo $pecah['tgllahir']; ?></td>
                </tr>

                <tr>
                  <td>11.</td>
                  <td>Tanggal Masuk</td>
                  <td>&nbsp;:&nbsp;</td>
                  <td><?php echo $pecah['tglmasuk']; ?></td>
                </tr>
                <tr>
                  <td>12.</td>
                  <td>Jenis Kelamin</td>
                  <td>&nbsp;:&nbsp;</td>
                  <td><?php echo $pecah['gender']; ?>
                  </td>
                </tr>
                <tr>
                  <td>13.</td>
                  <td>Kewarganegaraan</td>
                  <td>&nbsp;:&nbsp;</td>
                  <td><?php echo $pecah['warga']; ?>
                  </td>
                </tr>
                <tr>
                  <td>14.</td>
                  <td>Agama</td>
                  <td>&nbsp;:&nbsp;</td>
                  <td><?php echo $pecah['agama']; ?></td>
                </tr>
                <tr>
                  <td>15.</td>
                  <td>Gol Darah*</td>
                  <td>&nbsp;:&nbsp;</td>

                  <td>
                    <?php echo $pecah['goldar']; ?>
                  </td>
                </tr>
                <tr>
                  <td>16.</td>
                  <td>Alamat Lengkap*</td>
                  <td>&nbsp;:&nbsp;</td>
                  <td><?php echo $pecah['alamat']; ?></td>
                </tr>
                <tr>
                  <td>17.</td>
                  <td>Kelurahan*</td>
                  <td>&nbsp;:&nbsp;</td>
                  <td><?php echo $pecah['kelurahan']; ?></td>
                </tr>
                <tr>
                  <td>18.</td>
                  <td>Kecamatan</td>
                  <td>&nbsp;:&nbsp;</td>
                  <td><?php echo $pecah['kecamatan']; ?>
                  </td>
                </tr>
                <tr>
                  <td>21.</td>
                  <td>Kode Pos*</td>
                  <td>&nbsp;:&nbsp;</td>
                  <td><?php echo $pecah['pos']; ?></td>
                </tr>
                <tr>
                  <td>22.</td>
                  <td>Nomer Telepon*</td>
                  <td>&nbsp;:&nbsp;</td>
                  <td><?php echo $pecah['notelp']; ?></td>
                </tr>
                <tr>
                  <td>23.</td>
                  <td>Status Marital*</td>
                  <td>&nbsp;:&nbsp;</td>
                  <td><?php echo $pecah['status_marital']; ?></td>
                </tr>
                <tr>
                  <td>24.</td>
                  <td>Email*</td>
                  <td>&nbsp;:&nbsp;</td>
                  <td><?php echo $pecah['email']; ?></td>
                </tr>
                <tr>
                  <td>25.</td>
                  <td>Angkatan</td>
                  <td>&nbsp;:&nbsp;</td>
                  <td><?php echo $pecah['angkatan']; ?></td>
                </tr>
                <tr>
              </table>
              *wajib diisi
        </div>
        <div class="col-lg-6">
          <h6><strong>Data Orang Tua / Wali</strong></h6>
          <table>
            <tr>
              <td>1.</td>
              <td>Nama Ayah / Wali*</td>
              <td>&nbsp;:&nbsp;</td>
              <td><?php echo $pecah['ayah']; ?></td>
            </tr>
            <tr>
              <td>2.</td>
              <td>Tahun LahirAyah / Wali*</td>
              <td>&nbsp;:&nbsp;</td>
              <td><?php echo $pecah['tahunlhr_ayah']; ?></td>
            </tr>
            <tr>
              <td>3.</td>
              <td>Keterangan Ayah*</td>
              <td>&nbsp;:&nbsp;</td>
              <td>
                <?php echo $pecah['ketayah']; ?>
              </td>
            </tr>
            <tr>
              <td>4.</td>
              <td>Pekerjaan Ayah/Wali*</td>
              <td>&nbsp;:&nbsp;</td>
              <td><?php echo $pecah['kerja_ayah']; ?></td>
            </tr>
            <tr>
              <td>5.</td>
              <td>Penghasilan Ayah Per Bulan*</td>
              <td>&nbsp;:&nbsp;</td>
              <td><?php echo $pecah['hasil_ayah']; ?></td>
            </tr>
            <tr>
              <td>6.</td>
              <td>Pendidikan Ayah*</td>
              <td>&nbsp;:&nbsp;</td>
              <td><?php echo $pecah['pend_ayah']; ?></td>
            </tr>
            <tr>
              <td>7.</td>
              <td>Nama Ibu*</td>
              <td>&nbsp;:&nbsp;</td>
              <td><?php echo $pecah['ibu']; ?></td>
            </tr>
            <tr>
              <td>8</td>
              <td>Tahun Lahir Ibu*</td>
              <td>&nbsp;:&nbsp;</td>
              <td><?php echo $pecah['tahunlhr_ibu']; ?></td>
            </tr>
            <tr>
              <td>9.</td>
              <td>Keterangan Ibu*</td>
              <td>&nbsp;:&nbsp;</td>
              <td>
                <?php echo $pecah['ketibu']; ?>
              </td>
            </tr>
            <tr>
              <td>10.</td>
              <td>Pekerjaan Ibu *</td>
              <td>&nbsp;:&nbsp;</td>
              <td><?php echo $pecah['kerja_ibu']; ?></td>
            </tr>
            <tr>
              <td>11.</td>
              <td>Penghasilan ibu Per Bulan*</td>
              <td>&nbsp;:&nbsp;</td>
              <td><?php echo $pecah['hasil_ibu']; ?></td>
            </tr>
            <tr>
              <td>12.</td>
              <td>Pendidikan Ibu*</td>
              <td>&nbsp;:&nbsp;</td>
              <td><?php echo $pecah['pend_ibu']; ?></td>
            <tr>
              <td>13.</td>
              <td>Alamat Orang Tua*</td>
              <td>&nbsp;:&nbsp;</td>
              <td><?php echo $pecah['alamat_ortu']; ?></td>
            </tr>
            <tr>
              <td>14.</td>
              <td>Nomer Telepon Orang Tua*</td>
              <td>&nbsp;:&nbsp;</td>
              <td><?php echo $pecah['notelp_ortu']; ?></td>
            </tr>
            <tr>
              <td>15.</td>
              <td>Jumlah Anak*</td>
              <td>&nbsp;:&nbsp;</td>
              <td><?php echo $pecah['jmlh_anak']; ?></td>
            </tr>
            <tr>
              <td>16.</td>
              <td>Anak Ke*</td>
              <td>&nbsp;:&nbsp;</td>
              <td><?php echo $pecah['anak_ke']; ?></td>
            </tr>
            <tr>
              <td></td>
              <td><a href="updatemhs.php?id_mhs=<?php echo $pecah['id_mhs']; ?>" class="btn btn-outline-secondary text-dark">EDIT</a></td>
            </tr>

          </table>
        </div>
      </div>
    </div>
    </form>
  <?php
          }
  ?>
</body>

</html>