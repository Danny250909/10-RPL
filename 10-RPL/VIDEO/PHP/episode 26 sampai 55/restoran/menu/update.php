<!-- <h1>Update Menu</h1> -->
<!-- <h1>Menu</h1> -->
 <?php 
    if (isset($_GET['id'])) {
        $id = $_GET['id'];
        $sql = "SELECT * FROM tblmenu WHERE idmenu = $id";
        $item = $db->getITEM($sql);
        $idkategori = $item['idkategori'];
        // $gambar = $item['gambar'];
        // echo $idkategori.'-'.$gambar;
        // var_dump($item);
        // echo $sql;
    }
    $row = $db->getALL("SELECT * FROM tblkategori ORDER BY kategori ASC")
    // $sql = "";
    // $row = $db->getALL($sql);
 ?>
 <!-- <?php if($idkategori == $r['idkategori']) echo "selected" ?> -->
<h1>Insert Menu</h1>
<div class="form-group">
 <form action="" method="post" enctype="multipart/form-data">
    <div class="form-group w-50">
        <label for="">Kategori</label><br>
        <select name="idkategori" id="">
            <?php  foreach($row as $r):?>
            <option  <?php if($idkategori == $r['idkategori']) echo "selected" ?> value="<?php echo $r['idkategori'] ?>"  ><?php echo $r['kategori'] ?></option>
            <?php endforeach ?>
        </select>
        <!-- <input type="text" name="menu" required placeholder="isi menu" class="form-control"> -->
    </div>
     <!-- <form action=""method="post"> -->

         <div class="form-group w-50">

            <label for="">Nama Menu</label>
            <input type="text" name="menu" required value="<?php echo $item['menu'] ?>" class="form-control">

         </div>
         <div class="form-group w-50">
            
            <label for="">Harga</label>
            <input type="text" name="harga" required value="<?php echo $item['harga'] ?>" class="form-control">

         </div>
         <div class="form-group w-50">
            
            <label for="">Gambar</label><br>
            <input type="file" name="gambar">

         </div>

            <!-- ctrl + shift + L -->
         <div>
           <input type="submit" name="simpan" value="simpan" class="btn btn-primary">

         </div>
     </form>
</div>
<?php 
    if (isset($_POST['simpan'])) {
        $idkategori = $_POST['idkategori'];
        $menu = $_POST['menu'];
        $harga = $_POST['harga'];
        $gambar = $item['gambar'];
        //$gambar = $_FILES['gambar']['name'];
        $temp = $_FILES['gambar']['tmp_name'];
        if (!empty($temp)) {
            $gambar = $_FILES;
            move_uploaded_file($temp, '../upload/'.$gambar);
        }
        $sql = "UPDATE tblmenu SET idkategori = $idkategori, menu = '$menu',
                gambar = '$gambar', harga = $harga WHERE idmenu = $id ";
        $db->runSQL($sql);
        header("location:?f=menu&m=select");

        // if (empty($gambar)) {
        //     echo "<h2>Gambar Kosong</h2>";
        // }else {
        //     $sql = "INSERT INTO tblmenu VALUES ('', $idkategori, '$menu', '$gambar', '$harga')";
        //     // echo $sql;
        //     move_uploaded_file($temp, '../upload/'.$gambar);
        //     $db->runSQL($sql);
        //     header("location:?f=menu&m=select");
        //  }

      //   $sql = "INSERT INTO tblmenu VALUES ('', $idkategori, '$menu', '$gambar', '$harga')";
        // echo $sql;
      //   $db->runSQL($sql);
      //   header("location:?f=menu&m=select");
        
    }
?>
