<?php
    $servername = "remotemysql.com";
    $username = "EItVVUd8zl";
    $password = "MadGhgwbbw";
    $dbname = "EItVVUd8zl";

    $conn = new mysqli($servername, $username, $password, $dbname);

    $conn->set_charset('utf-8');



    $sqlL= "INSERT INTO `lacz`(`tag`, `post`) VALUES ([value-2],[value-3])";
    $sqlT= "INSERT INTO `tag`(`tag`) VALUES ([value-2])";
    $sqlP= "INSERT INTO `post`(`tekst`, `zdjecie`) VALUES ([value-2],[value-3])";

    mysqli_query($conn, $sqlA);
    mysqli_query($conn, $sqlT);

    $sqlIN= "INSERT INTO `lib_autor_tytul`(`id_autor`, `id_tytul`) VALUES ('".$_POST['vAutor']."','".$_POST['vTyt']."')";

    mysqli_query($conn, $sqlIN);

    header("location:index.php");
?>