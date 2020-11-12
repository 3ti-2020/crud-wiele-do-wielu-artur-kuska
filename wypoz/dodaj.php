<?php
    $servername = "remotemysql.com";
    $username = "EItVVUd8zl";
    $password = "MadGhgwbbw";
    $dbname = "EItVVUd8zl";

    $conn = new mysqli($servername, $username, $password, $dbname);

    $uzyt = $_POST['uzyt'];
    $ksiazka = $_POST['ksiazka'];
    $data = date("Y-m-d",time());
    $oddanie = $_POST['d_odd'];

    $sql= "INSERT INTO `wypoz`(`id_u`, `id_k`, `d_wyp`, `d_odd`) VALUES ('$uzyt','$ksiazka','$data','$oddanie')";
    
    // var_dump($uzyt);
    // var_dump($ksiazka);
    // var_dump($data);
    // var_dump($oddanie);

    mysqli_query($conn, $sql);

    header("location:wyp.php");
?>