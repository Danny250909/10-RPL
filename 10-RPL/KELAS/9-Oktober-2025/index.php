Belajar PHP
<h1>Saya Belajar PHP</h1>
<?php 
    $nama = 'Aditya Daniel Nugraha';
    $kelas = 'X-RPL';
    $alamat = 'Grogol, Tulangan';
    $citacita = 'Trilionaire';
    $usia = '16 Tahun';
    $hobi = 'Tidur';
    $hobi = 'Tidur';
    $enter = '<br>';

    // echo $nama.$enter;
    // echo $usia.$enter;
    // echo $hobi.$enter;
    // echo $alamat.$enter;
    // echo $citacita.$enter;

    // echo 'Saya Belajar PHP';
    // echo '<br>';
    
    // echo 'Saya Kelas: ';
    // echo 10;
    // echo '<br>';

    // echo 'Nama: Aditya Daniel Nugraha';
    // echo '<br>';

    // echo 'Kelas: X-RPL';
    // echo '<br>';

    // echo 'Alamat: Grogol, Tulangan';
    // echo '<br>';

    // echo 'Hobi: Tidur';
    // echo '<br>';
    
    // echo 'Cita Cita: Trilionaire';
    // echo '<br>';


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Web Ditzzx.</title>
</head>
<body>
    <div>
        <h1>Identitas</h1>
        <table>
            <tbody>
                <tr>
                    <td>
                        Nama : 
                    </td>
                    <td>
                        <?= $nama ?>
                    </td>
                <tr>
                    <td>
                        Usia :
                    </td>
                    <td>
                        <?= $usia ?>
                    </td>
                </tr>
                <tr>
                    <td>
                        Hobi : 
                    </td>
                    <td>
                        <?= $hobi ?>
                    </td>
                </tr>
                <tr>
                    <td>
                        Alamat :
                    </td>
                    <td>
                        <?= $alamat ?>
                    </td>
                </tr>
                <tr>
                    <td>
                        Cita Cita :
                    </td>
                    <td>
                        <?= $citacita ?>
                    </td>
                </tr>
                </tr>
            </tbody>
        </table>
    </div>
</body>
</html>