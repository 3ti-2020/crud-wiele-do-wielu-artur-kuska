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
                if(isset($_SESSION['zalogowano_a'])){
                }
                ?>
                <form action="uwierzytelnie.php" method="get">
                <input type="hidden" name="akcja" value="wyloguj">
                <input type="submit" value="wyloguj">
            </form>
    </div>
        
    </header>


    <main>

    <div class="all">
        <?php
            $a = !isset($_SESSION['zalogowano_a']);
            $u = !isset($_SESSION['zalogowano_u']);
            if($a && $u){
        ?>

        <form action="uwierzytelnie.php" method="post" class="zaloguj">
            <input type="text" name="user" placeholder="nazwa uzytkownika">
            <input type="password" name="haslo" placeholder="haslo">
            <input class="zaloguj" type="submit" value="zaloguj">
        </form>
            
        <form action="rejestr.php" method="post" class="nowe_konto">
            <input type="text" name="user" placeholder="nazwa uzytkownika">
            <input type="password" name="haslo" placeholder="haslo">
            <input class="rejestracja" type="submit" value="utwórz nowe konto">
        </form>
                
        <button class="newAcc">Załórz konto</button>
            
        <?php
            }elseif(isset($_SESSION['zalogowano_u'])){
        ?>
            <p class='zalog'>Udało Ci się zalogować na konto użytkownika.</p>
                <form action="uwierzytelnie.php" method="get">
                    <input type="hidden" name="akcja" value="wyloguj">
                    <input type="submit" value="wyloguj">
                </form>
        <?php
                }elseif(isset($_SESSION['zalogowano_a'])){
        ?>
            <p class='zalog'>Udało Ci się zalogować na konto administratora.</p>
                <form action="uwierzytelnie.php" method="get">
                    <input type="hidden" name="akcja" value="wyloguj">
                    <input type="submit" value="wyloguj">
                </form>

        <?php
            }
            if(isset($_SESSION['fail'])){
        ?>
        
        <p class='blad' >Niestety nie udało Ci się zalogować.<br>Sprawdź poprawność danych</p>
        
        <?php
            }
        ?>

    </div>

    </main>


    <footer>
        
        <a class='linkcard' href="./../index.php"><div class="karty">Strona główna</div></a>
        <a class='linkcard' href="./../card/index.php"><div class="karty">Karty</div></a>
        
    </footer>
</body>
<script src="main.js"></script>
</html>
