
    <div class="float-left mr-5">
        <a class="btn btn-primary" href="?f=menu&m=insert" role="button">Tambah Data</a>
    </div">
<h1>Menu</h1>
<?php 
    if (isset($_POST['opsi'])) {
        $opsi = $_POST['opsi'];
        $where = "WHERE idkategori = $opsi";
        // echo $where;
        // echo $opsi;
    }else {
        $opsi = 0;
        $where = "";
    }
?>
<div class="mt-5 mb-5">
    <?php 

        $row = $db->getALL("SELECT * FROM tblkategori ORDER BY kategori ASC");
        // var_dump($row);
    ?>
     <form action="" method="post">
        <select name="opsi" id="" onchange="this.form.submit()">
            <?php foreach($row as $r): ?>
            <option <?php if($r['idkategori']==$opsi) echo "selected"; ?> value="<?php echo $r['idkategori'] ?>">
            <?php echo $r['kategori'] ?>
            </option>
            <?php endforeach ?>
            <!-- <option value="">kategori 1</option> -->
            <!-- <option value="">kategori 2</option>
            <option value="">kategori 3</option> -->
        </select>
     </form>
</div>
    <?php
        $jumlahdata = $db->rowCOUNT("SELECT idmenu FROM tblmenu $where"); 
        $banyak = 2;
        $halaman = ceil( $jumlahdata / $banyak);
        if (isset($_GET['p'])) {
        $p=$_GET['p'];
        $mulai = ($p * $banyak - $banyak);
        // 1 = ((1 + 1) * 4 - 4)

        }else {
        $mulai = 1;
        }
    
        $sql = "SELECT * FROM tblmenu $where ORDER BY menu ASC LIMIT $mulai, $banyak";
        $row = $db->getALL($sql);
        // var_dump($row);
        $no = 1+$mulai;
        
    ?>
    
<table class="table table-bordered w-100">
    <thead>
        <th>No</th>
        <th>Menu</th>
        <th>Harga</th>
        <th>Gambar</th>
        <th>Delete</th>
        <th>Update</th>
    </thead>
    <tbody>
     <?php if(!empty($row)) { ?>
            <?php foreach($row as $r): ?>
        <tr>
            <td><?php echo $no++ ?></td>
            <!-- <td>No</td> -->
            <td><?php echo $r['menu'] ?></td>
            <td><?php echo $r['harga'] ?></td>
            <td><img style="width:150px;" src="../upload/<?php echo $r['gambar'] ?>" alt=""></td>
            <td><a href="?f=delete&m=update&id=<?php echo $r['idmenu'] ?>">Delete</a></td>
            <td><a href="?f=menu&m=update&id=<?php echo $r['idmenu'] ?>">Update</a></td>
        </tr>
            <?php endforeach ?>
            <?php } ?>
    </tbody>
</table>
<?php 
     for ($i=1; $i <= $halaman ; $i++) { 
        echo '<a href="?f=menu&m=select&p='.$i.'">'.$i.'</a>';
        echo '&nbsp &nbsp &nbsp';
    }
?>  
    <!-- <img src="../upload/makaroni-asin.jpg" alt=""> -->
<!-- <a href="?f=kategori&m=insert">Tambah Data</a> -->