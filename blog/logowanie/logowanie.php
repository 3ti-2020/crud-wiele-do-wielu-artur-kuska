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
                <a href="../index.php"><button class="btn">Meme oś</button></a>
                <button class="btn">Top 5 memów poprzedniego mieciąca</button>

            </div>

                    <!-- <div class="images">
                        <button type="button" class="btn prevBtn"><i class="fa fa-chevron-left"></i></button>
                        <button type="button" class="btn nextBtn"><i class="fa fa-chevron-right"></i></button>
                    </div> -->
            </div>
        </div>     

        <div class="it blg"></div>

    <div class="pas">

            <?php
                $a = !isset($_SESSION['zalogowano_a']);
                $u = !isset($_SESSION['zalogowano_u']);
                $e = !isset($_SESSION['zalogowano_e']);
                if($a && $u && $e){
            ?>

            <form action="uwierzytelnie.php" method="post" class="zaloguj">
                <input class="btn3" type="text" name="user" placeholder="nazwa uzytkownika">
                <input class="btn3" type="password" name="haslo" placeholder="haslo">
                <input class="btn3" type="submit" value="Zaloguj">
            </form>
                
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
                // elseif(isset($_SESSION['fail'])){
            ?>
             
            <!-- <p class='blad' >Niestety nie udało Ci się zalogować.<br>Sprawdź poprawność danych</p> -->
            
            <?php
                // }
            ?>

    
        
    </div>

</body>
    <script src="main.js"></script>
</html>