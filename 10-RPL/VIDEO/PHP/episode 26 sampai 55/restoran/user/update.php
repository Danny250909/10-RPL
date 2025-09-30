<!-- <h1>Update</h1> -->
 <?php 
    if (isset($_GET['id'])) {
        $id = $_GET['id'];
        $row = $db->getITEM("SELECT * FROM tbluser WHERE iduser = $id");
        // var_dump($row);
        if ($row['Aktif'] == 0) {
            $aktif = 1;
        }else {
            $aktif = 0;
        }
        // $aktif = 1;
        $sql = "UPDATE tbluser SET aktif = $aktif WHERE iduser = $id";
        // echo $sql;
        $db->runSQL($sql);
        header("location:?f=user&m=select");
    }
?>