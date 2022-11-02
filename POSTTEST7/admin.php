<!DOCTYPE html>
<html lang="en">
    <?php
    session_start();
    if($_SESSION['priv'] == 'user'){
        header("Location: user.php");
    }
    elseif ($_SESSION['priv'] != 'admin'){
        header('Location: proses_login.php');
    }

    // $_SESSION['username'] = "Adityaa";
    ?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        Fhidityaa Hotel
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
                <input type="search" name="search" id="search-input" placeholder="Cari Hotel">
                <i
                href="" class="bx bx-search" id="cari"></i>
                    <!-- <a href="" class="bx bx-search"></a> -->
                </i>
            </div>
            <a href="#about-me" class="user">
                <img src="gambar/pohon-icon.png" alt="" class="user-img">
            </a>
            <div class="navbar">
                <a href="#beranda" class="nav-link">
                    <i class="bx bx-home"></i>
                    <span class="nav-link-title">Home</span>
                </a>
                <a href="input_admin.php" class="nav-link">
                    <i class='bx bx-user-check'></i>
                    <span class="nav-link-title">Tambah Hotel</span>
                </a>
                <a href="#m" class="nav-link">
                    <i class='bx bxs-hotel'></i>
                    <span class="nav-link-title">Daftar Hotel</span>
                </a>
                <a href="#m" class="nav-link">
                    <i class='bx bx-current-location' ></i>
                    <span class="nav-link-title">Lokasi</span>
                </a>
                <a href="#m" class="nav-link">
                    <i class='bx bx-cog'></i>
                    <span class="nav-link-title">Settings</span>
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
        <img src="gambar/indigo.jpg" alt="" class="beranda-img" id="gambar1">
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
            <h2 class="judul-populer">Jenis Hotel Berdasarkan Lokasi</h2>
        </div>
        

        <div class="list-hotel container">
            <a href="#">
                <div class="hotel">
                    <div class="hotel-image pic-25">
                    </div>
                    <div class="hotel-text">
                        <div class="judul">
                            <span> <i class='bx bx-like'></i></i></span>
                            <h1>City Hotel</h1>
                        </div>
                        <div class="trending">
                            <p>City Hotel merupakan jenis hotel yang berada di kawasan pusat perkotaan dan umumnya lebih banyak ditemukan di kota-kota besar.</p>
                        </div>
                    </div>
                </div>

                <div class="hotel">
                    <div class="hotel-image pic-26">
                    </div>
                    <div class="hotel-text">
                        <div class="judul">
                            <span> <i class='bx bx-like'></i></i></span>
                            <h1>Motel</h1>
                        </div>
                        <div class="trending">
                            <p> Motel biasanya berada di tepi jalan-jalan penghubung antar kota atau daerah.</p>
                        </div>
                    </div>
                </div>

                <div class="hotel">
                    <div class="hotel-image pic-27">
                    </div>
                    <div class="hotel-text">
                        <div class="judul">
                            <span> <i class='bx bx-like'></i></i></span>
                            <h1>Resort Hotel</h1>
                        </div>
                        <div class="trending">
                            <p>Resort Hotel adalah jenis hotel yang berada jauh di luar pusat pekotaan dan berada di kawasan-kawasan wisata dan juga rekreasi seperti di pantai, pegunungan, tepi danau atau sungai dan sejenisnya.</p>
                        </div>
                    </div>
                </div>

                <div class="hotel">
                    <div class="hotel-image pic-28">
                    </div>
                    <div class="hotel-text">
                        <div class="judul">
                            <span> <i class='bx bx-like'></i></i></span>
                            <h1>Residential Hotel</h1>
                        </div>
                        <div class="trending">
                            <p>Residential Hotel biasanya menjadi pilihan untuk tamu-tamu yang berencana untuk tinggal dalam waktu yang cukup lama.</p>
                        </div>
                    </div>
                </div>
            </div>
      
        

        <div class="more">
            <a href="#" >Lainnya</a>
        </div>
    </section>

    <!--Section Populer-->
    <section class="populer container" id="populer">
        <div class="head">
            <h2 class="judul-populer">Jenis-Jenis Hotel berdasarkan Tujuan Kunjungan Tamu</h2>
        </div>
        

        <div class="list-hotel container">
            <a href="#">
                <div class="hotel">
                    <div class="hotel-image pic-29">
                    </div>
                    <div class="hotel-text">
                        <div class="judul">
                            <span> <i class='bx bx-like'></i></span>
                            <h1>Business Hotel</h1>
                        </div>
                        <div class="trending">
                            <p>Jenis hotel satu ini sebagian besar tamunya melakukan kegiatan bisnis sehingga umumnya lokasi hotel berada di pusat kota atau pusat keramaian seperti City Hotel atau Downtown Hotel</p>
                        </div>
                    </div>
                </div>

                <div class="hotel">
                    <div class="hotel-image pic-30">
                    </div>
                    <div class="hotel-text">
                        <div class="judul">
                            <span> <i class='bx bx-like'></i></span>
                            <h1>Resort/Tourism Hotel</h1>
                        </div>
                        <div class="trending">
                            <p>Jenis hotel satu ini yang kebanyakan tamunya adalah wisatawan, baik domestik maupun mancanegara. Hotel jenis ini biasanya berada dekat lokasi-lokasi wisata, lengkap dengan fasilitas-fasilitas leisure.
</p>
                        </div>
                    </div>
                </div>

                <div class="hotel">
                    <div class="hotel-image pic-31">
                    </div>
                    <div class="hotel-text">
                        <div class="judul">
                            <span> <i class='bx bx-like'></i></span>
                            <h1>Pilgrim Hotel</h1>
                        </div>
                        <div class="trending">
                            <p>Jenis hotel satu ini bertujuan untuk mengakomodir tamu-tamu yang memiliki tujuan perjalanan ibadah ataupun ziarah.</p>
                        </div>
                    </div>
                </div>

                <div class="hotel">
                    <div class="hotel-image pic-32">
                    </div>
                    <div class="hotel-text">
                        <div class="judul">
                            <span> <i class='bx bx-like'></i></span>
                            <h1>Cure Hotel</h1>
                        </div>
                        <div class="trending">
                            <p>Jenis hotel satu ini sebagian tamunya adalah tamu yang sedang dalam proses pengobatan atau perawatan sehingga lokasinya biasanya berdekatan dengan rumah sakit-rumah sakit besar.</p>
                        </div>
                    </div>
                </div>
            </div>
                    
        

        <div class="more">
            <a href="#" >Lainnya</a>
        </div>
    </section>


    <!--Section Populer -->
    <section class="populer container" id="populer">
        <div class="head">
            <h2 class="judul-populer">Jenis-Jenis Hotel berdasarkan Kelas atau Bintang</h2>
        </div>
        

        <div class="list-hotel container">
            <a href="#">
                <div class="hotel">
                    <div class="hotel-image pic-33">
                    </div>
                    <div class="hotel-text">
                        <div class="judul">
                            <span> <i class='bx bx-like'></i></span>
                            <h1>Hotel Bintang Satu</h1>
                        </div>
                        <div class="trending">
                            <p>Hotel berbintang satu memiliki jumlah kamar standar minimum 15 kamar dengan luas kamar standar minimum 20 m2</p>
                        </div>
                    </div>
                </div>

                <div class="hotel">
                    <div class="hotel-image pic-10">
                    </div>
                    <div class="hotel-text">
                        <div class="judul">
                            <span> <i class='bx bx-like'></i></span>
                            <h1>Hotel Bintang Dua</h1>
                        </div>
                        <div class="trending">
                            <p> Fasilitas: Memiliki telepon dan televisi di dalam kamar, terdapat tempat olahraga, restoran.</p>
                        </div>
                    </div>
                </div>

                <div class="hotel">
                    <div class="hotel-image pic-11">
                    </div>
                    <div class="hotel-text">
                        <div class="judul">
                            <span> <i class='bx bx-like'></i></span>
                            <h1>Hotel Bintang Empat</h1>
                        </div>
                        <div class="trending">
                            <p>Fasilitas: Memiliki telepon, televisi, AC, serta penghangat air di dalam kamar, terdapat sarana rekreasi dan olahraga, rest area, restoran dan bar serta menyediakan Concierge Staf.</p>
                        </div>
                    </div>
                </div>

                <div class="hotel">
                    <div class="hotel-image pic-12">
                    </div>
                    <div class="hotel-text">
                        <div class="judul">
                            <span> <i class='bx bx-like'></i></span>
                            <h1>Hotel Bintang Lima</h1>
                        </div>
                        <div class="trending">
                            <p>Fasilitas: Memiliki telepon, televisi, AC, serta penghangat air di dalam kamar, terdapat sarana rekreasi dan olahraga, rest area, restoran dan bar serta menyediakan Concierge Staf dan room service 24 jam.</p>
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