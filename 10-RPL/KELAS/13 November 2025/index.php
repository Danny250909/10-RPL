<form action="" method="POST">

    <label for="NIS">NIS :</label> <br>
    <input type="number" name="NIS" id="NIS" required placeholder="Masukkan NIS"> <br>

    <label for="Nama">Nama :</label> <br>
    <input type="text" name="Nama" id="Nama" required placeholder="Masukkan Nama"> <br>

    <label for="Alamat">Alamat :</label> <br>
    <input type="text" name="Alamat" id="Alamat" placeholder="Masukkan Alamat"> <br>

    <label for="Telp">Nomer Telepon :</label> <br>
    <input type="text" name="Telp" id="Telp" placeholder="Masukkan Nomer Telp"> <br>

    <br>
    <input type="submit" name="simpan" value="simpan">
</form>

<?php 
    $db = 'dbsekolah';
    $host = 'localhost';
    $user = 'root';
    $password = '';
    $koneksi = mysqli_connect($host, $user, $password, $db);

    if (isset($_POST['simpan'])) {
        $NIS = $_POST['NIS'];
        $Nama = $_POST['Nama'];
        $Alamat = $_POST['Alamat'];
        $Telp = $_POST['Telp'];
        
        // echo $NIS, " - ", $Nama, " - ", $Alamat, " - ", $Telp;

        $sql = "INSERT INTO tblsiswa (NIS, Nama, Alamat, Telp) VALUES ($NIS, '$Nama', '$Alamat', '$Telp')";
        //echo $sql;

        $query = mysqli_query($koneksi, $sql);

    }
    $sql = "SELECT * FROM tblsiswa";

    $query = mysqli_query($koneksi, $sql);

    ?>
    <table border="1px">
        <thead>
            <tr>
                <th>NIS</th>
                <th>Nama</th>
                <th>Alamat</th>
                <th>Telp</th>
            </tr>
        </thead>
        <tbody>

        <?php  
        while ($siswa = mysqli_fetch_array($query)) {
        ?>

            <tr>
                <td><?php echo $siswa['NIS'] ?></td>
                <td><?php echo $siswa['Nama'] ?></td>
                <td><?php echo $siswa['Alamat'] ?></td>
                <td><?php echo $siswa['Telp'] ?></td>
            </tr>

    <?php 
        // echo $siswa['NIS'], ' - ', $siswa['Nama'], ' - ', $siswa['Alamat'],' - ' , $siswa['Telp'];
        // echo "<br>";
    }?>
    </tbody>
</table>
<?php  ?>


<div class="row mt-5">
    <div class="col">
        <p class="text-center">1980 - copyright@smkn2buduran.com</p>
    </div>
</div>