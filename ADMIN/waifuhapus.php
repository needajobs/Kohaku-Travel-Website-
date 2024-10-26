<?php
    include "include/config.php";
    if(isset($_GET['hapus']))
    {
        $kodewaifu = $_GET["hapus"];
        mysqli_query($connection, "delete from waifu where waifuKODE='$kodewaifu'");
        echo "<script>alert('DATA BERHASIL DIHAPUS'); document.location='waifu.php'</script>";
    }
?>