<?php
  session_start();
  // Cek Session
  if(!isset($_SESSION['logged_in'])) {
    header("Location: ../login/login.php");
    exit;
  }
?>

<!doctype html>
<html lang="en">
  <head>
    <title>Admin - Puskesmas Kedungwaru</title>

    <link href="../assets/img/favicon.png" rel="icon">
    <!-- Bootstrap core CSS -->
    <link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>
    
    <!-- Custom styles for this template -->
    <link href="../assets/css/dashboard.css" rel="stylesheet">
    <link href="../assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  </head>


  <body>
    <header class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
      <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3" href="../admin/index.php">Admin Puskesmas Kedungwaru</a>
      <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <input class="form-control form-control-dark w-100" type="text" placeholder="Search" aria-label="Search">
      <div class="navbar-nav">
        <div class="nav-item text-nowrap">
          <a class="nav-link px-3" href="../login/logout.php">Sign out</a>
        </div>
      </div>
    </header>

    <div class="container-fluid">
      <div class="row">
        <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
          <div class="position-sticky pt-3">
            <ul class="nav flex-column">
              <li class="nav-item">
                <a class="nav-link" aria-current="page" href="../admin/index.php">
                  <i class="bi bi-speedometer2"></i>
                  Dashboard
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="../antrian/index.php">
                  <i class="bi bi-people"></i>
                  Kelola Antrian
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="../berita/index.php">
                  <i class="bi bi-newspaper"></i>
                  Kelola Berita
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="../jadwal/index.php">
                  <i class="bi bi-calendar3"></i>
                  Kelola Jadwal
                </a>
              </li>
            </ul>
          </div>
        </nav>
        
        <!-- SCRIPT ACTIVE MENU -->
        <script>
            const navLinks = document.querySelectorAll('.nav-link');
            const locationUrl = window.location.pathname;

            navLinks.forEach(navLink => {
              const Link = new URL(navLink.href).pathname;
              if (navLink.href.includes(locationUrl)) {
                  navLink.classList.add('active');
              }
            });
        </script>