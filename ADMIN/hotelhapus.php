<?php
    include "include/config.php";
    if(isset($_GET['hapus']))
    {
        $kodehotel = $_GET["hapus"];
        mysqli_query($connection, "delete from hotel where hotelKODE='$kodehotel'");
        echo "<script>alert('DATA BERHASIL DIHAPUS'); document.location='inputhotel.php'</script>";
    }
?>