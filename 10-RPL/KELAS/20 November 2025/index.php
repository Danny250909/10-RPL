<form action="" method="POST">

    Email : 
    <input type="email" name="email" required placeholder="Masukkan Email">

    Password : 
    <input type="password" name="password" required placeholder="Masukkan Password">

    <input type="submit" name="login" value="login">

</form>

<?php 
    session_start();

    if (isset($_POST['login'])) {
        $email = $_POST['email'];
        $password = $_POST['password'];

        $_SESSION['email'] = $email;
        // $_SESSION['password'] = $password;

        header('Location: login.php');

        echo "Email : $email <br>";
        echo "Password : $password <br>";

    }

    $isi = "Halo Dunia";
    $hasil = isset($isi);
    echo $hasil;

    if (isset($isi)) {
        echo "Ada isinya";

    } else {
        echo "Tidak ada isinya";

    }

    var_dump($isi);

?>