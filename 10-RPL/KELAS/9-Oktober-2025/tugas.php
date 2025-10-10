<?php 
    $enter = '<br>';
    $menu = ['Profile', 'Kontak', 'Kegiatan', 'Jadwal'];
    $berita = 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero ea ad deleniti facilis sed ipsa vitae expedita exercitationem esse molestias cumque consectetur sit obcaecati dolor praesentium, quia reprehenderit repellat voluptatem.Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero ea ad deleniti facilis sed ipsa vitae expedita exercitationem esse molestias cumque consectetur sit obcaecati dolor praesentium, quia reprehenderit repellat voluptatem.Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero ea ad deleniti facilis sed ipsa vitae expedita exercitationem esse molestias cumque consectetur sit obcaecati dolor praesentium, quia reprehenderit repellat voluptatem.Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero ea ad deleniti facilis sed ipsa vitae expedita exercitationem esse molestias cumque consectetur sit obcaecati dolor praesentium, quia reprehenderit repellat voluptatem.';
    $img = 'berita.jpg';
    $gambar = 'berita.jpg';
    $logo = 'logo.jpg';
    $nama = 'NAMA: SMPN 4 SIDOARJO';
    $npsn = 'MPSN: 20501744';
    $status = 'STATUS: Negeri';
    $jenjang = 'JENJANG: SMP';
    $telepon = 'TELEPON: 0318963734';
    $fax = 'FAX: 0318969833';
    $email = 'EMAIL: smpn4sidoarjo1@gmail.com';
    $website = 'WEBSITE: http://www.smpn4sidoarjo.sch.id';
    $kelas = 'RUANG KELAS: 34';
    $toilet = 'SANITASI (TOILET): 8';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Website SPENIVDA</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
</head>
<body>
    <div>
        <ul>
            <a class="nav-link" href="../pages/index.html"> 
                <li href= "#">
                    <?= $menu [0]; ?>
                </li>
                <li href= "#">
                    <?= $menu [1]; ?>
                </li>
                <li href= "#">
                    <?= $menu [2]; ?>
                </li>
                <li href= "#">
                    <?= $menu [3]; ?>
                </li>
        </ul>
    </div>

    <div>
        <h2>Berita</h2>
        <div>
            <img src="<?= $gambar  ?>" alt="">
            <p><?= $berita ?></p>
        </div>
    </div>

    <div>
        <h2>Profile</h2>
        <div>
            <img src="<?= $logo ?>" alt="">
            <p><?= $nama.$enter.$npsn.$enter.$status.$enter.$jenjang ?></p>
        </div>
    </div>

    <div>
        <h2>Kontak</h2>
        <div>
            <p><?= $telepon.$enter.$fax.$enter.$email.$enter.$website.$enter ?></p>
        </div>
    </div>

    <div>
        <h2>Fasilitas</h2>
        <div>
            <p><?= $kelas.$enter.$toilet ?></p>
        </div>
    </div>
</body>
</html>