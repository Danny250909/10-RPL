<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Web SMENDA</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
</head>
<body class="bg-light">
    <div class="container">

        <nav class="navbar bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand" href="./pages/jurusan.php">Jurusan</a>
        </div>
        </nav>
        <nav class="navbar bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand" href="./pages/kegiatan.php">Kegiatan</a>
        </div>
        </nav>
        <nav class="navbar bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand" href="./pages/kontak.php">Kontak</a>
        </div>
        </nav>
        <nav class="navbar bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand" href="./pages/prestasi.php">Prestasi</a>
        </div>
        </nav>
        <nav class="navbar bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand" href="./pages/sejarah.php">Sejarah</a>
        </div>
        </nav>

        <section class="mt-5">
                <!-- <form action="" method="get">
                    <input type="submit" name="kirim" value="click">
                </form> -->
                <?php 
                    if (isset($_GET['menu'])) {
                        $isi = $_GET['menu'];
                        // echo "Anda telah mengklik tombol ";
                        // echo $isi;
                        if ($isi == "Sejarah") {
                            require_once "pages/sejarah.php";
                        }

                        if ($isi == "Profile") {
                            require_once "pages/profil.php";
                        }

                        if ($isi == "Jurusan") {
                            require_once "pages/jurusan.php";
                        }

                        if ($isi == "Prestasi") {
                            require_once "pages/prestasi.php";
                        }

                        if ($isi == "Kegiatan") {
                            require_once "pages/kegiatan.php";
                        }

                        if ($isi == "kontak") {
                            require_once "pages/kontak.php";
                        }

                    }else {
                        require_once "pages/profil.php";
                    }

                    if (isset($_POST['tombol'])) {
                        $nama = $_POST['nama'];
                        $pesan = $_POST['pesan'];
                        $email = $_POST['email'];

                        echo "Nama : $nama <br>";
                        echo "Pesan : $pesan <br>";
                        echo "Email : $email <br>";
                    }
                ?>
        </section>

        <footer class="mt-5">
                <p>Web ini dibuat oleh Ditzzx.</p>
        </footer>
    </div>
</body>
</html>