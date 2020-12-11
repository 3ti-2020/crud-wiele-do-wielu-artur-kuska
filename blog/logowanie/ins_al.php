<?php
    $servername = "remotemysql.com";
    $username = "EItVVUd8zl";
    $password = "MadGhgwbbw";
    $dbname = "EItVVUd8zl";

    $conn = new mysqli($servername, $username, $password, $dbname);

    $conn->set_charset('utf-8');



    $sqlT= "INSERT INTO `tag`(`tag`) VALUES ('".$_POST['tag']."')";
    $sqlP= "INSERT INTO `post`(`tekst`, `zdjecie`) VALUES ('".$_POST['tekst']."','".$_POST['zdjecie']."')";
    
    $t = mysqli_query($conn, $sqlT);
    $p = mysqli_query($conn, $sqlP);
    

    if(empty($p)){
        $t;
    }elseif(empty($t)){
        $p;
    }else{
        $t;
        $p;
    }

    header("location:logowanie.php");
?>