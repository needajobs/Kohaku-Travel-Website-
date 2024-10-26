<?php
    include "config.php";
    $sqlD = mysqli_query($connection, "select * from destinasi");
    $jumlahD = mysqli_num_rows($sqlD);

    $sqlK = mysqli_query($connection, "select * from kategoriwisata");
    $jumlahK = mysqli_num_rows($sqlK);

    $sqlH = mysqli_query($connection, "select * from hotel");
    $jumlahH = mysqli_num_rows($sqlH);

    $sqlR = mysqli_query($connection, "select * from restaurant");
    $jumlahR = mysqli_num_rows($sqlR);

    $sqlO = mysqli_query($connection, "select * from oleholeh");
    $jumlahO = mysqli_num_rows($sqlO);

    $sqlT = mysqli_query($connection, "select * from travel");
    $jumlahT = mysqli_num_rows($sqlT);

    $sqlW = mysqli_query($connection, "select * from waifu");
    $jumlahW = mysqli_num_rows($sqlW);

    $sqlB = mysqli_query($connection, "select * from berita");
    $jumlahB = mysqli_num_rows($sqlB);
?>

<div class="row">
    <div class="col-xl-3 col-md-6">
        <div class="card bg-primary text-white mb-4">
        <div class="card-body">Destinasi Wisata</div>
            <div class="card-body">Jumlah Destinasi Wisata : <?php echo $jumlahD?></div>
            <div class="card-footer d-flex align-items-center justify-content-between">
                <a class="small text-white stretched-link" href="daftardestinasi.php">View Details</a>
                <div class="small text-white"><i class="fas fa-angle-right"></i></div>
            </div>
        </div>
    </div>

    <div class="col-xl-3 col-md-6">
        <div class="card bg-warning text-white mb-4">
            <div class="card-body">Kategori Wisata</div>
            <div class="card-body">Jumlah Kategori Wisata : <?php echo $jumlahK?></div>
            <div class="card-footer d-flex align-items-center justify-content-between">
                <a class="small text-white stretched-link" href="daftarkategori.php">View Details</a>
                <div class="small text-white"><i class="fas fa-angle-right"></i></div>
            </div>
        </div>
    </div>

    <div class="col-xl-3 col-md-6">
        <div class="card bg-success text-white mb-4">
            <div class="card-body">Hotel</div>
            <div class="card-body">Jumlah Hotel : <?php echo $jumlahH?></div>
            <div class="card-footer d-flex align-items-center justify-content-between">
                <a class="small text-white stretched-link" href="daftarhotel.php">View Details</a>
                <div class="small text-white"><i class="fas fa-angle-right"></i></div>
            </div>
        </div>
    </div>

    <div class="col-xl-3 col-md-6">
        <div class="card bg-danger text-white mb-4">
            <div class="card-body">Restaurant</div>
            <div class="card-body">Jumlah Restaurant : <?php echo $jumlahR?></div>
            <div class="card-footer d-flex align-items-center justify-content-between">
                <a class="small text-white stretched-link" href="daftarrestaurant.php">View Details</a>
                <div class="small text-white"><i class="fas fa-angle-right"></i></div>
            </div>
        </div>
    </div>

    <div class="col-xl-3 col-md-6">
        <div class="card bg-success text-white mb-4">
            <div class="card-body">Oleh - Oleh</div>
            <div class="card-body">Jumlah Oleh - Oleh : <?php echo $jumlahO?></div>
            <div class="card-footer d-flex align-items-center justify-content-between">
                <a class="small text-white stretched-link" href="daftaroleh.php">View Details</a>
                <div class="small text-white"><i class="fas fa-angle-right"></i></div>
            </div>
        </div>
    </div>

    <div class="col-xl-3 col-md-6">
        <div class="card bg-danger text-white mb-4">
            <div class="card-body">Travel</div>
            <div class="card-body">Jumlah Travel : <?php echo $jumlahT?></div>
            <div class="card-footer d-flex align-items-center justify-content-between">
                <a class="small text-white stretched-link" href="daftartravel.php">View Details</a>
                <div class="small text-white"><i class="fas fa-angle-right"></i></div>
            </div>
        </div>
    </div>

    <div class="col-xl-3 col-md-6">
        <div class="card bg-primary text-white mb-4">
        <div class="card-body">Waifu</div>
            <div class="card-body">Jumlah Waifu : <?php echo $jumlahW?></div>
            <div class="card-footer d-flex align-items-center justify-content-between">
                <a class="small text-white stretched-link" href="daftarwaifu.php">View Details</a>
                <div class="small text-white"><i class="fas fa-angle-right"></i></div>
            </div>
        </div>
    </div>

    <div class="col-xl-3 col-md-6">
        <div class="card bg-warning text-white mb-4">
            <div class="card-body">Berita</div>
            <div class="card-body">Jumlah Berita : <?php echo $jumlahB?></div>
            <div class="card-footer d-flex align-items-center justify-content-between">
                <a class="small text-white stretched-link" href="daftarberita.php">View Details</a>
                <div class="small text-white"><i class="fas fa-angle-right"></i></div>
            </div>
        </div>
    </div>
</div>