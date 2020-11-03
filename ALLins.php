<?php
    $servername = "sql7.freemysqlhosting.net";
    $username = "sql7373164";
    $password = "XblNhVncck";
    $dbname = "sql7373164";

    $conn = new mysqli($servername, $username, $password, $dbname);

    $sqlA= "INSERT INTO `lib_autor`(`autor`) VALUES ('".$_POST['aAutor']."')";
    $sqlT= "INSERT INTO `lib_tytul`(`tytul`) VALUES ('".$_POST['aTyt']."')";

    mysqli_query($conn, $sqlA);
    mysqli_query($conn, $sqlT);

    $sqlIN= "INSERT INTO `lib_autor_tytul`(`id_autor`, `id_tytul`) VALUES ('".$_POST['vAutor']."','".$_POST['vTyt']."')";

    mysqli_query($conn, $sqlIN);

    header("location:http://artur-kuska-wdw.herokuapp.com/");

    // header("location:http://localhost/strona/");
?>