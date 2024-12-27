<?php
require_once 'h_header.php';
require 'koneksi.php';

// logika antrian
global $conn;
$query = "SELECT nama, nomor FROM t_antrian";
$nilai = mysqli_query($conn, $query);
$result = mysqli_num_rows($nilai);

if ($result > 0) {
  $nomor = $result + 1;
} else {
  $nomor = 1;
}

if (isset($_POST["submit"])) {
    $_nama = $_POST['nama'];
    $_nik = $_POST['nik'];
    $_tlp = $_POST['tlp'];
    $_jkel = $_POST['jkel'];
    $_bpjs = $_POST['bpjs'];
    $_poli = $_POST['poli'];
    $_keluhan = $_POST['keluhan'];
    $_nomor = $nomor;
    $data = [$_nama, $_nik, $_tlp, $_jkel, $_bpjs, $_poli, $_keluhan, $_nomor];
    $sql = "INSERT INTO t_antrian (nama, nik, tlp, jkel, bpjs, poli, keluhan, nomor) VALUES (? ,? ,? ,? ,? ,? ,? ,?)";
    $stmt = $dbh->prepare($sql);
    $stmt->execute($data);
    echo "<script>window.location.href = 'antrian.php';</script>";
  }
  ?>


  <main class="main">

    <!-- Page Title -->
    <div class="page-title">
      <nav class="breadcrumbs">
        <div class="container">
          <ol>
            <li><a href="home.php">Home</a></li>
            <li class="current">Daftar Antrian</li>
          </ol>
        </div>
      </nav>
    </div><!-- End Page Title -->


    <!-- Appointment Section -->
    <section id="appointment" class="appointment section light-background">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Daftar Antrian</h2>
        <p>Memudahkan masyarakat dan pasien dalam mendaftar layanan di Puskesmas Kedungwaru secara online</p>
      </div><!-- End Section Title -->

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <form action="antrian.php" method="post" role="form" class="php-email-form">
          <div class="row">
            <div class="col-md-4 form-group">
              <input id="nama" name="nama" type="text" class="form-control" placeholder="Nama Sesuai KTP" required="">
            </div>
            <div class="col-md-4 form-group mt-3 mt-md-0">
              <input id="nik" name="nik" type="text" class="form-control" placeholder="NIK" required="">
            </div>
            <div class="col-md-4 form-group mt-3 mt-md-0">
              <input id="tlp" name="tlp" type="number" class="form-control" placeholder="Nomor HP" required="">
            </div>
          </div>

          <div class="row">
            <div class="col-md-4 form-group mt-3">
              <select id="jkel" name="jkel" class="form-select" required="">
                <option value="">Pilih Jenis Kelamin</option>
                <option value="Laki-Laki">Laki-Laki</option>
                <option value="Perempuan">Perempuan</option>
              </select>
            </div>
            <div class="col-md-4 form-group mt-3">
              <input id="bpjs" name="bpjs" type="number" class="form-control" placeholder="Nomor BPJS (Jika Ada)">
            </div>
            <div class="col-md-4 form-group mt-3">
              <select id="poli" name="poli" class="form-select" required="">
                <option value="">Pilih Poli Tujuan</option>
                <option value="Umum">Umum</option>
                <option value="Gigi dan Mulut">Gigi dan Mulut</option>
                <option value="KIA">KIA</option>
                <option value="Laboratorium">Laboratorium</option>
                <option value="Imunisasi">Imunisasi</option>
              </select>
            </div>
          </div>

          <div class="form-group mt-3">
            <textarea id="keluhan" name="keluhan" class="form-control" rows="5" placeholder="Deskripsi Keluhan"></textarea>
          </div>

          <div class="mt-3">
            <div class="text-center"><button name="submit" type="submit" onClick="window.open('cetak_antrian.php');">Booking Nomor Antrian</button></div>
          </div>

        </form>

      </div>

    </section><!-- /Appointment Section -->



  </main>

<?php
require_once 'h_footer.php';
?>