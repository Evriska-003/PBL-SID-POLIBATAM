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
          $ambil = mysqli_query($koneksi, "select * from tbl_mahasiswa where id_mhs='$_GET[id_mhs]' ");
          $pecah = mysqli_fetch_assoc($ambil);


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
                <td>

                  <textarea name="nim" class="form-control" rows="1"> <?php echo $pecah['nim']; ?> </textarea>
                </td>
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
                <td><textarea name="nik" class="form-control" rows="1"> <?php echo $pecah['nik']; ?> </textarea></td>
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
                <td><textarea name="tmptlahir" cols="20" rows="1"> <?php echo $pecah['tmptlahir']; ?> </textarea></td>
              </tr>
              <tr>
                <td></td>
                <td></td>
                <td></td>
                <td><input type="date" name="tgllahir" class="form-control" value="<?php echo $pecah['tgllahir']; ?>"></td>
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
                <td><select name="gender">
                    <option value="perempuan" <?php if ($pecah['gender'] == 'perempuan') echo 'selected' ?>>perempuan</option>
                    <option value="laki-laki" <?php if ($pecah['gender'] == 'laki-laki') echo 'selected' ?>>laki-laki</option>
                </td>
              </tr>
              <tr>
                <td>13.</td>
                <td>Kewarganegaraan</td>
                <td>&nbsp;:&nbsp;</td>
                <td><select name="warga">
                    <option value="WNI" <?php if ($pecah['warga'] == 'WNI') echo 'selected' ?>>WNI</option>
                    <option value="NON WNI" <?php if ($pecah['warga'] == 'NON WNI') echo 'selected' ?>>NON WNI</option>
                </td>
              </tr>
              <tr>
                <td>14.</td>
                <td>Agama</td>
                <td>&nbsp;:&nbsp;</td>
                <td><select name="agama">
                    <option value="Islam" <?php if ($pecah['agama'] == 'Islam') echo 'selected' ?>>Islam</option>
                    <option value="Kristen" <?php if ($pecah['agama'] == 'Kristen') echo 'selected' ?>>Kristen</option>
                    <option value="Hindu" <?php if ($pecah['agama'] == 'Hindu') echo 'selected' ?>>Hindu</option>
                    <option value="Budha" <?php if ($pecah['agama'] == 'Budha') echo 'selected' ?>>Budha</option>
                  </select></td>
              </tr>
              <tr>
                <td>15.</td>
                <td>Gol Darah*</td>
                <td>&nbsp;:&nbsp;</td>

                <td>
                  <div class="custom-control custom-radio custom-control-inline">
                    <input type="radio" class="custom-control-input" id="AB" name="goldar" value="AB" <?php if ($pecah['goldar'] == 'AB') echo 'checked' ?>>
                    <label class="custom-control-label" for="AB">AB</label>
                  </div>

                  <div class="custom-control custom-radio custom-control-inline">
                    <input type="radio" class="custom-control-input" id="A" name="goldar" value="A" <?php if ($pecah['goldar'] == 'A') echo 'checked' ?>>
                    <label class="custom-control-label" for="A">A</label>
                  </div>

                  <div class="custom-control custom-radio custom-control-inline">
                    <input type="radio" class="custom-control-input" id="B" name="goldar" value="B" <?php if ($pecah['goldar'] == 'B') echo 'checked' ?>>
                    <label class="custom-control-label" for="B">B</label>
                  </div>
                  <div class="custom-control custom-radio custom-control-inline">
                    <input type="radio" class="custom-control-input" id="O" name="goldar" value="O" <?php if ($pecah['goldar'] == 'O') echo 'checked' ?>>
                    <label class="custom-control-label" for="O">O</label>
                  </div>
                  <div class="custom-control custom-radio custom-control-inline">
                    <input type="radio" class="custom-control-input" id="Tidak Tahu" name="goldar" value="Tidak Tahu" <?php if ($pecah['goldar'] == 'Tidak Tahu') echo 'checked' ?>>
                    <label class="custom-control-label" for="Tidak Tahu">Tidak Tahu</label>
                  </div>

                </td>
              </tr>
              <tr>
                <td>16.</td>
                <td>Alamat Lengkap*</td>
                <td>&nbsp;:&nbsp;</td>
                <td><textarea name="alamat" cols="20" rows="2"><?php echo $pecah['alamat']; ?></textarea></td>
              </tr>
              <tr>
                <td>17.</td>
                <td>Kelurahan*</td>
                <td>&nbsp;:&nbsp;</td>
                <td><textarea name="kelurahan" cols="40" rows="1"><?php echo $pecah['kelurahan']; ?></textarea></td>
              </tr>
              <tr>
                <td>18.</td>
                <td>Kecamatan</td>
                <td>&nbsp;:&nbsp;</td>
                <td>
                  <textarea name="kecamatan" cols="18" rows="1"><?php echo $pecah['kecamatan']; ?></textarea>
                </td>
              </tr>
              <tr>
                <td>21.</td>
                <td>Kode Pos*</td>
                <td>&nbsp;:&nbsp;</td>
                <td><textarea name="pos" cols="10" rows="1"><?php echo $pecah['pos']; ?></textarea></td>
              </tr>
              <tr>
                <td>22.</td>
                <td>Nomer Telepon*</td>
                <td>&nbsp;:&nbsp;</td>
                <td><textarea name="notelp" cols="18" rows="1"><?php echo $pecah['notelp']; ?></textarea></td>
              </tr>
              <tr>
                <td>23.</td>
                <td>Status Marital*</td>
                <td>&nbsp;:&nbsp;</td>
                <td><select name="status_marital">
                    <option value="Belum Kawin" <?php if ($pecah['status_marital'] == 'Belum Kawin') echo 'selected' ?>>Belum Kawin</option>
                    <option value="Sudah Kawin" <?php if ($pecah['status_marital'] == 'Sudah Kawin') echo 'selected' ?>>Sudah Kawin</option>
                    <option value="Janda" <?php if ($pecah['status_marital'] == 'Janda') echo 'selected' ?>>Janda</option>
                    <option value="Duda" <?php if ($pecah['status_marital'] == 'Duda') echo 'selected' ?>>Duda</option>
                  </select></td>
              </tr>
              <tr>
                <td>24.</td>
                <td>Email*</td>
                <td>&nbsp;:&nbsp;</td>
                <td><textarea name="email" cols="40" rows="1"><?php echo $pecah['email']; ?></textarea></td>
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
              <td><textarea name="ayah" cols="30" rows="1"><?php echo $pecah['ayah']; ?></textarea></td>
            </tr>
            <tr>
              <td>2.</td>
              <td>Tahun LahirAyah / Wali*</td>
              <td>&nbsp;:&nbsp;</td>
              <td><textarea name="tahunlhr_ayah" cols="10" rows="1"><?php echo $pecah['tahunlhr_ayah']; ?></textarea></td>
            </tr>
            <tr>
              <td>3.</td>
              <td>Keterangan Ayah*</td>
              <td>&nbsp;:&nbsp;</td>
              <td>
                <div class="custom-control custom-radio custom-control-inline">
                  <input type="radio" class="custom-control-input" id="hidup" name="ketayah" value="hidup" <?php if ($pecah['ketayah'] == 'hidup') echo 'checked' ?>>
                  <label class="custom-control-label" for="hidup">Hidup</label>
                </div>

                <div class="custom-control custom-radio custom-control-inline">
                  <input type="radio" class="custom-control-input" id="almarhum" name="ketayah" value="almarhum" <?php if ($pecah['ketayah'] == 'almarhum') echo 'checked' ?>>
                  <label class="custom-control-label" for="almarhum">Almarhum</label>
                </div>
              </td>
            </tr>
            <tr>
              <td>4.</td>
              <td>Pekerjaan Ayah/Wali*</td>
              <td>&nbsp;:&nbsp;</td>
              <td><textarea name="kerja_ayah" cols="30" rows="1"><?php echo $pecah['kerja_ayah']; ?></textarea></td>
            </tr>
            <tr>
              <td>5.</td>
              <td>Penghasilan Ayah Per Bulan*</td>
              <td>&nbsp;:&nbsp;</td>
              <td><textarea name="hasil_ayah" cols="20" rows="1"><?php echo $pecah['hasil_ayah']; ?></textarea></td>
            </tr>
            <tr>
              <td>6.</td>
              <td>Pendidikan Ayah*</td>
              <td>&nbsp;:&nbsp;</td>
              <td><select name="pend_ayah">

                  <option value="Tidak Tamat SD" <?php if ($pecah['pend_ayah'] == 'Tidak Tamat SD') echo 'selected' ?>>Tidak Tamat SD</option>
                  <option value="SMD" <?php if ($pecah['pend_ayah'] == 'SMD') echo 'selected' ?>>Tamat SD</option>
                  <option value="SMP" <?php if ($pecah['pend_ayah'] == 'SMP') echo 'selected' ?>>Tamat SMP</option>
                  <option value="SMA" <?php if ($pecah['pend_ayah'] == 'SMA') echo 'selected' ?>>Tamat SMA</option>
                  <option value="Diploma" <?php if ($pecah['pend_ayah'] == 'Diploma') echo 'selected' ?>>Diploma</option>
                  <option value="Sarjana" <?php if ($pecah['pend_ayah'] == 'Sarjana') echo 'selected' ?>>Sarjana/S1</option>
                  <option value="Magister" <?php if ($pecah['pend_ayah'] == 'Magister') echo 'selected' ?>>Magister/S2</option>
                  <option value="Dokter" <?php if ($pecah['pend_ayah'] == 'Dokter') echo 'selected' ?>> Dokter/S3</option>
                </select></td>
            </tr>
            <tr>
              <td>7.</td>
              <td>Nama Ibu*</td>
              <td>&nbsp;:&nbsp;</td>
              <td><textarea name="ibu" cols="30" rows="1"><?php echo $pecah['ibu']; ?></textarea></td>
            </tr>
            <tr>
              <td>8</td>
              <td>Tahun Lahir Ibu*</td>
              <td>&nbsp;:&nbsp;</td>
              <td><textarea name="tahunlhr_ibu" cols="10" rows="1"> <?php echo $pecah['tahunlhr_ibu']; ?></textarea></td>
            </tr>
            <tr>
              <td>9.</td>
              <td>Keterangan Ibu*</td>
              <td>&nbsp;:&nbsp;</td>
              <td>
                <div class="custom-control custom-radio custom-control-inline">
                  <input type="radio" class="custom-control-input" id="hidup" name="ketibu" value="hidup" <?php if ($pecah['ketibu'] == 'hidup') echo 'checked' ?>>
                  <label class="custom-control-label" for="hidup">Hidup</label>
                </div>

                <div class="custom-control custom-radio custom-control-inline">
                  <input type="radio" class="custom-control-input" id="almarhum" name="ketibu" value="almarhum" <?php if ($pecah['ketibu'] == 'almarhum') echo 'checked' ?>>
                  <label class="custom-control-label" for="almarhum">Almarhum</label>
                </div>
              </td>
            </tr>
            <tr>
              <td>10.</td>
              <td>Pekerjaan Ibu *</td>
              <td>&nbsp;:&nbsp;</td>
              <td><textarea name="kerja_ibu" cols="30" rows="1"><?php echo $pecah['kerja_ibu']; ?></textarea></td>
            </tr>
            <tr>
              <td>11.</td>
              <td>Penghasilan ibu Per Bulan*</td>
              <td>&nbsp;:&nbsp;</td>
              <td><textarea name="hasil_ibu" cols="20" rows="1" <?php echo $pecah['hasil_ibu']; ?>></textarea></td>
            </tr>
            <tr>
              <td>12.</td>
              <td>Pendidikan Ibu*</td>
              <td>&nbsp;:&nbsp;</td>
              <td><select name="pend_ibu">
                  <option value="Tidak Tamat SD" <?php if ($pecah['pend_ibu'] == 'Tidak Tamat SD') echo 'selected' ?>>Tidak Tamat SD</option>
                  <option value="SMD" <?php if ($pecah['pend_ibu'] == 'SMD') echo 'selected' ?>>Tamat SD</option>
                  <option value="SMP" <?php if ($pecah['pend_ibu'] == 'SMP') echo 'selected' ?>>Tamat SMP</option>
                  <option value="SMA" <?php if ($pecah['pend_ibu'] == 'SMA') echo 'selected' ?>>Tamat SMA</option>
                  <option value="Diploma" <?php if ($pecah['pend_ibu'] == 'Diploma') echo 'selected' ?>>Diploma</option>
                  <option value="Sarjana" <?php if ($pecah['pend_ibu'] == 'Sarjana') echo 'selected' ?>>Sarjana/S1</option>
                  <option value="Magister" <?php if ($pecah['pend_ibu'] == 'Magister') echo 'selected' ?>>Magister/S2</option>
                  <option value="Dokter" <?php if ($pecah['pend_ibu'] == 'Dokter') echo 'selected' ?>> Dokter/S3</option>
                </select></td>
            <tr>
              <td>13.</td>
              <td>Alamat Orang Tua*</td>
              <td>&nbsp;:&nbsp;</td>
              <td><textarea name="alamat_ortu" cols="20" rows="2"><?php echo $pecah['alamat_ortu']; ?></textarea></td>
            </tr>
            <tr>
              <td>14.</td>
              <td>Nomer Telepon Orang Tua*</td>
              <td>&nbsp;:&nbsp;</td>
              <td><textarea name="notelp_ortu" cols="30" rows="1"><?php echo $pecah['notelp_ortu']; ?></textarea></td>
            </tr>
            <tr>
              <td>15.</td>
              <td>Jumlah Anak*</td>
              <td>&nbsp;:&nbsp;</td>
              <td><textarea name="jmlh_anak" cols="10" rows="1"><?php echo $pecah['jmlh_anak']; ?></textarea></td>
            </tr>
            <tr>
              <td>16.</td>
              <td>Anak Ke*</td>
              <td>&nbsp;:&nbsp;</td>
              <td><textarea name="anak_ke" cols="8" rows="1"><?php echo $pecah['anak_ke']; ?></textarea></td>
            </tr>
            <tr>
              <td></td>
              <td><button name="submit" type="submit" class="btn btn-primary" style="background-color: grey">SIMPAN</button></td>
            </tr>

          </table>
        </div>
      </div>
    </div>
    </form>
    <?php
    if (isset($_POST['submit'])) {
      mysqli_query($koneksi, "update tbl_mahasiswa set nik = '$_POST[nik]', tmptlahir= '$_POST[tmptlahir]', tgllahir='$_POST[tgllahir]', gender='$_POST[gender]', warga='$_POST[warga]', agama='$_POST[agama]',
  goldar='$_POST[goldar]' , alamat='$_POST[alamat]', kelurahan='$_POST[kelurahan]', kecamatan='$_POST[kecamatan]', pos='$_POST[pos]', notelp='$_POST[notelp]', status_marital='$_POST[status_marital]', email='$_POST[email]',
  ayah='$_POST[ayah]', tahunlhr_ayah='$_POST[tahunlhr_ayah]', kerja_ayah='$_POST[kerja_ayah]', hasil_ayah='$_POST[hasil_ayah]', pend_ayah='$_POST[pend_ayah]',
  ibu='$_POST[ibu]', tahunlhr_ibu='$_POST[tahunlhr_ibu]', kerja_ibu='$_POST[kerja_ibu]', hasil_ibu='$_POST[hasil_ibu]', pend_ibu='$_POST[pend_ibu]', alamat_ortu='$_POST[alamat_ortu]',
  notelp_ortu='$_POST[notelp_ortu]', jmlh_anak='$_POST[jmlh_anak]', anak_ke='$_POST[anak_ke]' where id_mhs= '$_GET[id_mhs]'");

      echo "<script>alert('Data Produk Telah Diubah'); </script>";
      echo "<script>location='datapribadi.php'; </script>";
    } else {

      echo "Data gagal diubah";
    }

    ?>

</body>

</html>