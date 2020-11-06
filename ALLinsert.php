<?php
    $servername = "remotemysql.com";
    $username = "EItVVUd8zl";
    $password = "MadGhgwbbw";
    $dbname = "EItVVUd8zl";

    $conn = new mysqli($servername, $username, $password, $dbname);

    $sqlA= "INSERT INTO `lib_autor`(`autor`) VALUES ('".$_POST['aAutor']."')";
    $sqlT= "INSERT INTO `lib_tytul`(`tytul`) VALUES ('".$_POST['aTyt']."')";

    mysqli_query($conn, $sqlA);
    mysqli_query($conn, $sqlT);

    $sqlIN= "INSERT INTO `lib_autor_tytul`(`id_autor`, `id_tytul`) VALUES ('".$_POST['vAutor']."','".$_POST['vTyt']."')";

    mysqli_query($conn, $sqlIN);

    header("location:index.php");
?>