<?php
require '../koneksi.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $sql = "DELETE FROM t_jadwal WHERE id_jadwal = ?";
    $stmt = $dbh->prepare($sql);
    $stmt->execute([$id]);

    header("Location: index.php");
    exit();
} else {
    echo "Parameter ID tidak ditemukan.";
    exit;
}
