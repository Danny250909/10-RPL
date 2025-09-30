<!-- <h1>Delete Menu</h1> -->
<?php 
     if (isset($_GET['id'])) {
        $id = $_GET['id'];
        $sql = "DELETE FROM tblmenu WHERE idmenu=$id";
        // $row = $db->getITEM($sql);
        // echo $sql;
        $db->runSQL($sql);
        header("location:?fmenu&m=select");
        
    }
    // ctrl + shift + L
?>