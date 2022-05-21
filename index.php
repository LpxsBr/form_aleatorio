<!DOCTYPE html>

<!--
    form
    started in 21/05/2022.
-->
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="recursos/style.css">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <header class="header">
        </header>
        <section class="meio">
            <form action="config.php" method="post">
                nome<input type="text" class="campo-nome" name="nome-da-pessoa"><br>
                data de nascimento<input type="date" class="campo-nome" name="data-de-nascimento"><br>
                emprego<input type="text" class="campo-nome" name="emprego-da-pessoa"><br>
                faculdade<input type="text" class="campo-nome" name="faculdade-da-pessoa"><br>
                <button>Criar resumo</button>
            </form>            
        </section>
        </section>
        <footer class="rodape">
        </footer>
    </div>
</body>
</html>
