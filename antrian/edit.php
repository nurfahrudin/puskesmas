<?php
require_once '../admin/header.php';
require '../koneksi.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $sql = "SELECT * FROM t_antrian WHERE id_antrian = ?";
    $stmt = $dbh->prepare($sql);
    $stmt->execute([$id]);
    $row = $stmt->fetch(PDO::FETCH_ASSOC);
}

if (isset($_POST['submit'])) {
    $_nama = $_POST['nama'];
    $_nik = $_POST['nik'];
    $_tlp = $_POST['tlp'];
    $_jkel = $_POST['jkel'];
    $_bpjs = $_POST['bpjs'];
    $_poli = $_POST['poli'];
    $_keluhan = $_POST['keluhan'];
    $data = [$_nama, $_nik, $_tlp, $_jkel, $_bpjs, $_poli, $_keluhan, $id];

    $sql = "UPDATE t_antrian SET nama = ?, nik = ?, tlp = ?, jkel = ?, bpjs = ?, poli = ?, keluhan = ? WHERE id_antrian = ?";
    $stmt = $dbh->prepare($sql);
    $stmt->execute($data);
    echo "<script>window.location.href = 'index.php';</script>";
}
?>

    
    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Antrian Pasien Puskesmas Kedungwaru</h1>
      </div>

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <!-- Default box -->
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title text-center">Edit Antrian Pasien</h3>
                            </div>

                            <div class="card-body">
                                <form action="edit.php?id=<?= $row['id_antrian'] ?>" method="POST">

                                <div class="row g-3">
                                    <div class="col-6">
                                        <label for="nama" class="form-label">Nama Pasien</label>
                                        <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama Pasien" value="<?= $row['nama'] ?>" required>
                                        <div class="invalid-feedback">
                                            Valid first name is required.
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <label for="nik" class="form-label">NIK</label>
                                        <input type="text" class="form-control" id="nik" name="nik" placeholder="NIK" value="<?= $row['nik'] ?>" required>
                                        <div class="invalid-feedback">
                                            Valid first name is required.
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <label for="tlp" class="form-label">Nomor HP</label>
                                        <input type="text" class="form-control" id="tlp" name="tlp" placeholder="Nomor HP" value="<?= $row['tlp'] ?>" required>
                                        <div class="invalid-feedback">
                                            Valid first name is required.
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <label for="jkel" class="form-label">Jenis Kelamin</label>
                                        <div class="input-group has-validation">
                                            <select id="jkel" name="jkel" class="form-select">
                                                <?php
                                                $jenkel = array('Laki-Laki','Perempuan');
                                                foreach ($jenkel as $jkel) {
                                                $selected = ($row['jkel'] == $jkel) ? 'selected' : '';
                                                echo "<option value='" . $jkel . "' $selected>" . $jkel . "</option>";
                                                }
                                                ?>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <label for="bpjs" class="form-label">Nomor BPJS</label>
                                        <div class="input-group mb-3">
                                            <input type="text" class="form-control" id="bpjs" name="bpjs" placeholder="Nomor BPJS (Jika Ada)" value="<?= $row['bpjs'] ?>" required>
                                        </div>
                                    </div>

                                    <div class="col-6">
                                        <label for="poli" class="form-label">Poli Tujuan</label>
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
                                        </div>
                                    </div>
                                </div>

                                <div class="col-12">
                                    <label for="keluhan" class="form-label">Keluhan</label>
                                    <div class="input-group has-validation">
                                        <textarea class="form-control" id="keluhan" name="keluhan" required><?= $row['keluhan'] ?></textarea>
                                    <div class="invalid-feedback">
                                        Your username is required.
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