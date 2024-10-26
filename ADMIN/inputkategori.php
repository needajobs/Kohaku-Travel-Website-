<!doctype html>
<?php include "INCLUDE/head.php"; ?>
    <body class="sb-nav-fixed">
        <?php include "INCLUDE/menunav.php"; ?>
        <div id="layoutSidenav">
            <?php include "INCLUDE/menu.php"; ?>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Kategori Wisata</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Input Kategori Wisata</li>
                        </ol>
<?php
	include "include/config.php";
	if(isset($_POST['Simpan']))
	{
		$kategoriKODE = $_POST["inputKategoriKode"];
		$kategoriNAMA = $_POST["inputKategoriNama"];
		$kategoriKET = $_POST["inputKetKategori"];
		$kategoriREF = $_POST["inputRefKategori"];
		
		mysqli_query($connection, "insert into kategoriwisata values ('$kategoriKODE', '$kategoriNAMA', '$kategoriKET', '$kategoriREF')");
	};
?>

<html lang="en">
  <head>

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css" integrity="sha384-b6lVK+yci+bfDmaY1u0zE8YYJt0TZxLEAFyYSLHId4xoVvsrQu3INevFKo+Xir8e" crossorigin="anonymous">
    <title>Input Kategori</title>

  </head>
<body>
	<div class="row">
		<div class="col-sm-1">
		</div>
		<div class="col-sm-10">
			<form method="POST">

				<div class="mb-3 row">
					<label for="kategoriKODE" class="col-sm-2 col-form-label">Kategori Kode </label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="kategoriKODE" name="inputKategoriKode">
					</div>
				</div>
		
				<div class="mb-3 row">
					<label for="kategoriNAMA" class="col-sm-2 col-form-label">Nama Kategori </label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="kategoriNAMA" name="inputKategoriNama">
					</div>
				</div>
		
				<div class="mb-3 row">
					<label for="kategoriKET" class="col-sm-2 col-form-label">Keterangan Kategori </label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="kategoriKET" name="inputKetKategori">
					</div>
				</div>
		
				<div class="mb-3 row">
					<label for="kategoriREF" class="col-sm-2 col-form-label">Referensi Kategori </label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="kategoriREF" name="inputRefKategori">
					</div>
				</div>

				<div class="mb-3 row">
					<label for="kategoriREF" class="col-sm-2 col-form-label"></label>
					<div class="col-sm-10">
						<input type="submit" class="btn btn-dark" value="Simpan" name="Simpan">
						<button type="reset" class="btn btn-info">Batal</button>
					</div>
				</div>
			</form>

			<div class="jumbotron mt-5">
            	<h2 class="display-5">Hasil entri data kategori</h2>
        	</div>

			<br>
             
			<form method="POST">
				<div class="form-group row mb-2">
					<label for="search" class="col-sm-2">Nama Kategori</label>
					<div class="col-sm-8">
						<input type="text" name="search" class="form-control" id="search"
						value="<?php if(isset($_POST["search"])) {echo $_POST["search"];}?>"
						placeholder="Cari nama kategori";>
					</div>
					<input type="submit" name="kirim" class="col-sm-1 btn btn-primary" value="Search">
				</div>
			</form>

			<br>
			
			<table class="table table-dark table-hover">
				<thead>
					<tr>
					<th scope="col">No</th>
					<th scope="col">Kode Kategori</th>
					<th scope="col">Nama Kategori</th>
					<th scope="col">Keterangan Kategori</th>
					<th scope="col">Referensi Kategori</th>
					<th colspan="2" style="text-align: center;">Action</th>
					</tr>
				</thead>
				<tbody>
					<?php
						if(isset($_POST["kirim"])) {
							$search = $_POST["search"];
							$query = mysqli_query($connection,"select kategoriwisata.* from kategoriwisata where kategoriNAMA like '%".$search."%'");
						}else
						{
							$query = mysqli_query($connection,"select kategoriwisata.* from kategoriwisata");
						}
	
						$nomor = 1;
						while($row = mysqli_fetch_array($query))
						{
					?>
					<tr>
						<td><?php echo $nomor ?></td>
						<td><?php echo $row['kategoriKODE']; ?></td>
						<td><?php echo $row['kategoriNAMA']; ?></td>
						<td><?php echo $row['kategoriKET']; ?></td>
						<td><?php echo $row['kategoriREFERENCE']; ?></td>

						<td width="5px">
							<a href="kategoriubah.php?ubah=<?php echo $row["kategoriKODE"];?>" class="btn btn-success btn-sm" title="EDIT">
							<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
								<path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
								<path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
							</svg>   
						</td>
						<td width="5px">
							<a href="kategorihapus.php?hapus=<?php echo $row["kategoriKODE"];?>" class="btn btn-danger btn-sm" title="HAPUS">
							<i class="bi bi-trash"></i>
						</td>
					</tr>
					<?php $nomor++; ?>
					<?php } ?>
				</tbody>
			</table>
		</div>
	</div>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
	</div>
</body>
</main>
                <?php include 'INCLUDE/footer.php'; ?>
            </div>
        </div>
        <?php include "INCLUDE/jsscript.php"; ?>
</html>