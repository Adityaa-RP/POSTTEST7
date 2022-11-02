<?php
session_start();
require "koneksi.php";
?>

<script>
    if ( window.history.replaceState ) {
    window.history.replaceState( null, null, window.location.href );
}
</script>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="list.css">
    <link rel="icon" href="gambar/hotel>png">
    <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet">
    <title>Jenis Hotel</title>
</head>
<body>
<form action= "" method="POST" enctype="multipart/form-data">
            <div class="login-box container">
                <div class="logo-container">
                <a href="" class="logo" id="warna">
                <span></span>Fhiditya<span>Hotel</span><span></span>
                </a>
                </div>
                <h2>Daftar Hotel</h2>

                <button name="submit" class="btn">HOTEL POPULER</button>
                <button name="submit2" class="btn">TRENDING</button>
                <button name="submit3" class="btn">REKOMENDASI</button>
            
        </form>
        <?php
                if (isset($_POST['submit'])) {
                    header("Location: hotel_populer.php");
                }
                elseif (isset($_POST['submit2'])) {
                    header("Location: trending.php");
                }
                elseif (isset($_POST['submit3'])) {
                    header("Location: rekomendasi.php");
                }
            ?>
</body>
</html