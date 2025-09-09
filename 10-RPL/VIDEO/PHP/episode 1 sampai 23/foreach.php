<?php 
    // $nama = array("Noviati", "Tri", "Sari", "Dewi");
    // var_dump($nama);
    // echo '<br>';
    // foreach ($nama as $key) {
    //     echo $key.'<br>';

    // }

    $nama = array(
        "Vivi" => "Madiun",
        "Daniel" => "Darjo nyell",
        "Yafi" => "Madiun",
        "Puspita" => "Surabaya"

    );
    var_dump($nama);
    echo '<br>';
    foreach ($nama as $key => $value) {
        echo $key.' - '.$value;
        echo '<br>';
    };
?>