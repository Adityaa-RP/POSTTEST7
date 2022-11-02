<!DOCTYPE html>
<html lang="en">
    <?php
    session_start();
    if ($_SESSION['priv'] != 'user'){
        header('Location: proses_login.php');
    }
    // session_destroy();
    // header('proses_login.php');
    // $_SESSION['username'] = "Adityaa";
    require "koneksi.php";
    ?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        Fhiditya Hotel
    </title>
    <link rel="stylesheet" href="style.css" type="text/css">
    <link rel="icon" href="gambar/hotel.png">
    <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet">
</head>
<body>
    <header>
        <div class="nav container">
            <a href="" class="logo" id="warna">
            <span></span>Fhiditya<span>Hotel</span><span></span>
            </a>
            <form action="searching.php" method="GET">
                <div class="search-box">
                    <input type="search" name="search" id="search-input" placeholder="Search Hotel" autocomplete="off">
                    <button type="submit" name="cari"> <i class="bx bx-search"></i></button>
                </div>
            </form>
            <?php
                // if (isset($_GET['cari'])){
                //     $keyword = $_GET['search'];
                //     $result = mysqli_query($conn, "SELECT * FROM popular_now WHERE judul LIKE '%$keyword%' or genre LIKE '%$keyword%'");
                // } else {
                //     $result = mysqli_query($conn, "SELECT * FROM popular_now");
                // }
                // $pencarian = [];
                // while ($row = mysqli_fetch_array($result)) {
                //     $pencarian[] = $row;
                // }
            ?>
            <a href="#about-me" class="user">
                <img src="gambar/pohon-icon.png" alt="" class="user-img">
            </a>
            <div class="navbar">
                <a href="" class="nav-link">
                    <i class="bx bx-home"></i>
                    <span class="nav-link-title">Home</span>
                </a>
                <a href="#based" class="nav-link">
                    <i class='bx bx-like'></i>
                    <span class="nav-link-title">Rekomendasi</span>
                </a>
                <a href="#populer" class="nav-link">
                    <i class='bx bx-world'></i>
                    <span class="nav-link-title">Populer</span>
                </a>
                <a href="#trending" class="nav-link">
                    <i class='bx bx-trending-up' ></i>
                    <span class="nav-link-title">Trending</span>
                </a>
                <a href="" class="nav-link">
                    <i class='bx bx-bookmark'></i>
                    <span class="nav-link-title">Bookmark</span>
                </a>
                
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
    <section class="beranda container" id="beranda">
        <img src="gambar/lobby2.jpg" alt="" class="beranda-img" id="gambar1">
        <div class="beranda-teks">
            <h1 class="judul-beranda">FHIDITYAA HOTEL</h1>
            <p>Hotel di Tenggarong memiliki keberagaman yang menjadi daya tarik tersendiri bagi para wisatawan. Mulai dari hotel bergaya tradisional, alam, hingga modern bisa Anda temukan di Kota Tenggarong.
                 <br>   
               Lokasi akomodasi pun tersebar di berbagai kawasan wisata, seperti Museum Mulawarman, Kedaton, Pulau Kumala, Waduk Panji, Museum Kayu, Taman Kota Raja, hingga dekat pusat kuliner. 
                <br>
               Ayo segera lengkapi keseruan perjalanan Anda dengan berbagai pilihan hotel murah di Tenngarong!
                </p>
            <a href="#" class="tombol-ntn">
                <i class="bx bx-search"></i>
                <span>Cari Hotel</span>
            </a>
        </div>
    </section>

    <!--Section Populer-->
    <section class="populer container" id="based">
        <div class="head">
            <h2 class="judul-populer">Rekomendasi dari kami untuk anda</h2>
        </div>
        

        <div class="list-hotel container">
            <a href="">
                <div class="hotel">
                    <div class="hotel-image pic-13">
                    </div>
                    <div class="hotel-text">
                        <div class="judul">
                            <span> <i class='bx bx-like'></i></i></span>
                            <h3>Midtown Hotel Samarinda</h3>
                        </div>
                        <div class="trending">
                            <p>Rp 702.777</p>
                        </div>
                    </div>
                </div>

                <div class="hotel">
                    <div class="hotel-image pic-14">
                    <!-- <img src="gambar/kosong.jpg" alt="" class="beranda-img" id="gambar1"> -->
                    </div>
                    <div class="hotel-text">
                        <div class="judul">
                            <span> <i class='bx bx-like'></i></span>
                            <h3>Horison Samarinda</h3>
                        </div>
                        <div class="trending">
                            <p>Rp 780.000</p>
                        </div>
                    </div>
                </div>

                <div class="hotel">
                    <div class="hotel-image pic-15">
                    </div>
                    <div class="hotel-text">
                        <div class="judul">
                            <span> <i class='bx bx-like'></i></span>
                            <h3>Mesra Business & Resort Hotel</h3>
                        </div>
                        <div class="trending">
                            <p>Rp 660.000</p>
                        </div>
                    </div>
                </div>

                <div class="hotel">
                    <div class="hotel-image pic-16">
                    </div>
                    <div class="hotel-text">
                        <div class="judul">
                            <span> <i class='bx bx-like'></i></span>
                            <h3>Hotel Bumi Senyiur</h3>
                        </div>
                        <div class="trending">
                            <p>Rp 750.000</p>
                        </div>
                    </div>
                </div>
            </div>
      
        

        <div class="more">
            <a href="#hotel" >Lainnya</a>
        </div>
    </section>

    <!--Section #Populer-->
    <section class="populer container" id="populer">
        <div class="head">
            <h2 class="judul-populer">Populer untuk kalanganan remaja & Murah meriah</h2>
        </div>
        

        <div class="list-hotel container">
            <a href="">
                <div class="hotel">
                    <div class="hotel-image pic-17">
                    </div>
                    <div class="hotel-text">
                        <div class="judul">
                            <span> <i class='bx bx-wallet'></i></span>
                            <h3>OYO 1989 Hotel Pelangi Harapan</h3>
                        </div>
                        <div class="trending">
                            <p>Rp 134.444</p>
                        </div>
                    </div>
                </div>

                <div class="hotel">
                    <div class="hotel-image pic-18">
                    </div>
                    <div class="hotel-text">
                        <div class="judul">
                            <span> <i class='bx bx-wallet'></i></span>
                            <h3>OYO 2695 D'es Residence </h3>
                        </div>
                        <div class="trending">
                            <p>Rp 560.476</p>
                        </div>
                    </div>
                </div>

                <div class="hotel">
                    <div class="hotel-image pic-19">
                    </div>
                    <div class="hotel-text">
                        <div class="judul">
                            <span> <i class='bx bx-wallet'></i></span>
                            <h3>OYO 90550 Good Sleep 3 Samarinda</h3>
                        </div>
                        <div class="trending">
                            <p>Rp 218.721</p>
                        </div>
                    </div>
                </div>

                <div class="hotel">
                    <div class="hotel-image pic-20">
                    </div>
                    <div class="hotel-text">
                        <div class="judul">
                            <span> <i class='bx bx-wallet'></i></span>
                            <h3>OYO 3286 Ramania Residence Syariah</h3>
                        </div>
                        <div class="trending">
                            <p>Rp 143.398</p>
                        </div>
                    </div>
                </div>
            </div>
                    
        

        <div class="more">
            <a href="#hotel" >Lainnya</a>
        </div>
    </section>


    <!--Section #ThrowbackThursday -->
    <section class="populer container" id="trending">
        <div class="head">
            <h2 class="judul-populer">Trending, Mewah, Ramah Lingkungan Cocok untuk anak anak</h2>
        </div>
        

        <div class="list-hotel container">
            <a href="">
                <div class="hotel">
                    <div class="hotel-image pic-21">
                    </div>
                    <div class="hotel-text">
                        <div class="judul">
                            <span> <i class='bx bx-trending-up' ></i></span>
                            <h3>Hotel Mercure Samarinda</h3>
                        </div>
                        <div class="trending">
                            <p>Rp 808.280</p>
                        </div>
                    </div>
                </div>

                <div class="hotel">
                    <div class="hotel-image pic-22">
                    </div>
                    <div class="hotel-text">
                        <div class="judul">
                            <span> <i class='bx bx-trending-up' ></i></span>
                            <h3>Hotel Ibis Samarinda</h3>
                        </div>
                        <div class="trending">
                            <p>Rp 650.980</p>
                        </div>
                    </div>
                </div>

                <div class="hotel">
                    <div class="hotel-image pic-23">
                    </div>
                    <div class="hotel-text">
                        <div class="judul">
                            <span> <i class='bx bx-trending-up' ></i></span>
                            <h3>HARRIS Hotel Samarinda</h3>
                        </div>
                        <div class="trending">
                            <p>Rp 574.200</p>
                        </div>
                    </div>
                </div>

                <div class="hotel">
                    <div class="hotel-image pic-24">
                    </div>
                    <div class="hotel-text">
                        <div class="judul">
                            <span> <i class='bx bx-trending-up' ></i></span>
                            <h3>Aston Samarinda Hotel & Convention Center</h3>
                        </div>
                        <div class="trending">
                            <p>Rp 690.938</p>
                        </div>
                    </div>
                </div>
            </div>
                    
        

        <div class="more">
            <a href="#hotel" >Lainnya</a>
        </div>
    </section>

    <footer id="about-me">
        <div class="footer container">
            <h1 align="center">About Me</h1><br>
            <div class="img"></div>
            <div class="text">Fhidityaa<span> Hotel</span></div</div>
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