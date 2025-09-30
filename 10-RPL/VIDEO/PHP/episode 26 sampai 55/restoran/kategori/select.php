    <?php
        $jumlahdata = $db->rowCOUNT("SELECT idkategori FROM tblkategori "); 
        $banyak = 5;
        $halaman = ceil( $jumlahdata / $banyak);
        if (isset($_GET['p'])) {
        $p=$_GET['p'];
        $mulai = ($p * $banyak - $banyak);
        // 1 = ((1 + 1) * 4 - 4)

        }else {
        $mulai = 1;
        }
    
        $sql = "SELECT * FROM tblkategori ORDER BY kategori ASC LIMIT $mulai, $banyak";
        $row = $db->getALL($sql);
        // var_dump($row);
        $no = 1+$mulai;
        
    ?>
    <div class="float-left mr-5">
        <a class="btn btn-primary" href="?f=kategori&m=insert" role="button">Tambah Data</a>
    </div>
<h2>Kategori</h2>
<table class="table table-bordered w-50">
    <thead>
        <th>No</th>
        <th>Kategori</th>
        <th>Delete</th>
        <th>Update</th>
    </thead>
    <tbody>
    <?php if(!empty($row)) { ?>
        <?php foreach($row as $r): ?>
    <tr>
        <td><?php echo $no++ ?></td>
        <!-- <td>No</td> -->
        <td><?php echo $r['kategori'] ?></td>
        <td><a href="?f=delete&m=update&id=<?php echo $r['idkategori'] ?>">Delete</a></td>
        <td><a href="?f=kategori&m=update&id=<?php echo $r['idkategori'] ?>">Update</a></td>
    </tr>
        <?php endforeach ?>
    <?php } ?>
    </tbody>
</table>
<?php 
     for ($i=1; $i <= $halaman ; $i++) { 
        echo '<a href="?f=kategori&m=select&p='.$i.'">'.$i.'</a>';
        echo '&nbsp &nbsp &nbsp';
    }
?>
<!-- <a href="?f=kategori&m=insert">Tambah Data</a> -->