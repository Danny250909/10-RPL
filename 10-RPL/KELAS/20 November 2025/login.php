<?php 

    session_start();
    // echo "Selamat datang " . $_SESSION['email'];

    if (isset($_SESSION['email'])) {
        echo $_SESSION['email'];
        echo '<br>';
        echo '<a href="logout.php">Logout</a>';
    } else {
        echo "Registrasi dulu yaaa....";
        echo '<br>';
        echo '<a href="index.php">Login</a>';
    }
?>