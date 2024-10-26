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
                        <h1 class="mt-4">Destinasi</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Edit Destinasi</li>
                        </ol>
<?php
    include "include/config.php";
    if(isset($_POST['edit']))
    {
        $destinasiKODE = $_POST["kodedestinasi"];
        $destinasiNAMA = $_POST["namadestinasi"];
        $destinasiKET = $_POST["ketdestinasi"];
        $kategoriKODE = $_POST["kodekategori"];

		// PERIKSA EKSTEN FILE HARUS JPG ATAU jpg
		 // Check if a file was uploaded
         if (isset($_FILES['file'])) {
            $destinasiPIC = $_FILES['file']['name'];
            $file_tmp = $_FILES["file"]["tmp_name"];
    
            $ekstensifile = pathinfo($destinasiPIC, PATHINFO_EXTENSION);
    
            // PERIKSA EKSTEN FILE HARUS JPG ATAU jpg
            if (($ekstensifile == "jpg") or ($ekstensifile == "JPG")) {
                move_uploaded_file($file_tmp, 'images/' . $destinasiPIC);
    
                mysqli_query($connection, "update destinasi set destinasiNAMA='$destinasiNAMA', destinasiKET ='$destinasiKET', destinasiPIC ='$destinasiPIC', kategoriKODE = '$kategoriKODE' WHERE destinasiKODE='$destinasiKODE'");
                echo "<script>alert('DATA BERHASIL DIUBAH'); document.location='destinasi.php'</script>";
            }
        }
        mysqli_query($connection, "update destinasi set destinasiNAMA='$destinasiNAMA', destinasiKET ='$destinasiKET', kategoriKODE = '$kategoriKODE' WHERE destinasiKODE='$destinasiKODE'");
        echo "<script>alert('DATA BERHASIL DIUBAH'); document.location='destinasi.php'</script>";
    }
    $datakategori = mysqli_query($connection,"select * from kategoriwisata");
    $kodedestinasi = $_GET['ubah'];
    $editdestinasi = mysqli_query($connection,"select * from destinasi where destinasiKODE = '$kodedestinasi'");
    $rowedit = mysqli_fetch_array($editdestinasi);
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
                    <label for="kodedestinasi" class="col-sm-2 col-form-label">Kode Destinasi</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="kodedestinasi" id="kodedestinasi" value="<?php echo $rowedit["destinasiKODE"] ?>" readonly>
                    </div>
                </div>

                <div class="mb-3 row">
                    <label for="namadestinasi" class="col-sm-2 col-form-label">Nama Destinasi</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="namadestinasi" id="namadestinasi" value="<?php echo $rowedit["destinasiNAMA"] ?>">
                    </div>
                </div>

                <div class="mb-3 row">
                    <label for="ketdestinasi" class="col-sm-2 col-form-label">Keterangan Destinasi</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="ketdestinasi" id="ketdestinasi" value="<?php echo $rowedit["destinasiKET"] ?>">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="file" class="col-sm-2 col-form-label">New Photo Destinasi</label>
                    <div class="col-sm-10">
                        <input type="file" id="file" name="file">
                        <p class="help-block">Field ini digunakan untuk unggah file baru</p>
                        <img src="images/<?php echo $rowedit['destinasiPIC']; ?>" width="80">
                        <p class="help-block">Photo Saat Ini</p>
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
                <h2 class="display-5">Hasil entri data destinasi wisata</h2>
            </div>

            <br>
 
            <form method="POST">
                <div class="form-group row mb-2">
                    <label for="search" class="col-sm-2">Nama Destinasi</label>
                    <div class="col-sm-8">
                        <input type="text" name="search" class="form-control" id="search"
                        value="<?php if(isset($_POST["search"])) {echo $_POST["search"];}?>"
                        placeholder="Cari nama destinasi";>
                    </div>
                    <input type="submit" name="kirim" class="col-sm-1 btn btn-primary" value="Search">
                </div>
            </form>
   
            <br>
 
            <table class="table table-dark table-hover">
                <thead>
                    <tr>
                    <th scope="col">No</th>
                    <th scope="col">Kode Destinasi</th>
                    <th scope="col">Nama Destinasi</th>
                    <th scope="col">Keterangan Destinasi</th>
                    <th scope="col">Photo Destinasi</th>
                    <th scope="col">Kode Kategori</th>
                    <th colspan="2" style="text-align: center;">Action</th>
                    </tr>
                </thead>
                <tbody>
                <?php
                    if(isset($_POST["kirim"])) {
                        $search = $_POST["search"];
                        $query = mysqli_query($connection,"select destinasi.* from destinasi where destinasiNAMA like '%".$search."%'");
                    }else
                    {
                        $query = mysqli_query($connection,"select destinasi.* from destinasi");
                    }
 
                    $nomor = 1;
                    while($row = mysqli_fetch_array($query))
                    {
                ?>
                    <tr>
                        <td><?php echo $nomor ?></td>
                        <td><?php echo $row['destinasiKODE']; ?></td>
                        <td><?php echo $row['destinasiNAMA']; ?></td>
                        <td><?php echo $row['destinasiKET']; ?></td>
                        <td>
						    <?php if(is_file("images/".$row['destinasiPIC']))
						    { ?>
							    <img src="images/<?php echo $row['destinasiPIC']?>" width="80">
						    <?php } else
							    echo "<img src='images/noimage.png' width='80'>"
						    ?>
					    </td>
                        <td><?php echo $row['kategoriKODE']; ?></td>
                        <td width="5px">
                            <a href="destinasiedit.php?ubah=<?php echo $row["destinasiKODE"]?>" class="btn btn-secondary btn-sm" title="EDIT">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                            <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                            <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/></svg>
                        </td>
                        <td width="5px">
                            <a href="destinasihapus.php?hapus=<?php echo $row["destinasiKODE"]?>" class="btn btn-danger btn-sm" title="HAPUS">
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