<?php
    $servername = "remotemysql.com";
    $username = "EItVVUd8zl";
    $password = "MadGhgwbbw";
    $dbname = "EItVVUd8zl";

    $conn = new mysqli($servername, $username, $password, $dbname);

    $conn->set_charset('utf-8');

    $tagi = $_POST['tags'];

    $n = count($tagi);

    echo("<br>");
    echo("<br>");
    echo("--------------------------------------");
    echo("<br>");
    echo("<br>");
    echo($n);
    echo("<br>");
    echo("<br>");
    echo($_POST['lacz_p']);

    echo($n);
    echo("<br>");
    echo("<br>");
    
    $pol = $conn->query("SELECT DISTINCT post.id as pid, post.tekst as txt, lacz.post as lpost FROM post JOIN lacz ON lacz.post = post.id");

    $nowy_post = 1;
    echo("<br>");
    echo("<br>laczp ");
    echo($_POST['lacz_p']);
    echo("<br>");
    echo("<br>");
    
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

    if($_POST['lacz_p']=!0){
        echo("<br>");
        echo("<br>laczp=/=0 ");
    }elseif($_POST['lacz_p']==0){
        echo("<br>");
        echo("<br>laczp=0 ");
    }
    echo("<br>");
    echo("<br>nowy ");
    echo($nowy_post);


    // header("location:logowanie.php");
?>