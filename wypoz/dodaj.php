<?php
    $servername = "remotemysql.com";
    $username = "EItVVUd8zl";
    $password = "MadGhgwbbw";
    $dbname = "EItVVUd8zl";

    $conn = new mysqli($servername, $username, $password, $dbname);

    $uzyt = $_POST['uzyt'];
    $ksiazka = $_POST['ksiazka'];
    $data = date("Y-m-d",time());

    $sql= "INSERT INTO `wypoz`(`id_u`, `id_k`, `d_wyp`) VALUES ('$uzyt','$ksiazka','$data')";

    mysqli_query($conn, $sql);

    // var_dump($uzyt);
    // var_dump($ksiazka);
    // var_dump($data);

    header("location:wyp.php");
?>