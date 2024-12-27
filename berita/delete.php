<?php
require '../koneksi.php';

if (isset($_GET['id'])) {
    $key = explode('-',$_GET['id']);
    $id = $key[0];
    $img = $key[1];

    unlink('../assets/img/berita/'.$img);

    $sql = "DELETE FROM t_informasi WHERE id_informasi = ?";
    $stmt = $dbh->prepare($sql);
    $stmt->execute([$id]);

    header("Location: index.php");
    exit();
} else {
    echo "Parameter ID tidak ditemukan.";
    exit;
}
