<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wiele do wielu</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>


    <header><h1>Artur Kuśka 4Ti gr 1</h1></header>
    <main>
        <div class="tab">
        <?php
            $servername = "sql7.freemysqlhosting.net";
            $username = "sql7373164";
            $password = "XblNhVncck";
            $dbname = "sql7373164";

            $conn = new mysqli($servername, $username, $password, $dbname);
            $result = $conn->query("SELECT lib_autor_tytul.id_autor_tytul as id, lib_autor.autor, lib_tytul.tytul FROM lib_autor_tytul JOIN lib_tytul on lib_autor_tytul.id_tytul = lib_tytul.id_tytul JOIN lib_autor on lib_autor_tytul.id_autor = lib_autor.id_autor");

            echo("<table class='tabelka' border=1>");
                echo("<tr>
                <th class='lp'>ID</th>
                <th>Nazwisko</th>
                <th>Tytul</th>
                </tr>");

                while($row=$result->fetch_assoc() ){
                    echo("<tr>");
                    echo("<td>".$row['id']."</td>");
                    echo("<td>".$row['autor']."</td>");
                    echo("<td>".$row['tytul']."</td>");
                    echo("</tr>");
                }

            echo("</table>");
            
        ?>
        </div>
</main>

<nav>



</nav>

<footer></footer>
</body>
<script src="main.js"></script>
</html>