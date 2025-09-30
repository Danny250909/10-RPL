<!-- <h1>Select Pelanggan</h1> -->
     <?php
        $jumlahdata = $db->rowCOUNT("SELECT idpelanggan FROM tblpelanggan "); 
        $banyak = 5;
        $halaman = ceil( $jumlahdata / $banyak);
        if (isset($_GET['p'])) {
        $p=$_GET['p'];
        $mulai = ($p * $banyak - $banyak);
        // 1 = ((1 + 1) * 4 - 4)

        }else {
        $mulai = 1;
        }
    
        $sql = "SELECT * FROM tblpelanggan ORDER BY pelanggan ASC LIMIT $mulai, $banyak";
        $row = $db->getALL($sql);
        // var_dump($row);
        $no = 1+$mulai;
        
    ?>
    <!-- <div class="float-left mr-5">
        <a class="btn btn-primary" href="?f=pelanggan&m=insert" role="button">Tambah Data</a>
    </div> -->
<h2>Pelanggan</h2>
<table class="table table-bordered w-75 mt-5">
    <thead>
        <th>No</th>
        <th>Pelanggan</th>
        <th>Alamat</th>
        <th>Telp</th>
        <th>Email</th>
        <th>Delete</th>
        <th>Status</th>
    </thead>
    <tbody>
        <?php foreach($row as $r): ?>
    <tr>
        <?php 
            if ($r['Aktif'] == 1) {
               $status = "Aktif";
            }else {
                $status = "Tidak Aktif";
            }
        ?>
        <td><?php echo $no++ ?></td>
        <!-- <td>No</td> -->
        <td><?php echo $r['pelanggan'] ?></td>
        <td><?php echo $r['alamat'] ?></td>
        <td><?php echo $r['telp'] ?></td>
        <td><?php echo $r['Alamat Email'] ?></td>
        <td><a href="?f=delete&m=update&id=<?php echo $r['idpelanggan'] ?>">Delete</a></td>
        <td><a href="?f=pelanggan&m=update&id=<?php echo $r['idpelanggan'] ?>"><?php echo $status ?></a></td>
    </tr>
        <?php endforeach ?>
    </tbody>
</table>
<?php 
     for ($i=1; $i <= $halaman ; $i++) { 
        echo '<a href="?f=pelanggan&m=select&p='.$i.'">'.$i.'</a>';
        echo '&nbsp &nbsp &nbsp';
    }
?>
<!-- <a href="?f=pelanggan&m=insert">Tambah Data</a> -->