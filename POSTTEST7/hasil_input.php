
<?php
session_start();





$title = $_POST['title'];
$name = $_POST['name'];
$tipe = $_POST['tipe'];
$release = $_POST['release'];
$code = $_POST['code'];
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
    <title>Result</title>
</head>
<body>

            <form action= "" method="POST" enctype="multipart/form-data">
            <div class="login-box">
                <div class="logo-container">
                <a href="" class="logo" id="warna">
                <span></span>Fhidityaa<span>Hotel</span><span></span>
                </a>
                </div>
                <h1>Add Result</h1>
                <div class="textbox">
                    <i class='bx bx-user'></i>
                    <span>Nama Hotel</span>
                    <input name="title" value="<?php echo $title; ?>" readonly>
                </div>

                <div class="textbox">
                    <i class='bx bx-user'></i>
                    <span>Nama Pemilik Hotel</span>
                    <input name="name" value="<?php echo $name; ?>" readonly>
                </div>

                <div class="textbox">
                    <i class='bx bx-envelope'></i>
                    <span>Tipe Hotel</span>
                    <input name="tipe" value="<?php echo $tipe; ?>" readonly>
                </div>

                <div class="textbox">
                    <i class='bx bx-phone'></i>
                    <span>Tanggal Peresmian Hotel</span>
                    <input name="release" value="<?php echo $release; ?>" readonly>
                </div>

                <div class="textbox">
                    <i class='bx bx-lock-alt'></i>
                    <span>Kode Hotel</span>
                    <input name="id" value="<?php echo $code; ?>" readonly>
                </div>

                <button name="submit" class="btn">Continue</button>
                <?php
            if (isset($_POST['submit'])) {
                header("Location: admin.php");
            }
        ?> 
        </form>
    </div>
</body>
</html>