<?php
session_start();
// if (isset($_SESSION['username'])) {
//     header("Location: .");
// }
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
    <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="style2.css">
    <link rel="icon" href="gambar/hotel.png">
    <title>Sign In</title>
</head>
<body>

            <form action="" method="POST" class="login-email">
            <div class="login-box">
                <div class="logo-container">
                <a href="" class="logo" id="warna">
                <span></span>Fhidityaa<span>Hotel</span><span></span>
                </a>
                </div>
                <h1>Login</h1>
                <div class="textbox">
                    <i class='bx bx-user'></i>
                    <input type="text" placeholder="Username" name="username" value="" required>
                </div>

                <div class="textbox">
                    <i class='bx bx-lock-alt'></i>
                    <input type="password" placeholder="Password" name="password" value="" required>
                </div>

                <button name="login" class="btn">Sign In</button>

                <?php
                

                
                if (isset($_POST['login'])) {
                
                    $user = $_POST['username'];
                    $userpass = $_POST['password']; 
                    $sql = mysqli_query($conn, "SELECT username, password, priv FROM user WHERE username = '$user'");
                
                    list($username, $password, $priv) = mysqli_fetch_array($sql);
                

                    if (mysqli_num_rows($sql) > 0) {
                
                        /*
                        ------------------------------------------------------------------------------------------------=
                        =                                     << HALAMAN ADMIN >>                                       =
                        =  +>>    Username: admin                                                                       =
                        =  +>>    Password: admin123                                                                    =
                        =-----------------------------------------------------------------------------------------------=
                        =                                      << HALAMAN USER >>                                       =
                        =  +>>    Username: user                                                                        =
                        =  +>>    Password: user123                                                                     =
                        ------------------------------------------------------------------------------------------------=
                        */
                        if (password_verify($userpass, $password)) {
                        // if ($userpass == $password) {
                            session_start();
                            $_SESSION['username'] = $username;
                            $_SESSION['priv']     = $priv;
                            header('location: admin.php');
                            die();

                        } else {
                            echo '<p>Username Atau Password Salah!<p>';
                        }
                    } else {
                       echo '
                            <p>Username Atau Password Salah!<p>
                       ';
                    }
                }
            ?> 
        </form>
        <br>Belum mempunyai akun? <a class="daftar" href="proses_daftar.php" style="text-decoration:none">Sign Up</a>
    </div>
</body>
</html>