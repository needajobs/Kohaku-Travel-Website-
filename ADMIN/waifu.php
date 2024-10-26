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
                        <h1 class="mt-4">Waifu</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Input Waifu</li>
                        </ol>
<?php
    include "include/config.php";
    if(isset($_POST['Simpan']))
    {
        $waifuKODE = $_POST["kodewaifu"];
        $waifuNAMA = $_POST["namawaifu"];
        $waifuANIME = $_POST["animewaifu"];

        $namafile = $_FILES['file']['name'];
		$file_tmp = $_FILES["file"]["tmp_name"];

		$ekstensifile = pathinfo($namafile, PATHINFO_EXTENSION);

		// PERIKSA EKSTEN FILE HARUS JPG ATAU jpg
		if(($ekstensifile == "jpg") or ($ekstensifile == "JPG"))
		{
			move_uploaded_file($file_tmp, 'images/'.$namafile); //unggah file ke folder images
			mysqli_query($connection, "insert into waifu values ('$waifuKODE', '$waifuNAMA', '$waifuANIME', '$namafile')");
			//header("location:waifu.php");
		}
    }
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
                    <label for="kodewaifu" class="col-sm-2 col-form-label">Kode Waifu</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="kodewaifu" id="kodewaifu" maxlength="4">
                    </div>
                </div>

                <div class="mb-3 row">
                    <label for="namawaifu" class="col-sm-2 col-form-label">Nama Waifu</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="namawaifu" id="namawaifu">
                    </div>
                </div>

                <div class="mb-3 row">
                    <label for="animewaifu" class="col-sm-2 col-form-label">Anime Waifu</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="animewaifu" id="animewaifu">
                    </div>
                </div>

                <div class="form-group row">
			        <label for="file" class="col-sm-2 col-form-label">Photo Waifu</label>
			        <div class="col-sm-10">
				        <input type="file" id="file" name="file">
				        <p class="help-block">Field ini digunakan untuk unggah file</p>
			        </div>
		        </div>
                
                <div class="form-group row">
                    <div class="col-sm-2"></div>
                    <div class="col-sm-10">
                        <input type="submit" class="btn btn-dark" value="Simpan" name="Simpan">
					    <button type="reset" class="btn btn-info">Batal</button>
                    </div>
                </div>
                <br>
            </form>
 
            <div class="jumbotron mt-5">
                <h2 class="display-5">Hasil entri data waifu</h2>
            </div>

            <br>
             
             <form method="POST">
                <div class="form-group row mb-2">
                    <label for="search" class="col-sm-3">Nama Waifu</label>
                    <div class="col-sm-6">
                        <input type="text" name="search" class="form-control" id="search"
                        value="<?php if(isset($_POST["search"])) {echo $_POST["search"];}?>"
                        placeholder="Cari nama waifu";>
                    </div>
                    <input type="submit" name="kirim" class="col-sm-1 btn btn-primary" value="Search">
                </div>
            </form>

            <br>

            <table class="table table-dark table-hover">
                <thead>
                    <tr>
                    <th scope="col">No</th>
                    <th scope="col">Kode Waifu</th>
                    <th scope="col">Nama Waifu</th>
                    <th scope="col">Anime Waifu</th>
                    <th scope="col">Photo Waifu</th>
                    <th colspan="2" style="text-align: center;">Action</th>
                    </tr>
                </thead>
                <tbody>
                <?php
                    // $query = mysqli_query($connection,"select destinasi.* from destinasi");
 
                    if(isset($_POST["kirim"])) {
                        $search = $_POST["search"];
                        $query = mysqli_query($connection,"select waifu.* from waifu where waifuNAMA like '%".$search."%'");
                    }else
                    {
                        $query = mysqli_query($connection,"select waifu.* from waifu");
                    }
 
                    $nomor = 1;
                    while($row = mysqli_fetch_array($query))
                    {
                ?>
                    <tr>
                        <td><?php echo $nomor ?></td>
                        <td><?php echo $row['waifuKODE']; ?></td>
                        <td><?php echo $row['waifuNAMA']; ?></td>
                        <td><?php echo $row['waifuANIME']; ?></td>
                        <td>
						    <?php if(is_file("images/".$row['waifuFOTO']))
						    { ?>
							    <img src="images/<?php echo $row['waifuFOTO']?>" width="80">
						    <?php } else
							    echo "<img src='images/noimage.png' width='80'>"
						    ?>
					    </td>
                        <td width="5px">
                            <a href="waifuedit.php?edit=<?php echo $row["waifuKODE"]?>" class="btn btn-success btn-sm" title="EDIT">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                            <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                            <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/></svg>
                        </td>
                        <td width="5px">
                            <a href="waifuhapus.php?hapus=<?php echo $row["waifuKODE"];?>" class="btn btn-danger btn-sm" title="HAPUS">
                            <i class="bi bi-trash"></i>
                        </td>
                    </tr>
                    <?php $nomor++; ?>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
 
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js"></script>

    </body>
                    </div>
                </main>
                <?php include 'INCLUDE/footer.php'; ?>
            </div>
        </div>
        <?php include "INCLUDE/jsscript.php"; ?>
</html>