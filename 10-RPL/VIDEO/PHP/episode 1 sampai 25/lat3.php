<?php 
    // echo "Saya Belajar PHP";
    function belajar(){
         echo "Saya Belajar PHP";
    }
    function luaspersegi($p = 1, $l = 2){
    // $p = 1;
    // $l = 2;
    $luas = $p * $l;
    // $luas = $p + $l;
    echo $luas; 
    }
    function luas($p = 3, $l = 4){
    $luas = $p * $l;
    return $luas;
    // echo $luas;
    }
    function output(){
        // echo "Belajar Function";
        return "Belajar Function";
    }
     echo luas(6,7) * 5;
    // luas();
    // echo '<h2>'.output().'</h2>';
    // output(); 
    // luaspersegi(3,4);
    // $p = 1;
    // $l = 2;
    // $luas = $p * $l;
    // echo $luas;  
    // belajar();
    // belajar();
?>