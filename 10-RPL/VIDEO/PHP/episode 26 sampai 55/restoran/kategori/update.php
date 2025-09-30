<!-- <h1>Update Kategori</h1> -->
 <?php 
    if (isset($_GET['id'])) {
        $id = $_GET['id'];
        $sql = "SELECT * FROM tblkategori WHERE idkategori=$id";
        // echo $id;
        $row = $db->getITEM($sql);

    }
 ?>
<h1>Update Kategori</h1>
<div>
     <form action=""method="post">
         <div class="form-group w-50">
            <label for="">Nama Kategori</label>
            <input type="text" name="kategori" require value="<?php echo $row['kategori']?>" class="form-control">

         </div>
         <div>
           <input type="submit" name="simpan" value="simpan" class="btn btn-primary">

         </div>
     </form>
</div>
<?php 
    if (isset($_POST['simpan'])) {
        $kategori = $_POST['kategori'];
        $sql = "UPDATE tblkategori SET kategori='$kategori' WHERE idkategori=$id";
        // echo $sql;
        $db->runSQL($sql);
        header("location:?f=kategori&m=select");
        
    }
?>
