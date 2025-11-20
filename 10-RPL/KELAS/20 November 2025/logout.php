<h1>Anda Berhasil Logout</h1>

<?php 

    session_start();
    session_destroy();
    echo '<a href="login.php">Login Lagi</a>';

    header('Location: index.php');

?>