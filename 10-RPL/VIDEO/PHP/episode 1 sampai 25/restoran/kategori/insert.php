    <form action="" method="post">
        kategori :
        <input type="text" name="kategori">
        <br>
        <input type="submit" name="simpan" value="simpan">

    </form>
<?php 
    require_once "../function.php";
    if (isset($_POST['simpan'])) {
        $kategori = $_POST ['kategori'];
        // echo $kategori;
        // $kategori = 'Es Mambo';
        $sql = "INSERT INTO tblkategori VALUES ('','$kategori')";
        $result = mysqli_query($koneksi, $sql);
        // echo "data sudah disimpan";
        header("location:http://localhost/10-RPL/VIDEO/PHP/episode%201%20sampai%2023/restoran/kategori/select.php");
        
    }
    // $kategori = 'Es Mambo';
    // $sql = "INSERT INTO tblkategori VALUES ('','$kategori')";
    // $sql = "INSERT INTO tblkategori VALUES ('','Minuman Kaleng')";
    // $sql = "INSERT INTO tblkategori VALUES ('','Jelly')";
    // $result = mysqli_query($koneksi, $sql);
    // echo $sql;

?>