<?php
session_start();

    if(isset($_POST['user']) && isset($_POST['haslo'])){

        $servername = "remotemysql.com";
        $username = "EItVVUd8zl";
        $password = "MadGhgwbbw";
        $dbname = "EItVVUd8zl";

        $conn = new mysqli($servername, $username, $password, $dbname);

        $conn->set_charset('utf-8');

        $result = $conn -> query("SELECT * FROM konta");
        
        while($row=$result->fetch_assoc()){

            echo($row['login']." ".$row['haslo']);
            if($row['login']==$_POST['user'] && $row['haslo']==$_POST['haslo']){
                if($row['id_rola']==1){
                    $_SESSION['zalogowano_a'] = 1;
                    unset($_SESSION['zalogowano_u']);
                echo 'ZALOGOWANO A';
                }
                elseif($row['id_rola']==0){
                    $_SESSION['zalogowano_u'] = 1;
                    unset($_SESSION['zalogowano_a']);
                    echo 'ZALOGOWANO U';
                }
                if(isset($_SESSION['fail'])){
                    unset($_SESSION['fail']);
                }
                if(isset($_SESSION['fail'])){
                    unset($_SESSION['fail']);
                }
            }
        }
        if(!isset($_SESSION['zalogowano_a']) && !isset($_SESSION['zalogowano_u'])){
            $_SESSION['fail'] = 1;
        } 

    }
    if(isset($_GET['akcja']) && $_GET['akcja'] == 'wyloguj' ){
        unset($_SESSION['zalogowano_u']);
        unset($_SESSION['zalogowano_a']);
        echo 'WYLOGOWANO';
    }

    header('Location: wyp.php');
?>