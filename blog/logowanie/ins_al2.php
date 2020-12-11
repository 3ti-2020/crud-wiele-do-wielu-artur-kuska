<?php
    $servername = "remotemysql.com";
    $username = "EItVVUd8zl";
    $password = "MadGhgwbbw";
    $dbname = "EItVVUd8zl";

    $conn = new mysqli($servername, $username, $password, $dbname);

    $conn->set_charset('utf-8');

    $sqlL= "INSERT INTO `lacz`(`tag`, `post`) VALUES ('".$_POST['lacz_t']."','".$_POST['lacz_p']."')";

    mysqli_query($conn, $sqlL);

    header("location:logowanie.php");
?>