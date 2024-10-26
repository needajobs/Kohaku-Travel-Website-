<!DOCTYPE html>
<html>
<?php include "INCLUDE/head.php"; ?>
    <body class="sb-nav-fixed">
        <?php include "INCLUDE/menunav.php"; ?>
        <div id="layoutSidenav">
            <?php include "INCLUDE/menu.php"; ?>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Berita</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Edit Berita</li>
                        </ol>
<?php
    include "include/config.php";
    if(isset($_POST['edit']))
    {
        $beritaKODE = $_POST["kodeberita"];
        $beritaNAMA = $_POST["namaberita"];
        $beritaKET = $_POST["ketberita"];
        $beritaTGL = $_POST["beritaTGL"];
        $beritaVID = $_POST["beritaVID"];
        $kategoriKODE = $_POST["kodekategori"];

        if (isset($_FILES['file'])) {
            $beritaPIC = $_FILES['file']['name'];
            $file_tmp = $_FILES["file"]["tmp_name"];
    
            $ekstensifile = pathinfo($beritaPIC, PATHINFO_EXTENSION);
    
            // PERIKSA EKSTEN FILE HARUS JPG ATAU jpg
            if (($ekstensifile == "jpg") or ($ekstensifile == "JPG")) {
                move_uploaded_file($file_tmp, 'images/' . $beritaPIC);
    
                mysqli_query($connection, "update berita set beritaNAMA='$beritaNAMA', beritaKET='$beritaKET', beritaTGL = '$beritaTGL', beritaPIC = '$beritaPIC', beritaVID = '$beritaVID', kategoriKODE='$kategoriKODE' where beritaKODE='$beritaKODE'");
                echo "<script>alert('DATA BERHASIL DIUBAH'); document.location='inputberita.php'</script>";
            }
        }
        mysqli_query($connection, "update berita set beritaNAMA='$beritaNAMA', beritaKET='$beritaKET', beritaTGL = '$beritaTGL', beritaVID = '$beritaVID', kategoriKODE='$kategoriKODE' where beritaKODE='$beritaKODE'");
        echo "<script>alert('DATA BERHASIL DIUBAH'); document.location='inputberita.php'</script>";
    }
    $datakategori = mysqli_query($connection,"select * from kategoriwisata");
 
    $kodeberita = $_GET['ubah'];
    $editberita = mysqli_query($connection,"select * from berita where beritaKODE = '$kodeberita'");
    $rowedit = mysqli_fetch_array($editberita);

?>
 
    <head>
        <title>DESTINASI</title>
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css" integrity="sha384-b6lVK+yci+bfDmaY1u0zE8YYJt0TZxLEAFyYSLHId4xoVvsrQu3INevFKo+Xir8e" crossorigin="anonymous">
    </head>
    <body>
    <div class="row">
    <div class="col-sm-1">
    </div>
        <div class="col-sm-10">
            <form method="POST" enctype="multipart/form-data">
            <div class="mb-3 row">
                    <label for="kodeberita" class="col-sm-2 col-form-label">Kode Berita</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="kodeberita" id="kodeberita" maxlength="4" value="<?php echo $rowedit["beritaKODE"] ?>" readonly>
                    </div>
                </div>

                <div class="mb-3 row">
                    <label for="namaberita" class="col-sm-2 col-form-label">Nama Berita</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="namaberita" id="namaberita" value="<?php echo $rowedit["beritaNAMA"] ?>">
                    </div>
                </div>

                <div class="mb-3 row">
                    <label for="ketberita" class="col-sm-2 col-form-label">Keterangan Berita</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="ketberita" id="ketberita" value="<?php echo $rowedit["beritaKET"] ?>">
                    </div>
                </div>

                <div class="mb-3 row">
                    <label for="beritaTGL" class="col-sm-2 col-form-label">Tanggal Publikasi</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="beritaTGL" id="beritaTGL" value="<?php echo $rowedit["beritaTGL"] ?>">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="file" class="col-sm-2 col-form-label">Photo Berita</label>
                    <div class="col-sm-10">
                        <input type="file" id="file" name="file">
                        <p class="help-block">Field ini digunakan untuk unggah file</p>
                        <img src="images/<?php echo $rowedit['beritaPIC']; ?>" width="80">
                        <p class="help-block">Photo Saat Ini</p>
                    </div>
		        </div>

                <div class="mb-3 row">
                    <label for="beritaVID" class="col-sm-2 col-form-label">Video Berita</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="beritaVID" id="beritaVID" value="<?php echo $rowedit["beritaVID"] ?>">
                        <br>
                        <iframe width="200px" height="100px" src="<?php echo $rowedit['beritaVID']?>" frameborder="0" allowfullscreen></iframe>
                        <p class="help-block">Video Saat Ini</p>
                    </div>
                </div>

                <div class="mb-3 row">
                    <label for="kodekategori" class="col-sm-2 col-form-label">Kode Kategori</label>
                    <div class="col-sm-10">
                        <select class="form-control" id="kodekategori" name="kodekategori">
                            <option value="<?php echo $rowedit["kategoriKODE"]?>">
                                <?php echo $rowedit["kategoriKODE"]?>
                            </option>
                            <?php while($row = mysqli_fetch_array($datakategori)) { ?>
                                <option value="<?php echo $row["kategoriKODE"]?>">
                                <?php echo $row["kategoriKODE"]?>
                                </option>
                                <?php } ?>
                        </select>
                    </div>
                </div>
 
                <div class="form-group row">
                    <div class="col-sm-2"></div>
                    <div class="col-sm-10">
                    <input type="submit" class="btn btn-dark" value="Ubah" name="edit">
						<button type="reset" class="btn btn-info">Batal</button>
                    </div>
                </div>
                <br>
            </form>
 
            <div class="jumbotron mt-5">
                <h2 class="display-5">Hasil entri data berita</h2>
            </div>

            <br>
 
            <form method="POST">
                <div class="form-group row mb-2">
                    <label for="search" class="col-sm-2">Nama Berita</label>
                    <div class="col-sm-8">
                        <input type="text" name="search" class="form-control" id="search"
                        value="<?php if(isset($_POST["search"])) {echo $_POST["search"];}?>"
                        placeholder="Cari nama berita";>
                    </div>
                    <input type="submit" name="kirim" class="col-sm-1 btn btn-primary" value="Search">
                </div>
            </form>
   
            <br>
 
            <table class="table table-dark table-hover">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Kode Berita</th>
                        <th scope="col">Nama Berita</th>
                        <th scope="col">Keterangan Berita</th>
                        <th scope="col">Tanggal Publikasi</th>
                        <th scope="col">Photo Berita</th>
                        <th scope="col">Video Berita</th>
                        <th scope="col">Kode Kategori</th>
                        <th colspan="2" style="text-align: center;">Aktivitas</th>
                    </tr>
                </thead>
                <tbody>
                <?php
                    if(isset($_POST["kirim"])) {
                        $search = $_POST["search"];
                        $query = mysqli_query($connection,"select berita.* from berita where beritaNAMA like '%".$search."%'");
                    }else
                    {
                        $query = mysqli_query($connection,"select berita.* from berita");
                    }
 
                    $nomor = 1;
                    while($row = mysqli_fetch_array($query))
                    {
                ?>
                    <tr>
                        <td><?php echo $nomor ?></td>
                        <td><?php echo $row['beritaKODE']; ?></td>
                        <td><?php echo $row['beritaNAMA']; ?></td>
                        <td><?php echo $row['beritaKET']; ?></td>
                        <td><?php echo $row['beritaTGL']; ?></td>
                        <td>
						    <?php if(is_file("images/".$row['beritaPIC']))
						    { ?>
							    <img src="images/<?php echo $row['beritaPIC']?>" width="80">
						    <?php } else
							    echo "<img src='images/noimage.png' width='80'>"
						    ?>
					    </td>
                        <td><iframe width="100px" height="55px" src="<?php echo $row['beritaVID']?>" frameborder="0" allowfullscreen></iframe></td>
                        <td><?php echo $row['kategoriKODE']; ?></td>

                        <td width="5px">
                            <a href="beritaedit.php?ubah=<?php echo $row["beritaKODE"];?>" class="btn btn-success btn-sm" title="EDIT">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                                <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                                <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
                            </svg>   
                        </td>
                        <td width="5px">
                            <a href="beritahapus.php?hapus=<?php echo $row["beritaKODE"];?>" class="btn btn-danger btn-sm" title="HAPUS">
                            <i class="bi bi-trash"></i>
                        </td>
                    </tr>
                    <?php $nomor++; ?>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
 
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js"></script>
 
    <script>
        $(document).ready(function() {
            $('#kodekategori').select(
            {
                closeOnSelect : true,
                allowClear : true,
                placeholder : 'Pilih Kategori Wisata'
            });
        });
    </script>
    </body>
    </body>
                    </div>
                </main>
                <?php include 'INCLUDE/footer.php'; ?>
            </div>
        </div>
        <?php include "INCLUDE/jsscript.php"; ?>
</html>