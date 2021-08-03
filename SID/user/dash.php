<?php include('akses.php'); ?>

<head>
  <title>SID POLIBATAM</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="dash.css">
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

  <div class="container-left">
    <div class="callout callout-info">
      <h3>
        <!--Program Selamat-->
        <script language="JavaScript">
          function MakeArray(n) {
            this.length = n
            return this
          }

          monthNames = new MakeArray(12)
          monthNames[1] = "Januari"
          monthNames[2] = "Februari"
          monthNames[3] = "Maret"
          monthNames[4] = "April"
          monthNames[5] = "Mei"
          monthNames[6] = "Juni"
          monthNames[7] = "Juli"
          monthNames[8] = "Agustus"
          monthNames[9] = "September"
          monthNames[10] = "Oktober"
          monthNames[11] = "November"
          monthNames[12] = "Desember"

          dayNames = new MakeArray(7)
          dayNames[1] = "Minggu"
          dayNames[2] = "Senin"
          dayNames[3] = "Selasa"
          dayNames[4] = "Rabu"
          dayNames[5] = "Kamis"
          dayNames[6] = "Jumat"
          dayNames[7] = "Sabtu"

          function customDateString() {
            currentDate = new Date()
            var theDay = dayNames[currentDate.getDay() + 1]
            var theMonth = monthNames[currentDate.getMonth() + 1]
            msie4 = ((navigator.appName == "Microsoft Internet Explorer") && (parseInt(navigator.appVersion) >= 4));
            if (msie4) {
              var theYear = currentDate.getYear()
            } else {
              var theYear = currentDate.getYear() + 1900
            }
            return theDay + " " + currentDate.getDate() + " " + theMonth + " " + theYear
          }

          function greeting() {
            var today = new Date();
            var hrs = today.getHours();
            document.write("Selamat ");
            if (hrs < 10)
              document.write("Pagi, ");
            else if (hrs <= 15)
              document.write("Siang, ");
            else if (hrs <= 19)
              document.write("Sore, ");
            else if (hrs <= 24)
              document.write("Malam, ");
          }

          // 1 detik = 1000   
          window.setTimeout("waktu()", 1000);

          function waktu() {
            var tanggal = new Date();
            setTimeout("waktu()", 1000);
            document.getElementById("output").innerHTML = tanggal.getHours() + ":" + tanggal.getMinutes() + ":" + tanggal.getSeconds();
          }
        </script>
        <script language="JavaScript">
          greeting();
          document.write(customDateString())
        </script>
        <label id="output" style="color:#FF3300">22:57:47</label>
      </h3>
      <h6>Selamat Datang di Sistem Informasi Akademik dan Kepegawaian</h6>
      </h3>
    </div>
    <table class="table table-bordered">
      <thead>
        <tr>
          <th>
            <h6>Sistem Informasi Akademik dan Kepegawaian ini secara khusus dirancang untuk memenuhi kebutuhan POLIBATAM yang menginginkan layanan pendidikan yang terkomputerisasi untuk meningkatkan kinerja, kualitas pelayanan, daya saing dan kualitas SDM yang dihasilkannya.</h6>
            <h6>Pemanfaatan teknologi informasi menjadi kebutuhan yang tak dapat ditawar lagi, karena ketersediaan informasi yang terintegrasi makin penting dalam mendukung upaya menciptakan sistem perguruan tinggi/organisasi yang efisien dan kompetitif.</h6>
            <h6>Anda dapat menggunakan dan memanfaatkan layanan Sistem Informasi Akademik dan Kepegawaian seperti :
              <p>1. Melihat Daftar Data Mahasiswa</p>
              <p>2. Melihat Daftar MataKuliah</p>
              <p>3. Melihat Daftar Jadwal Kuliah</p>
              <p>4. Mengapprove FRS (Khusus Dosen Wali)</p>
              <p>5. Melihat Peserta Kuliah</p>

              Selanjutnya Fasilitas Akan Dikembangkan Terus.
              Kritik dan saran yang bersifat membangun, sangat kami harapkan agar Sistem Informasi Akademik dan Kepegawaian lebih berkualitas efektif dan efisien.
            </h6>
          </th>
        </tr>
  </div>
  </div>
  </div>

</body>