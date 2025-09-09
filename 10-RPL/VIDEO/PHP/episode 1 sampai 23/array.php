<?php 
    //ARRAY DIMENSI

    // $nama = array("Noviati", "Tri", "Sari", "Dewi");
    // var_dump($nama);
    // echo "<br>";
    // echo $nama[0];
    // echo "<br>";

    // for ($i=0; $i < 4; $i++) { 
    //     // echo $i;
    //     echo $nama[ $i]."<br>";
    // }

    // foreach ($nama as $key) {
    //     echo $key."<br>";
    // }



    //ARRAY ASOSIATIF

    $nama = array(
        "Vivi" => "Madiun",
        "Daniel" => "Darjo nyell",
        "Yafi" => "Madiun",
        "Puspita" => "Surabaya"
    );

    $nama["Daniel"] = "Darjo";
    $nama["Vivi"] = "Madiun";
    $nama["Puspita"] = "Surabaya";
    $nama["Yafi"] = "Madiun";

    var_dump($nama);

    echo "<br>";
    
    // echo $nama['Daniel'];
    foreach ($nama as $key => $value) {
        echo $key." =>".$value;
        echo "<br>";
    }
?>