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
                        
<?php
    include "include/config.php";
?>
 
    <head>
        <title>Restaurant</title>
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css" integrity="sha384-b6lVK+yci+bfDmaY1u0zE8YYJt0TZxLEAFyYSLHId4xoVvsrQu3INevFKo+Xir8e" crossorigin="anonymous">
    </head>
    <body>
    <div class="row">
    <div class="col-sm-1">
    </div>
        <div class="col-sm-10">
            <div class="jumbotron mt-5">
                <h2 class="display-5">Daftar Restaurant</h2>
            </div>

            <br>

             <form method="POST">
                <div class="form-group row mb-2">
                    <label for="search" class="col-sm-3">Nama Restaurant</label>
                    <div class="col-sm-6">
                        <input type="text" name="search" class="form-control" id="search"
                        value="<?php if(isset($_POST["search"])) {echo $_POST["search"];}?>"
                        placeholder="Cari nama restaurant";>
                    </div>
                    <input type="submit" name="kirim" class="col-sm-1 btn btn-primary" value="Search">
                </div>
            </form>

            <br>

            <table class="table table-dark table-hover">
                <thead>
                    <tr>
                    <th scope="col">No</th>
                    <th scope="col">Kode Restaurant</th>
                    <th scope="col">Nama Restaurant</th>
                    <th scope="col">Keterangan Restaurant</th>
                    <th scope="col">Photo Restaurant</th>
                    <th scope="col">Nama Destinasi Restaurant</th>
                    </tr>
                </thead>
                <tbody>
                <?php
                    $jumlahtampilan = 3;
                    $halaman = (isset($_GET['page']))? $_GET['page'] : 1;
                    $mulaitampilan = ($halaman - 1) * $jumlahtampilan;
                
                    if(isset($_POST["kirim"])) {
                        $search = $_POST["search"];
                        $query = mysqli_query($connection,"select * from restaurant, destinasi where restaurant.destinasiKODE = destinasi.destinasiKODE AND restaurantNAMA like '%".$search."%' limit $mulaitampilan, $jumlahtampilan");
                    }else
                    {
                        $query = mysqli_query($connection,"select * from restaurant, destinasi where restaurant.destinasiKODE = destinasi.destinasiKODE limit $mulaitampilan, $jumlahtampilan");
                    }
 
                    $nomor = 1;
                    while($row = mysqli_fetch_array($query))
                    {
                ?>
                    <tr>
                        <td><?php echo $mulaitampilan + $nomor; ?></td>
                        <td><?php echo $row['restaurantID']; ?></td>
                        <td><?php echo $row['restaurantNAMA']; ?></td>
                        <td><?php echo $row['restaurantKET']; ?></td>
                        <td>
						    <?php if(is_file("images/".$row['restaurantPIC']))
						    { ?>
							    <img src="images/<?php echo $row['restaurantPIC']?>" width="80">
						    <?php } else
							    echo "<img src='images/noimage.png' width='80'>"
						    ?>
					    </td>
                        <td><?php echo $row['destinasiNAMA']; ?></td>
                    </tr>
                    <?php $nomor++; ?>
                    <?php } ?>
                </tbody>
            </table>

            <?php 
                $query = mysqli_query($connection, "select * from destinasi");
                $jumlahrecord = mysqli_num_rows($query);
                $jumlahpage = ceil($jumlahrecord/$jumlahtampilan);
            ?>

            <nav aria-label="Page navigation example">
                 <ul class="pagination">
                    <li class="page-item"><a class="page-link" href="?page=<?php $nomorhal=1; echo $nomorhal?>">FIRST</a></li>
                    <?php for($nomorhal=1; $nomorhal<=$jumlahpage; $nomorhal++) { ?>
                    <li class="page-item">
                    <?php 
                        if($nomorhal!=$halaman) { ?>  
                        <a class="page-link" href="?page=<?php echo $nomorhal?>"><?php echo $nomorhal?></a>
                        <?php }
                        else { ?>
                        <a class="page-link" href="?page=<?php echo $nomorhal?>"><?php echo $nomorhal?></a>
                        <?php } ?>
                        </li>
                    <?php 
                    } ?>
                    <li class="page-item"><a class="page-link" href="?page=<?php echo $nomorhal-1?>">LAST</a></li>
                </ul>
            </nav>

        </div>
    </div>
 
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js"></script>

    </body>
                    </div>
                </main>
                <?php include 'INCLUDE/footer.php'; ?>
            </div>
        </div>
        <?php include "INCLUDE/jsscript.php"; ?>
</html>