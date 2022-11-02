<?php
session_start();
require "koneksi.php";
$result = mysqli_query($conn, "SELECT * FROM  hotel_populer");

$hotel_populer = [];

while ($row = mysqli_fetch_assoc($result)) {
    $hotel_populer[] = $row;
}
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
    <link rel="icon" href="gambar/hotel.png">
    <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet">
    <title>Hotel Populer</title>
</head>
<body>

    <div class="filter">
        <div class="logo-container">
            <a href="" class="logo" id="warna">
            <span></span>Fhidityaa<span>Hotel</span><span></span>
            </a>
        </div>
    </div>
    <table>
        <tr>
        <th colspan="6" style="background-color: #293462 ;">Hotel Populer </th>
        </tr>
        
        <tr>
            <th>NO</th>
            <th>ID</th>
            <th>Nama</th>
            <th>Tipe</th>
            <th>Foto</th>
            <th>Waktu</th>
            <th>Action</th>
        </tr>
        
        <?php $i = 1; foreach ($hotel_populer as $pop_hotel):?>
        <tr>
            <td><?php echo $i ;?></td>
            <td><?php echo $pop_hotel["id"]; ?></td>
            <td><?php echo $pop_hotel["nama"] ;?></td>
            <td><?php echo $pop_hotel["tipe"] ;?></td>
            <td><img src="gambar/all_hotel/<?= $pop_hotel['foto'] ?>" width="70" height="60"><br><?php echo $pop_hotel["foto"] ;?></td>
            <td><?php echo $pop_hotel["waktu"] ;?></td>
            <td><i class='bx bx-edit'></i><a href="update_admin.php?id=<?php echo $pop_hotel["id"]; ?>&section=hotel_populer">Edit</a> 
            |<i class='bx bx-trash'></i><a href="hapus.php?id=<?php echo $pop_hotel["id"]; ?>&section=hotel_popuker" onclick = "return confirm('And yakin ingin menghapus data ini ?')">Hapus</a></td>
        </tr>
        <?php $i++; endforeach;?>
        <tr>
        <th colspan="7" style="background-color: #293462 ;">Cancel view list? <a  class="daftar" href="admin.php" style="text-decoration:none">Back</a></th>
        </tr>
    </table>
    
</body>
</html>