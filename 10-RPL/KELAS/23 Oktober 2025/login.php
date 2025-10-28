<h1>Login</h1>

<form action="" method="POST">
    <input type="email" name="email" placeholder="Masukkan Gmail" required> <br>
    <input type="password" name="password" placeholder="Masukkan Password" required> <br>
    <input type="submit" name="login" value="login"> <br>
</form>

<?php 
    if (isset($_POST['login'])) {
        $email = $_POST['email'];
        $password = $_POST['password'];

        if ($email == "Ditzzx.@gmail.com" && $password == "123") {
            // echo "Login Berhasil";
            $_SESSION['email'] = $email;    
            header("location: index.php");
        }else {
            echo "Email atau Password salah!";
        }

        // echo "Email : $email <br>";
        // echo "Password : $password <br>";
    }
?>