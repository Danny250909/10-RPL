<?php 
    session_start();
    echo $_SESSION['user'];
    echo '<br>';
    echo $_SESSION['nama tengah'];  
    echo '<br>';
    echo $_SESSION['nama belakang'];  
    echo '<br>';
    foreach ($_SESSION as $key => $value) {
        echo $key.'=>'.$value.'<br>';
    }
?>