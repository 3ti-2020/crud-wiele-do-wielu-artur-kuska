<html>
<head>
    <meta charset="utf-8">
    <title>TODO</title>
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="cnt">
        <form class="form" id="todoForm">
            <div class="form-row">
                <label class="form-label" for="todoMessage">Podaj treść zadania todo</label>
                <textarea class="form-message" name="todoMessage" id="todoMessage"></textarea>
            </div>
            <div class="form-row">
                <button type="submit" class="button form-button">Dodaj zadanie</button>
            </div>
        </form>

        <section class="list-cnt">
            

            <div class="list" id="todoList">
            <div class="element" style="">
        <div class="element-bar">
            
            <button class="element-delete" title="Usuń task">
                Wykonano
            </button>
        </div>
        <div class="element-text">Ubierz się</div>
    </div></div>
        </section>
    </div>

    <template id="elementTemplate">
        <div class="element-bar">
            <button class="element-delete" title="Usuń task">
            Wykonano
            </button>
        </div>
        <div class="element-text">
        </div>
    </template>

</body>
    
    <script src="jotes.js" defer=""></script>
</html>
