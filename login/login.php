<?php
require_once '../koneksi.php';
session_start();

// Cek Cookie
if (isset($_COOKIE['key']) && isset($_COOKIE['user'])){
  $key = $_COOKIE['key'];
  $user = $_COOKIE['user'];
  
  $res = mysqli_query($conn, "SELECT * FROM t_admin WHERE username = '$key'");
  $row = mysqli_fetch_assoc($res);

  if ($user === hash('sha256', $row['username'])){
    $_SESSION['logged_in'] = true;
  }
}

// Cek Session
if (isset($_SESSION['logged_in'])) {
  header("Location: ../admin/index.php");
  exit;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);
    
    $query = "SELECT * FROM t_admin WHERE username ='$username'";
    $result = mysqli_query($conn, $query);
    
    
    if ($user = mysqli_fetch_assoc($result)) {
        
        if (password_verify($password, $user['password'])) {
          
            // Set session data here
            $_SESSION['username'] = $user['username'];
            $_SESSION['logged_in'] = true;

            if (isset($_POST['remember'])){
              setcookie('key', $user['username'], time()+360);
              setcookie('user', hash('sha256', $user['username']), time()+360);
            }

            // Redirect ke halaman index setelah login berhasil
            header("Location: ../admin/index.php");
            exit;
        } else {
            $error = "Password salah!";
        }
    } else {
        $error = "User tidak ditemukan.";
    }
}

if (isset($error)) {
    echo "<script>alert('$error');</script>";
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
    <title>Admin Sign In</title>

    <!-- <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/sign-in/"> -->

    

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
        <form action="login.php" method="post">
            <h1 class="h3 mb-3 fw-normal">Silahkan Log In</h1>

            <div class="form-floating">
            <input type="text" class="form-control" name="username" placeholder="Username" required>
            <label for="floatingInput">Username</label>
            </div>
            <div class="form-floating">
            <input type="password" class="form-control" name="password" placeholder="Password" required>
            <label for="floatingPassword">Password</label>
            </div>

            <div class="checkbox mb-3">
            <input type="checkbox" name="remember">
            <label for="floatingInput">Remember Me</label>
            </div>
            
            <button class="w-100 btn btn-lg btn-primary" type="submit">Log In</button>
            <label>
                Belum memiliki akun? <a href="register.php">Buat Akun</a>
            </label>
            <p class="mt-5 mb-3 text-muted">&copy; 2024</p>
        </form>
    </main>

  </body>
</html>