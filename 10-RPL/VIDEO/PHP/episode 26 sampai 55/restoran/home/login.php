<!-- Login -->
      <div class="row">
            <div class="col-5 mx-auto mt-5">
                <div class="form-group">
                    <form action=""method="post">
                        <div>
                            <h4>Login Pelanggan</h4>
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
<?php 
    if (isset($_POST['login'])) {
        $email = $_POST['email'];
        $password = $_POST['password'];
        $sql = "SELECT * FROM tblpelanggan WHERE email = '$email' AND password = '$password' AND aktif = 1";
        $count = $db->rowCOUNT($sql);
        if ($count == 0) {
            echo "<center><h3>Email atau Password salah atau belum aktif</h3></center>";
        }else {
             $sql = "SELECT * FROM tblpelanggan WHERE email = '$email' AND password = '$password' AND aktif = 1";
            $row = $db->getITEM($sql);
            $_SESSION['pelanggan'] = $row['email'];
            // $_SESSION['level'] = $row['level'];
            $_SESSION['idpelanggan'] = $row['idpelanggan'];
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