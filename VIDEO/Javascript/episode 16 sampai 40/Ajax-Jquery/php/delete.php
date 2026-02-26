<?php 

    require_once "koneksi.php";

    $data = stripslashes(file_get_contents("php://input"));
    $idpelanggan = json_decode($data, true);

    $idpelanggan = $idpelanggan['idpelanggan'];
    $alamat = $datapelanggan['alamat'];
    $telp = $datapelanggan['telp'];
    
    if (!empty($idpelanggan)) {
        $sql = "DELETE FROM tblpelanggan WHERE idpelanggan=$idpelanggan";
        if ($result = mysqli_query($con, $sql)) {
            echo "Data sudah dihapus !";
        } else {
            echo "Data gagal dihapus !";
        }
    } else {
        echo "Data belum dipilih";
    }
    
    
    // $result = mysqli_query($con, $sql);
    // echo $pelanggan;
    // echo "Sukses";