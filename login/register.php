<?php
require_once '../koneksi.php';

// Mulai session
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = mysqli_real_escape_string($conn, trim($_POST['username']));
    $password = mysqli_real_escape_string($conn, $_POST['password']);
    $confirm_password = mysqli_real_escape_string($conn, $_POST['confirm_password']);

    if ($password !== $confirm_password) {
        echo "<script>alert('Konfirmasi password tidak sesuai!'); window.location='register.php';</script>";
        exit();  // Hentikan eksekusi lebih lanjut
    } else {
        $query = "SELECT id_admin FROM t_admin WHERE username = '$username'";
        $result = mysqli_query($conn, $query);
        if (mysqli_num_rows($result) > 0) {
            echo "<script>alert('Username sudah terdaftar!'); window.location='login.php';</script>";
            exit();  // Hentikan eksekusi lebih lanjut jika username sudah ada
        } else {
            $hashed_password = password_hash($password, PASSWORD_DEFAULT);
            $insertQuery = "INSERT INTO t_admin (username, password) VALUES ('$username', '$hashed_password')";
            if (mysqli_query($conn, $insertQuery)) {
                echo "<script>alert('Registrasi berhasil! Silakan login.'); window.location='login.php';</script>";
                exit();  // Sukses dan alihkan ke halaman login
            } else {
                // Menampilkan pesan error untuk debugging, di produksi sebaiknya disimpan di log
                $error = "Error pada database: " . mysqli_error($conn);
                echo "<script>alert('" . addslashes($error) . "'); window.location='register.php';</script>";
                exit();  // Hentikan eksekusi jika query gagal
            }
        }
    }
}
?>



<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.84.0">
    <title>Admin Register</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/sign-in/">

    

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
    <link href="../assets/css/signin.css" rel="stylesheet">
    </head>
    <body class="text-center">

    <main class="form-signin">
        <a href="../home.php">
          <img class="mb-4" src="../assets/img/logo.png" alt="" width="175" height="57">
        </a>
        <form action="register.php" method="post">
            <h1 class="h3 mb-3 fw-normal">Silahkan Registrasi</h1>

            <div class="form-floating">
            <input type="text" class="form-control" name="username" placeholder="Username" required>
            <label for="floatingInput">Username</label>
            </div>
            <div class="form-floating">
            <input type="password" class="form-control" name="password" placeholder="Password" required>
            <label for="floatingPassword">Password</label>
            </div>
            <div class="form-floating">
            <input type="password" class="form-control" name="confirm_password" placeholder="Confirm Password" required>
            <label for="floatingPassword">Confirm Password</label>
            </div>

            <div class="checkbox mb-3">
            <label>
                Sudah memiliki akun? <a href="login.php">Log In</a>
            </label>
            </div>
            <button class="w-100 btn btn-lg btn-primary" type="submit">Buat Akun</button>
            <p class="mt-5 mb-3 text-muted">&copy; 2024</p>
        </form>
    </main>

  </body>
</html>