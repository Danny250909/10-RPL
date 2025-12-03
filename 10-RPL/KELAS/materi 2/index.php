<!--  function zodiak yang dilengkapi pengecekan tanggal dan bulan (PHP) -->
<h2>Cek Zodiak Kamu</h2>

<!-- Form input tanggal & bulan -->
<form method="POST">
    <label>Tanggal:</label>
    <input type="number" name="tanggal" min="1" max="31" required> 
    <br><br>

    <label>Bulan:</label>
    <input type="number" name="bulan" min="1" max="12" required>
    <br><br>


    <input type="submit" name="lihat" value="lihat">
</form>
<hr>
<?php 


function zodiak($tanggal, $bulan) {
    if (($bulan == 1 && $tanggal >= 20) || ($bulan == 2 && $tanggal <= 18)) {
        return "Aquarius";
    } elseif (($bulan == 2 && $tanggal >= 19) || ($bulan == 3 && $tanggal <= 20)) {
        return "Pisces";
    } elseif (($bulan == 3 && $tanggal >= 21) || ($bulan == 4 && $tanggal <= 19)) {
        return "Aries";
    } elseif (($bulan == 4 && $tanggal >= 20) || ($bulan == 5 && $tanggal <= 20)) {
        return "Taurus";
    } elseif (($bulan == 5 && $tanggal >= 21) || ($bulan == 6 && $tanggal <= 20)) {
        return "Gemini";
    } elseif (($bulan == 6 && $tanggal >= 21) || ($bulan == 7 && $tanggal <= 22)) {
        return "Cancer";
    } elseif (($bulan == 7 && $tanggal >= 23) || ($bulan == 8 && $tanggal <= 22)) {
        return "Leo";
    } elseif (($bulan == 8 && $tanggal >= 23) || ($bulan == 9 && $tanggal <= 22)) {
        return "Virgo";
    } elseif (($bulan == 9 && $tanggal >= 23) || ($bulan == 10 && $tanggal <= 22)) {
        return "Libra";
    } elseif (($bulan == 10 && $tanggal >= 23) || ($bulan == 11 && $tanggal <= 21)) {
        return "Scorpio";
    } elseif (($bulan == 11 && $tanggal >= 22) || ($bulan == 12 && $tanggal <= 21)) {
        return "Sagittarius";
    } elseif (($bulan == 12 && $tanggal >= 22) || ($bulan == 1 && $tanggal <= 19)) {
        return "Capricorn";
    } else {
        return "Tanggal atau bulan tidak valid.";
    }
}

// Contoh penggunaan
// echo zodiak(15, 8); // Output: Leo
// echo "<br>";
// echo zodiak(31, 12); // Output: Sagittarius

if(isset($_POST['lihat'])){
    $tanggal = $_POST['tanggal'];
    $bulan = $_POST['bulan'];
    $hasil = zodiak($tanggal, $bulan);
    echo "Zodiak kamu adalah: " . $hasil;
}

?>
