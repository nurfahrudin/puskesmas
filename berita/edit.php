<?php
require_once '../admin/header.php';
require '../koneksi.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $sql = "SELECT * FROM t_informasi WHERE id_informasi = ?";
    $stmt = $dbh->prepare($sql);
    $stmt->execute([$id]);
    $row = $stmt->fetch(PDO::FETCH_ASSOC);
}

if (isset($_POST['submit'])) {
    if($_FILES["image"]["error"] == 4){
        echo
        "<script>
            alert('File gambar belum ada.');
            window.location.href = 'edit.php?id=$id';
        </script>";
    }
    else{
        $fileName = $_FILES["image"]["name"];
        $fileSize = $_FILES["image"]["size"];
        $tmpName = $_FILES["image"]["tmp_name"];
        
        $validImageExtension = ['jpg', 'jpeg', 'png'];
        $imageExtension = explode('.', $fileName);
        $imageExtension = strtolower(end($imageExtension));

        if ( !in_array($imageExtension, $validImageExtension) ){
            echo
            "<script>
            alert('File gambar tidak didukung.');
            window.location.href = 'edit.php?id=$id';
            </script>";
        }
        else if($fileSize > 1000000){
            echo
            "<script>
            alert('Ukuran gambar melebihi 1 MB.');
            window.location.href = 'edit.php?id=$id';
            </script>";
        }
        else{
            $newImageName = uniqid();
            $newImageName .= '.' . $imageExtension;
            move_uploaded_file($tmpName, '../assets/img/berita/' . $newImageName);
        }
    }
        
    $_judul = $_POST['judul'];
    $_konten = $_POST['content'];
    $_tgl_berita = $_POST['tanggal'];
    $_gambar = $newImageName;
    $data = [$_judul, $_konten, $_tgl_berita, $_gambar, $id];

    $sql = "UPDATE t_informasi SET judul = ?, konten = ?, tanggal = ?, file_gambar = ? WHERE id_informasi = ?";
    $stmt = $dbh->prepare($sql);
    $stmt->execute($data);
    echo "<script>window.location.href = 'index.php';</script>";
}
?>


    
    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Berita Puskesmas Kedungwaru</h1>
      </div>

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <!-- Default box -->
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title text-center">Edit Berita</h3>
                            </div>

                            <div class="card-body">
                                <form action="edit.php?id=<?= $row['id_informasi'] ?>" method="POST" enctype="multipart/form-data">
                                <div class="row g-3">
                                    <div class="col-12">
                                        <label for="judul" class="form-label">Judul Berita</label>
                                        <input type="text" class="form-control" id="judul" name="judul" value="<?= $row['judul'] ?>" required>
                                        <div class="invalid-feedback">
                                            Valid first name is required.
                                        </div>
                                    </div>

                                    <div class="col-12">
                                        <label for="content" class="form-label">Isi/Deskripsi Berita</label>
                                        <div class="input-group has-validation">
                                            <textarea class="form-control" id="content" name="content" required><?= $row['konten'] ?></textarea>
                                        <div class="invalid-feedback">
                                            Your username is required.
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <label for="country" class="form-label">Tanggal</label>
                                        <input id="tanggal" name="tanggal" class="form-control" type="date" value="<?= $row['tanggal'] ?>" required>
                                        <span id="startDateSelected" style="display:none"></span>
                                    </div>
                                    <script>
                                        let startDate = document.getElementById('tanggal')
                                        startDate.addEventListener('change',(e)=>{
                                        let startDateVal = e.target.value
                                        document.getElementById('startDateSelected').innerText = startDateVal
                                        })
                                    </script>

                                    <div class="col-md-8">
                                        <label for="state" class="form-label">Upload Gambar Format (jpg, jpeg, atau png)</label>
                                        <div class="input-group mb-3">
                                        <input type="file" class="form-control" id="image" name="image">
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