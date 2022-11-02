<!DOCTYPE html>
<html lang="en">
    <?php
    session_start();
    // if ($_SESSION['priv'] != 'user'){
    //     header('Location: proses_login.php');
    // }
    // session_destroy();
    // header('proses_login.php');
    // $_SESSION['username'] = "riannscarlezt";
    require "koneksi.php";
    ?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        FhidityaaHotel
    </title>
    <link rel="stylesheet" href="style.css" type="text/css">
    <link rel="icon" href="gambar/hotel.png">
    <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet">
</head>
<body>
    <header>
        <div class="nav container">
            <a href="" class="logo" id="warna">
            <span></span>Fhidityaa<span>Hotel</span><span></span>
            </a>
            <form action="searching.php" method="GET">
                <div class="search-box">
                    <input type="search" name="search" id="search-input" placeholder="Cari Hotel">
                    <button type="submit" name="cari"> <i class="bx bx-search" ></i></button>
                </div>
            </form>
            <?php
                if (isset($_GET['cari'])){
                    $keyword = $_GET['search'];
                    $result = mysqli_query($conn, "SELECT * FROM all_hotel WHERE nama LIKE '%$keyword%' or tipe LIKE '%$keyword%'");
                } else {
                    $result = mysqli_query($conn, "SELECT * FROM all_hotel");
                    
                }
                $pencarian = [];
                while ($row = mysqli_fetch_array($result)) {
                    $pencarian[] = $row;
                }
            ?>
            <a href="#about-me" class="user">
                <img src="gambar/pohon-icon.png" alt="" class="user-img">
            </a>
            <?php
                if ($_SESSION['priv'] == 'user') {
                echo (    
                '
                <div class="navbar">
                <a href="user.php" class="nav-link">
                    <i class="bx bx-home"></i>
                    <span class="nav-link-title">Home</span>
                </a>
                <a href="#based" class="nav-link">
                <i class="bx bx-Like"></i>
                    <span class="nav-link-title">Rekomendasi</span>
                </a>
                <a href="#populer" class="nav-link">
                    <i class="bx bxs-world"></i>
                    <span class="nav-link-title">Populer</span>
                </a>
                <a href="#trending" class="nav-link">
                    <i class="bx bxs-trending-up"></i>
                    <span class="nav-link-title">Trending</span>
                </a>
                <a href="" class="nav-link">
                    <i class="bx bx-bookmark"></i>
                    <span class="nav-link-title">Bookmark</span>
                </a>');

            } else if ($_SESSION['priv'] == 'admin') {
                echo (
                '
                <div class="navbar">
                <a href="admin.php" class="nav-link">
                    <i class="bx bx-home"></i>
                    <span class="nav-link-title">Home</span>
                </a>
                <a href="input_admin.php" class="nav-link">
                    <i class="bx bx-user-check"></i>
                    <span class="nav-link-title">Tambah Hotel</span>
                </a>
                <a href="pilih_list.php" class="nav-link">
                    <i class="bx bxs-hotel"></i>
                    <span class="nav-link-title">Daftar Hotel</span>
                </a>
                <a href="#m" class="nav-link">
                    <i class="bx bx-current-location"></i>
                    <span class="nav-link-title">Lokasi</span>
                </a>
                <a href="#m" class="nav-link">
                    <i class="bx bx-cog"></i>
                    <span class="nav-link-title">Settings</span>
                </a>
                ');
            } else {
                echo (
                '
                <div class="navbar">
                <a href="index.php" class="nav-link">
                    <i class="bx bx-home"></i>
                    <span class="nav-link-title">Home</span>
                </a>
                <a href="#populer" class="nav-link">
                    <i class="bx bx-star"></i>
                    <span class="nav-link-title">Berbintang</span>
                </a>
                <a href="#indo" class="nav-link">
                    <i class="bx bx-trending-up"></i>
                    <span class="nav-link-title">Trending</span>
                </a>
                <a href="#about-me" class="nav-link">
                    <i class="bx bx-user"></i>
                    <span class="nav-link-title">About Me</span>
                </a>
                ');
            }
            ?>
                
                    <?php if (!isset($_SESSION["username"])){
                        echo(
                            '<a href="proses_login.php" class= "nav-link" id= "login">
                    <i class="bx bx-user-circle"></i><span class="nav-link-title">Login</span>');
                    } else {
                        echo(
                            '<a href="proses_keluar.php" class= "nav-link" id= "lgout">
                    <i class="bx bx-user-circle"></i><span class="nav-link-title">Logout</span>');
                    }?>
                    
                </a>
                <label>
                    <input type="checkbox" class="checkbox" id="tombol">
                    <span class="check"></span>
                </label>
            </div>
        </div>
    </header>
    <!--Section Beranda-->
    <section class="beranda container">

            <table >
                <?php $i = 0; foreach ($pencarian as $pop_hotel):?>
                <tr><a href="">
                    <td size= ><img src="gambar/all_hotel/<?= $pop_hotel['cover'] ?>" width="30%" height="100px"></td>
                    <td width="80%"><?php echo $pop_hotel["nama"] ;?></td>
                    <td><?php echo $pop_hotel["tipe"] ;?></td>
                </tr></a>
                
                <?php $i++; endforeach;?>
            </table>
            <?php if ($i < 1) {
                echo '
                <div class="text-cari">
                    <p align="center"><h1>No result found</h1></p>
                </div>'; 
            } ?>
    </section> 

    <footer id="about-me">
        <div class="footer container">
            <h1 align="center">About Me</h1><br>
            <div class="img"></div>
            <div class="text">Fhiditya<span> Hotel</span></div</div>
        <p class="desc"> Hallo!, nama saya Aditya Rafiqi Pangestu. Saya adalah owner dari website Hotel  ini, nikmati website hotel yang kami buat ini tujuan website ini dibuat untuk mempermudah orang yang ingin mencari hotel.</p>
        </div>
        <div class="sosmed-footer" align="center">
            <div><a target="blank" href="https://www.instagram.com/adityaaraaa/" class="nav-link">
                <i class="bx bxl-instagram" ></i>
                <span class="sosmed-range">Instagram  </span>
            </a>
            </div>
            <div><a target="blank" href="https://wa.wizard.id/44aa53" class="nav-link">
                <i class="bx bxl-whatsapp"></i>
                <span class="sosmed-range">  WhatsApp</span>
                <a/>
            </div>
        </div>
    </footer>
    <script src="javascript.js"></script>
    <script>
        var tombol = document.getElementById("tombol");

        tombol.onclick = function(){
            document.body.classList.toggle("white-mode");
        }

    </script>


    </body>
</html>