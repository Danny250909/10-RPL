<?php
// ======================
// DATA WEB SEKOLAH (variabel semua)
// ======================

// Navbar
$judul_web = "Web Sekolah";
$menu = [
    "Profil" => "#profil",
    "Prestasi" => "#prestasi",
    "Jadwal Pelajaran" => "#jadwal"
];

// Profil Sekolah
$profil_judul = "Profil Sekolah";
$profil_deskripsi = "Selamat datang di Web Sekolah Kami. Kami berkomitmen untuk memberikan pendidikan terbaik bagi siswa-siswi kami.";
$profil_gambar = "assets/smenda1.jpg";

// Prestasi Sekolah
$prestasi_judul = "Prestasi Sekolah";
$prestasi_list = [
    [
        "gambar" => "assets/prestasi1.jpg",
        "deskripsi" => "Selamat dan sukses Tim SMKN 2 Buduran (HENGKEL TZY) meraih juara the most innovative team dalam JHIC Tingkat Nasional di Maspion IT 8 Nov 2025."
    ],
    [
        "gambar" => "assets/prestasi2.jpg",
        "deskripsi" => "Prestasi membanggakan diraih oleh Erfa Ilmi Bayu Pratama kelas XI Bisnis Digital 1. Mendapat medali emas Tolak Peluru Putra dalam PEPARPENAS XI 2025 di Jakarta."
    ],
    [
        "gambar" => "assets/prestasi3.jpg",
        "deskripsi" => "Tim Karya Tulis Ilmiah SMKN 2 Buduran meraih Juara 2 dengan karya “Si Baca – Website Interaktif Digital untuk Pelestarian Cerita Rakyat Sidoarjo”."
    ]
];

// Jadwal Pelajaran
$jadwal_judul = "Jadwal Pelajaran";
$jadwal_keterangan = "Berikut adalah jadwal pelajaran untuk sekolah ini:";
$jadwal = [
    ["hari" => "Senin", "mapel" => "Matematika", "waktu" => "08.00 - 10.00"],
    ["hari" => "Selasa", "mapel" => "Bahasa Indonesia", "waktu" => "10.00 - 12.00"],
    ["hari" => "Rabu", "mapel" => "IPA", "waktu" => "08.00 - 10.00"],
];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $judul_web ?></title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<!-- ====================== NAVBAR ====================== -->
<nav>
    <h3><?= $judul_web ?></h3>
    <ul>
        <?php foreach($menu as $nama => $link): ?>
            <li><a href="<?= $link ?>"><?= $nama ?></a></li>
        <?php endforeach; ?>
    </ul>
</nav>

<!-- ====================== PROFIL ====================== -->
<section id="profil">
    <h2><?= $profil_judul ?></h2>
    <img src="<?= $profil_gambar ?>" alt="Profil Sekolah">
    <p><?= $profil_deskripsi ?></p>
</section>

<!-- ====================== PRESTASI ====================== -->
<section id="prestasi">
    <h2><?= $prestasi_judul ?></h2>

    <div class="gambar">
        <?php foreach($prestasi_list as $item): ?>
            <div class="prestasisekolah">
                <img src="<?= $item['gambar'] ?>" alt="Prestasi">
                <p class="deskripsi"><?= $item['deskripsi'] ?></p>
            </div>
        <?php endforeach; ?>
    </div>
</section>

<!-- ====================== JADWAL ====================== -->
<section id="jadwal">
    <h2><?= $jadwal_judul ?></h2>
    <p><?= $jadwal_keterangan ?></p>

    <table border="1" cellpadding="10">
        <tr>
            <th>Hari</th>
            <th>Mata Pelajaran</th>
            <th>Waktu</th>
        </tr>

        <?php foreach($jadwal as $row): ?>
            <tr>
                <td><?= $row['hari'] ?></td>
                <td><?= $row['mapel'] ?></td>
                <td><?= $row['waktu'] ?></td>
            </tr>
        <?php endforeach; ?>
    </table>
</section>

</body>
</html>
