<?php
require_once '../admin/header.php';
require '../koneksi.php';
?>


    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Antrian Puskesmas Kedungwaru</h1>
      </div>

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <!-- Default box -->
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title text-center">Tabel Antrian Pasien</h3>
                            </div>
                            
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>Nama Pasien</th>
                                                <th>NIK</th>
                                                <th>No. BPJS</th>
                                                <th>Jenis Kelamin</th>
                                                <th>Poli Tujuan</th>
                                                <th>Keluhan</th>
                                                <th>Tlp</th>
                                                <th>Nomor Antrian</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $query = $dbh->query("SELECT * FROM t_antrian");
                                            foreach ($query as $row) : ?>
                                            <tr>
                                                <td><?php echo $row["id_antrian"]; ?></td>
                                                <td><?php echo $row["nama"]; ?></td>
                                                <td><?php echo $row["nik"]; ?></td>
                                                <td><?php echo $row["bpjs"]; ?></td>
                                                <td><?php echo $row["jkel"]; ?></td>
                                                <td><?php echo $row["poli"]; ?></td>
                                                <td><?php echo $row["keluhan"]; ?></td>
                                                <td><?php echo $row["tlp"]; ?></td>
                                                <td><?php echo $row["nomor"]; ?></td>
                                                <td>
                                                    <a href="edit.php?id=<?php echo $row['id_antrian']; ?>"><button class="btn btn-warning">Edit</button></a>
                                                    <a href="delete.php?id=<?php echo $row['id_antrian']; ?>" onclick="return confirm('Yakin Hapus Data?')"><button class="btn btn-danger">Delete</button></a>
                                                </td>
                                            </tr>
                                            <?php endforeach; ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <!-- /.card-body -->
                            <div class="card-footer">
                                Puskesmas Kedungwaru ~ 
                                <?php
                                    echo $_SESSION['username'];
                                ?>
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
