<?php 

    class Kalkulator {

        public function penjumlahan() {
            echo "Ini adalah method penjumlahan tanpa parameter";
            echo '<br>';
        }

        public function pengurangan() {
            echo "Ini adalah method pengurangan tanpa parameter";
            echo '<br>';
        }

        public function perkalian() {
            echo "Ini adalah method perkalian tanpa parameter";
            echo '<br>';
        }

        public function pembagian() {
            echo "Ini adalah method pembagian tanpa parameter";
            echo '<br>';
        }

    }

    $kalkulator = new Kalkulator();
    $kalkulator->penjumlahan();
    $kalkulator->pengurangan();
    $kalkulator->perkalian();
    $kalkulator->pembagian();

?>