<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wiele do wielu</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <header>
    <h1>Artur Kuśka 4Ti gr1 nr7</h1>
    </header>


    <main>
        <div class="tab">
        <?php
            $servername = "sql7.freemysqlhosting.net";
            $username = "sql7373164";
            $password = "XblNhVncck";
            $dbname = "sql7373164";

            $conn = new mysqli($servername, $username, $password, $dbname);
            $result = $conn->query("SELECT lib_autor_tytul.id_autor_tytul as id, lib_autor.autor, lib_tytul.tytul FROM lib_autor_tytul JOIN lib_tytul on lib_autor_tytul.id_tytul = lib_tytul.id_tytul JOIN lib_autor on lib_autor_tytul.id_autor = lib_autor.id_autor order by id asc");

            echo("<table class='tabelka' border=1>");
                echo("<tr>
                <th class='lp'>ID</th>
                <th>Nazwisko</th>
                <th>Tytul</th>
                <th class='lp'>Usun</th>
                </tr>");

                while($row=$result->fetch_assoc() ){
                    echo("<tr>");
                    echo("<td>".$row['id']."</td>");
                    echo("<td>".$row['autor']."</td>");
                    echo("<td>".$row['tytul']."</td>");
                    echo("<td>
                            <form action='delete.php' method='post'>
                                <input type='hidden' name='del' value='".$row['id']."'>
                                <input type='submit' value='Usuń'>
                            </form>
                    </td>");
                    echo("</tr>");
                }

            echo("</table>");
        ?>
        </div>
</main>

<nav>


    
    <div class="polaczone">
        <form action="ALLins.php" method="post" class="allins">
            <input class="ains" type="text" name="aAutor" placeholder="Autor">
            <input class="ains" type="text" name="aTyt" placeholder="Tytul">
            <input class="ains" type="submit" value="Dodaj parę">
            <input class="ains" type="reset" value="Usuń dane">
    <?php
        $servername = "sql7.freemysqlhosting.net";
        $username = "sql7373164";
        $password = "XblNhVncck";
        $dbname = "sql7373164";

        $conn = new mysqli($servername, $username, $password, $dbname);

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
            </div>


</nav>

<footer>

    <p>Jeżeli insert po prawej stronie nie jest wyśrodkowany należy kliknąć ctrl+f5.<br>Problem jest najprawdopodobniej po stornie heroku i nie zarwsze wyświetla sie strona poprawnie.</p>
    
</footer>
</body>
<script src="main.js"></script>
</html>
