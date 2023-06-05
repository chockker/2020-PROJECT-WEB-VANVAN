<?php
    $connect = mysqli_connect("localhost","root","","vanvan")
    $filename = "changwat.json";
    $data = file_get_contents($filename);
    $array = json_decode($data, true);

    foreach ($array as $row) {
        $sql  =  "INSERT INTO province (name,cost,distrance,oilbill,time) VALUES ('".$row["name"]."','".$row["cost"]."','".$row["distrance"]."','".$row["oilbill"]."','".$row["time"]."')"
        mysqli_query($connect,$sql);
    }

    echo "Successfully"
?>