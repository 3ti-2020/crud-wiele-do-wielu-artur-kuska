<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>

        <div class="it tyt">
        <a target="_blank" href="https://github.com/3ti-2020/crud-wiele-do-wielu-artur-kuska"><img class='git' src="http://pngimg.com/uploads/github/github_PNG42.png"></a>
                <button class="btn">Top 5 memów poprzedniego mieciąca</button>

                <!-- <div class="images">
                    <button type="button" class="btn prevBtn"><i class="fa fa-chevron-left"></i></button>
                    <button type="button" class="btn nextBtn"><i class="fa fa-chevron-right"></i></button>
                </div> -->
        </div>    

        <div class="it blg">
                       
            <?php

                $servername = "remotemysql.com";
                $username = "EItVVUd8zl";
                $password = "MadGhgwbbw";
                $dbname = "EItVVUd8zl";

                $wyszukaj = $_POST['wyszukaj'];

                $conn = new mysqli($servername, $username, $password, $dbname);
                $result = $conn->query("SELECT tekst, zdjecie, tag.tag as tags FROM `lacz` JOIN tag ON tag.id = lacz.tag JOIN post on post.id = lacz.post WHERE tags LIKE concat('#',$wyszukaj)");
                $res2 = $conn->query("SELECT DISTINCT post.id, tag.tag as tag FROM `lacz` JOIN tag ON tag.id = lacz.tag JOIN post on post.id = lacz.post");

                while($row=$result->fetch_assoc() ){
                    echo("<article class='post'>
                        <p class='opis'>".$row['tekst']."</p>");
                    
                        echo("<div class='o_tag'>");
                            while($row2=$res2->fetch_assoc() ){
                                echo(" <p class='opis_tag'>".$row2['tag']."</p>");
                            }
                    echo("</div>".$row['zdjecie']."
                        </article>");
                }
            ?>
            
        </div>

        <div class="pas">

        <div class="menu">

            <form action="wyszukaj.php" method="post" class='form_tag'>
                <p class='in_s'>Wyszukaj taga:</p>
                <p>#<input type='text' name='wyszukaj' class='in_s'></p>
                <input type="submit" class='in_s' value='Wyszukaj'>
            </form>

        </div>
        
        </div>
</body>
    <script src="dzejes.js"></script>
</html>