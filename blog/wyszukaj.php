<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bmemelog</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="style.css">
    <link rel="shortcut icon" href="ikona.png">
</head>
<body>

        <div class="it tyt">
            <div class="left">
                <a target="_blank" href="https://github.com/3ti-2020/crud-wiele-do-wielu-artur-kuska"><img class='git' src="http://pngimg.com/uploads/github/github_PNG42.png"></a>
               
                <?php
                session_start();
                $a = isset($_SESSION['zalogowano_a']);
                    if($a){
                    ?>
                    <form action="uwierzytelnie.php" method="get">
                    <input type="hidden" name="akcja" value="wyloguj">
                    <input class="btn2" type="submit" value="Wyloguj">
                </form>
                <?php
                    }
                ?>
            </div>
            <div class="right">
                <a href="./logowanie/logowanie.php"><button class="btn">Zaloguj się</button></a>
                <button class="btn">Top 5 memów poprzedniego mieciąca</button>

            </div>

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

                $conn = new mysqli($servername, $username, $password, $dbname);
                $result = $conn->query("SELECT DISTINCT post.id as pid, tekst, zdjecie, tag.tag FROM `lacz` JOIN tag ON tag.id = lacz.tag JOIN post on post.id = lacz.post where tag.tag like '_".$_POST['wyszukaj']."' order by pid desc");
                $result2 = $conn->query("SELECT tag FROM tag where tag not in (SELECT tag from tag)");
                $result3 = $conn->query("SELECT tag FROM tag");

                $tagi =0;

                $resultX = $conn->query("SELECT tag FROM `tag` WHERE tag like '_".$_POST['wyszukaj']."'");


                $numer=0;

                while ($row=$result3->fetch_assoc()) {
                     if("#".$_POST['wyszukaj']==$row['tag']){

                        $numer=1;
                
                    }
                };
                
                if($numer==1){
                    while($row=$result->fetch_assoc() ){
    
                            echo("<article class='post'>
                                <p class='opis'>".$row['tekst']."</p>");
                                $res2 = $conn->query("SELECT lacz.id, post.id, post.zdjecie, tag.tag as tag FROM `lacz` JOIN tag ON tag.id = lacz.tag JOIN post on post.id = lacz.post where post.id=".$row['pid']);
    
                            echo("<div class='o_tag'>");
                                while($row2=$res2->fetch_assoc() ){
                                    echo("<form action='wyszukaj_tag.php' method='post' class='form_tag'>
                                    <input type='submit' class='in_tag' name='wysz_tag' value='".$row2['tag']."'>
                                    </form>");
                                }
                            echo("</div>");
    
                            $zdj = $row['zdjecie'];
    
                            if("./zdjecie/".file_exists($zdj)){
                                echo("<img src='./zdjecia/". $row['zdjecie']."' class='zdj_p'>");
                            }else{
                                echo("<div class='gif'><img src='./zdjecia/czekaj.gif' class='zdj_g'></div>");
                            }
    
                            echo("</article>");


                    }}else{

                        echo("<article class='post'>
    
                                <p class='n_tag'> Nie ma takeigo tag'a w bazie</p>");
    
                        echo("</article>");

                    }
                   
            ?>
            
        </div>

        <div class="pas">

            <div class="menu">
                <div class="strg strg2">
                            <p class='tyt_tags'>Lista istniejących tagów</p>
                            <div class="list_tag">
                            <?php
                                $result3  = $conn->query("SELECT * from tag");
                                
                                $n_tag= 1;
                                while($row=$result3->fetch_assoc()){
                                    echo("<div>".$row['tag']."</div>");
                                    $n_tag=$n_tag+1;
                                }
                            ?>

                            </div>
                    <form action="wyszukaj.php" method="post" class='form_tag'>
                        <p class='in_t'>Wyszukaj tag:</p>
                        <p class='in_g'>#<input type='text' name='wyszukaj' class='in_t2'></p>
                        <input type="submit" class='in_s' value='Wyszukaj'>
                    </form>

                    <a href="index.php"><button class='in_s'>Meme oś</button></a>
                </div>

            </div>

            <div class="sponsor">
                <p class='margines'>Sponsor strategiczny Bmemelogu:</p>

                <img src='./zdjecia/sponsor.gif' class='zdj_gif'>
                <div class="spons">
                <p>Pośrednictwo Ubezpieczeniowe Grzegorz Kuśka</p>
                <p>tel: 783294001</p>
                <p>44-190 Knurów, ul. Dworcowa 38a</p>
            </div>

            </div>
        
        </div>
</body>
    <script src="dzejes.js"></script>
</html>