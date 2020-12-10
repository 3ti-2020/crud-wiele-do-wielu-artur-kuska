<?php
    $user = $_POST['user'];
    $haslo = $_POST['haslo'];

    $servername = "remotemysql.com";
    $username = "EItVVUd8zl";
    $password = "MadGhgwbbw";
    $dbname = "EItVVUd8zl";

    $conn = new mysqli($servername, $username, $password, $dbname);

    $conn->set_charset('utf-8');

    $sql = "INSERT INTO konta (`login`, `haslo`) VALUES ('$user', '$haslo')";

    mysqli_query($conn, $sql);

    session_start();
    if(isset($_SESSION['fail'])){
        unset($_SESSION['fail']);
    }

    header('Location: logowanie.php');
?>