<?php 
    //OPERATOR MATEMATIKA
    $a = 1;
    $b = 2;
    $c = $a  + $b;
    echo $c.'<br>';
    $c = $a * $b;
    echo $c.'<br>';
    $c = $a ^ $b;
    echo $c.'<br>';
    //$c = $a / $b;
    //echo round($c);
    $c = $a / $b;
    echo floor($c).'<br>';
    $c = $a % $b;
    echo $c.'<br>';
    $c = $a - $b;
    echo $c.'<br>';


    //OPERATOR LOGIKA
    $c = $a < $b;
    echo $c;
    $c = $a > $b;
    echo $c;
    $c = $a == $b;
    echo $c.'<br>';
    $c = $a != $b;
    echo $c.'<br>';
    

    //INCREMENT
    //$a--;
    $a++;
    echo $a.'<br>';


    //OPERATOR STRING
    $kata = 'Sido';
    $kota = 'arjo';
    $hasil = $kata.$kota;
    $hasil .=' Kota Udang';
    echo $hasil;
?>