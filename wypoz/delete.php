<?php
    $servername = "remotemysql.com";
    $username = "EItVVUd8zl";
    $password = "MadGhgwbbw";
    $dbname = "EItVVUd8zl";

    $conn = new mysqli($servername, $username, $password, $dbname);

    $sql= "DELETE FROM `wypoz` WHERE wypoz.id_w='".$_POST['del']."'";

    mysqli_query($conn, $sql);

    header("location:wyp.php");
?>
