<?php
    $servername = "sql7.freemysqlhosting.net";
    $username = "sql7373164";
    $password = "XblNhVncck";
    $dbname = "sql7373164";

    $conn = new mysqli($servername, $username, $password, $dbname);

    $sql= "INSERT INTO `lib_tytul`(`tytul`) VALUES ('".$_POST['tytul']."')";

    mysqli_query($conn, $sql);

    // header("location:http://artur-kuska-wdw.herokuapp.com/");

    header("location:http://localhost/strona/");
?>