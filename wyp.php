<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Logowanie</title>
    <link rel="stylesheet" href="style.css">
    
</head>
<body>

    <header>
        <div class="zz">
            <a target="_blank" href="https://github.com/3ti-2020/crud-wiele-do-wielu-artur-kuska"><img class='zdj' src="http://pngimg.com/uploads/github/github_PNG42.png"></a>
        </div>

        <div class="ma">
            <h1>Artur Kuśka 4Ti gr1 nr7</h1>
            </div>

            <div class="yy">
            <?php
            session_start();
            $a = isset($_SESSION['zalogowano_a']);
            $u = isset($_SESSION['zalogowano_u']);
                if($a || $u){
                ?>
                <form action="uwierzytelnie.php" method="get">
                <input type="hidden" name="akcja" value="wyloguj">
                <input class="prg" type="submit" value="Wyloguj">
            </form>
            <?php
                }
            ?>
    </div>
        
    </header>
    <main>
        <div class="tab">
        <?php
            $servername = "remotemysql.com";
            $username = "EItVVUd8zl";
            $password = "MadGhgwbbw";
            $dbname = "EItVVUd8zl";

            $conn = new mysqli($servername, $username, $password, $dbname);
            $result = $conn->query("SELECT lib_tytul.tytul as tytuł, lib_autor.autor as autor, 
            konta.login as użytkownik, d_wyp as 'data wypożyczenia' , d_odd as 'data oddania' FROM wypoz JOIN lib_tytul ON lib_tytul.id_tytul=wypoz.id_k JOIN konta on konta.id=wypoz.id_u JOIN lib_autor_tytul ON lib_autor_tytul.id_tytul = lib_tytul.id_tytul JOIN lib_autor ON lib_autor_tytul.id_autor=lib_autor.id_autor") or die($conn->error);

            $conn->set_charset('utf-8');

            echo("<table class='tabelka' border=1>");
                echo("<tr>
                <th>Tytul</th>
                <th>Nazwisko</th>
                <th>Użytkownik</th>
                <th>Data wypożyczenia</th>
                <th>Data oddania</th>");
                echo("</tr>");

                while($row=$result->fetch_assoc() ){
                    echo("<tr>");
                    echo("<td>".$row['tytuł']."</td>");
                    echo("<td>".$row['autor']."</td>");
                    echo("<td>".$row['użytkownik']."</td>");
                    echo("<td>".$row['data wypożyczenia']."</td>");
                    echo("<td>".$row['data oddania']."</td>");                    
                    echo("</tr>");
                }

            echo("</table>");
        ?>
    </main>

    <nav>
        <div class="polaczone">
        <?php
            if($a){
            $servername = "remotemysql.com";
            $username = "EItVVUd8zl";
            $password = "MadGhgwbbw";
            $dbname = "EItVVUd8zl";

            $conn = new mysqli($servername, $username, $password, $dbname);
                        
            $conn->set_charset('utf-8');

            $res  = $conn->query("SELECT * FROM konta");
            $res2  = $conn->query("SELECT * FROM `lib_tytul`");
            ?>

            <form action="dodaj" method="post" class="allins">
            <select class="sel" name="tytul">
            <?php
                while($row=$res2->fetch_assoc()){
                    echo("<option class='sel' value='".$row['id_tytul']."'>".$row['tytul']."</option>");
                }
            ?>
            </select>

            <select class="sel" name="tytul">
            <?php
                while($mog=$res->fetch_assoc()){
                    echo('<option type="text" value="'.$mog['id'].'" class="uzyt" name="uzyt">'.$mog['login'].'</option>');
                }
            ?>
            </select>
            <input type="date" class='sel' name="d_wyp">
            <input type="date" class='sel' name="d_odd">
            <input type="submit" class='sel' value="Wypożycz">
            </form>

            <?php
            }else{
                echo("<div class='zal'><a class='baza' href='./../logowanie/logowanie.php'>Tylko administratorzy mogą wypożyczyć książkę</a></div>");
            }
        ?>
        
        </div>
    </nav>


    <footer>
        
        <a class='linkcard' href="./../index.php"><div class="karty">Strona główna</div></a>
        <a class='linkcard' href="./../card/index.php"><div class="karty">Karty</div></a>
        <a class='linkcard' href="./../logowanie/logowanie.php"><div class="karty">Logowanie</div></a>
        
    </footer>
</body>
<script src="main.js"></script>
</html>