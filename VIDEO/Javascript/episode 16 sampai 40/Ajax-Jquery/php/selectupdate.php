<?php 
    require_once "koneksi.php";

    $data = stripslashes(file_get_contents("php://input"));
    $idpelanggan = json_decode($data, true);

    $idpelanggan = $idpelanggan['idpelanggan'];

    $sql = "SELECT * FROM tblpelanggan WHERE idpelanggan = $idpelanggan";
    $result = mysqli_query($con, $sql);

    $row = mysqli_fetch_assoc($result);



    // print_r($result);

    // if (mysqli_num_rows($result) > 0) {
    //     $data = array();
    //     while ($row = mysqli_fetch_assoc($result)) {
    //         $data[] = $row;

    //     }
        // print_r($data);
    // }
echo json_encode($row);
