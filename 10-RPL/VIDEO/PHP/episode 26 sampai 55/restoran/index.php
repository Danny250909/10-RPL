<!-- home -->

 <?php 
    session_start();
    require_once "dbcontroller.php";
    $db = new DB;
    $sql = "SELECT * FROM tblkategori ORDER BY kategori";
    $row = $db->getALL($sql);
    if (isset($_GET['log'])) {
        // $log = $_GET['log'];
        // echo $log;
        session_destroy();
        header("location:index.php");
    }
    function cart() {
        global $db;
        $cart = 0;
        // var_dump($_SESSION);
        foreach ($_SESSION as $key => $value) {
            if ($key<>'pelanggan' && $key<>'idpelanggan' && $key<>'user' && $key<>'level' && $key<>'iduser') {
            $id = substr ($key, 1);
            $sql = "SELECT * FROM tblmenu WHERE idmenu=$id";
            $row = $db->getALL($sql);
            foreach ($row as $r) {
                $cart++;
                // echo 'data';
                // $idmenu = $r['idmenu'];
                // $harga = $r['harga'];
                // $sql = "INSERT INTO tblorderdetail VALUES ('', $idorder, $idmenu, $value, $harga)";
                // $db->runSQL($sql);

            }

        }
    }
    return $cart;
}
// cart();
    // var_dump($row);
    // if (!isset($_SESSION['user'])) {
    //     header("location:login.php");
    // }
    // if (isset($_GET['log'])) {
        
    //         session_destroy();
    //         header("location:index.php");
        
    // }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Restoran Smenda | Aplikasi Restoran</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-5 mt-5">
                <h1><a href="index.php">Restoran Smenda</a></h1>
            </div>
         <div class="col-md-10">
            <?php 
                if (isset($_SESSION['pelanggan'])) {
                    echo '
                        <div class="float-right mt-5"><a href="?log=logout">Logout</a></div>
                        <div class="float-right mt-5 mr-5">Pelanggan :  '.$_SESSION['pelanggan'].' </div>
                        <div class="float-right mt-5 mr-5">Cart : ( <a href=?f=home&m=beli> '.cart().' </a> )</div>
                        <div class="float-right mt-5 mr-5"><a href="?f=home&m=history">History : </div>
                        ';
                }else {
                    echo '
                        <div class="float-right mt-5 mr-5"><a href="?f=home&m=login">Login</a></div>
                        <div class="float-right mt-5 mr-5"><a href="?f=home&m=daftar">Daftar</a></div>
                    ';
                }
             ?>
            <!-- <div class="float-right mt-5">Logout</div> -->
            <!-- <div class="float-right mt-5 mr-5">Login</div> -->
            <!-- <div class="float-right mt-5 mr-5">Pelanggan</div> -->
            <!-- <div class="float-right mt-5 mr-5">Daftar</div> -->
            
         </div>
        </div>
        <div class="row mt-5">
            <div class="col-md-5">
                <h2>Kategori</h2>
                <hr>
                    <?php if(!empty($row)) { ?>
                        <ul class="nav flex-column">
                           <?php foreach($row as $r): ?>
                            <li class="nav-item"><a class="nav-link" href="?f=home&m=produk&id=<?php echo $r['idkategori'] ?>"><?php echo $r['kategori'] ?></a></li>
                            <?php endforeach ?>
                            <!-- <li class="nav-item"><a class="nav-link" href="?f=menu&m=select">Menu</a></li>
                            <li class="nav-item"><a class="nav-link" href="?f=pelanggan&m=select">Pelanggan</a></li>
                            <li class="nav-item"><a class="nav-link" href="?f=order&m=select">Order</a></li>
                            <li class="nav-item"><a class="nav-link" href="?f=order-detail&m=select">Order Detail</a></li>
                            <li class="nav-item"><a class="nav-link" href="?f=user&m=select">User</a></li> -->
                        
                        </ul>
                    <?php } ?>
            </div>
            <div class="col-md-10">
                   <!-- <h2>Tost</h2>  -->
                    <?php 
                        // echo "<h1>Daftar Menu "."</h1>";
                        if (isset($_GET['f']) && isset($_GET['m'])) {
                             $f = $_GET['f'];
                             $m = $_GET['m'];
                             $file = $f.'/'.$m.'.php';
                             require_once $file;
                            //  echo $file;
                            //  echo $f.' - '.$m;
                       }else {
                           require_once "home/produk.php";
                       }
                    ?>
            </div>
        </div>
        <div class="row mt-5">
            <div class="col">
                <p class="text-center">1980 - copyright@smkn2buduran.com</p>
            </div>
        </div>
        <!-- <h1>Admin Page</h1> -->
    </div>
</body>
</html>