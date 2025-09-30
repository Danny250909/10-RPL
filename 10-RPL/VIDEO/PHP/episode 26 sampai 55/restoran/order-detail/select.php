<!-- <h1>Select Order-Detail</h1> -->
<!-- <h1>Select Order</h1> -->
<!-- History -->
<h2>Detail Pembelian</h2>
<div>
    <form action=""method="post">
        <div class="form-group w-50 float-left">
            <label for="">Tanggal Awl</label>
            <input type="date" name="tawal" required class="form-control">

        </div>
        <div class="form-group w-50 float-left">
            <label for="">Tanggal Akhir</label>
            <input type="date" name="takhir" required class="form-control">

        </div>
        <div>
           <input type="submit" name="simpan" value="Cari" class="btn btn-primary">

        </div>
    </form>
</div>
     <?php
    //  $email = $_SESSION['pelanggan'];
        if (isset($_POST['simpan'])) {
            $tawal = $_POST['tawal'];
            $takhir = $_POST['takhir'];
            // $sql = "SELECT * FROM vorderdetail WHERE pelanggan = '$email' AND (tglorder BETWEEN '$tawal' AND '$takhir') ORDER BY idorderdetail DESC";
            $sql = "SELECT * FROM vorderdetail WHERE (tglorder BETWEEN '$tawal' AND '$takhir') ORDER BY idorderdetail DESC";
            echo $sql;

        }
        $jumlahdata = $db->rowCOUNT("SELECT idorderdetail FROM vorderdetail "); 
        $banyak = 5;
        $halaman = ceil( $jumlahdata / $banyak);
        if (isset($_GET['p'])) {
        $p=$_GET['p'];
        $mulai = ($p * $banyak) - $banyak;
        // 1 = ((1 + 1) * 4 - 4)

        }else {
        $mulai = 0;
        }
    
        $sql = "SELECT * FROM vorderdetail ORDER BY idorderdetail DESC LIMIT $mulai, $banyak";
         if (isset($_POST['simpan'])) {
            $tawal = $_POST['tawal'];
            $takhir = $_POST['takhir'];
            // $sql = "SELECT * FROM vorderdetail WHERE pelanggan = '$email' AND (tglorder BETWEEN '$tawal' AND '$takhir') ORDER BY idorderdetail DESC";
            $sql = "SELECT * FROM vorderdetail WHERE (tglorder BETWEEN '$tawal' AND '$takhir') ORDER BY idorderdetail DESC";
            // echo $sql;

        }
        $row = $db->getALL($sql);
        // var_dump($row);
        $no = 1 + $mulai;
        $total = 0;
    ?>
    <!-- <div class="float-left mr-5">
        <a class="btn btn-primary" href="?f=kategori&m=insert" role="button">Tambah Data</a>
    </div> -->
<!-- <h2>Detail Pembelian</h2> -->
<table class="table table-bordered w-75">
    <thead>
        <th>No</th>
        <th>Pelanggan</th>
        <th>Tanggal</th>
        <th>Menu</th>
        <th>Harga</th>
        <th>Jumlah</th>
        <th>Total</th>
        <!-- <th>Pelanggan</th> -->
        <th>Alamat</th>
        <!-- <th>Bayar</th>
        <th>Kembali</th>
        <th>Status</th> -->
    </thead>
    <tbody>
    <?php if(!empty($row)) { ?>
        <?php foreach($row as $r): ?>
          
    <tr>
        <td><?php echo $no++ ?></td>
        <!-- <td>No</td> -->
        <td><?php echo $r['pelanggan'] ?></td>
        <td><?php echo $r['tglorder'] ?></td>
        <td><?php echo $r['menu'] ?></td>
        <td><?php echo $r['harga'] ?></td>
        <td><?php echo $r['jumlah'] ?></td>
        <td><?php echo $r['jumlah'] * $r['harga'] ?></td>
      
        <td><?php echo $r['alamat'] ?></td>
        <?php 
            $total = $total + ($r['jumlah'] * $r['harga']);
         ?>
            
        <?php endforeach ?>
    <?php } ?>
        </tbody>
    <tr>
        <td colspan="6"><h2>Grand Total</h2></td>
        <td><h3><?php echo $total ?></h3></td>
    </tr>
</table>
<?php 
     for ($i=1; $i <= $halaman ; $i++) { 
        echo '<a href="?f=orderdetail&m=select&p='.$i.'">'.$i.'</a>';
        echo '&nbsp &nbsp &nbsp';
    }
?>
<!-- <a href="?f=kategori&m=insert">Tambah Data</a> -->