<?php
    $servername = "remotemysql.com";
    $username = "EItVVUd8zl";
    $password = "MadGhgwbbw";
    $dbname = "EItVVUd8zl";

    $conn = new mysqli($servername, $username, $password, $dbname);

    $sql= "DELETE FROM `lib_autor_tytul` WHERE id_autor_tytul='".$_POST['del']."'";

    mysqli_query($conn, $sql);

    header("location:index.php");
?>
