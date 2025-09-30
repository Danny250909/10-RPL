
  <!-- <div class="float-left mr-5">
        <a class="btn btn-primary" href="?f=menu&m=insert" role="button">Tambah Data</a>
    </div"> -->
<h1>Menu</h1>
<?php 
    // if (isset($_POST['opsi'])) {
    //     $opsi = $_POST['opsi'];
    //     $where = "WHERE idkategori = $opsi";
    //     // echo $where;
    //     // echo $opsi;
    // }else {
    //     $opsi = 0;
    //     $where = "";
    // }
?>
<div class="mt-5 mb-5">
    <?php 
        if (isset($_GET['id'])) {
            $id = $_GET['id'];
            $where = "WHERE idkategori = $id";
            $id = "&id=".$id;
            
            // echo $where;
        }else {
            $where = "";
            $id = "";
        }
        // $row = $db->getALL("SELECT * FROM tblkategori ORDER BY kategori ASC");
        // var_dump($row);
    ?>
     <!-- <form action="" method="post">
        <select name="opsi" id="" onchange="this.form.submit()">
           
            <option value="">kategori 1</option> -->
            <!-- <option value="">kategori 2</option>
            <option value="">kategori 3</option> -->
        <!-- </select>
     </form> -->
</div>
    <?php
        $jumlahdata = $db->rowCOUNT("SELECT idmenu FROM tblmenu $where"); 
        $banyak = 4;
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
    
<!-- <table class="table table-bordered w-100">
    <thead>
        <th>No</th>
        <th>Menu</th>
        <th>Harga</th>
        <th>Gambar</th>
         <th>Delete</th>
        <th>Update</th> -->
    <!-- </thead>
    <tbody>  -->
     <?php if(!empty($row)) { ?>
        <?php foreach($row as $r): ?>
            <div class="card" style="width: 10rem; float: left; margin-right:10px; margin-bottom:10px;">
                <img style="height: 150px;" src="upload/<?php echo $r['gambar'] ?>" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title"><?php echo $r['menu'] ?></h5>
                    <p class="card-text"><?php echo $r['harga'] ?></p>
                    <a class="btn btn-primary" href="?f=home&m=beli" role="button">Beli</a>
                </div>
            </div>
                
        <?php endforeach ?>
    <?php } ?>
<div style=""clear: both;>
    <!-- </tbody>
</table> -->
<?php 
     for ($i=1; $i <= $halaman ; $i++) { 
        echo '<a href="?f=home&m=produk&p='.$i.$id.'">'.$i.'</a>';
        echo '&nbsp &nbsp &nbsp';
    }
?>  
</div>
    <!-- <img src="../upload/makaroni-asin.jpg" alt=""> -->
<!-- <a href="?f=kategori&m=insert">Tambah Data</a> -->