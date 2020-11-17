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
                    unset($_SESSION['zalogowano_e']);
                    echo 'ZALOGOWANO A';
                }
                elseif($row['id_rola']==2){
                    $_SESSION['zalogowano_e'] = 2;
                    unset($_SESSION['zalogowano_a']);
                    unset($_SESSION['zalogowano_u']);
                    echo 'ZALOGOWANO E';
                }
                elseif($row['id_rola']==3){
                    $_SESSION['zalogowano_u'] = 3;
                    unset($_SESSION['zalogowano_a']);
                    unset($_SESSION['zalogowano_e']);
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
        if(!isset($_SESSION['zalogowano_a']) && !isset($_SESSION['zalogowano_u']) && !isset($_SESSION['zalogowano_u'])){
            $_SESSION['fail'] = 1;
        } 

    }
    if(isset($_GET['akcja']) && $_GET['akcja'] == 'wyloguj' ){
        unset($_SESSION['zalogowano_u']);
        unset($_SESSION['zalogowano_a']);
        unset($_SESSION['zalogowano_e']);
        echo 'WYLOGOWANO';
    }

    header('Location: index.php');
?>