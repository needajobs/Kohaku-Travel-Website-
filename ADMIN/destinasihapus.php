<?php
    include "include/config.php";
    if(isset($_GET['hapus']))
    {
        $kodedestinasi = $_GET["hapus"];
        mysqli_query($connection, "delete from destinasi where destinasiKODE='$kodedestinasi'");
        echo "<script>alert('DATA BERHASIL DIHAPUS'); document.location='destinasi.php'</script>";
    }
?>