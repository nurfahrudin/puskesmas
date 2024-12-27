<?php
require_once '../admin/header.php';
require '../koneksi.php';
?>


    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Jadwal Dokter Puskesmas Kedungwaru</h1>
      </div>

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <!-- Default box -->
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title text-center">Tabel Jadwal Dokter</h3>
                            </div>
                            
                            <div class="card-body">
                                <a href="add.php"><button class="btn btn-primary mb-1">Tambah Data</button></a>
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>Nama Dokter</th>
                                                <th>Poli</th>
                                                <th>Jadwal Praktik</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $query = $dbh->query("SELECT * FROM t_jadwal");
                                            foreach ($query as $row) : ?>
                                            <tr>
                                                <td><?php echo $row["id_jadwal"]; ?></td>
                                                <td><?php echo $row["dokter"]; ?></td>
                                                <td><?php echo $row["poli"]; ?></td>
                                                <td><?php echo $row["hari"]; ?></td>
                                                <td>
                                                    <a href="edit.php?id=<?php echo $row['id_jadwal']; ?>"><button class="btn btn-warning">Edit</button></a>
                                                    <a href="delete.php?id=<?php echo $row['id_jadwal']; ?>" onclick="return confirm('Yakin Hapus Data?')"><button class="btn btn-danger">Delete</button></a>
                                                </td>
                                            </tr>
                                            <?php endforeach; ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <!-- /.card-body -->
                            <div class="card-footer">
                                Puskesmas Kedungwaru
                            </div>
                            <!-- /.card-footer-->
                        </div>
                        <!-- /.card -->
                    </div>
                </div>
            </div>
        </section>
        <!-- /.content -->

    </main>
  </div>
</div>

  </body>
</html>
