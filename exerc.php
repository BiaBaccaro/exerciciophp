<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>

    <h1 align= "center">Votação</h1>
    
    <div class="p">
    <?php
    
        $idade = ($_POST["idade"]);

        if ($idade < 16) {
            $mensagem = "Não pode votar.";
        } elseif ($idade >= 16 && $idade <= 18) {
            $mensagem = "O voto é facultativo.";
        } elseif ($idade >= 19 && $idade <= 65) {
            $mensagem = "O voto é obrigatório.";
        } else {
            $mensagem = "O voto é facultativo.";
        }

        echo "$mensagem";
    ?>
    
    <form method="post">
        <label for="idade">Digite a sua idade:</label>
        <input type="number" id="idade" name="idade" required>
        <button type="submit">Verificar</button>
    </form>
    </div>
</body>
</html>
