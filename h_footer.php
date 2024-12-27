<footer id="footer" class="footer light-background">

    <div class="container footer-top">
      <div class="row gy-4">
        <div class="col-lg-4 col-md-6 footer-about">
          <a href="login\login.php" class="logo d-flex align-items-center">
            <span class="sitename">Puskesmas Kedungwaru</span>
          </a>
          <div class="footer-contact pt-3">
            <p>Jl. Pahlawan Gg. III No.05, Rejoagung, Kec. Kedungwaru</p>
            <p>Kabupaten Tulungagung, Jawa Timur 66225</p>
            <p class="mt-3"><strong>Phone:</strong> <span>+62 858 5119 9209 - (0355) 328981</span></p>
            <p><strong>Email:</strong> <span>puskesmaskedungwaru@gmail.com</span></p>
          </div>
          <div class="social-links d-flex mt-4">
            <a href="https://www.youtube.com/@puskesmaskedungwaru"><i class="bi bi-youtube"></i></a>
            <a href="https://www.facebook.com/profile.php?id=658668570818075&_rdr"><i class="bi bi-facebook"></i></a>
            <a href="https://www.instagram.com/puskesmas_kedungwaru/"><i class="bi bi-instagram"></i></a>
          </div>
        </div>

        <div class="col-lg-2 col-md-3 footer-links">
          
        </div>

        <div class="col-lg-2 col-md-3 footer-links">
        <h4>Unit Layanan</h4>
          <ul>
            <li><a href="https://sippn.menpan.go.id/pelayanan-publik/8139234/dinas-kesehatan/unit-gizi">Unit Gizi</a></li>
            <li><a href="https://sippn.menpan.go.id/pelayanan-publik/8139233/dinas-kesehatan/unit-farmasiapotek">Unit Farmasi</a></li>
            <li><a href="https://sippn.menpan.go.id/pelayanan-publik/8139084/dinas-kesehatan/unit-laboratorium">Unit Laboratorium</a></li>
            <li><a href="https://sippn.menpan.go.id/pelayanan-publik/8139235/dinas-kesehatan/unit-ruang-tindakan">Unit Ruang Tindakan</a></li>
            <li><a href="https://sippn.menpan.go.id/pelayanan-publik/8139083/dinas-kesehatan/unit-pendaftaran-dan-rekam-medik">Unit Pendaftaran dan RM</a></li>
          </ul>
        </div>

        <div class="col-lg-2 col-md-3 footer-links">
        <h4>Poli Layanan</h4>
          <ul>
            <li><a href="https://sippn.menpan.go.id/pelayanan-publik/8139086/dinas-kesehatan/unit-poli-kia">Poli KIA</a></li>
            <li><a href="https://sippn.menpan.go.id/pelayanan-publik/8140849/dinas-kesehatan/unit-poli-gigi">Poli Gigi</a></li>
            <li><a href="https://sippn.menpan.go.id/pelayanan-publik/8140844/dinas-kesehatan/unit-poli-umum-bp">Poli Umum</a></li>
          </ul>
        </div>

        <div class="col-lg-2 col-md-3 footer-links">
          <h4>Publikasi</h4>
          <ul>
            <li><a href="https://sippn.menpan.go.id/images/article/temp/SK%20STANDAR%20PELAYANAN%20PUBLIK%20+%20SK%20TARIF-20240823015803.pdf">SK Standar Pelayanan</a></li>
          </ul>
        </div>

      </div>
    </div>

    <div class="container copyright text-center mt-4">
      <p>© <span>Copyright</span> <strong class="px-1 sitename">Kelompok C</strong> <span>All Rights Reserved</span></p>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you've purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: [buy-url] -->
        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
      </div>
    </div>

  </footer>

  <!-- Scroll Top -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Preloader -->
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>

  <!-- Main JS File -->
  <script src="assets/js/main.js"></script>
  <script src="assets/js/jquery-3.7.1.min.js"></script>
  <script>
    $(document).ready(function() {
      let url = window.location.pathname;
      let menu_name = url.split("/");

      if (menu_name[2] == 'layanan.php'){
        $('.menu_layanan').addClass('active');
      }
      else if (menu_name[2] == 'berita.php'){
        $('.menu_berita').addClass('active');
      }
      else if (menu_name[2] == 'profil.php'){
        $('.menu_profil').addClass('active');
      }
      else if ((menu_name[2] === 'home.php') || (menu_name[2] === '')){
        $('.menu_home').addClass('active');
      }
    });
  </script>

</body>

</html>