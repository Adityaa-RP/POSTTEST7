<?php
$conn = mysqli_connect("localhost", "root", "", "fhidityaahotel");
if (!$conn){
    die("Gagal terhubung ke database!".mysqli_connect_error());
}
?>