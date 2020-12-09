<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bmemelog</title>
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

            $conn = new mysqli($servername, $username, $password, $dbname);
            $result = $conn->query("SELECT * FROM post");

            while($row=$result->fetch_assoc() ){
                echo("<article class='post'>
                    ".$row['post']."
                    </article>");
            }
            ?>
            
        </div>

        <div class="it pas">

            <form action="" method="post" class='form_tag'>
                <p>Wyszukaj taga: <input type='text'></p>
                <input type="submit" class='in_s'>
            </form>
        
        </div>
</body>
    <script src="dzejes.js"></script>
</html>
