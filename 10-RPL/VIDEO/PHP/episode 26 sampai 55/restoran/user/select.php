<!-- <h1>Select User</h1> -->
     <?php
        $jumlahdata = $db->rowCOUNT("SELECT iduser FROM tbluser "); 
        $banyak = 5;
        $halaman = ceil( $jumlahdata / $banyak);
        if (isset($_GET['p'])) {
        $p=$_GET['p'];
        $mulai = ($p * $banyak - $banyak);
        // 1 = ((1 + 1) * 4 - 4)

        }else {
        $mulai = 1;
        }
    
        $sql = "SELECT * FROM tbluser ORDER BY user ASC LIMIT $mulai, $banyak";
        $row = $db->getALL($sql);
        // var_dump($row);
        $no = 1+$mulai;
        
    ?>
    <div class="float-left mr-5">
        <a class="btn btn-primary" href="?f=user&m=insert" role="button">Tambah Data</a>
    </div>
<h2>User</h2>
<table class="table table-bordered w-75 mt-5">
    <thead>
        <th>No</th>
        <th>User</th>
        <th>Email</th>
        <th>Level</th>
        <th>Delete</th>
        <th>Status</th>
    </thead>
    <tbody>
        <?php foreach($row as $r): ?>
            <?php 
            if ($r['aktif'] == 1) {
               $status = "Aktif";
            }else {
                $status = "Banned";
            }
        ?>
    <tr>
        <td><?php echo $no++ ?></td>
        <!-- <td>No</td> -->
        <td><?php echo $r['user'] ?></td>
        <td><?php echo $r['email'] ?></td>
        <td><?php echo $r['level'] ?></td>
        <td><a href="?f=delete&m=update&id=<?php echo $r['iduser'] ?>">Delete</a></td>
        <td><a href="?f=user&m=update&id=<?php echo $r['iduser'] ?>"><?php echo $status; ?></a></td>
    </tr>
        <?php endforeach ?>
    </tbody>
</table>
<?php 
     for ($i=1; $i <= $halaman ; $i++) { 
        echo '<a href="?f=user&m=select&p='.$i.'">'.$i.'</a>';
        echo '&nbsp &nbsp &nbsp';
    }
?>
<!-- <a href="?f=user&m=insert">Tambah Data</a> -->