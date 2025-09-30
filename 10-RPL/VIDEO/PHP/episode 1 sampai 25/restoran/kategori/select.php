    <div style="margin:auto; width: 750px;">
    <h3><a href="http://localhost/10-RPL/VIDEO/PHP/episode%201%20sampai%2023/restoran/kategori/insert.php">Tambah Data</a></h3>

<?php 
    require_once "../function.php";
    if (isset($_GET['update'])) {
        $id=$_GET['update'];
        require_once "update.php";
         echo $id;
    }
    if (isset($_GET['hapus'])) {
        $id = $_GET['hapus'];
        require_once "delete.php";
        // echo;

    }
    echo '<br>';
    $sql = "SELECT idkategori FROM tblkategori";
    $result = mysqli_query($koneksi, $sql); 
    $jumlahdata = mysqli_num_rows($result);
    // echo $jumlahdata;
    // $halaman = $jumlahdata / $banyak;
    // $mulai = 0;
    $banyak = 5;
    $halaman = ceil( $jumlahdata / $banyak);
    for ($i=1; $i <= $halaman ; $i++) { 
        echo '<a href="?p='.$i.'">'.$i.'</a>';
        echo '&nbsp &nbsp &nbsp';
    }
    echo '<br> <br>';
    if (isset($_GET['p'])) {
       $p=$_GET['p'];
       $mulai = ($p * $banyak - $banyak);
        // 1 = ((1 + 1) * 4 - 4)

    }else {
        $mulai = 1;
    }
    
    // echo ;
    $sql = "SELECT * FROM tblkategori LIMIT $mulai, $banyak";

    // echo $sql;
    $result = mysqli_query($koneksi, $sql); 
    // var_dump($result);
    $jumlah = mysqli_num_rows(($result));
    // echo '<br>';
    // echo $jumlah;
    echo '
        <table border="2px">
    <tr>
        <th>No</th>
        <th>Kategori</th>
        <th>Hapus</th>
        <th>Update</th>
    </tr>
    
    '; 
    $no = $mulai+1;
    if ($jumlah > 1) {
        while ($row = mysqli_fetch_assoc($result)) {
            echo '<tr>';
            echo '<td>'.$no++.'</td>';
            echo '<td>'.$row['kategori'].'</td>';
            echo '<td><a href="?hapus='.$row['idkategori'].'">'.'Hapus'.'</a></td>';
            echo '<td><a href="?update='.$row['idkategori'].'">'.'update'.'</a></td>';
            echo '</tr>';

        }
    }
    echo '</table>';
?>
<!-- <div style="margin:auto; width: 750px;"> -->
    <!-- <h1>Belajar</h1> -->
</div>
<!-- <table border="2px">
    <tr>
        <th>No</th>
        <th>Kategori</th>
    </tr> -->
    <!-- <tr>
        <td>1</td>
        <td>Makanan</td>
    </tr>
    <tr>
        <td>2</td>
        <td>Minuman</td>
    </tr>
    <tr>
        <td>3</td>
        <td>Jajan</td>
    </tr>
    <tr>
        <td>4</td>
        <td>Oleh Oleh</td>
    </tr>
    <tr>
        <td>5</td>
        <td>Bingkisan</td>
    </tr>
</table> -->
