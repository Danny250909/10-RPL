<!-- <h1>Registrasi Pelanggan</h1> -->
<!-- <a href="#">Tambah Data</a> -->
<h1>Registrasi Pelanggan</h1>
<div>
     <form action=""method="post">
         <div class="form-group w-50">
            <label for="">Pelanggan</label>
            <input type="text" name="pelanggan" required placeholder="isi pelanggan" class="form-control">

         </div>
         <div class="form-group w-50">
            <label for="">Alamat</label>
            <input type="text" name="alamat" required placeholder="isi alamat" class="form-control">

         </div>
         <div class="form-group w-50">
            <label for="">No Telp</label>
            <input type="text" name="telp" required placeholder="isi no telp" class="form-control">

         </div>
         <div class="form-group w-50">
            <label for="">Email</label>
            <input type="email" name="email" required placeholder="email" class="form-control">

         </div>
         <div class="form-group w-50">
            <label for="">Password</label>
            <input type="password" name="password" required placeholder="password" class="form-control">

         </div>
         <div class="form-group w-50">
            <label for="">Konfirmasi Password</label>
            <input type="password" name="konfirmasi" required placeholder="konfirmasi password" class="form-control">

         </div>
         <!-- <div class="form-group w-50">
            <label for="">Level</label>
             <select name="level" id="">
                <option value="admin">admin</option>
                <option value="koki">koki</option>
                <option value="kasir">kasir</option>
                <option value="waiters">waiters</option>
             </select>

         </div> -->
         <div>
           <input type="submit" name="simpan" value="simpan" class="btn btn-primary">

         </div>
     </form>
</div>
<?php 
    if (isset($_POST['simpan'])) {
        $pelanggan = $_POST ['pelanggan'];
        $alamat = $_POST ['alamat'];
        $telp = $_POST ['telp'];
        $email = $_POST ['email'];
        $password = $_POST ['password'];
        $konfirmasi = $_POST ['konfirmasi'];
        // $level = $_POST ['level'];
        if ($password === $konfirmasi) {
        $sql = "INSERT INTO tblpelanggan VALUES ('', '$pelanggan', '$alamat', '$telp','$email', $password, 1)";
        $db->runSQL($sql);
        header("location:?f=home&m=info");
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