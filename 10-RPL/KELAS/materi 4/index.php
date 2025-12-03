<?php 

$host = "localhost";
$user = "root";
$password = "";
$db   = "dbsekolah";

$koneksi = mysqli_connect($host, $user, $password, $db);

?>

<h2>Input Data Siswa</h2>

<form method="POST">
    <label>NIS:</label><br>
    <input type="number" name="nis" required><br><br>

    <label>Nama:</label><br>
    <input type="text" name="nama" required><br><br>

    <label>Alamat:</label><br>
    <input type="text" name="alamat" required><br><br>

    <label>Telepon:</label><br>
    <input type="text" name="telepon" required><br><br>

    <input type="submit" name="simpan" value="Simpan Data">
</form>

<?php 

// PROSES SIMPAN DATA
if (isset($_POST['simpan'])) {
    $nis = $_POST['nis'];
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $telepon = $_POST['telepon'];

    // Query INSERT
    $sql = "INSERT INTO tblsiswa (nis, nama, alamat, telepon) 
            VALUES ('$nis', '$nama', '$alamat', '$telepon')";

    // Eksekusi query
    if (mysqli_query($koneksi,$sql)) {
        echo "<p style='color:green;'>Data siswa berhasil disimpan.</p>";
    } else {
        echo "<p style='color:red;'>Error: " . mysqli_error($koneksi) . "</p>";
    }
}

?>

<h2>Data Siswa</h2>

<?php
$sql = "SELECT * FROM tblsiswa";
$hasil = mysqli_query($koneksi, $sql);

if (mysqli_num_rows($hasil) > 0) {
    echo "<table border='1' cellpadding='10'>
            <tr>
                <th>NIS</th>
                <th>Nama</th>
                <th>Alamat</th>
                <th>Telepon</th>
            </tr>";
    while($row = mysqli_fetch_assoc($hasil)) {
        echo "<tr>
                <td>".$row['nis']."</td>
                <td>".$row['nama']."</td>
                <td>".$row['alamat']."</td>
                <td>".$row['telepon']."</td>
              </tr>";
    }
    echo "</table>";
} else {
    echo "Tidak ada data siswa.";
}

mysqli_close($koneksi);
?>
