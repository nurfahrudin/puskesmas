<?php
require_once '../admin/header.php';
require '../koneksi.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    
    $sql = "SELECT * FROM t_jadwal WHERE id_jadwal = ?";
    $stmt = $dbh->prepare($sql);
    $stmt->execute([$id]);
    $row = $stmt->fetch(PDO::FETCH_ASSOC);
}

if (isset($_POST['submit'])) {
    $_dokter = $_POST['nama'];
    $_poli = $_POST['poli'];
    $_hari = $_POST['hari'];
    $data = [$_dokter, $_poli, $_hari, $id];
    
    $sql = "UPDATE t_jadwal SET dokter = ?, poli = ?, hari = ? WHERE id_jadwal = ?";
    $stmt = $dbh->prepare($sql);
    $stmt->execute($data);
    echo "<script>window.location.href = 'index.php';</script>";
}
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
                                <h3 class="card-title text-center">Edit Jadwal Dokter</h3>
                            </div>

                            <div class="card-body">
                                <form action="edit.php?id=<?= $row['id_jadwal'] ?>" method="POST">

                                <div class="row g-3">
                                    <div class="col-6">
                                        <label for="nama" class="form-label">Nama Dokter</label>
                                        <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama dokter" value="<?= $row['dokter'] ?>" required>
                                        <div class="invalid-feedback">
                                            Valid first name is required.
                                        </div>
                                    </div>

                                    <div class="col-6">
                                        <label for="poli" class="form-label">Poli</label>
                                        <div class="input-group has-validation">
                                          <select id="poli" name="poli" class="form-select">
                                              <?php
                                              $data_poli = array('Umum','Gigi dan Mulut','KIA','Laboratorium','Imunisasi');
                                              foreach ($data_poli as $poli) {
                                              $selected = ($row['poli'] == $poli) ? 'selected' : '';
                                              echo "<option value='" . $poli . "' $selected>" . $poli . "</option>";
                                              }
                                              ?>
                                          </select>
                                        <div class="invalid-feedback">
                                            Your username is required.
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-12">
                                        <label for="hari" class="form-label">Jadwal Praktik</label>
                                        <div class="input-group mb-3">
                                        <input type="text" class="form-control" id="hari" name="hari" placeholder="Jadwal Praktik (hari)" value="<?= $row['hari'] ?>" required>
                                        </div>
                                    </div>
                                </div>

                                <div class="my-3">
                                    <div class="d-grid gap-2 col-2 mx-auto">
                                        <button class="btn btn-primary btn-md" name="submit" type="submit">Simpan</button>
                                    </div>
                                </div>

                                </form>
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
    <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>
    </script><script src="../assets/js/dashboard.js"></script>
  </body>
</html>