<!--  login sistem yang terdiri dari login, logout dan tampilan menu (PHP) -->
<?php 
    session_start();
?>

<form action="" method="POST">

    <label for="email"> email : </label> <br>
    <input type="email" name="email" id="email" min="1" required> <br><br>

    <label for="password"> Password : </label> <br>
    <input type="password" name="password" id="password" min="1" required> <br><br>

    <input type="submit" name="login" value="Login">

</form>

<?php 

if(isset($_POST['login'])){
    $email = $_POST['email'];
    $password = $_POST['password'];

    echo "selamat datang, " . $email;
    $_SESSION['email'] = $email;
    $_SESSION['password'] = $password;

    echo "<br><a href='menu.php'>Menu</a>";
}

?>
