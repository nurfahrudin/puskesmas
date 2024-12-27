<?php
require_once 'h_header.php';
require 'koneksi.php'
?>


  <main class="main">

    <!-- Page Title -->
    <div class="page-title">
      <nav class="breadcrumbs">
        <div class="container">
          <ol>
            <li><a href="home.php">Home</a></li>
            <li class="current">Layanan</li>
          </ol>
        </div>
      </nav>
    </div><!-- End Page Title -->


       <!-- Layanan Section -->
       <section id="layanan" class="tabs section">

        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
          <h2>Jenis Layanan Puskesmas Kedungwaru</h2>
          <p>Puskesmas Kedungwaru melayani berbagai macam pelayanan kesehatan untuk masyarakat di sekitar 
          Kecamatan Kedungwaru, Kabupaten Tulungagung, Jawa Timur</p>
        </div><!-- End Section Title -->

        <div class="container" data-aos="fade-up" data-aos-delay="100">

          <div class="row">
            <div class="col-lg-3">
              <ul class="nav nav-tabs flex-column">
                <li class="nav-item">
                  <a class="nav-link active show" data-bs-toggle="tab" href="#tabs-tab-1">Poli Umum</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" data-bs-toggle="tab" href="#tabs-tab-2">Poli Gigi & Mulut</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" data-bs-toggle="tab" href="#tabs-tab-3">Poli KIA</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" data-bs-toggle="tab" href="#tabs-tab-4">Imunisasi</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" data-bs-toggle="tab" href="#tabs-tab-5">Laboratorium</a>
                </li>
              </ul>
            </div>
            <div class="col-lg-9 mt-4 mt-lg-0">
              <div class="tab-content">
                <div class="tab-pane active show" id="tabs-tab-1">
                  <div class="row">
                    <div class="col-lg-8 details order-2 order-lg-1">
                      <h3>Poli Umum</h3>
                      <p>Poli umum merupakan salah satu dari jenis layanan di Puskesmas Kedungwaru yang memberikan pelayanan
                        kedokteran berupa pemeriksaan kesehatan, pengobatan dan penyuluhan kepada pasien atau masyarakat,
                        serta meningkatkan pengetahuan dan kesadaran masyarakat dalam bidang kesehatan.
                      </p>
                      
                      <div class="table-responsive">
                        <table class="table table-bordered table-sm table-striped">
                          <thead>
                            <tr>
                              <th scope="col" class="text-center">Nama</th>
                              <th scope="col" class="text-center">Jadwal Praktik (Hari)</th>
                            </tr>
                          </thead>
                          <tbody>
                              <?php
                                $query = $dbh->query("SELECT * FROM t_jadwal WHERE poli='Umum'");
                                foreach ($query as $row) {
                                    echo "<tr>";
                                    echo "<td>" . $row['dokter'] . "</td>";
                                    echo "<td>" . $row['hari'] . "</td>";
                                    echo "</tr>";
                                  }
                              ?>
                          </tbody>
                        </table>
                      </div>

                    </div>
                    <div class="col-lg-4 text-center order-1 order-lg-2">
                      <img src="assets/img/departments-1.jpg" alt="" class="img-fluid">
                    </div>
                  </div>
                </div>
                <div class="tab-pane" id="tabs-tab-2">
                  <div class="row">
                    <div class="col-lg-8 details order-2 order-lg-1">
                      <h3>Poli Gigi & Mulut</h3>
                      <p>Poli Gigi dan Mulut merupakan salah satu dari jenis layanan di Puskesmas Kedungwaru yang 
                        memberikan pelayanan kesehatan gigi dan mulut berupa pemeriksaan kesehatan gigi dan mulut, 
                        pengobatan dan pemberian tindakan medis dasar kesehatan gigi dan mulut seperti penambalan gigi, 
                        pencabutan gigi dan pembersihan karang gigi.
                      </p>
                      
                      <div class="table-responsive">
                        <table class="table table-bordered table-sm table-striped">
                          <thead>
                            <tr>
                              <th scope="col" class="text-center">Nama</th>
                              <th scope="col" class="text-center">Jadwal Praktik (Hari)</th>
                            </tr>
                          </thead>
                          <tbody>
                              <?php
                                $query1 = $dbh->query("SELECT * FROM t_jadwal WHERE poli='Gigi dan Mulut'");
                                foreach ($query1 as $row1) {
                                    echo "<tr>";
                                    echo "<td>" . $row1['dokter'] . "</td>";
                                    echo "<td>" . $row1['hari'] . "</td>";
                                    echo "</tr>";
                                  }
                              ?>
                          </tbody>
                        </table>
                      </div>
                      
                    </div>
                    <div class="col-lg-4 text-center order-1 order-lg-2">
                      <img src="assets/img/departments-2.jpg" alt="" class="img-fluid">
                    </div>
                  </div>
                </div>
                <div class="tab-pane" id="tabs-tab-3">
                  <div class="row">
                    <div class="col-lg-8 details order-2 order-lg-1">
                      <h3>Poli KIA</h3>
                      <p>Poli KIA (Kesehatan Ibu dan Anak) merupakan pelayanan rawat jalan di bidang kesehatan 
                        yang menyangkut pelayanan dan pemeliharaan ibu hamil, ibu menyusui, 
                        bayi dan anak balita serta anak prasekolah.
                      </p>
                      
                      <div class="table-responsive">
                        <table class="table table-bordered table-sm table-striped">
                          <thead>
                            <tr>
                              <th scope="col" class="text-center">Nama</th>
                              <th scope="col" class="text-center">Jadwal Praktik (Hari)</th>
                            </tr>
                          </thead>
                          <tbody>
                              <?php
                                $query = $dbh->query("SELECT * FROM t_jadwal WHERE poli='KIA'");
                                foreach ($query as $row) {
                                    echo "<tr>";
                                    echo "<td>" . $row['dokter'] . "</td>";
                                    echo "<td>" . $row['hari'] . "</td>";
                                    echo "</tr>";
                                  }
                              ?>
                          </tbody>
                        </table>
                      </div>

                    </div>
                    <div class="col-lg-4 text-center order-1 order-lg-2">
                      <img src="assets/img/departments-4.jpg" alt="" class="img-fluid">
                    </div>
                  </div>
                </div>
                <div class="tab-pane" id="tabs-tab-4">
                  <div class="row">
                    <div class="col-lg-8 details order-2 order-lg-1">
                      <h3>Imunisasi</h3>
                      <p>Pelayanan Imunisasi merupakan upaya preventif terhadap kejadian suatu penyakit atau masalah kesehatan. 
                        Pelaksanaan pelayanan Imunisasi tidak terlepas dari peran petugas kesehatan yang mempunyai kompetensi 
                        sesuai dengan tugas pokok dan fungsinya. Program imunisasi rutin terdiri dari imunisasi dasar dan lanjutan.
                      </p>
                      
                      <div class="table-responsive">
                        <table class="table table-bordered table-sm table-striped">
                          <thead>
                            <tr>
                              <th scope="col" class="text-center">Nama</th>
                              <th scope="col" class="text-center">Jadwal Praktik (Hari)</th>
                            </tr>
                          </thead>
                          <tbody>
                              <?php
                                $query = $dbh->query("SELECT * FROM t_jadwal WHERE poli='Imunisasi'");
                                foreach ($query as $row) {
                                    echo "<tr>";
                                    echo "<td>" . $row['dokter'] . "</td>";
                                    echo "<td>" . $row['hari'] . "</td>";
                                    echo "</tr>";
                                  }
                              ?>
                          </tbody>
                        </table>
                      </div>

                    </div>
                    <div class="col-lg-4 text-center order-1 order-lg-2">
                      <img src="assets/img/departments-3.jpg" alt="" class="img-fluid">
                    </div>
                  </div>
                </div>
                <div class="tab-pane" id="tabs-tab-5">
                  <div class="row">
                    <div class="col-lg-8 details order-2 order-lg-1">
                      <h3>Laboratorium</h3>
                      <p>Laboratorium Puskesmas adalah sarana pelayanan kesehatan di Puskesmas yang melaksanakan pengukuran, 
                        penetapan, dan pengujian terhadap bahan yang berasal dari manusia untuk penentuan jenis penyakit, 
                        penyebaran penyakit, kondisi kesehatan, atau faktor yang dapat berpengaruh pada 
                        kesehatan perorangan dan masyarakat.
                      </p>
                      
                      <div class="table-responsive">
                        <table class="table table-bordered table-sm table-striped">
                          <thead>
                            <tr>
                              <th scope="col" class="text-center">Nama</th>
                              <th scope="col" class="text-center">Jadwal Praktik (Hari)</th>
                            </tr>
                          </thead>
                          <tbody>
                              <?php
                                $query = $dbh->query("SELECT * FROM t_jadwal WHERE poli='Laboratorium'");
                                foreach ($query as $row) {
                                    echo "<tr>";
                                    echo "<td>" . $row['dokter'] . "</td>";
                                    echo "<td>" . $row['hari'] . "</td>";
                                    echo "</tr>";
                                  }
                              ?>
                          </tbody>
                        </table>
                      </div>

                    </div>
                    <div class="col-lg-4 text-center order-1 order-lg-2">
                      <img src="assets/img/departments-5.jpg" alt="" class="img-fluid">
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

        </div>

      </section><!-- /Tabs Section -->

  </main>


<?php
require_once 'h_footer.php';
?>