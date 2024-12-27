<?php
    session_start();
    $_SESSION['username'] = '';
    unset($_SESSION['username']);
    session_unset();
    session_destroy();

    setcookie('key', '', time()-360);
    setcookie('user', '', time()-360);

    header("Location: ../home.php");
    exit;
?>