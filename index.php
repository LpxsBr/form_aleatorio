<!--
    form
    started in 21/05/2022.
-->
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="recursos\style.css">
    <title>Document</title>
</head>
<body>
    <div class="paidomeio">
        <div class="meio">
            <form action="config.php" method="post">
                <h5>nome</h5>
                <input type="text" class="campo-nome" name="nome-da-pessoa"><br>
                <h5>data de nascimento</h5>
                <input type="date" class="campo-nome" name="data-de-nascimento"><br>
                <h5>emprego</h5>
                <input type="text" class="campo-nome" name="emprego-da-pessoa"><br>
                <h5>faculdade</h5>
                <input type="text" class="campo-nome" name="faculdade-da-pessoa"><br>
                <button>Criar resumo</button>
        </div>
    </div>       
</body>
</html>
