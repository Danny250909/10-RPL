<?php 

session_start();


if(!isset($_SESSION['email'])){
    echo "Anda belum login tuan <br>";
    echo "<a href='index.php'>Klik disini untuk login tuan</a>";
} else {
    echo "Halo, " . $_SESSION['email'] . " Anda sudah login. <br>";
    echo "<a href='logout.php'>Logout</a>";
}

?>
