<?php 
     if (isset($_GET['id'])) {
        $id = $_GET['id'];
        $sql = "DELETE FROM tblkategori WHERE idkategori=$id";
        // $row = $db->getITEM($sql);
        // echo $sql;
        $db->runSQL($sql);
        header("location:?f=kategori&m=select");
    }
?>