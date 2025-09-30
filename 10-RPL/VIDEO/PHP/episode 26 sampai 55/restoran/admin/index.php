<?php 
    session_start();
    require_once "../dbcontroller.php";
    $db = new DB;
    if (!isset($_SESSION['user'])) {
        header("location:login.php");
    }
    if (isset($_GET['log'])) {
        
            session_destroy();
            header("location:index.php");
        
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Page | Aplikasi Restoran</title>
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.css">
</head>
<body>
    <div class="container">
        <div class="row mt-4">
            <div class="col-md-5">
              <a href="index.php"> <h2>Admin Page</h2> </a>
            </div>
         <div col-md-10>
            <div class="float-right mt-5"><a href="?log=logout">logout</a></div>
            <div class="float-right mt-5 mr-5">User : <a href="?f=user&m=updateuser&id=<?php echo $_SESSION['iduser'] ?>"><?php echo $_SESSION['user'] ?></a></div>
            <div class="float-right mt-5 mr-5">Level : <?php echo $_SESSION['level'] ?></div>
            
         </div>
    </div>
        <div class="row mt-5">
            <div class="col-md-5">
                <!-- <h2>Admin Page</h2> -->
                 <ul class="nav flex-column">
                    <?php 
                        $level = $_SESSION['level'];
                        switch ($level) {
                            case 'admin':
                                echo '
                                  <li class="nav-item"><a class="nav-link" href="?f=kategori&m=select">kategori</a></li>
                                  <li class="nav-item"><a class="nav-link" href="?f=menu&m=select">Menu</a></li>
                                  <li class="nav-item"><a class="nav-link" href="?f=pelanggan&m=select">Pelanggan</a></li>
                                  <li class="nav-item"><a class="nav-link" href="?f=order&m=select">Order</a></li>
                                  <li class="nav-item"><a class="nav-link" href="?f=order-detail&m=select">Order Detail</a></li>
                                  <li class="nav-item"><a class="nav-link" href="?f=user&m=select">User</a></li>
                                ';
                                break;
                            case 'kasir':
                                echo '
                                
                                  <li class="nav-item"><a class="nav-link" href="?f=order&m=select">Order</a></li>
                                  <li class="nav-item"><a class="nav-link" href="?f=order-detail&m=select">Order Detail</a></li>
                                ';
                                break;
                            case 'koki':
                                echo '
                                
                                  
                                  <li class="nav-item"><a class="nav-link" href="?f=order-detail&m=select">Order Detail</a></li>
                                ';
                                break;
                            default:
                                echo 'Tidak ada menu';
                                break;
                        }
                    ?>
                    <!-- <li class="nav-item"><a class="nav-link" href="?f=kategori&m=select">kategori</a></li>
                    <li class="nav-item"><a class="nav-link" href="?f=menu&m=select">Menu</a></li>
                    <li class="nav-item"><a class="nav-link" href="?f=pelanggan&m=select">Pelanggan</a></li>
                    <li class="nav-item"><a class="nav-link" href="?f=order&m=select">Order</a></li>
                    <li class="nav-item"><a class="nav-link" href="?f=order-detail&m=select">Order Detail</a></li>
                    <li class="nav-item"><a class="nav-link" href="?f=user&m=select">User</a></li> -->
                 </ul>
            </div>
            <div class="col-md-10">
                   <!-- <h2>Tost</h2>  -->
                    <?php 
                        if (isset($_GET['f']) && isset($_GET['m'])) {
                            $f = $_GET['f'];
                            $m = $_GET['m'];
                            $file = '../'.$f.'/'.$m.'.php';
                            require_once $file;
                            // echo $file;
                            // echo $f.' - '.$m;

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