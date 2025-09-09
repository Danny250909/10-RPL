<?php 
    require_once "../function.php";
    // $id = 6;
    $sql = "DELETE FROM tblkategori WHERE idkategori = $id";
    $result = mysqli_query($koneksi, $sql);
    header("location:http://localhost/10-RPL/VIDEO/PHP/episode%201%20sampai%2023/restoran/kategori/select.php")
    // echo $sql;
    
?>