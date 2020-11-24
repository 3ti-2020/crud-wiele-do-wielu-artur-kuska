<?php
    $servername = "remotemysql.com";
    $username = "EItVVUd8zl";
    $password = "MadGhgwbbw";
    $dbname = "EItVVUd8zl";

    $conn = new mysqli($servername, $username, $password, $dbname);

    $uzyt = $_POST['uzyt'];
    $ksiazka = $_POST['ksiazka'];
    $data = date("Y-m-d",time());
    $odd = $_POST['oddanie'];

    $sql= "INSERT INTO `wypoz`(`id_u`, `id_k`,  `d_wyp`, `d_p_odd`) VALUES ('$uzyt','$ksiazka','$data','$odd')";
    mysqli_query($conn, $sql);

    header("location:wyp.php");
?>