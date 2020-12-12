<?php
    $servername = "remotemysql.com";
    $username = "EItVVUd8zl";
    $password = "MadGhgwbbw";
    $dbname = "EItVVUd8zl";

    $conn = new mysqli($servername, $username, $password, $dbname);

    $conn->set_charset('utf-8');



    $sqlL= "INSERT INTO `lacz`(`tag`, `post`) VALUES ('".$_POST['lacz_t']."','".$_POST['lacz_p']."')";
    $sqlT= "INSERT INTO `tag`(`tag`) VALUES ('".$_POST['tag']."')";
    $sqlP= "INSERT INTO `post`(`tekst`, `zdjecie`) VALUES ('".$_POST['tekst']."','".$_POST['zdjecie']."')";

    $l_t = $_POST['lacz_t'];
    $l_p = $_POST['lacz_p'];
    $t_t = $_POST['tag'];
    $txt = $_POST['tekst'];
    $zdj = $_POST['zdjecie'];

    $l = mysqli_query($conn, $sqlL);
    $t = mysqli_query($conn, $sqlT);
    $p = mysqli_query($conn, $sqlP);

    $c = mysqli_close($conn);

    if(isset($l_t)){
        if(isset($l_p)){
            $l;
        }
    }else{
        $c;
    }



    // if(isset($l_t) && isset($l_p)){
    //     $l;
    // }else{
    //     $c;
    // }

    // if(isset($t_t)){
    //     $t;
    // }else{
    //     $c;
    // }


    // if(isset($txt) && isset($zdj)){
    //     $p;
    // }else{
    //     $c;
    // }


    


    // if(empty($l && $t)){
    //     $p;
    // }elseif(empty($l && $p)){
    //     $t;
    // }elseif(empty($p && $t)){
    //     $l;
    // }elseif(empty($l)){
    //     $t;
    //     $p;
    // }elseif(empty($p)){
    //     $t;
    //     $l;
    // }elseif(empty($t)){
    //     $p;
    //     $l;
    // }else{
    //     $t;
    //     $p;
    //     $l;
    // }

    header("location:logowanie.php");
?>
