<!DOCTYPE html>
<html lang="en">
    <?php
    session_start();
    $_SESSION['priv'] = "adityaa";
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
            <span></span>Fhidityaa<span>Hotel</span><span></span>
            </a>
            <div class="search-box">
                <input type="search" name="search" id="search-input" placeholder="Cari Hotel">
                <i
                href="" class="bx bx-search" id="cari"></i>
                </i>
            </div>
            <a href="#about-me" class="user">
                <img src="gambar/pohon-icon.png" alt="" class="user-img">
            </a>
            <div class="navbar">
                <a href="" class="nav-link">
                    <i class="bx bx-home"></i>
                    <span class="nav-link-title">Home</span>
                </a>
                <a href="#populer" class="nav-link">
                    <i class='bx bx-star' ></i>
                    <span class="nav-link-title">Berbintang</span>
                </a>
                <a href="#indo" class="nav-link">
                    <i class='bx bx-trending-up' ></i>
                    <span class="nav-link-title">Trending</span>
                </a>
                <a href="#about-me" class="nav-link">
                    <i class="bx bx-user"></i>
                    <span class="nav-link-title">About Me</span>
                </a>
                    <a href="proses_login.php" class= "nav-link" id= "login">
                    <i class="bx bx-user-circle"></i><span class="nav-link-title">Login</span>
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
        <img src="gambar/lobby.jpg" alt="" class="beranda-img" id="gambar1">
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

    <!--Section popular-->
    <section class="populer container" id="populer">
        <div class="head">
            <h2 class="judul-populer">Hotel Berbintang</h2>s
        </div>
        

        <div class="list-hotel container">
            <a href="#">
                <div class="hotel">
                    <div class="hotel-image">
                        <img src="gambar/mercure.jpg" alt="">
                    </div>
                    <div class="hotel-text">
                        <div class="judul">
                            <span> <i class='bx bx-credit-card'></i></span>
                            <h3>Hotel Mercure Samarinda</h3>
                        </div>
                        <div class="trending">
                            <p>Rp 808.280</p>
                        </div>
                    </div>
                </div>

                <div class="hotel">
                    <div class="hotel-image">
                        <<img src="gambar/ibis.jpg" alt="">
                    </div>
                    <div class="hotel-text">
                        <div class="judul">
                            <span> <i class='bx bx-credit-card'></i></span>
                            <h3>Hotel Ibis Samarinda</h3>
                        </div>
                        <div class="trending">
                            <p>Rp 650.980</p>
                        </div>
                    </div>
                </div>

                <div class="hotel">
                    <div class="hotel-image">
                        <<img src="gambar/haris.jpg" alt="">
                    </div>
                    <div class="hotel-text">
                        <div class="judul">
                            <span> <i class='bx bx-credit-card'></i></span>
                            <h3>HARRIS Hotel Samarinda</h3>
                        </div>
                        <div class="trending">
                            <p>Rp 574.200</p>
                        </div>
                    </div>
                </div>

                <div class="hotel">
                    <div class="hotel-image">
                        <<img src="gambar/aston.jpg" alt="">
                    </div>
                    <div class="hotel-text">
                        <div class="judul">
                            <span> <i class='bx bx-credit-card'></i></span>
                            <h3>Aston Samarinda Hotel & Convention Center</h3>
                        </div>
                        <div class="trending">
                            <p>Rp 690.938</p>
                        </div>
                    </div>
                </div>
            </div>
      
        

        <div class="more">
            <a href="#" >Lainnya</a>
        </div>
    </section>

    <!--Section Top Indo-->
    <section class="populer container" id="indo">
        <div class="head">
            <h2 class="judul-populer">Trending</h2>
        </div>
        

        <div class="list-hotel container">
            <a href="#">
                <div class="hotel">
                    <div class="hotel-image">
                        <<img src="gambar/midtown.jpg" alt="">
                    </div>
                    <div class="hotel-text">
                        <div class="judul">
                            <span> <i class='bx bx-credit-card'></i></span>
                            <h3>Midtown Hotel Samarinda</h3>
                        </div>
                        <div class="trending">
                            <p>Rp 702.777</p>
                        </div>
                    </div>
                </div>

                <div class="hotel">
                    <div class="hotel-image">
                        <<img src="gambar/mesra.jpg" alt="">
                    </div>
                    <div class="hotel-text">
                        <div class="judul">
                            <span> <i class='bx bx-credit-card'></i></span>
                            <h3>Mesra Business & Resort Hotel</h3>
                        </div>
                        <div class="trending">
                            <p>Rp 660.000</p>
                        </div>
                    </div>
                </div>

                <div class="hotel">
                    <div class="hotel-image">
                        <<img src="gambar/bumisenyiur.jpg" alt="">
                    </div>
                    <div class="hotel-text">
                        <div class="judul">
                            <span> <i class='bx bx-credit-card'></i></span>
                            <h3>Hotel Bumi Senyiur</h3>
                        </div>
                        <div class="trending">
                            <p>Rp 750.000</p>
                        </div>
                    </div>
                </div>

                <div class="hotel">
                    <div class="hotel-image">
                        <<img src="gambar/horison.jpg" alt="">
                    </div>
                    <div class="hotel-text">
                        <div class="judul">
                            <span> <i class='bx bx-credit-card'></i></span>
                            <h3>Horison Samarinda</h3>
                        </div>
                        <div class="trending">
                            <p>Rp 780.000</p>
                        </div>
                    </div>
                </div>
            </div>
                    
        

        <div class="more">
            <a href="#" >Lainnya</a>
        </div>
    </section>


    <!--Section Populer -->
    <section class="populer container" id="kpop">
        <div class="head">
            <h2 class="judul-populer">Rekomendasi Hotel</h2>
        </div>
        

        <div class="list-hotel container">
            <a href="#">
                <div class="hotel">
                    <div class="hotel-image pic-9">
                    </div>
                    <div class="hotel-text">
                        <div class="judul">
                            <span> <i class='bx bx-credit-card'></i></span>
                            <h3>Amaris Hotel Samarinda</h3>
                        </div>
                        <div class="trending">
                            <p>Bintang Dua</p>
                        </div>
                    </div>
                </div>

                <div class="hotel">
                    <div class="hotel-image pic-10">
                    </div>
                    <div class="hotel-text">
                        <div class="judul">
                            <span> <i class='bx bx-credit-card'></i></span>
                            <h3>Zoom Hotel Mulawarman</h3>
                        </div>
                        <div class="trending">
                            <p>Bintang Tiga</p>
                        </div>
                    </div>
                </div>

                <div class="hotel">
                    <div class="hotel-image pic-11">
                    </div>
                    <div class="hotel-text">
                        <div class="judul">
                            <span> <i class='bx bx-credit-card'></i></span>
                            <h3>Grand Victoria Hotel</h3>
                        </div>
                        <div class="trending">
                            <p>Bintang 3</p>
                        </div>
                    </div>
                </div>

                <div class="hotel">
                    <div class="hotel-image pic-12">
                    </div>
                    <div class="hotel-text">
                        <div class="judul">
                            <span> <i class='bx bx-credit-card'></i></span>
                            <h3>Swiss-Belhotel Borneo Samarinda</h3>
                        </div>
                        <div class="trending">
                            <p>Bintang Empat</p>
                        </div>
                    </div>
                </div>
            </div>
                    
        

        <div class="more">
            <a href="#" >Lainnya</a>
        </div>
    </section>

    <footer id="about-me">
        <div class="footer container">
            <h1 align="center">About Me</h1><br>
            <div class="img"></div>
            <div class="text">Fhidityaa<span>  Hotel</span></div</div>
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