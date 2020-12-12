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
    };

    

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
    
    $conn = new mysqli($servername, $username, $password, $dbname);

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

        echo("<br>");
        echo("<br>tag ");
        echo($tag);
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
    

    header("location:logowanie.php");
?>
