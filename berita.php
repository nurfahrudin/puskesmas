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
            <li class="current">Berita</li>
          </ol>
        </div>
      </nav>
    </div><!-- End Page Title -->


    <section id="featured-services" class="featured-services section">

        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
          <h2>Berita<br></h2>
          <p>Informasi terbaru dan berbagai kegiatan Puskesmas Kedungwaru</p>
        </div><!-- End Section Title -->

        <div class="container">

          <div class="row gy-4">
          
            <?php
              $query = $dbh->query("SELECT * FROM t_informasi");
              foreach ($query as $row) : ?>
              <div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="100">
                <div class="service-item position-relative">
                  <div class='icon'>
                    <img src="assets/img/berita/<?php echo $row["file_gambar"]; ?>" class="img-fluid">
                  </div>
                    <h4><?php echo $row['judul']; ?></h4>
                    <p><?php echo $row['konten']; ?></p>
                </div>
              </div><!-- End Service Item -->
            <?php endforeach; ?>

          </div>

        </div>

    </section><!-- /About Section -->

  </main>


<?php
require_once 'h_footer.php';
?>