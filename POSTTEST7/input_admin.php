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
    <link rel="stylesheet" type="text/css" href="style3.css">
    <link rel="icon" href="gambar/hotel.png">
    <title>Admin Mode</title>
</head>
<body>

            <form action= "" method="POST" enctype="multipart/form-data">
            <div class="login-box container">
                <div class="logo-container">
                <a href="" class="logo" id="warna">
                <span></span>Fhiditya<span>Hotel</span><span></span>
                </a>
                </div>
                <h2>Tambah Hotel</h2>

                <div class="textbox">
                    <i class='bx bx-user'></i>
                    <span >Nama Hotel</span>
                    <select name="list" required="" >
                        <option value="populer_sekarang">populer sekarang</option>
                        <option value="trending">treding</option>
                        <option value="rekomendasi">rekomendasi</option>
                    </select>
                </div>   
            
                <div class="textbox">
                    <i class='bx bx-user'></i>
                    <span >Nama Hotel</span>
                    <input type="text" placeholder="isi nama pemilik hotel" name="name" value="" required>
                </div>

                <div class="textbox">
                    <i class='bx bx-lock-alt'></i>
                    <span>Tipe Hotel</span>
                    <select name="tipe" required="">
                        <option></option>
                        <option value="City Hotel">City Hotel</option>
                        <option value="Motel (Motor Hotel)">Motel (Motor Hotel)</option>
                        <option value="Resort Hotel">Resort Hotel</option>
                        <option value="Residential Hotel">Residential Hotel</option>
                        <option value="Downtown Hotel">Downtown Hotel</option>
                        <option value="Hotel apung">Hotel apung</option>
                        <option value="Hotel kapsul">Hotel kapsul</option>
                        <option value="Hotel Bandara atau Transit Hotel">Hotel Bandara atau Transit Hotel</option>
                        <option value="Hotel melati atau Losmen (logement)">Hotel melati atau Losmen (logement)</option>
                        <option value="Full American Plan (FAP)">Full American Plan (FAP)</option>
                        <option value="Modified American Plan (MAP)">Modified American Plan (MAP)</option>
                        <option value="Continental Plan (CP)">Continental Plan (CP)</option>
                        <option value="Business Hotel">Business Hotel</option>
                        <option value="Casino Hotel">Casino Hotel</option>
                        <option value="Pilgrim Hote">Pilgrim Hotel</option>
                        <option value="Cure Hotel">Cure Hotel</option>
                        <option value="Hotel Bintang Satu">Hotel Bintang Satu</option>
                        <option value="Hotel Bintang Dua">Hotel Bintang Dua</option>
                        <option value="Hotel Bintang Tiga">Hotel Bintang Tiga</option>
                        <option value="Hotel Bintang Empat">Hotel Bintang Empat</option>
                        <option value="Hotel Bintang Lima">Hotel Bintang Lima</option>
                    </select>
                </div>
                
                <div class="textbox">
                    <i class='bx bx-user'></i>
                    <span >Nama File</span>
                    <input type="text" placeholder="file name" name="nama_foto" value="" required>
                </div>

                <div class="textbox">
                    <i class='bx bx-user'></i>
                    <span>Foto Hotel</span>
                    <input type="file" id="file" name="foto" required>
                </div>

                <div class="textbox">
                    <i class='bx bx-user'></i>
                    <span >Waktu Upload</span>
                    <input type="datetime-local" name="waktu" value="" required>
                </div>

                <button name="submit" class="btn">Tambahkan</button>
            
        </form>

        <?php
            if (isset($_POST['submit'])) {
                $list = $_POST['list'];
                $title = $_POST['title'];
                $tipe = $_POST['tipe'];
                $waktu = $_POST['waktu'];
                $nama = $_POST['nama_foto'];
                $foto = $_FILES['foto']['name'];
                $x = explode('.', $foto);
                $extensi = strtolower(end($x));
                $gambar_baru = "$nama.$extensi";
                $temp = $_FILES['foto']['tmp_name'];
                if(move_uploaded_file($temp, 'gambar/' . $list . '/' .$gambar_baru)){
                    $query = mysqli_query($conn, "INSERT INTO `$list` VALUES (NULL,'$title','$tipe','$gambar_baru', '$waktu')");
                    if($query){
                        echo "<script>alert('berhasil menambahkan daftar hotel')
                                document.location.href = 'admin.php';
                        </script>";
                    }
                    else{
                        echo error_log($query);
                    }
                }
                else{
                    echo "<script>alert('terdapat kesalahan ketika menambahkan daftar hotel')</script>";
                }
            }
        ?> 
        <br>Batalkan penambahan Hotel? <a  class="daftar" href="admin.php" style="text-decoration:none">Kembali</a>
    </div>



</body>
</html>