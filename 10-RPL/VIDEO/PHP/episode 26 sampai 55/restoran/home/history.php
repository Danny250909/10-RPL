<!-- History -->
     <?php
     $email = $_SESSION['pelanggan'];
        $jumlahdata = $db->rowCOUNT("SELECT idorder FROM vorder WHERE email = '$email' "); 
        $banyak = 5;
        $halaman = ceil( $jumlahdata / $banyak);
        if (isset($_GET['p'])) {
        $p=$_GET['p'];
        $mulai = ($p * $banyak) - $banyak;
        // 1 = ((1 + 1) * 4 - 4)

        }else {
        $mulai = 0;
        }
    
        $sql = "SELECT * FROM vorder WHERE email = '$email' ORDER BY tglorder DESC LIMIT $mulai, $banyak";
        $row = $db->getALL($sql);
        // var_dump($row);
        $no = 1 + $mulai;
        
    ?>
    <!-- <div class="float-left mr-5">
        <a class="btn btn-primary" href="?f=kategori&m=insert" role="button">Tambah Data</a>
    </div> -->
<h2>History Pembelian</h2>
<table class="table table-bordered w-50">
    <thead>
        <th>No</th>
        <th>Tanggal</th>
        <th>Total</th>
        <th>Detail</th>
        <!-- <th>Update</th> -->
    </thead>
    <tbody>
    <?php if(!empty($row)) { ?>
        <?php foreach($row as $r): ?>
    <tr>
        <td><?php echo $no++ ?></td>
        <!-- <td>No</td> -->
        <td><?php echo $r['tglorder'] ?></td>
        <td><?php echo $r['total'] ?></td>
        <td><a href="?f=home&m=detail&id=<?php echo $r['idorder'] ?>">Detail</a></td>
       
    </tr>
        <?php endforeach ?>
    <?php } ?>
    </tbody>
</table>
<?php 
     for ($i=1; $i <= $halaman ; $i++) { 
        echo '<a href="?f=home&m=history&p='.$i.'">'.$i.'</a>';
        echo '&nbsp &nbsp &nbsp';
    }
?>
<!-- <a href="?f=kategori&m=insert">Tambah Data</a> -->