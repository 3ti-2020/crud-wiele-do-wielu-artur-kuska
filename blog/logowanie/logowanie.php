<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bmemelog</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="style.css">
    <link rel="shortcut icon" href="../ikona.png">
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
                        <input class="btn2 dsf" type="submit" value="Wyloguj">
                    </form>
                    <?php
                        }
                ?>
            </div>

                <div class="right">
                    <a href="../index.php"><button class="btn">Meme oś</button></a>
                </div>

            </div>
        </div>     

        <div class="it blg">
                <?php
                $a = isset($_SESSION['zalogowano_a']);
                    if($a){
                    ?>
        
            <div class="container">

                    <form action="ins_al.php" method="post" class='ins_p'>
                     <div class="ramka in_post">

                        <p class='tyt_in'>Nowy post:</p>

                        <textarea name="tekst" id="tekst" class="tekst pole_style" placeholder='Treść opisu'></textarea>
                        <input name="zdjecie" class='in_p pole_style2' type='file' value='null' accept='image/*'>

                        
                
                </div>
            
                <div class="ramka in_tag">
                    <p class='tyt_in'>Nowy tag:</p>
                        
                    <input name="tag" class='in_p pole_style' type='text' placeholder='#tag'>
                    <input type="submit" value="Dodaj" class='submit subtop'>

                </div>

                    <div class="ramka in_lacz">


                            <p class='tyt_in'>Dodaj:</p>
                            
                        <select class="sel pole_style" name='lacz_p'>
                            <?php
                                $servername = "remotemysql.com";
                                $username = "EItVVUd8zl";
                                $password = "MadGhgwbbw";
                                $dbname = "EItVVUd8zl";
                            
                                $conn = new mysqli($servername, $username, $password, $dbname);
                            
                                $conn->set_charset('utf-8');
                                
                                $result4  = $conn->query("SELECT DISTINCT post.id as pid, post.tekst as txt, lacz.post as lpost FROM post left JOIN lacz ON lacz.post = post.id");

                                $n_post= 1;

                                    echo("<option class='in_p pole_style'>Wybierz</option>");
                                while($row=$result4->fetch_assoc()){
                                    echo("<option class='in_p pole_style' value=".$row['lpost']."> ".$row['txt']."</option>");
                                    $n_post= $n_post+1;
                                }
                                echo("<option class='in_p pole_style' value=".$n_post."> Nowy post</option>");
                            ?>
                        </select>
                        <div class="list_tag">
                        <?php
                            $result3  = $conn->query("SELECT * from tag");
                            
                            $n_tag= 1;
                            while($row=$result3->fetch_assoc()){
                                echo("<div><input type='checkbox' name='tags[]' value='".$row['id']."'> ".$row['tag']."</div>");
                                $n_tag=$n_tag+1;
                            }
                            echo("<div><input type='checkbox' name='tags[]' value=".$n_tag."> Nowy tag</div>");

                        ?>

                        </div>

                    </div>

                </form>
            </div>
            
            <?php
                    }
                ?>
        </div>

    <div class="pas">

            <?php
                $a = !isset($_SESSION['zalogowano_a']);
                if($a){
            ?>

            <form action="uwierzytelnie.php" method="post" class="zaloguj">
                <input class="btn3" type="text" name="user" placeholder="nazwa uzytkownika">
                <input class="btn3" type="password" name="haslo" placeholder="haslo">
                <input class="btn3" type="submit" value="Zaloguj">
            </form>
                <div class="zaloguj">
                    <button class="btn3 lewo" onclick="powiadomienie()">Info</button>
                </div>
                
            <?php
                    }elseif(isset($_SESSION['zalogowano_a'])){
            ?>
            <div class="zalg">
                <p class='zalog'>Udało Ci się zalogować.</p>
                    <form action="uwierzytelnie.php" method="get" class="zaloguj">
                        <input type="hidden" name="akcja" value="wyloguj">
                        <input type="submit" class="btn4" value="Wyloguj">
                    </form>

            </div>

            <?php
                }
            ?>

    
        
    </div>

</body>
    <script src="main.js"></script>
</html>