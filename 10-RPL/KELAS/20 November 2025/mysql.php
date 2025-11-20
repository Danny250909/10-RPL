<?php 

    $host = "localhost";
    $user = "root";
    $password = "";
    $db = "dbsekolah";

    $koneksi = mysqli_connect($host, $user, $password, $db);
    $sql = "SELECT * FROM tblsiswa";
    $query = mysqli_query($koneksi, $sql);
    $siswa = mysqli_fetch_assoc($query);

    var_dump($siswa);
    echo "<br>";
    echo $siswa['NIS'], ' - ', $siswa['Nama'], ' - ', $siswa['Alamat'],' - ' , $siswa['Telp'];
    echo "<br>";
    
    // while ($siswa = mysqli_fetch_array($query)) {
    //     echo $siswa['NIS'], ' - ', $siswa['Nama'], ' - ', $siswa['Alamat'],' - ' , $siswa['Telp'];
    //     echo "<br>";
    // }
?>