<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Książki</title>
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
            $result = $conn->query("SELECT lib_autor_tytul.id_autor_tytul as id, lib_autor.autor, lib_tytul.tytul FROM lib_autor_tytul JOIN lib_tytul on lib_autor_tytul.id_tytul = lib_tytul.id_tytul JOIN lib_autor on lib_autor_tytul.id_autor = lib_autor.id_autor order by id asc") or die($conn->error);

            echo("<table class='tabelka' border=1>");
                echo("<tr>
                <th>Nazwisko</th>
                <th>Tytul</th>");
                if($a || $e){
                    echo("<th class='lp'>Usun</th>");
                }
                echo("</tr>");

                while($row=$result->fetch_assoc() ){
                    echo("<tr>");
                    echo("<td>".$row['autor']."</td>");
                    echo("<td>".$row['tytul']."</td>");
                    
                    if($a || $e){
                        echo("<td>
                                <form action='delete.php' method='post'>
                                    <input type='hidden' name='del' value='".$row['id']."'>
                                    <input class='dilit' type='submit' value='Usuń'>
                                </form>
                        </td>");
                    }
                    echo("</tr>");
                }

            echo("</table>");
        ?>
        </div>
</main>

<nav>
    
    <div class="polaczone">
        <?php
            if($a || $e){
        ?>
                <form action="ALLinsert.php" method="post" class="allins">
                    <input class="ains" type="text" name="aAutor" placeholder="Autor">
                    <input class="ains" type="text" name="aTyt" placeholder="Tytul">
                    <input class="ains" type="submit" value="Dodaj Książkę">
                    <input class="ains" type="reset" value="Usuń podane dane">
                    <?php
                        $servername = "remotemysql.com";
                        $username = "EItVVUd8zl";
                        $password = "MadGhgwbbw";
                        $dbname = "EItVVUd8zl";

                        $conn = new mysqli($servername, $username, $password, $dbname);

                        $conn->set_charset('utf-8');

                        $res  = $conn->query("SELECT id_autor as id FROM  lib_autor order by id_autor DESC");
                        $res2 = $conn->query("SELECT id_tytul as id FROM  lib_tytul order by id_tytul DESC");

                            echo('<select class="sel" name="vAutor">');
                            while($row=$res->fetch_assoc()){
                                echo('<option class="sel" value="'.($row['id']+1).'">'.$row['id'].'</option>');
                            }
                            
                            echo('</select>');

                            echo('<select class="sel" name="vTyt">');
                                while($row=$res2->fetch_assoc()){
                                    echo('<option class="sel" value="'.($row['id']+1).'">'.$row['id'].'</option>');
                                }
                            echo('</select>');
                    ?>
                </form>
            <?php
            }else{
                echo("<div class='zal'><a class='baza' href='./logowanie/logowanie.php'>Tylko uprawnieni do tego użytkownicy mogą edytować zbiór książek</a></div>");
            }
        ?>
        
    </div>

    


</nav>

<footer>
    
    <a class='linkcard' href="./index.php"><div class="karty">Książki</div></a>
    <a class='linkcard' href="./logowanie/logowanie.php"><div class="karty">Logowanie</div></a>
    <a class='linkcard' href="./card/index.php"><div class="karty">Karty</div></a>
    <a class='linkcard' href="./wypoz/wyp.php"><div class="karty">Wypożyczenia</div></a>
    
</footer>
</body>
</html>