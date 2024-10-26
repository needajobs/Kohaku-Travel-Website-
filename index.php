<!DOCTYPE html>
<?php
include "admin/INCLUDE/config.php";
$kategori = mysqli_query($connection, "select * from kategoriwisata");

$destinasi = mysqli_query($connection, "select * from destinasi");
$destinasiFOTO = mysqli_query($connection, "select * from destinasi");
$jumlahD = mysqli_num_rows($destinasi);

$hotel = mysqli_query($connection, "select * from hotel");
$hotel2 = mysqli_query($connection, "select * from hotel");
$jumlahH = mysqli_num_rows($hotel);

$oleholeh = mysqli_query($connection, "select * from oleholeh");
$jumlahO = mysqli_num_rows($oleholeh);

$travel = mysqli_query($connection, "select * from travel");

$berita = mysqli_query($connection, "select * from berita");
$beritavid = mysqli_query($connection, "select * from berita");

$restaurant = mysqli_query($connection, "select * from restaurant");
$restaurantDrop = mysqli_query($connection, "select * from restaurant");
$jumlahR = mysqli_num_rows($restaurant);

$komen = mysqli_query($connection, "select * from webuser");
$jumlahKOMEN = mysqli_num_rows($komen) + 1;

if (isset($_POST["Simpan"])) {
  $webuserKODE = "KO" . $jumlahKOMEN;
  $webuserNAMA = $_POST["namaUser"];
  $webuserEMAIL = $_POST["emailUser"];
  $webuserKOMEN = $_POST["komen"];

  mysqli_query($connection, "insert into webuser values ('$webuserKODE', '$webuserNAMA', '$webuserEMAIL', '$webuserKOMEN')");
}
?>
<html>

<head>
  <title>Kohaku Travel</title>
  <link rel="shortcut icon" href="ADMIN/images/logofav.ico">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body style="background-color: #F9F6EE;">
  <nav class="navbar navbar-expand-lg navbar-light" style="height : 120px; background-color:#000000;">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">
        <img src="ADMIN/images/logo.gif" alt="" width="170" height="164">
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#" style="color :aliceblue;">Home</a>
          </li>

          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false" style="color : aliceblue;">
              Kategori
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <?php
              if (mysqli_num_rows($kategori) > 0) {
                while ($row = mysqli_fetch_array($kategori)) { ?>
                  <li><a class="dropdown-item" href="#"><?php echo $row["kategoriNAMA"]; ?></a></li>
              <?php }
              }
              ?>
            </ul>
          </li>

          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false" style="color : aliceblue;">
              Destinasi
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <?php
              if (mysqli_num_rows($destinasi) > 0) {
                while ($row = mysqli_fetch_array($destinasi)) { ?>
                  <li><a class="dropdown-item" href="#"><?php echo $row["destinasiNAMA"]; ?></a></li>
              <?php }
              }
              ?>
            </ul>
          </li>

          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false" style="color : aliceblue;">
              Hotel
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <?php
              if (mysqli_num_rows($hotel) > 0) {
                while ($row = mysqli_fetch_array($hotel)) { ?>
                  <li><a class="dropdown-item" href="#"><?php echo $row["hotelNAMA"]; ?></a></li>
              <?php }
              }
              ?>
            </ul>
          </li>

          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false" style="color : aliceblue;">
              Restaurant
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <?php
              if (mysqli_num_rows($restaurantDrop) > 0) {
                while ($row = mysqli_fetch_array($restaurantDrop)) { ?>
                  <li><a class="dropdown-item" href="#"><?php echo $row["restaurantNAMA"]; ?></a></li>
              <?php }
              }
              ?>
            </ul>
          </li>

          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="ADMIN/dashboardadmin.php" style="color :aliceblue;">Admin</a>
          </li>

        </ul>
        <form class="d-flex">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-info" type="submit">Search</button>
        </form>
      </div>
    </div>
  </nav>

  <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="ADMIN/images/akihabara.jpg" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h5>Akihabara</h5>
          <p>Akihabara merupakan pusat perbelanjaan untuk barang elektronik, suku cadang elektronik, anime, manga, dan doujinshi.</p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="ADMIN/images/hokkaido.jpg" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h5>Hokkaido</h5>
          <p>Hokkaido merupakan Prefektur terbesar dan paling utara di Jepang.</p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="ADMIN/images/kyohome.jpg" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h5>Kyoto</h5>
          <p>Kyoto adalah kota yang terletak di Pulau Honshu, Jepang.</p>
        </div>
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>

  <div class="container-fluid" style="background-color: #000000;">
    <div class="container" style="padding: 100px 100px 0px 100px;">
      <div class="row">
        <div class="container d-flex justify-content-center">
          <img src="ADMIN/images/isKohaku.gif" class="rounded mb-4" style="width: 360px; height: 200px;" alt="...">
        </div>
      </div>
      <div class="row mb-5">
        <p style="font-weight: 500; text-align: center; color: #F9F6EE; margin-bottom: 20px;">
          Kohaku Travel merupakan sebuah agen perjalanan yang terkemuka di Dunia, menawarkan pengalaman wisata yang unik dan menyeluruh di destinasi yang memukau di seluruh Jepang. Dengan fokus pada pelayanan berkualitas dan pemahaman mendalam akan kebutuhan wisatawan, Kohaku Travel Japan telah menjadi pilihan utama bagi para pelancong yang ingin menjelajahi keindahan budaya, sejarah, dan keajaiban alam Jepang.
        </p>
        <p style="font-weight: 500; text-align: center; color: #F9F6EE; margin-bottom: 20px;">
          Kohaku Travel tidak hanya menawarkan paket wisata yang terencana dengan baik, tetapi juga menyediakan layanan khusus yang disesuaikan dengan preferensi dan keinginan setiap pelanggan. Dengan panduan lokal yang ahli dan pengetahuan mendalam tentang destinasi, Kohaku Travel memastikan pengalaman yang tak terlupakan bagi setiap traveller.
        </p>
        <p style="font-weight: 500; text-align: center; color: #F9F6EE;">
          Selain itu, Kohaku Travel juga menawarkan beragam layanan, mulai dari pengaturan akomodasi yang nyaman hingga perjalanan keliling yang dirancang khusus, serta akses ke acara budaya lokal yang autentik. Misi utama mereka adalah memberikan pengalaman perjalanan yang memuaskan dan memberi pelanggan kesempatan untuk mengeksplorasi pesona Jepang dengan kenyamanan dan kepercayaan diri.
        </p>
      </div>
    </div>
    <div class="container rounded-3" style="padding:0px 50px 50px 50px; background-color:#000000;">
    <div class="container d-flex justify-content-center">
        <img src="ADMIN/images/fotowisata.gif" class="rounded" style="width: 400px; height: 300px;" alt="...">
      </div>
      <div class="container" style="margin-left: 40px;">
      
          <?php
          $count = 0;
          if (mysqli_num_rows($destinasiFOTO) > 0) {
              while ($row = mysqli_fetch_array($destinasiFOTO)) {
                  if ($count % 3 == 0) {
                      echo '<div class="row mb-5">';
                  }
                  ?>
                  <div class="col-sm-4 d-flex justify-content-center">
                      <a href="#" style="text-decoration: none; color: #000000;">
                          <div class="row g-3">
                              <img src="ADMIN/images/<?php echo $row['destinasiPIC']; ?>" class="img-fluid d-flex" style="border-radius: 10px; width: 320px; height: 190px;" alt="...">
                              <p style="font-weight:600; text-align:center; color:#F9F6EE; width: 320px;"> <?php echo $row['destinasiNAMA'];?> </p>
                          </div>
                      </a>
                  </div>
                  <?php
                  $count++;
                  if ($count % 3 == 0) {
                      echo '</div>';
                  }
              }
              if ($count % 3 != 0) {
                  echo '</div>';
              }
          }
          ?>
      </div>
    </div>
  </div>

  <?php
  $jumlahtampilan = 4;
  $halaman = (isset($_GET['page'])) ? $_GET['page'] : 1;
  $mulaitampilan = ($halaman - 1) * $jumlahtampilan;

  if (isset($_POST["kirim"])) {
    $search = $_POST["search"];
    $queryD = mysqli_query($connection, "select * from destinasi, kategoriwisata where destinasi.kategoriKODE = kategoriwisata.kategoriKODE AND destinasiNAMA LIKE '%$search%' limit $mulaitampilan, $jumlahtampilan");
    $jD = mysqli_num_rows($queryD);
  } else {
    $queryD = mysqli_query($connection, "select * from destinasi, kategoriwisata where destinasi.kategoriKODE = kategoriwisata.kategoriKODE limit $mulaitampilan, $jumlahtampilan");
    $jD = mysqli_num_rows($queryD);
  }
  ?>

  <div class="container-fluid">
    <div class="container mt-5 mb-5" style="padding: 50px;">
      <h2 class="mb-5" style="text-align: center;">Destinasi Wisata</h2>
      <div class="row">

        <div class="col-sm-8">
          <?php
          if (mysqli_num_rows($queryD) > 0) {
            while ($row = mysqli_fetch_array($queryD)) { ?>
              <div class="card mb-5">
                <a href="#" style="text-decoration: none; color: #000000;">
                  <div class="row g-2">
                    <div class="col-md-6">
                      <img src="ADMIN/images/<?php echo $row['destinasiPIC']; ?>" class="img-fluid rounded-start" style="width: 650px; height: 250px;" alt="...">
                    </div>
                    <div class="col-md-6" style="padding: 10px;">
                      <div class="card-body">
                        <h5 class="card-title"><?php echo $row['destinasiNAMA']; ?></h5>
                        <p class="card-text" style="overflow: hidden"><?php echo substr($row['destinasiKET'], 0, 120), " ..."; ?></p>
                      </div>
                    </div>
                  </div>
                </a>
              </div>
          <?php
            }
          }
          ?>
        </div>

        <div class="col-sm-4">
          <div class="container" style="background-color:#000000; border-radius: 5px; padding: 30px; height:250px;">
            <form class="d-flex" method="POST">
              <input class="form-control me-2" type="text" name="search" class="form-control" id="search" value="<?php if (isset($_POST["search"])) { echo $_POST["search"];} ?>" placeholder="Cari nama destinasi" ;>
              <input type="submit" name="kirim" class="btn btn-info" value="Search">
            </form>
            <div class="row mt-3">
              <p style="color: #F9F6EE; font-weight: 500;">> Result Destinasi : <?php echo $jD ?> / <?php echo $jumlahD ?></p>
            </div>
          </div>
        </div>
      </div>

      <?php
      $queryD = mysqli_query($connection, "select * from destinasi");
      $jumlahrecord = mysqli_num_rows($queryD);
      $jumlahpage = ceil($jumlahrecord / $jumlahtampilan);
      ?>

      <nav class="mt-3" aria-label="Page navigation example">
        <ul class="pagination">
          <li class="page-item"><a class="page-link" href="?page=<?php $nomorhal = 1; echo $nomorhal ?>" style="color:#000000; font-weight:bold;"><</a>
          </li>
          <?php for ($nomorhal = 1; $nomorhal <= $jumlahpage; $nomorhal++) { ?>
            <li class="page-item">
              <?php
              if ($nomorhal != $halaman) { ?>
                <a class="page-link" href="?page=<?php echo $nomorhal ?>" style="color:#000000; font-weight:bold;"><?php echo $nomorhal ?></a>
              <?php } else { ?>
                <a class="page-link" href="?page=<?php echo $nomorhal ?>" style="color:#F9F6EE; background-color:#000000; font-weight:bold;"><?php echo $nomorhal ?></a>
              <?php } ?>
            </li>
          <?php
          } ?>
          <li class="page-item"><a class="page-link" href="?page=<?php echo $nomorhal - 1 ?>" style="color:#000000; font-weight:bold;">></a></li>
        </ul>
      </nav>

    </div>
  </div>

  <div class="container-fluid" style="background-color:#000000;">

    <div class="container d-flex justify-content-center">
      <img src="ADMIN/images/whatkohaku.gif" class="rounded" style="width: 400px; height: 250px;" alt="...">
    </div>

    <div class="container d-flex justify-content-center" style="padding-bottom: 20px;">
      <a href="#">
        <img src="ADMIN/images/pilwisata.png" class="rounded" style="margin-right: 20px; width: 200px; height: 350px;" alt="...">
      </a>
      <a href="#">
        <img src="ADMIN/images/pilhotel.png" class="rounded" style="width: 200px; height: 350px;" alt="...">
      </a>
      <a href="#">
        <img src="ADMIN/images/pilresto.png" class="rounded" style="margin-left: 20px; width: 200px; height: 350px;" alt="...">
      </a>
    </div>

    <div class="container d-flex justify-content-center" style="padding-bottom: 70px;">
      <p style="font-weight: 500; color:#F9F6EE; margin-right: 90px;">Pilihan Destinasi : <?php echo $jumlahD; ?></p>
      <p style="font-weight: 500; color:#F9F6EE; 500;">Pilihan Hotel : <?php echo $jumlahH; ?></p>
      <p style="font-weight: 500; color:#F9F6EE; 500; margin-left: 90px;">Pilihan Restaurant : <?php echo $jumlahR; ?></p>
    </div>
  </div>

  <div class="container-fluid">
    <div class="container">
      <div class="row mt-5">
        <div class="col-sm-9">
          <h2>Latest News</h2>
          <br>

          <?php
          if (mysqli_num_rows($berita) > 0) {
            while ($row = mysqli_fetch_array($berita)) { ?>
              <div class="d-flex mb-5">
                <div class="d-flex-shrink-0">
                  <img style="width: 500px; height: 290px; margin-right: 40px;" src="ADMIN/images/<?php echo $row['beritaPIC'] ?>">
                </div>
                <div class="flex-grow-1">
                  <h5><?php echo $row["beritaNAMA"], " - "; ?><small class="text_muted"><i><?php echo $row["beritaTGL"]; ?></i></small></h5>
                  <p><?php echo substr($row["beritaKET"], 0, 370), " ..."; ?>
                  <p>
                    <a href="#" class="btn btn-secondary">Read More</a>
                </div>
              </div>
          <?php }
          }
          ?>
        </div>

        <div class="col-sm-3">
          <h2>Videos</h2>
          <br>
          <?php
          if (mysqli_num_rows($beritavid) > 0) {
            while ($row = mysqli_fetch_array($beritavid)) { ?>
              <div class="card mb-5" style="width: 20rem; height: 295px;">
                <iframe width="100%" height="100%" src="<?php echo $row['beritaVID']; ?>" frameborder="0" allowfullscreen></iframe>
                <div class="card-body">
                  <p class="card-text" style="font-weight : 500;"><i>Source : Youtube</i></p>
                </div>
              </div>
          <?php }
          }
          ?>
        </div>

      </div>
    </div>

    <?php
    $jumlahtampilan = 4;
    $halaman = (isset($_GET['page'])) ? $_GET['page'] : 1;
    $mulaitampilan = ($halaman - 1) * $jumlahtampilan;

    if (isset($_POST["kirim"])) {
      $search = $_POST["search"];
      $queryH = mysqli_query($connection, "select * from hotel, destinasi where hotel.destinasiKODE = destinasi.destinasiKODE AND hotelNAMA like '%" . $search . "%' limit $mulaitampilan, $jumlahtampilan");
      $jH = mysqli_num_rows($queryH);
    } else {
      $queryH = mysqli_query($connection, "select * from hotel, destinasi where hotel.destinasiKODE = destinasi.destinasiKODE limit $mulaitampilan, $jumlahtampilan");
      $jH = mysqli_num_rows($queryH);
    }
    ?>

    <div class="container rounded-3" style="padding:0px 50px 50px 50px; background-color:#000000;">
      <div class="container d-flex justify-content-center">
        <img src="ADMIN/images/hoteltitle.gif" class="rounded" style="width: 400px; height: 250px;" alt="...">
      </div>
      <div class="container d-flex justify-content-center">
        <div class="row">

          <div class="col-sm-8">
            <?php
            if (mysqli_num_rows($queryH) > 0) {
              while ($row = mysqli_fetch_array($queryH)) { ?>
                <div class="card mb-5" style="background-color:#F9F6EE;">
                  <a href="#" style="text-decoration: none; color: #000000;">
                    <div class="row g-2">
                      <div class="col-md-6">
                        <img src="ADMIN/images/<?php echo $row['hotelPIC']; ?>" class="img-fluid rounded-start" style="width: 650px; height: 250px;" alt="...">
                      </div>
                      <div class="col-md-6" style="padding: 10px;">
                        <div class="card-body">
                          <h5 class="card-title"><?php echo $row['hotelNAMA']; ?></h5>
                          <p class="card-text" style="overflow: hidden"><?php echo substr($row['hotelKET'], 0, 120), " ..."; ?></p>
                        </div>
                      </div>
                    </div>
                  </a>
                </div>
            <?php
              }
            }
            ?>
          </div>

          <div class="col-sm-4">
            <div class="container" style="background-color:#F9F6EE; border-radius: 5px; padding: 30px; height:250px;">
              <form class="d-flex" method="POST">
                <input class="form-control me-2" type="text" name="search" class="form-control" id="search" value="<?php if (isset($_POST["search"])) {echo $_POST["search"];} ?>" placeholder="Cari nama destinasi" ;>
                <input type="submit" name="kirim" class="btn btn-info" value="Search">
              </form>
              <div class="row mt-3">
                <p style="color:#000000; font-weight: 500;">> Result Hotel : <?php echo $jH ?> / <?php echo $jumlahH ?></p>
              </div>
            </div>
          </div>

        </div>
      </div>

      <?php
      $queryH = mysqli_query($connection, "select * from hotel");
      $jumlahrecord = mysqli_num_rows($queryH);
      $jumlahpage = ceil($jumlahrecord / $jumlahtampilan);
      ?>

      <nav class="mt-3" aria-label="Page navigation example" style="padding-left:10px;">
        <ul class="pagination">
          <li class="page-item"><a class="page-link" href="?page=<?php $nomorhal = 1; echo $nomorhal ?>" style="color:#000000; font-weight:bold;"><</a>
          <?php for ($nomorhal = 1; $nomorhal <= $jumlahpage; $nomorhal++) { ?>
            <li class="page-item">
              <?php
              if ($nomorhal != $halaman) { ?>
                <a class="page-link" href="?page=<?php echo $nomorhal ?>" style="color:#000000; font-weight:bold;"><?php echo $nomorhal ?></a>
              <?php } else { ?>
                <a class="page-link" href="?page=<?php echo $nomorhal ?>" style="color:#F9F6EE; background-color:#000000; font-weight:bold;"><?php echo $nomorhal ?></a>
              <?php } ?>
            </li>
          <?php
          } ?>
          <li class="page-item"><a class="page-link" href="?page=<?php echo $nomorhal - 1 ?>" style="color:#000000; font-weight:bold;">></a></li>
        </ul>
      </nav>

    </div>

    <div class="container-fluid">
      <div id="carouselMultiItemExample2" class="carousel slide carousel-dark text-center" data-mdb-ride="carousel">
        <h2 class="mt-5" style="text-align: center;">Travel</h2>
        <!-- Inner -->
        <div class="carousel-inner py-4">
          <div class="carousel-inner py-4">
            <!-- Single item -->
            <?php
            if (mysqli_num_rows($travel) > 0) {
              $counter4 = 0;
              while ($row = mysqli_fetch_array($travel)) {
                if ($counter4 % 3 == 0) {
                  echo '<div class="carousel-item';
                  echo $counter4 == 0 ? ' active' : '';
                  echo '"><div class="container"><div class="row">';
                }
            ?>
                <div class="col-lg-4">
                  <a href="#" style="text-decoration: none; color:#000000;">
                    <div class="card" style="width:100%;">
                      <img src="ADMIN/images/<?php echo $row["travelPIC"] ?>" class="card-img-top" alt="No Image">
                      <div class="card-body">
                        <h5 class="card-title"><?php echo $row["travelNAMA"] ?></h5>
                        <p class="card-text">
                          <?php echo $row["travelKET"] ?>
                        </p>
                      </div>
                    </div>
                  </a>
                </div>
            <?php
                $counter4++;
                if ($counter4 % 3 == 0) {
                  echo '</div></div></div>';
                }
              }

              if ($counter4 % 3 != 0) {
                echo '</div></div></div>';
              }
            }
            ?>
          </div>
        </div>
        <!-- Inner -->
        
        <!-- Controls -->
        <div class="d-flex justify-content-center mb-4">
          <button class="carousel-control-prev position-relative" type="button" data-bs-target="#carouselMultiItemExample2" data-bs-slide="prev" style="padding-bottom: 20px;">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next position-relative" type="button" data-bs-target="#carouselMultiItemExample2" data-bs-slide="next" style="padding-bottom: 20px;">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div>
      </div>
    </div>

    <?php
    $jumlahtampilan = 4;
    $halaman = (isset($_GET['page'])) ? $_GET['page'] : 1;
    $mulaitampilan = ($halaman - 1) * $jumlahtampilan;

    if (isset($_POST["kirim"])) {
      $search = $_POST["search"];
      $queryR = mysqli_query($connection, "select * from restaurant, destinasi where restaurant.destinasiKODE = destinasi.destinasiKODE AND restaurantNAMA like '%" . $search . "%' limit $mulaitampilan, $jumlahtampilan");
      $jR = mysqli_num_rows($queryR);
    } else {
      $queryR = mysqli_query($connection, "select * from restaurant, destinasi where restaurant.destinasiKODE = destinasi.destinasiKODE limit $mulaitampilan, $jumlahtampilan");
      $jR = mysqli_num_rows($queryR);
    }
    ?>

    <div class="container rounded-3" style="padding:0px 50px 50px 50px; background-color:#000000;">
      <div class="container d-flex justify-content-center">
        <img src="ADMIN/images/restorantitle.gif" class="rounded" style="width: 400px; height: 250px;" alt="...">
      </div>
      <div class="container d-flex justify-content-center">
        <div class="row">
          <div class="col-sm-8">
            <?php
            if (mysqli_num_rows($queryR) > 0) {
              while ($row = mysqli_fetch_array($queryR)) { ?>
                <div class="card mb-5" style="background-color:#F9F6EE;">
                  <a href="#" style="text-decoration: none; color: #000000;">
                    <div class="row g-2">
                      <div class="col-md-6">
                        <img src="ADMIN/images/<?php echo $row['restaurantPIC']; ?>" class="img-fluid rounded-start" style="width: 650px; height: 250px;" alt="...">
                      </div>
                      <div class="col-md-6" style="padding: 10px;">
                        <div class="card-body">
                          <h5 class="card-title"><?php echo $row['restaurantNAMA']; ?></h5>
                          <p class="card-text" style="overflow: hidden"><?php echo substr($row['restaurantKET'], 0, 120), " ..."; ?></p>
                        </div>
                      </div>
                    </div>
                  </a>
                </div>
            <?php
              }
            }
            ?>
          </div>

          <div class="col-sm-4">
            <div class="container" style="background-color:#F9F6EE; border-radius: 5px; padding: 30px; height:250px;">
              <form class="d-flex" method="POST">
                <input class="form-control me-2" type="text" name="search" class="form-control" id="search" value="<?php if (isset($_POST["search"])) {echo $_POST["search"];} ?>" placeholder="Cari nama destinasi" ;>
                <input type="submit" name="kirim" class="btn btn-info" value="Search">
              </form>
              <div class="row mt-3">
                <p style="color:#000000; font-weight: 500;">> Result Restaurant : <?php echo $jR ?> / <?php echo $jumlahR ?></p>
              </div>
            </div>
          </div>

        </div>
      </div>
      <?php
      $queryR = mysqli_query($connection, "select * from restaurant");
      $jumlahrecord = mysqli_num_rows($queryR);
      $jumlahpage = ceil($jumlahrecord / $jumlahtampilan);
      ?>

      <nav class="mt-3" aria-label="Page navigation example" style="padding-left:10px;">
        <ul class="pagination">
          <li class="page-item"><a class="page-link" href="?page=<?php $nomorhal = 1; echo $nomorhal ?>" style="color:#000000; font-weight:bold;"><</a>
          <?php for ($nomorhal = 1; $nomorhal <= $jumlahpage; $nomorhal++) { ?>
            <li class="page-item">
              <?php
              if ($nomorhal != $halaman) { ?>
                <a class="page-link" href="?page=<?php echo $nomorhal ?>" style="color:#000000; font-weight:bold;"><?php echo $nomorhal ?></a>
              <?php } else { ?>
                <a class="page-link" href="?page=<?php echo $nomorhal ?>" style="color:#F9F6EE; background-color:#000000; font-weight:bold;"><?php echo $nomorhal ?></a>
              <?php } ?>
            </li>
          <?php
          } ?>
          <li class="page-item"><a class="page-link" href="?page=<?php echo $nomorhal - 1 ?>" style="color:#000000; font-weight:bold;">></a></li>
        </ul>
      </nav>
    </div>

    <div class="container-fluid">
      <div id="carouselMultiItemExample" class="carousel slide carousel-dark text-center" data-mdb-ride="carousel">
        <h2 class="mt-5" style="text-align: center;">Oleh - Oleh</h2>
        <!-- Inner -->
        <div class="carousel-inner py-4">
          <div class="carousel-inner py-4">
            <!-- Single item -->
            <?php
            if (mysqli_num_rows($oleholeh) > 0) {
              $counter3 = 0;
              while ($row = mysqli_fetch_array($oleholeh)) {
                if ($counter3 % 3 == 0) {
                  echo '<div class="carousel-item';
                  echo $counter3 == 0 ? ' active' : '';
                  echo '"><div class="container"><div class="row">';
                }
            ?>
                <div class="col-lg-4">
                  <a href="#" style="text-decoration: none; color:#000000;">
                    <div class="card" style="width:100%;">
                      <img src="ADMIN/images/<?php echo $row["olehPIC"] ?>" class="card-img-top" alt="No Image">
                      <div class="card-body">
                        <h5 class="card-title"><?php echo $row["olehNAMA"] ?></h5>
                        <p class="card-text">
                          <?php echo substr($row["olehKet"], 0, 110), " ..."; ?>
                        </p>
                      </div>
                    </div>
                  </a>
                </div>
            <?php
                $counter3++;
                if ($counter3 % 3 == 0) {
                  echo '</div></div></div>';
                }
              }

              if ($counter3 % 3 != 0) {
                echo '</div></div></div>';
              }
            }
            ?>
          </div>
        </div>
        <!-- Inner -->
        <!-- Controls -->
        <div class="d-flex justify-content-center mb-4">
          <button class="carousel-control-prev position-relative" type="button" data-bs-target="#carouselMultiItemExample" data-bs-slide="prev" style="padding-bottom: 20px;">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next position-relative" type="button" data-bs-target="#carouselMultiItemExample" data-bs-slide="next" style="padding-bottom: 20px;">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div>
      </div>
    </div>

    <div class="container-fluid" style="background-color: #e5e4e2; padding-bottom:40px;">
      <div class="container d-flex justify-content-center" style="padding: 70px;">
        <h5 style="font-size: 40px;">What The Author Said?</h5>
      </div>
      <div class="container d-flex justify-content-center mb-5" style="padding: 20px;">
        <img src="ADMIN/images/author.JPG" class="img-fluid rounded-5" style="border: solid #000000 2px; width: 250px; height: 210px; margin-right: 50px; border-radius: 150px;" alt="...">
        <div class="container" style="padding: 20px;">
          <p style="font-size: 30px;">Nicolas</p>
          <p style="font-size: 15px;">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Reiciendis magnam blanditiis quis sequi placeat quas, sapiente, nulla asperiores molestias temporibus officia aut iusto cumque molestiae laudantium cum maxime sit ad dolor tenetur in exercitationem excepturi possimus pariatur. Vel nihil, error eius atque eum delectus reiciendis. Facilis iusto maxime inventore ullam.</p>
        </div>
      </div>
    </div>

    <div class="container-fluid" style="background-color: #a9a9a9;">
      <div class="container" style="padding: 70px;">
        <div class="row">
          <div class="col-sm-4">
            <h4>Berikan Saran Untuk Kohaku!!</h4>
            <br>
            <form method="POST">
              <div class="mb-3 row">
                <label for="namaUser" class="col-sm-4 col-form-label">Nama :</label>
                <div class="col-sm-8">
                  <input type="text" class="form-control" name="namaUser" id="namaUser">
                </div>
              </div>

              <div class="mb-3 row">
                <label for="emailUser" class="col-sm-4 col-form-label">Email :</label>
                <div class="col-sm-8">
                  <input type="text" class="form-control" name="emailUser" id="emailUser">
                </div>
              </div>

              <div class="mb-3 row">
                <label for="komen" class="col-sm-4 col-form-label">Komentar :</label>
                <div class="col-sm-8">
                  <textarea class="form-control" id="komen" rows="3" name="komen"></textarea>
                </div>
              </div>

              <div class="form-group row">
                <div class="col-sm-4"></div>
                <div class="col-sm-8">
                  <input type="submit" class="btn btn-dark" value="Simpan" name="Simpan">
                  <button type="reset" class="btn btn-info">Batal</button>
                </div>
              </div>
            </form>
          </div>
          <div class="col-sm-8">
            <table class="table">
              <thead>
                <tr>
                  <th scope="col">No.</th>
                  <th scope="col">Nama</th>
                  <th scope="col">Email</th>
                  <th scope="col">Komentar</th>
                </tr>
              </thead>
              <tbody>
                <?php
                $query = mysqli_query($connection, "select webuser.* from webuser");
                $nomor = 1;
                while ($row = mysqli_fetch_array($query)) {
                ?>
                  <tr>
                    <td><?php echo $nomor ?></td>
                    <td><?php echo $row['webuserNAMA']; ?></td>
                    <td><?php echo $row['webuserEMAIL']; ?></td>
                    <td><?php echo $row['webuserKOMEN']; ?></td>
                  </tr>
                  <?php $nomor++; ?>
                <?php } ?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>

    <div class="container-fluid" style="background-color: #696969;">
      <div class="container" style="padding: 70px;">
        <div class="row">
          <div class="col-sm-6">
            <div class="mb-5 row">
              <img src="ADMIN/images/location.png" style="width: 70px; height: 50px;">
              <div class="col-sm-8" style="padding: 10px;">
                <p style="font-weight: 500;">Jalan Jepang Kohaku 22, Sleman, Jawa Barat</p>
              </div>
            </div>

            <div class="mb-5 row">
              <img src="ADMIN/images/phone.png" style="width: 70px; height: 50px;">
              <div class="col-sm-8" style="padding: 10px;">
                <p style="font-weight: 500;">+62 895 6152 63656</p>
              </div>
            </div>

            <div class="mb-5 row">
              <img src="ADMIN/images/email.png" style="width: 70px; height: 30px;">
              <div class="col-sm-8">
                <p style="font-weight: 500;">nicolasnsa28@gmail.com</p>
              </div>
            </div>
          </div>
          <div class="col-sm-6">
            <p style="font-size: 30px; font-weight: 700;">About Kohaku</p>
            <p style="font-size: 15px; font-weight: 500;">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Reiciendis magnam blanditiis quis sequi placeat quas, sapiente, nulla asperiores molestias temporibus officia aut iusto cumque molestiae laudantium cum maxime sit ad dolor tenetur in exercitationem excepturi possimus pariatur. Vel nihil, error eius atque eum delectus reiciendis. Facilis iusto maxime inventore ullam.</p>
            <a class="mt-5" href="#" style="text-decoration: none;">
              <img src="ADMIN/images/facebook.png" style="width: 40px; height: 40px; margin-right: 10px;">
            </a>
            <a class="mt-5" href="#" style="text-decoration: none;">
              <img src="ADMIN/images/twitter.png" style="width: 40px; height: 40px;">
            </a>
            <a class="mt-5" href="#" style="text-decoration: none;">
              <img src="ADMIN/images/instagram.png" style="width: 40px; height: 40px; margin-left: 10px;">
            </a>
          </div>
        </div>
      </div>
    </div>

</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</html>