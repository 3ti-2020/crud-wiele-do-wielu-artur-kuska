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

    <div class="all">
        <?php
            $a = !isset($_SESSION['zalogowano_a']);
            $u = !isset($_SESSION['zalogowano_u']);
            $e = !isset($_SESSION['zalogowano_e']);
            if($a && $u && $e){
        ?>

        <form action="uwierzytelnie.php" method="post" class="zaloguj">
            <input type="text" name="user" placeholder="nazwa uzytkownika">
            <input type="password" name="haslo" placeholder="haslo">
            <input class="zaloguj" type="submit" value="Zaloguj">
        </form>
            
        <form action="rejestr.php" method="post" class="nowe_konto">
            <input type="text" name="user" placeholder="nazwa uzytkownika">
            <input type="password" name="haslo" placeholder="haslo">
            <input class="rejestracja" type="submit" value="Utwórz nowe konto">
        </form>
                
        <button class="newAcc">Załóż konto</button>
            
            
        <?php
            }elseif(isset($_SESSION['zalogowano_e'])){
        ?>
            <p class='zalog'>Udało Ci się zalogować na konto edytora.</p>
                <form action="uwierzytelnie.php" method="get">
                    <input type="hidden" name="akcja" value="wyloguj">
                    <input type="submit" value="Wyloguj">
                </form>
        <?php
            }elseif(isset($_SESSION['zalogowano_u'])){
        ?>
            <p class='zalog'>Udało Ci się zalogować na konto użytkownika.</p>
                <form action="uwierzytelnie.php" method="get">
                    <input type="hidden" name="akcja" value="wyloguj">
                    <input type="submit" value="Wyloguj">
                </form>
        <?php
                }elseif(isset($_SESSION['zalogowano_a'])){
        ?>
            <p class='zalog'>Udało Ci się zalogować na konto administratora.</p>
                <form action="uwierzytelnie.php" method="get">
                    <input type="hidden" name="akcja" value="wyloguj">
                    <input type="submit" value="Wyloguj">
                </form>

        <?php
            }
            elseif(isset($_SESSION['fail'])){
        ?>
        
        <p class='blad' >Niestety nie udało Ci się zalogować.<br>Sprawdź poprawność danych</p>
        
        <?php
            }
        ?>

    </div>

    </main>


    <footer>
        
        <a class='linkcard' href="./../index.php"><div class="karty">Książki</div></a>
        <a class='linkcard' href="./logowanie.php"><div class="karty">Logowanie</div></a>
        <a class='linkcard' href="./../card/index.php"><div class="karty">Karty</div></a>
        <a class='linkcard' href="./../wypoz/wyp.php"><div class="karty">Wypożyczenia</div></a>

        
    </footer>
</body>
<script src="main.js"></script>
</html>
