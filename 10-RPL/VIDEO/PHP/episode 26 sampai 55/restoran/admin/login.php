<!-- <h1>Login Form</h1> -->
<?php 
    session_start();
    require_once "../dbcontroller.php";
    $db = new DB;
?>
 <!DOCTYPE html>
 <html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login Restoran</title>
      <link rel="stylesheet" href="../bootstrap/css/bootstrap.css">
 </head>
 <body>
    <div class="container">
        <div class="row">
            <div class="col-5 mx-auto mt-5">
                <div class="form-group">
                    <form action=""method="post">
                        <div>
                            <h4>Login Restoran</h4>
                        </div>
                    <div class="form-group">
                        <label for="">Email</label>
                        <input type="email" name="email" require class="form-control">

                    </div>
                    <div class="form-group">
                        <label for="">Password</label>
                        <input type="password" name="password" require class="form-control">

                    </div>
                    <div>
                    <input type="submit" name="login" value="Login" class="btn btn-primary">

                </div>
                    </form>
            </div>
        </div>
    </div>
 </body>
 </html>
 <?php 
    if (isset($_POST['login'])) {
        $email = $_POST['email'];
        $password = $_POST['password'];
        $sql = "SELECT * FROM tbluser WHERE email = '$email' AND password = '$password' ";
        $count = $db->rowCOUNT($sql);
        if ($count == 0) {
            echo "<center><h3>Email atau Password salah atau belum aktif</h3></center>";
        }else {
            $sql = "SELECT * FROM tbluser WHERE email = '$email' AND password = '$password' ";
            $row = $db->getITEM($sql);
            $_SESSION['user'] = $row['email'];
            $_SESSION['level'] = $row['level'];
            $_SESSION['iduser'] = $row['iduser'];
            // var_dump($_SESSION);
            header("location:index.php");
        }

        // echo $count;
        // echo $email.' - '.$password;
        // $row = $db->getITEM("SELECT * FROM tbluser WHERE email='$email' AND password=md5('$password') AND aktif=1");
        // // var_dump($row);
        // if ($row['iduser'] !='') {
        //     session_start();
        //     $_SESSION['user'] = $row['user'];
        //     $_SESSION['level'] = $row['level'];
        //     header("location:index.php");
        // }else {
        //     echo "<h3>Email atau Password salah atau belum aktif</h3>";
        // }

    }
 ?>