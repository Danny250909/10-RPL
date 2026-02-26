<!-- <h1>Delete user</h1> -->
<?php 
     if (isset($_GET['id'])) {
        $id = $_GET['id'];
        $sql = "DELETE FROM tbluser WHERE iduser=$id";
        // $row = $db->getITEM($sql);
        // echo $sql;
        $db->runSQL($sql);
        header("location:?fuser&m=select");
        
    }
    // ctrl + shift + L
?>