<?php
    $servername = "remotemysql.com";
    $username = "EItVVUd8zl";
    $password = "MadGhgwbbw";
    $dbname = "EItVVUd8zl";

    $conn = new mysqli($servername, $username, $password, $dbname);

    $conn->set_charset('utf-8');

    $tagi = $_POST['tags'];

    $n = count($tagi);

    echo($n);
    echo("<br>");
    echo("<br>");
    
    $pol = $conn->query("SELECT DISTINCT post.id as pid, post.tekst as txt, lacz.post as lpost FROM post JOIN lacz ON lacz.post = post.id");

    $nowy_post = 1;
    
    while($row=$pol->fetch_assoc()){
        $nowy_post = $nowy_post+1;
    }
    for($i=0; $i<$n; $i++){
        $tag = intval($tagi[$i]);
        $sql = "INSERT INTO `lacz`(`tag`, `post`) VALUES ('".$tag."','".$_POST['lacz_p']."')";
        if($_POST['lacz_p']==0){
            $sql = "INSERT INTO `lacz`(`tag`, `post`) VALUES ('".$tag."','".$nowy_post."')";
            mysqli_query($conn, $sql);
        }else{
            mysqli_query($conn, $sql);
        }
    }


    header("location:./../index.php");
?>