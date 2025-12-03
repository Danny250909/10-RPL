<?php 

session_start();
session_destroy();
echo "Anda telah logout. <br>";
echo "<a href='index.php'>Klik disini untuk login kembali</a>";

?>
