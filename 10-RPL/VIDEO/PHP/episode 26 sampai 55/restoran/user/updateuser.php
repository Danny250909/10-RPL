<?php 
    if (isset($_GET['id'])) {
        $id = $_GET['id'];
        $sql = "SELECT * FROM tbluser WHERE iduser = $id";
        $row = $db->getITEM($sql);
        // var_dump($row);

    }
?>
<h1>Update User</h1>
<!-- <a href="#">Tambah Data</a> -->
<!-- <h1>User</h1> -->
<div>
     <form action=""method="post">
         <div class="form-group w-50">
            <label for="">Nama User</label>
            <input type="text" name="user" required value="<?php echo $row['user'] ?>" class="form-control">

         </div>
         <div class="form-group w-50">
            <label for="">Email</label>
            <input type="email" name="email" required value="<?php echo $row['email'] ?>" class="form-control">

         </div>
         <div class="form-group w-50">
            <label for="">Password</label>
            <input type="password" name="password" required value="<?php echo $row['password'] ?>" class="form-control">

         </div>
         <div class="form-group w-50">
            <label for="">Konfirmasi Password</label>
            <input type="password" name="konfirmasi" required value="<?php echo $row['password'] ?>" class="form-control">

         </div>
         <div class="form-group w-50">
            <label for="">Level</label>
            <!-- <input type="password" name="konfirmasi" required placeholder="password" class="form-control"> -->
             <select name="level" id="">
                <option value="admin" <?php if($row['level']==="admin") echo "selected" ?>>admin</option>
                <option value="koki" <?php if($row['level']==="koki") echo "selected" ?>>koki</option>
                <option value="kasir" <?php if($row['level']==="kasir") echo "selected" ?>>kasir</option>
                <option value="waiters" <?php if($row['level']==="waiters") echo "selected" ?>>waiters</option>
             </select>

         </div>
         <div>
           <input type="submit" name="simpan" value="simpan" class="btn btn-primary">

         </div>
     </form>
</div>
<?php 
    if (isset($_POST['simpan'])) {
        $user = $_POST ['user'];
        $email = $_POST ['email'];
        $password = $_POST ['password'];
        $konfirmasi = $_POST ['konfirmasi'];
        $level = $_POST ['level'];
        if ($password === $konfirmasi) {
        $sql = "UPDATE tbluser SET user = '$user', email = '$email', password = '$password', level = '$level' WHERE iduser = $id";
        // echo "<h3>Password tidak sesuai</h3>";
        $db->runSQL($sql);
        header("location:?f=user&m=select");
        // echo $sql;
        }else {
            echo "<h3>Password tidak sesuai</h3>";
        }
        // $sql = "INSERT INTO tbluser VALUES ('', '$user','$email', $password, '$level', 1)";
        // echo $sql;
        // $db->runSQL($sql);
        // header("location:?f=user&m=select");
        
    }
?>
<?php 

?>