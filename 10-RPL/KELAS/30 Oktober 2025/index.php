<form action="" method="POST">
    Tanggal :
    <input type="number" name="tanggal" placeholder="Masukkan Tanggal"> 
    Bulan :
    <input type="number" name="bulan" placeholder="Masukkan Bulan"> 

    <input type="submit" name="kirim" value="Zodiak Anda : ">
</form>



<form action="" method="POST">
    <input type="number" name="a" placeholder="Masukkan Angka Pertama">
    <input type="number" name="b" placeholder="Masukkan Angka Kedua">

    <input type="submit" name="hitung" value="Jumlahkan">
    <input type="submit" name="hitung" value="Kalikan">
    <input type="submit" name="hitung" value="Kurangi">
    <input type="submit" name="hitung" value="Bagikan">
</form>
<?php 
    if (isset($_POST['hitung'])) {
        $hitung = $_POST['hitung'];
        $a = $_POST['a'];
        $b = $_POST['b'];

        if ($hitung == 'Jumlahkan') {
            echo "Penjumlahan dari $a + $b adalah === ";
            echo $a + $b;
        }

        if ($hitung == 'Kalikan') {
            echo "Perkalian dari $a * $b adalah === ";
            echo $a * $b;
        }

        if ($hitung == 'Kurangi') {
            echo "Pengurangan dari $a - $b adalah === ";
            echo $a - $b;
        }
        if ($hitung == 'Bagikan') {
            echo "Pembagian dari $a / $b adalah === ";
            echo $a / $b;
        }
    }
    echo '<br>';



    if (isset($_POST['kirim'])) {
        $tanggal = $_POST['tanggal'];
        $bulan = $_POST['bulan'];

        zodiak($bulan, $tanggal);
        echo '<br>';
    }


    function belajar(){
        echo "Hari ini kita belajar Function di PHP";
    }
    // belajar();
    // echo '<br>';

    // $tanggal = 17;
    // if ($tanggal > 0 && $tanggal < 32) {
    //     echo "";
    // }else {
    //     echo "";
    // }

    function cekTanggal($tanggal){
    // $tanggal = 25;


         if ($tanggal > 0 && $tanggal < 32) {
            return true;
          }else {
            return false;
         }
    }
    // cekTanggal(1);
    // cekTanggal(0);
    // cekTanggal(25);
    // echo '<br>';

    $tanggal = 17;
    $bulan = 11;

    // if ($tanggal > 0 && $tanggal < 32 && $bulan > 0 && $bulan < 13) {
    //     if ($bulan == 1) {
    //         if ($tanggal > 0 && $tanggal < 20) {
    //             echo "Zodiak anda adalah Capricorn ";
    //         }else {
    //             echo "Zodiak anda adalah Aquarius ";
    //         }
    //     }
    
    //     if ($bulan == 2) {
    //         if ($tanggal > 0 && $tanggal < 20) {
    //             echo "Zodiak anda adalah Aquarius ";
    //         }else {
    //             echo "Zodiak anda adalah Pisces ";
    //         }
    //     }

    //     if ($bulan == 3) {
    //         if ($tanggal > 0 && $tanggal < 21) {
    //             echo "Zodiak anda adalah Pisces ";
    //         }else {
    //             echo "Zodiak anda adalah Aries ";
    //         }
    //     }

    //     if ($bulan == 4) {
    //         if ($tanggal > 0 && $tanggal < 21) {
    //             echo "Zodiak anda adalah Aries ";
    //         }else {
    //             echo "Zodiak anda adalah Taurus ";
    //         }
    //     }

    //     if ($bulan == 5) {
    //         if ($tanggal > 0 && $tanggal < 22) {
    //             echo "Zodiak anda adalah Taurus ";
    //         }else {
    //             echo "Zodiak anda adalah Gemini ";
    //         }
    //     }

    //     if ($bulan == 6) {
    //         if ($tanggal > 0 && $tanggal < 22) {
    //             echo "Zodiak anda adalah Gemini ";
    //         }else {
    //             echo "Zodiak anda adalah Cancer ";
    //         }
    //     }

    //     if ($bulan == 7) {
    //         if ($tanggal > 0 && $tanggal < 23) {
    //             echo "Zodiak anda adalah Cancer ";
    //         }else {
    //             echo "Zodiak anda adalah Leo ";
    //         }
    //     }

    //     if ($bulan == 8) {
    //         if ($tanggal > 0 && $tanggal < 24) {
    //             echo "Zodiak anda adalah Leo ";
    //         }else {
    //             echo "Zodiak anda adalah Virgo ";
    //         }
    //     }

    //     if ($bulan == 9) {
    //         if ($tanggal > 0 && $tanggal < 24) {
    //             echo "Zodiak anda adalah Virgo ";
    //         }else {
    //             echo "Zodiak anda adalah Libra ";
    //         }
    //     }

    //     if ($bulan == 10) {
    //         if ($tanggal > 0 && $tanggal < 24) {
    //             echo "Zodiak anda adalah Libra ";
    //         }else {
    //             echo "Zodiak anda adalah Scorpio ";
    //         }
    //     }

    //     if ($bulan == 11) {
    //         if ($tanggal > 0 && $tanggal < 23) {
    //             echo "Zodiak anda adalah Scorpio ";
    //         }else {
    //             echo "Zodiak anda adalah Sagitarius ";
    //         }
    //     }

    //     if ($bulan == 12) {
    //         if ($tanggal > 0 && $tanggal < 22) {
    //             echo "Zodiak anda adalah Sagitarius ";
    //         }else {
    //             echo "Zodiak anda adalah Capricorn ";
    //         }
    //     }
    // }else {
    //     echo "Tanggal atau Bulan tidak valid ";
    // }

    function zodiak($bulan, $tanggal){
    if ($tanggal > 0 && $tanggal < 32 && $bulan > 0 && $bulan < 13) {
        if ($bulan == 1) {
            if ($tanggal > 0 && $tanggal < 20) {
                echo "Zodiak anda adalah Capricorn ";
            }else {
                echo "Zodiak anda adalah Aquarius ";
            }
        }
    
        if ($bulan == 2) {
            if ($tanggal > 0 && $tanggal < 20) {
                echo "Zodiak anda adalah Aquarius ";
            }else {
                echo "Zodiak anda adalah Pisces ";
            }
        }

        if ($bulan == 3) {
            if ($tanggal > 0 && $tanggal < 21) {
                echo "Zodiak anda adalah Pisces ";
            }else {
                echo "Zodiak anda adalah Aries ";
            }
        }

        if ($bulan == 4) {
            if ($tanggal > 0 && $tanggal < 21) {
                echo "Zodiak anda adalah Aries ";
            }else {
                echo "Zodiak anda adalah Taurus ";
            }
        }

        if ($bulan == 5) {
            if ($tanggal > 0 && $tanggal < 22) {
                echo "Zodiak anda adalah Taurus ";
            }else {
                echo "Zodiak anda adalah Gemini ";
            }
        }

        if ($bulan == 6) {
            if ($tanggal > 0 && $tanggal < 22) {
                echo "Zodiak anda adalah Gemini ";
            }else {
                echo "Zodiak anda adalah Cancer ";
            }
        }

        if ($bulan == 7) {
            if ($tanggal > 0 && $tanggal < 23) {
                echo "Zodiak anda adalah Cancer ";
            }else {
                echo "Zodiak anda adalah Leo ";
            }
        }

        if ($bulan == 8) {
            if ($tanggal > 0 && $tanggal < 24) {
                echo "Zodiak anda adalah Leo ";
            }else {
                echo "Zodiak anda adalah Virgo ";
            }
        }

        if ($bulan == 9) {
            if ($tanggal > 0 && $tanggal < 24) {
                echo "Zodiak anda adalah Virgo ";
            }else {
                echo "Zodiak anda adalah Libra ";
            }
        }

        if ($bulan == 10) {
            if ($tanggal > 0 && $tanggal < 24) {
                echo "Zodiak anda adalah Libra ";
            }else {
                echo "Zodiak anda adalah Scorpio ";
            }
        }

        if ($bulan == 11) {
            if ($tanggal > 0 && $tanggal < 23) {
                echo "Zodiak anda adalah Scorpio ";
            }else {
                echo "Zodiak anda adalah Sagitarius ";
            }
        }

        if ($bulan == 12) {
            if ($tanggal > 0 && $tanggal < 22) {
                echo "Zodiak anda adalah Sagitarius ";
            }else {
                echo "Zodiak anda adalah Capricorn ";
            }
        }
    }else {
        echo "Tanggal atau Bulan tidak valid ";
    }
    }
    // zodiak(9, 25);
    // echo '<br>';
    // zodiak(11, 17);

    function cekBulan($bulan){
        if ($bulan > 0 && $bulan < 13) {
            return true;
        }else {
            return false;
        }
    }

    if (cekBulan(11) && cekTanggal(17)) {
        echo 'Bulan dan Tanggal Benar';
    }else {
        echo 'Bulan atau Tanggal Salah!';
    }
    echo '<br>';

    function luasPersegiPanjang($p, $l){
        $luas = $p * $l;
        return $luas;
    }
    $p = 17;
    $l = 11;
    $t = 20;
    echo "Volume Balok dengan panjang $p, lebar $l dan tinggi $t adalah === ";
    echo luasPersegiPanjang($a, $b) * $t;

   // + * - /

    function tambah($a, $b){
        return $a + $b;
    }

    function kali($a, $b){
        return $a * $b;
    }

    function kurang($a, $b){
        return $a - $b;
    }

    function bagi($a, $b){
        return $a / $b;
    }
    $a = 17;
    $b = 11;
?>