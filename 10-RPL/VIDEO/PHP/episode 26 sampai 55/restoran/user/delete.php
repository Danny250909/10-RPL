<!-- <h1>Delete Pelanggan</h1> -->
<?php 
     if (isset($_GET['id'])) {
        $id = $_GET['id'];
        $sql = "DELETE FROM tblpelanggan WHERE idpelanggan=$id";
        // $row = $db->getITEM($sql);
        // echo $sql;
        $db->runSQL($sql);
        header("location:?fpelanggan&m=select");
        
    }
    // ctrl + shift + L
?>