<?php
require_once '../admin/header.php';
require '../koneksi.php';

if(isset($_POST["submit"])){
    $_dokter = $_POST['nama'];
    $_poli = $_POST['poli'];
    $_hari = $_POST['hari'];
    $data = [$_dokter, $_poli, $_hari];
    $sql = "INSERT INTO t_jadwal (dokter, poli, hari) VALUES (?, ?, ?)";
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
                                <h3 class="card-title text-center">Form Jadwal Dokter</h3>
                            </div>

                            <div class="card-body">
                                <form action="add.php" method="POST">
                                <div class="row g-3">
                                    <div class="col-6">
                                        <label for="nama" class="form-label">Nama Dokter</label>
                                        <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama dokter" value="" required>
                                        <div class="invalid-feedback">
                                            Valid first name is required.
                                        </div>
                                    </div>

                                    <div class="col-6">
                                        <label for="poli" class="form-label">Poli</label>
                                        <div class="input-group has-validation">
                                          <select id="poli" name="poli" class="form-select">
                                              <option value="Umum">Umum</option>
                                              <option value="Gigi dan Mulut">Gigi dan Mulut</option>
                                              <option value="KIA">KIA (Kesehatan Ibu dan Anak)</option>
                                              <option value="Laboratorium">Laboratorium</option>
                                              <option value="Imunisasi">Imunisasi</option>
                                          </select>
                                        <div class="invalid-feedback">
                                            Your username is required.
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-12">
                                        <label for="hari" class="form-label">Jadwal Praktik</label>
                                        <div class="input-group mb-3">
                                        <input type="text" class="form-control" id="hari" name="hari" placeholder="Jadwal Praktik (hari)" value="" required>
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
    <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js" integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js" integrity="sha384-zNy6FEbO50N+Cg5wap8IKA4M/ZnLJgzc6w2NqACZaK0u0FXfOWRRJOnQtpZun8ha" crossorigin="anonymous">
    </script><script src="../assets/js/dashboard.js"></script>
  </body>
</html>
