<?php 
    $cookie_name = 'user';
    $cookie_value = 'Noviati';
    setcookie($cookie_name, $cookie_value);
    // $cookie_value = 'Tri Sari';
    setcookie($cookie_name, $cookie_value);
    echo $_COOKIE[$cookie_name];
    // setcookie("", "", time() - 3600);
    echo '<br>';
    var_dump($_COOKIE);
    
?>