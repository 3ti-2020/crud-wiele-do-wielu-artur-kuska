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
            $e = isset($_SESSION['zalogowano_e']);
                if($a || $u || $e){
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
            $result = $conn->query("SELECT wypoz.id_w, lib_tytul.tytul as tytuł, lib_autor.autor as autor, 
            konta.login as użytkownik, d_wyp as 'data wypożyczenia', d_p_odd as oddanie, datediff(d_p_odd, d_wyp) as dni FROM wypoz JOIN lib_tytul ON lib_tytul.id_tytul=wypoz.id_k JOIN konta on konta.id=wypoz.id_u JOIN lib_autor_tytul ON lib_autor_tytul.id_tytul = lib_tytul.id_tytul JOIN lib_autor ON lib_autor_tytul.id_autor=lib_autor.id_autor order by dni asc") or die($conn->error);

            $conn->set_charset('utf-8');

            echo("<table class='tabelka' border=1>");
                echo("<tr>
                <th>Tytul</th>
                <th>Nazwisko</th>
                <th>Użytkownik</th>
                <th>Data wypożyczenia</th>
                <th>Data planowanego oddania</th>");
                if($a || $e){
                    echo("<th class='lp'>Dni do oddania</th>");
                    echo("<th class='lp'>Oddanie</th>");
                }
                echo("</tr>");

                while($row=$result->fetch_assoc() ){
                    echo("<tr>");
                    echo("<td>".$row['tytuł']."</td>");
                    echo("<td>".$row['autor']."</td>");
                    echo("<td>".$row['użytkownik']."</td>");
                    echo("<td>".$row['data wypożyczenia']."</td>");
                    echo("<td>".$row['oddanie']."</td>");
                    
                    if($a || $e){
                        echo("<td>".$row['dni']."</td>");
                        echo("<td>
                                <form action='delete.php' method='post'>
                                    <input type='hidden' name='del' value='".$row['id_w']."'>
                                    <input class='dilit' type='submit' value='Oddaj'>
                                </form>
                                
                        </td>");
                    }

                    echo("</tr>");
                }

            echo("</table>");
        ?>
    </main>

    <nav>
        <div class="polaczone">
        <?php
            if($a || $e){
            $servername = "remotemysql.com";
            $username = "EItVVUd8zl";
            $password = "MadGhgwbbw";
            $dbname = "EItVVUd8zl";

            $conn = new mysqli($servername, $username, $password, $dbname);
                        
            $conn->set_charset('utf-8');

            $res  = $conn->query("SELECT * FROM konta");
            $res2  = $conn->query("SELECT * FROM `lib_tytul`");
            ?>

            <form action="dodaj.php" method="post" class="allins">

            <p class='ksio'>Książka:</p>

            <select class="sel" name='ksiazka'>
            <?php
                while($row=$res2->fetch_assoc()){
                    echo("<option class='sel' value='".$row['id_tytul']."'>".$row['tytul']."</option>");
                }
            ?>
            </select>

            <p class='ksio'>Użytkownik:</p>

            <select class="sel" name="uzyt" class="uzyt">
            <?php
                while($mog=$res->fetch_assoc()){
                    echo('<option type="text" value="'.$mog['id'].'"name="uzyt">'.$mog['login'].'</option>');
                }
            ?>
            </select>

            <p class='ksio'>Planowana data oddania:</p>

            <input type='date' class="sel" name="oddanie">

            <input type="submit" class='sel marina' value="Wypożycz">
            </form>

            <?php
            }else{
                echo("<div class='zal'><a class='baza' href='./../logowanie/logowanie.php'>Tylko uprawnieni do tego użytkownicy mogą wypożyczyć lub oddać książkę</a></div>");
            }
        ?>
        
        </div>
    </nav>


    <footer>


        <a class='linkcard' href="./../index.php"><div class="karty">Książki</div></a>
        <a class='linkcard' href="./../logowanie/logowanie.php"><div class="karty">Logowanie</div></a>
        <a class='linkcard' href="./../card/index.php"><div class="karty">Karty</div></a>
        <a class='linkcard' href="./wyp.php"><div class="karty">Wypożyczenia</div></a>
        
    </footer>
</body>
<script src="main.js"></script>
</html>
