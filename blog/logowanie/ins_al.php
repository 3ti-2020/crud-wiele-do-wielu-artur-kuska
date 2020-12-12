<?php
    $servername = "remotemysql.com";
    $username = "EItVVUd8zl";
    $password = "MadGhgwbbw";
    $dbname = "EItVVUd8zl";

    $conn = new mysqli($servername, $username, $password, $dbname);

    $conn->set_charset('utf-8');


    $sqlT= "INSERT INTO `tag`(`tag`) VALUES ('".$_POST['tag']."')";
    $sqlP= "INSERT INTO `post`(`tekst`, `zdjecie`) VALUES ('".$_POST['tekst']."','".$_POST['zdjecie']."')";

    $t_t = $_POST['tag'];
    $txt = $_POST['tekst'];
    $zdj = $_POST['zdjecie'];

    if(empty($t_t) && empty($txt) && empty($zdj)){
        echo("1.<br>");
        echo("nic");
        mysqli_close($conn);
    }elseif(empty($t_t) && isset($txt) && isset($zdj)){
        echo("2.<br>");
        echo($txt);
        echo("<br>");
        echo("<br>");
        echo($zdj);
        echo("<br>");
        echo("<br>");
        echo("post");
        mysqli_query($conn, $sqlP);
    }elseif(isset($t_t) && empty($txt) && empty($zdj)){
        echo("3.<br>");
        echo($t_t);
        echo("<br>");
        echo("<br>");
        echo("tag");
        mysqli_query($conn, $sqlT);
    }elseif(isset($t_t) && isset($txt) && isset($zdj)){
        echo("4.<br>");
        echo($t_t);
        echo("<br>");
        echo("<br>");
        echo($txt);
        echo("<br>");
        echo("<br>");
        echo($zdj);
        echo("<br>");
        echo("<br>");
        echo("wsio");
        mysqli_query($conn, $sqlT);
        mysqli_query($conn, $sqlP);
    }

    header("location:logowanie.php");
?>
